<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/admin/js/respond.min.js')?>"></script>

<!--this page plugins-->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/vendor/bootstrap-daterangepicker/moment.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/vendor/bootstrap-daterangepicker/daterangepicker.js')?>"></script> -->
<!-- <script src="<?php echo base_url('assets/admin/js/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery-3.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/dataTables.bootstrap4.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/moment.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/daterangepicker.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/select2.full.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/sweetalert2.all.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/buttons.flash.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/buttons.colVis.min.js')?>"></script>

<!--common script for all pages-->
<script src="<?php echo base_url('assets/admin/js/common-scripts.js')?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable({
			pageLength: 5,
			lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]],
			dom: 'Bfrtilp',
			buttons: [
			{
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 3, 4, 5, 6, 7 ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 3, 4, 5, 6, 7 ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 3, 4, 5, 6, 7 ]
                }
            },
            {
				extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, 3, 4, 5, 6, 7 ]
                }
			},'colvis']
			// ,
			// initComplete: function() {
			// 	var $buttons = $('.dt-buttons').hide();
			// 	$('#exportLink').on('change', function() {
			// 		var btnClass = $(this).find(":selected")[0].id 
			// 		? '.buttons-' + $(this).find(":selected")[0].id 
			// 		: null;
			// 		if (btnClass) $buttons.find(btnClass).click(); 
			// 	})
			// } 
		});
		$('.dt-buttons').css({"margin-top":"25px", "margin-bottom":"20px"});
		$('.dataTables_filter').css({"margin-top" : "-1em", "width": "15%"});
		$('#mydata_paginate').css({"margin-top" : "-5.5em"});
	});

	$(document).ready(function(){
		$('#actlog').DataTable({
			dom: 'Bfrtilp',
			buttons: [
			{
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
				extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
			}]
		});
		$('.dt-buttons').css({"margin-top":"25px", "margin-bottom":"20px"});
		$('.dataTables_filter').css({"margin-top" : "-1em", "width": "15%"});
		$('#actlog_paginate').css({"margin-top" : "-5.5em"});
	});
</script>
<script type="text/javascript">
	$(document).ready( function() {
		$( '#table' ).dataTable( {
			pageLength: 5,
			lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]]
		});
	});

	$(document).ready( function() {
		$( '#table2' ).dataTable( {
			// pageLength: 5,
			// lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]],
			"lengthChange": false,
			searching: false
		});
	});

	$(document).ready( function() {
		$( '#table3' ).dataTable( {
			// pageLength: 5,
			// lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]],
			"lengthChange": false,
			searching: false
		});
	});
</script>
<script type="text/javascript">
// $(function() {

//   $('input[name="edisiterbitpaper"]').daterangepicker({
//       autoUpdateInput: false,
//       locale: {
//           cancelLabel: 'Clear'
//       }
//   });

//   $('input[name="edisiterbitpaper"]').on('apply.daterangepicker', function(ev, picker) {
//       $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
//   });

//   $('input[name="edisiterbitpaper"]').on('cancel.daterangepicker', function(ev, picker) {
//       $(this).val('');
//   });

// });

$(document).ready(function() {

    $('#periode').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    startDate: moment().subtract(0, 'days')
    });

    $('input[name="periode"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('YYYY-MM-DD'));
  });

});
</script>
<script> 
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<script type="text/javascript">
$(function() {
	$('#tag').tagsInput({
		'delimiter': ';'
	});

	$('#form-tags-2').tagsInput({
		'onAddTag': function(input, value) {
			console.log('tag added', input, value);
		},
		'onRemoveTag': function(input, value) {
			console.log('tag removed', input, value);
		},
		'onChange': function(input, value) {
			console.log('change triggered', input, value);
		}
	});

	// $('#form-tags-3').tagsInput({
	// 	'unique': true,
	// 	'minChars': 2,
	// 	'maxChars': 10,
	// 	'limit': 5,
	// 	'validationPattern': new RegExp('^[a-zA-Z]+$')
	// });

	// $('#form-tags-4').tagsInput({
	// 	'autocomplete': {
	// 		source: [
	// 			'apple',
	// 			'banana',
	// 			'orange',
	// 			'pizza'
	// 		]
	// 	}
	// });

	// $('#form-tags-5').tagsInput({
	// 	'delimiter': ';'
	// });

	// $('#form-tags-6').tagsInput({
	// 	'delimiter': [',', ';']
	// });
});



