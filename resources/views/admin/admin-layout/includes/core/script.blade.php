<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->

<script src="/js/admin/jquery.min.js"></script>
<script src="/js/admin/bootstrap.bundle.min.js"></script>
<script src="/js/admin/detect.js"></script>
<script src="/js/admin/fastclick.js"></script>
<script src="/js/admin/jquery.blockUI.js"></script>
<script src="/js/admin/waves.js"></script>
<script src="/js/admin/jquery.slimscroll.js"></script>
<script src="/js/admin/jquery.scrollTo.min.js"></script>
<script src="/js/admin/switchery.min.js"></script>

<!-- Counter js  -->
<script src="/js/admin/jquery.waypoints.min.js"></script>
<script src="/js/admin/jquery.counterup.min.js"></script>

<!-- Flot chart js -->
<script src="/js/admin/jquery.flot.min.js"></script>
<script src="/js/admin/jquery.flot.time.js"></script>
<script src="/js/admin/jquery.flot.tooltip.min.js"></script>
<script src="/js/admin/jquery.flot.resize.js"></script>
<script src="/js/admin/jquery.flot.pie.js"></script>
<script src="/js/admin/jquery.flot.selection.js"></script>
<script src="/js/admin/jquery.flot.crosshair.js"></script>
<script src="/js/admin/moment.js"></script>
<script src="/js/admin/daterangepicker.js"></script>
<script src="/js/admin/custombox.min.js"></script>
<script src="/js/admin/toastr.min.js"></script>
<script src="/js/admin/parsley.min.js"></script>


<!-- Dashboard init -->
<script src="/js/admin/jquery.dashboard_2.js"></script>

<!-- App js -->
<script src="/js/admin/jquery.core.js"></script>
<script src="/js/admin/jquery.app.js"></script>

<script src="/js/admin/jquery.steps.min.js"></script>
<script src="/js/admin/main.js"></script>
<script>
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2016',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });




</script>

