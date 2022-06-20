@if ($message = Session::get('success'))
<script >
    swal({
        
        title: "Success!",
        text: "{{$message}}",
        icon: "success",
        })
</script>
@endif

@if ($message = Session::get('error'))
<script type="text/javascript">
    $.sweetModal({
        content: '{{$message}}',
        icon: $.sweetModal.ICON_ERROR
    });
</script>
@endif

@if ($message = Session::get('warning'))
<script type="text/javascript">
    $.sweetModal({
        content: '{{$message}}',
        icon: $.sweetModal.ICON_WARNING
    });
</script>
@endif

@if ($message = Session::get('info'))
<script type="text/javascript">
    $.sweetModal({
        content: '{{$message}}',
        icon: $.sweetModal.ICON_INFO
    });
</script>
@endif