/* jQuery Tags Input Revisited Plugin
 *
 * Copyright (c) Krzysztof Rusnarczyk
 * Licensed under the MIT license */

(function($) {
	var delimiter = [];
	var inputSettings = [];
	var callbacks = [];

	$.fn.addTag = function(value, options) {
		options = jQuery.extend({
			focus: false,
			callback: true
		}, options);
		
		this.each(function() {
			var id = $(this).attr('id');

			var tagslist = $(this).val().split(_getDelimiter(delimiter[id]));
			if (tagslist[0] === '') tagslist = [];

			value = jQuery.trim(value);
			
			if ((inputSettings[id].unique && $(this).tagExist(value)) || !_validateTag(value, inputSettings[id], tagslist, delimiter[id])) {
				$('#' + id + '_tag').addClass('error');
				return false;
			}
			
			$('<span>', {class: 'tag'}).append(
				$('<span>', {class: 'tag-text'}).text(value),
				$('<button>', {class: 'tag-remove'}).click(function() {
					return $('#' + id).removeTag(encodeURI(value));
				})
			).insertBefore('#' + id + '_addTag');

			tagslist.push(value);

			$('#' + id + '_tag').val('');
			if (options.focus) {
				$('#' + id + '_tag').focus();
			} else {
				$('#' + id + '_tag').blur();
			}

			$.fn.tagsInput.updateTagsField(this, tagslist);

			if (options.callback && callbacks[id] && callbacks[id]['onAddTag']) {
				var f = callbacks[id]['onAddTag'];
				f.call(this, this, value);
			}
			
			if (callbacks[id] && callbacks[id]['onChange']) {
				var i = tagslist.length;
				var f = callbacks[id]['onChange'];
				f.call(this, this, value);
			}
		});

		return false;
	};

	$.fn.removeTag = function(value) {
		value = decodeURI(value);
		
		this.each(function() {
			var id = $(this).attr('id');

			var old = $(this).val().split(_getDelimiter(delimiter[id]));

			$('#' + id + '_tagsinput .tag').remove();
			
			var str = '';
			for (i = 0; i < old.length; ++i) {
				if (old[i] != value) {
					str = str + _getDelimiter(delimiter[id]) + old[i];
				}
			}

			$.fn.tagsInput.importTags(this, str);

			if (callbacks[id] && callbacks[id]['onRemoveTag']) {
				var f = callbacks[id]['onRemoveTag'];
				f.call(this, this, value);
			}
		});

		return false;
	};

	$.fn.tagExist = function(val) {
		var id = $(this).attr('id');
		var tagslist = $(this).val().split(_getDelimiter(delimiter[id]));
		return (jQuery.inArray(val, tagslist) >= 0);
	};

	$.fn.importTags = function(str) {
		var id = $(this).attr('id');
		$('#' + id + '_tagsinput .tag').remove();
		$.fn.tagsInput.importTags(this, str);
	};

	$.fn.tagsInput = function(options) {
		var settings = jQuery.extend({
			interactive: true,
			placeholder: 'Tambahkan tag',
			minChars: 0,
			maxChars: null,
			limit: null,
			validationPattern: null,
			width: 'auto',
			height: 'auto',
			autocomplete: null,
			hide: true,
			delimiter: ',',
			unique: true,
			removeWithBackspace: true
		}, options);

		var uniqueIdCounter = 0;

		this.each(function() {
			if (typeof $(this).data('tagsinput-init') !== 'undefined') return;

			$(this).data('tagsinput-init', true);

			if (settings.hide) $(this).hide();
			
			var id = $(this).attr('id');
			if (!id || _getDelimiter(delimiter[$(this).attr('id')])) {
				id = $(this).attr('id', 'tags' + new Date().getTime() + (++uniqueIdCounter)).attr('id');
			}

			var data = jQuery.extend({
				pid: id,
				real_input: '#' + id,
				holder: '#' + id + '_tagsinput',
				input_wrapper: '#' + id + '_addTag',
				fake_input: '#' + id + '_tag'
			}, settings);

			delimiter[id] = data.delimiter;
			inputSettings[id] = {
				minChars: settings.minChars,
				maxChars: settings.maxChars,
				limit: settings.limit,
				validationPattern: settings.validationPattern,
				unique: settings.unique
			};

			if (settings.onAddTag || settings.onRemoveTag || settings.onChange) {
				callbacks[id] = [];
				callbacks[id]['onAddTag'] = settings.onAddTag;
				callbacks[id]['onRemoveTag'] = settings.onRemoveTag;
				callbacks[id]['onChange'] = settings.onChange;
			}

			var markup = $('<div>', {id: id + '_tagsinput', class: 'tagsinput'}).append(
				$('<div>', {id: id + '_addTag'}).append(
					settings.interactive ? $('<input>', {id: id + '_tag', class: 'tag-input', value: '', placeholder: settings.placeholder}) : null
				)
			);

			$(markup).insertAfter(this);

			$(data.holder).css('width', settings.width);
			$(data.holder).css('min-height', settings.height);
			$(data.holder).css('height', settings.height);

			if ($(data.real_input).val() !== '') {
				$.fn.tagsInput.importTags($(data.real_input), $(data.real_input).val());
			}
			
			// Stop here if interactive option is not chosen
			if (!settings.interactive) return;
			
			$(data.fake_input).val('');
			$(data.fake_input).data('pasted', false);
			
			$(data.fake_input).on('focus', data, function(event) {
				$(data.holder).addClass('focus');
				
				if ($(this).val() === '') {
					$(this).removeClass('error');
				}
			});
			
			$(data.fake_input).on('blur', data, function(event) {
				$(data.holder).removeClass('focus');
			});

			if (settings.autocomplete !== null && jQuery.ui.autocomplete !== undefined) {
				$(data.fake_input).autocomplete(settings.autocomplete);
				$(data.fake_input).on('autocompleteselect', data, function(event, ui) {
					$(event.data.real_input).addTag(ui.item.value, {
						focus: true,
						unique: settings.unique
					});
					
					return false;
				});
				
				$(data.fake_input).on('keypress', data, function(event) {
					if (_checkDelimiter(event)) {
						$(this).autocomplete("close");
					}
				});
			} else {
				$(data.fake_input).on('blur', data, function(event) {
					$(event.data.real_input).addTag($(event.data.fake_input).val(), {
						focus: true,
						unique: settings.unique
					});
					
					return false;
				});
			}
			
			// If a user types a delimiter create a new tag
			$(data.fake_input).on('keypress', data, function(event) {
				if (_checkDelimiter(event)) {
					event.preventDefault();
					
					$(event.data.real_input).addTag($(event.data.fake_input).val(), {
						focus: true,
						unique: settings.unique
					});
					
					return false;
				}
			});
			
			$(data.fake_input).on('paste', function () {
				$(this).data('pasted', true);
			});
			
			// If a user pastes the text check if it shouldn't be splitted into tags
			$(data.fake_input).on('input', data, function(event) {
				if (!$(this).data('pasted')) return;
				
				$(this).data('pasted', false);
				
				var value = $(event.data.fake_input).val();
				
				value = value.replace(/\n/g, '');
				value = value.replace(/\s/g, '');
				
				var tags = _splitIntoTags(event.data.delimiter, value);
				
				if (tags.length > 1) {
					for (var i = 0; i < tags.length; ++i) {
						$(event.data.real_input).addTag(tags[i], {
							focus: true,
							unique: settings.unique
						});
					}
					
					return false;
				}
			});
			
			// Deletes last tag on backspace
			data.removeWithBackspace && $(data.fake_input).on('keydown', function(event) {
				if (event.keyCode == 8 && $(this).val() === '') {
					 event.preventDefault();
					 var lastTag = $(this).closest('.tagsinput').find('.tag:last > span').text();
					 var id = $(this).attr('id').replace(/_tag$/, '');
					 $('#' + id).removeTag(encodeURI(lastTag));
					 $(this).trigger('focus');
				}
			});

			// Removes the error class when user changes the value of the fake input
			$(data.fake_input).keydown(function(event) {
				// enter, alt, shift, esc, ctrl and arrows keys are ignored
				if (jQuery.inArray(event.keyCode, [13, 37, 38, 39, 40, 27, 16, 17, 18, 225]) === -1) {
					$(this).removeClass('error');
				}
			});
		});

		return this;
	};
	
	$.fn.tagsInput.updateTagsField = function(obj, tagslist) {
		var id = $(obj).attr('id');
		$(obj).val(tagslist.join(_getDelimiter(delimiter[id])));
	};

	$.fn.tagsInput.importTags = function(obj, val) {
		$(obj).val('');
		
		var id = $(obj).attr('id');
		var tags = _splitIntoTags(delimiter[id], val); 
		
		for (i = 0; i < tags.length; ++i) {
			$(obj).addTag(tags[i], {
				focus: false,
				callback: false
			});
		}
		
		if (callbacks[id] && callbacks[id]['onChange']) {
			var f = callbacks[id]['onChange'];
			f.call(obj, obj, tags);
		}
	};
	
	var _getDelimiter = function(delimiter) {
		if (typeof delimiter === 'undefined') {
			return delimiter;
		} else if (typeof delimiter === 'string') {
			return delimiter;
		} else {
			return delimiter[0];
		}
	};
	
	var _validateTag = function(value, inputSettings, tagslist, delimiter) {
		var result = true;
		
		if (value === '') result = false;
		if (value.length < inputSettings.minChars) result = false;
		if (inputSettings.maxChars !== null && value.length > inputSettings.maxChars) result = false;
		if (inputSettings.limit !== null && tagslist.length >= inputSettings.limit) result = false;
		if (inputSettings.validationPattern !== null && !inputSettings.validationPattern.test(value)) result = false;
		
		if (typeof delimiter === 'string') {
			if (value.indexOf(delimiter) > -1) result = false;
		} else {
			$.each(delimiter, function(index, _delimiter) {
				if (value.indexOf(_delimiter) > -1) result = false;
				return false;
			});
		}
		
		return result;
	};
 
	var _checkDelimiter = function(event) {
		var found = false;
		
		if (event.which === 13) {
			return true;
		}

		if (typeof event.data.delimiter === 'string') {
			if (event.which === event.data.delimiter.charCodeAt(0)) {
				found = true;
			}
		} else {
			$.each(event.data.delimiter, function(index, delimiter) {
				if (event.which === delimiter.charCodeAt(0)) {
					found = true;
				}
			});
		}
		
		return found;
	 };
	 
	 var _splitIntoTags = function(delimiter, value) {
		 if (value === '') return [];
		 
		 if (typeof delimiter === 'string') {
			 return value.split(delimiter);
		 } else {
			 var tmpDelimiter = '∞';
			 var text = value;
			 
			 $.each(delimiter, function(index, _delimiter) {
				 text = text.split(_delimiter).join(tmpDelimiter);
			 });
			 
			 return text.split(tmpDelimiter);
		 }
		 
		 return [];
	 };
})(jQuery);
</script>
<script type="text/javascript">
$(function(){
	$.get('http://analitika.bappenas.go.id/home/home/getUser',
		function(data){
			$.each(data, function(i, item){
				$('#penulispaper').val('').trigger('change').append('<option value="'+item.nama+'">'+item.nama+'</option>');
				// $('#penulispaper').append('<option value="'+item.username+'">'+item.nama+'</option>');
			});
			
			//draw select2
			$('#penulispaper').select2({
				placeholder: "Pilih nama penulis"
			}).val('').trigger('change');
		}
	);

});

$(function(){
	$.get('http://analitika.bappenas.go.id/home/home/getUser',
		function(data){
			$.each(data, function(i, item){
				$('#editpenulispaper').val('').trigger('change').append('<option value="'+item.nama+'">'+item.nama+'</option>');
				// $('#penulispaper').append('<option value="'+item.username+'">'+item.nama+'</option>');
			});
			
			//draw select2
			$('#editpenulispaper').select2({
				placeholder: "Pilih nama penulis"
			}).val('').trigger('change');
		}
	);

});
</script>
<?php 
if(isset($title)){
	if($title == "form_analitika"){
?>
<script>
	$(function() {
        var pesan = $('.message').val();
        if (pesan !== '') {
            Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: pesan,
				});
        }
    });
</script>
<?php	
	}
}
?>