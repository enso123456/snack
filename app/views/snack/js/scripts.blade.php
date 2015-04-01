<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{ HTML::script('js/jquery-1.11.2.min.js'); }}
{{ HTML::script('js/bootstrap.min.js'); }} 
{{ HTML::script('js/bootstrap-datetimepicker.js'); }}  
<script type="text/javascript"> 
    $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    }); 
</script>