/**
 * WPGlobus Administration ACF plugin fields
 * Interface JS functions
 *
 * @since 1.0.5
 *
 * @package WPGlobus
 * @subpackage Administration
 */
/*jslint browser: true */
/*global jQuery, console, WPGlobusAcf, WPGlobusDialogApp */

jQuery(document).ready(function ($) {
    "use strict";

    if (typeof WPGlobusAcf === 'undefined') {
        return;
    }

    var api = {
		parseBool: function(b)  {
			return !(/^(false|0)$/i).test(b) && !!b;
		},
        isPro: function(){
			return api.parseBool( WPGlobusAcf.pro );
		},
        isBuilder: function(){
			return api.parseBool( WPGlobusAcf.builder_id );
		},
		vendorAcfFields: null,
        option: {},
        init: function (args) {
			
			// @since 2.6.6
			if ( api.isBuilder() && 'undefined' ===  typeof WPGlobusDialogApp ) {
				return;
			}
			
            api.option = $.extend(api.option, args);
            if (api.option.pro) {
				api.startAcf('.acf-field');
				api.runActions();
            } else {
                //api.startAcf('.acf_postbox .field');
				// @since 1.9.17
				if ( $('.acf_postbox .field').length > 0 ) {
					api.startAcf('.acf_postbox .field');
				}
				if ( $('.acf-postbox .acf-field').length > 0 ) {
					api.startAcf('.acf-postbox .acf-field');
				}				
            }
			api.attachListeners();
        },
        runActions: function() {
			if ( 'undefined' !== typeof WPGlobusAcf.actions.fixTextFields && WPGlobusAcf.actions.fixTextFields ) {
				api.fixTextFields();   
			}
		},
        fixTextFields: function() {
			// fix hidden WPGlobus dialog start icon with ACF Pro from v.5.8
			$.each(WPGlobusAcf.fields, function(i, id){
				var $tf = $('input[type="text"]#'+id);
				if ( $tf.length == 1 ) {
					var $tfp = $tf.parent('.acf-input-wrap');
					if ( $tfp.length == 1 ) {
						if ( $tfp.hasClass('acf-input-wrap') ) {
							$tfp.css('height','auto');
						}
					}
				}
			});
		},
        isDisabledField: function(id) {
            var res = false;

			/**
			 * Check for ACF Pro.
			 */
			var parentId = $('#' + id).parents('.acf-field').attr('id');

			if ( 'undefined' !== typeof parentId ) {
				$.each(WPGlobusAcf.disabledFields, function (i, e) {
					if (e == parentId) {
						res = true;
					}
				});
			}
			
			if ( res ) {
				return res;
			}
			
			/**
			 * Check for ACF.
			 */				
			$.each(WPGlobusAcf.disabledFields, function (i, e) {
				if (e == id) {
					res = true;
				}
			});

            return res;
        },
        startAcf: function (acf_class) {
            var id;
            var style = 'width:90%;';
            var element, clone, name;
            if ($('.acf_postbox').parents('#postbox-container-2').length == 1) {
                style = 'width:97%';
            }
            //$('.acf_postbox .field').each(function(){
            $(acf_class).each(function () {
                var $t = $(this), id, h;
                if ($t.hasClass('field_type-textarea') || $t.hasClass('acf-field-textarea')) {
                    
					id = $t.find('textarea').attr('id');

					api.registerField(id);
                    if (api.isDisabledField(id)) {
                        return true;
                    }

					// @since 2.6.6
                    if ( ! api.isVendorAcfField(id) ) {
                        return true;
                    }	

                    h = $('#' + id).height() + 20;
                    WPGlobusDialogApp.addElement({
                        id                  : id,
                        dialogTitle         : 'Edit ACF field',
                        style               : 'width:97%;float:left;',
                        styleTextareaWrapper: 'height:' + h + 'px;',
                        sbTitle             : 'Click for edit',
                        onChangeClass       : 'wpglobus-on-change-acf-field'
                    });
					
                } else if ($t.hasClass('field_type-text') || $t.hasClass('acf-field-text')) {
                    
					id = $t.find('input').attr('id');

					api.registerField(id);
                    if (api.isDisabledField(id)) {
                        return true;
                    }

					// @since 2.6.6					
                    if ( ! api.isVendorAcfField(id) ) {
                        return true;
                    }					

                    WPGlobusDialogApp.addElement({
                        id           : id,
                        dialogTitle  : 'Edit ACF field',
                        style        : 'width:97%;float:left;',
                        sbTitle      : 'Click for edit',
                        onChangeClass: 'wpglobus-on-change-acf-field'
                    });
					
                }
            });
        },
		registerField: function(id, type) {
			var register = false;
			if ( 'undefined' !== typeof id ) {
				if ( -1 == id.indexOf('acfcloneindex') ) {
					/**
					 * Don't register acf clone field.
					 * e.g. acf-field_5a5734b531031-acfcloneindex-field_5a573503660e9
					 */
					if ( ! api.isRegisteredField(id) ) {
						register = true;
						WPGlobusAcf.fields.push(id);
					}
				}
			}
			if ( register ) {
				return id;
			}
			return false;
		},
        getFields: function() {
			return WPGlobusAcf.fields;
		},
        getDisabledFields: function() {
			return WPGlobusAcf.disabledFields;
		},
        unificationField: function(field) {
			// @since 2.6.6	
			if ( /acf\[/.test(field) ) {
				field = field.replace('[','-');
				field = field.replace(']','');
			}
			return field;
		},
        getVendorAcfFields: function() {
			// @since 2.6.6	
			if ( api.vendorAcfFields === null ) {
				if ( 'undefined' === typeof WPGlobusVendorAcfFields || '' == WPGlobusVendorAcfFields ) {
					api.vendorAcfFields = false;
					return api.vendorAcfFields;
				}				
				api.vendorAcfFields = WPGlobusVendorAcfFields.split(',');
			}
			return api.vendorAcfFields;
		},
        isVendorAcfField: function( field ) {
			// @since 2.6.6
			if ( 'undefined' === typeof field ) {
				return false;
			}
			// We can receive here `field` in two forms
			// 1. acf-field_5f8a8fd1c97f7
			// 2. acf[field_5f8a8fd1c97f7]
			field = api.unificationField(field);
			var _result = false;
			var _fields = api.getVendorAcfFields();
			if ( ! _fields ) {
				return _result;
			}
			$.each( _fields, function(i,_field){
				if ( _field === field ) {
					_result = true;
					return false;
				}
			});
			return _result;
		},
        isRegisteredField: function(id) {
			var registered = false;
			api.getFields().forEach(function(elm) {
				if (elm == id) {
					registered = true
					return false;
				}
			});
			return registered;
		},
		attachListeners: function() {
			if (api.option.pro) {
				/** 
				 * Attach listener for new ACF fields that was added in repeater field type.
				 */
				var t = this;
				if (acf.add_action) { // ACF v5
					acf.add_action('append', function($el) {
						t.replaceCloneIndex($el);
					});
				}
			}
		},
        replaceCloneIndex: function($el) {
            var cloneindex = $el.data('id');
            $el.find('[data-source-id*="acfcloneindex"]').each(function(){
                $(this).attr('data-source-id', $(this).attr('data-source-id').replace('acfcloneindex', cloneindex));
            });
		}		
    }

    WPGlobusAcf = $.extend({}, WPGlobusAcf, api);
    WPGlobusAcf.init({'pro': WPGlobusAcf.pro});
});
