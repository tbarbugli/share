{{ HTML::script('/js/jquery.js' ) }}
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
{{ HTML::script('/js/bootstrap.min.js' ) }}
<script>
    $(function() {
        $( "#datepicker" ).datepicker({minDate: 0,dateFormat : 'yy-mm-dd'});
    });
</script>
</body>
</html>