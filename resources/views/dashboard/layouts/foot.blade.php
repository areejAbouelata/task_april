</div>

<!-- Mainly scripts -->
<script src="{{asset('inspina/js/jquery-2.1.1.js')}}"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{asset('inspina/js/bootstrap.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('inspina/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('inspina/js/inspinia.js')}}"></script>
<script src="{{asset('inspina/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/jquery-confirm/jquery.confirm.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/bootstrap-fileinput/js/fileinput_locale_ar.js')}}"></script>
<script src="{{asset('inspina/js/plugins/lightbox2/js/lightbox.min.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.plugin.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.plus.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.picker.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.ummalqura.js')}}"></script>
<script src="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.ummalqura-ar.js')}}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


{{--full celender --}}

 <script src="{{asset('inspina/js/fullcalendar/lib/moment.min.js')}}"></script>
 
 <script src="{{asset('inspina/js/fullcalendar/lib/jquery.min.js')}}"></script>
  <script src="{{asset('inspina/js/fullcalendar/fullcalendar.min.js')}}"></script>
 
<script src="{{asset('js/ibnfarouk.js')}}"></script>
<script src="{{asset('js/summernote.min.js')}}"></script>
<script>
    /**
     * summer note
     **/
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<script>
    @if (session()->has('flash_notification.message'))
        @if(session()->get('flash_notification.level') == "success")
            swal({
                title: "نجحت العملية!",
                text: "{!! session('flash_notification.message') !!}",
                type: "success",
                confirmButtonText: "حسناً"
            });
        @else
            swal({
                title: "فشلت العملية!",
                text: "{!! session('flash_notification.message') !!}",
                type: "error",
                confirmButtonText: "حسناً"
            });
        @endif
    @endif
</script>
@stack('scripts')

</body>

</html>