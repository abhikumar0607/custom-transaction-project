
// $(document).ready(function () {
// $('.accordian-body').on('show.bs.collapse', function () {
//       $(this).closest("table")
//         .find(".collapse.in")
//         .not(this)
//         .collapse('toggle')
//   })
// });

// $(document).ready(function () {
//   $('.accordion-toggle').click(function () {
//       // Check if the clicked accordion item already has the 'grown' class
//       var isGrown = $(this).hasClass('grown');

//       // Remove the 'grown' class from all accordion items
//       $('.accordion-toggle').removeClass('grown');

//       // Add the 'grown' class only if it was not present before
//       if (!isGrown) {
//           $(this).addClass('grown');
//       }
//   });
// });



//     $(document).ready(function () {
//       $('.accordion-toggle').click(function () {
//         $(this).next('.accordian-body').slideToggle();
//       });

//       $('.open-child-row').click(function (event) {
//         event.stopPropagation();
//       });

//     });
 
//     $('.dropdown').click(function () {
//       $('.dropdown').removeClass('red');
//       $(this).addClass('red');
//     });

//     $('.materialdesign').click(function () {
//       $('.dropdown').not(this).removeClass('red');
//     });

//     $(function () {
//       var countFiles = 1,
//         $body = $('body'),
//         typeFileArea = ['txt', 'doc', 'docx', 'ods'],
//         coutnTypeFiles = typeFileArea.length;
//       $body.on('click', '.files-wr label', function () {
//         var wrapFiles = $('.files-wr'),
//           newFileInput;

//         countFiles = wrapFiles.data('count-files') + 1;
//         wrapFiles.data('count-files', countFiles);
//         $body.on('change', 'input[type="file"]', function () {
//           var $this = $(this),
//             valText = $this.val(),
//             fileName = valText.split(/(\\|\/)/g).pop(),
//             fileItem = $this.siblings('.file-item'),
//             beginSlice = fileName.lastIndexOf('.') + 1,
//             typeFile = fileName.slice(beginSlice);

//           fileItem.find('.file-name').text(fileName);
//           if (valText != '') {
//             fileItem.removeClass('hide-btn');

//             for (var i = 0; i < coutnTypeFiles; i++) {

//               if (typeFile == typeFileArea[i]) {
//                 $this.parent().addClass('has-mach');
//               }
//             }
//           } else {
//             fileItem.addClass('hide-btn');
//           }

//           if (!$this.parent().hasClass('has-mach')) {
//             $this.parent().addClass('error');
//           }
//         });
//         $body.on('click', '.btn-del-file', function () {
//           var elem = $(this).closest('.one-file');
//           elem.fadeOut(400);
//           setTimeout(function () {
//             elem.remove();
//           }, 400);
//         });
//       });
//     });

//   let index = 1;

//   const on = (listener, query, fn) => {
//     document.querySelectorAll(query).forEach(item => {
//       item.addEventListener(listener, el => {
//         fn(el);
//       })
//     })
//   }

//   on('click', '.selectBtn', item => {
//     const next = item.target.nextElementSibling;
//     next.classList.toggle('toggle');
//     next.style.zIndex = index++;
//   });
//   on('click', '.option', item => {
//     item.target.parentElement.classList.remove('toggle');

//     const parent = item.target.closest('.select').children[0];
//     parent.setAttribute('data-type', item.target.getAttribute('data-type'));
//     parent.innerText = item.target.innerText;
//   })
 
//   $(document).on('click', '.dropdown-menu label', function (e) {
//     e.stopPropagation();
//   });



//   $('#example1').calendar();
//   $('#example2').calendar({
//     type: 'date'
//   });
//   $('#example3').calendar({
//     type: 'time'
//   });
//   $('#rangestart').calendar({
//     type: 'date',
//     endCalendar: $('#rangeend')
//   });
//   $('#rangeend').calendar({
//     type: 'date',
//     startCalendar: $('#rangestart')
//   });
//   $('#example4').calendar({
//     startMode: 'year'
//   });
//   $('#example5').calendar();
//   $('#example6').calendar({
//     ampm: false,
//     type: 'time'
//   });
//   $('#example7').calendar({
//     type: 'month'
//   });
//   $('#example8').calendar({
//     type: 'year'
//   });
//   $('#example9').calendar();
//   $('#example10').calendar({
//     on: 'hover'
//   });
//   var today = new Date();
//   $('#example11').calendar({
//     minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
//     maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
//   });
//   $('#example12').calendar({
//     monthFirst: false
//   });
//   $('#example13').calendar({
//     monthFirst: false,
//     formatter: {
//       date: function (date, settings) {
//         if (!date) return '';
//         var day = date.getDate();
//         var month = date.getMonth() + 1;
//         var year = date.getFullYear();
//         return day + '/' + month + '/' + year;
//       }
//     }
//   });
//   $('#example14').calendar({
//     inline: true
//   });
//   $('#example15').calendar();


 
