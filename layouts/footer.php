<footer class="footer">
    © copyrigt
</footer>
<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="assets/node_modules/popper/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--Sky Icons JavaScript -->
<script src="assets/node_modules/skycons/skycons.js"></script>
<!--morris JavaScript -->
<script src="assets/node_modules/raphael/raphael-min.js"></script>
<script src="assets/node_modules/morrisjs/morris.min.js"></script>
<script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Chart JS -->
<script src="dist/js/dashboard4.js"></script>
<script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>
<script src="assets/node_modules/switchery/dist/switchery.min.js"></script>
<script src="assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="assets/node_modules/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<script src="assets/node_modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/node_modules/wizard/jquery.steps.min.js"></script>
<script src="assets/node_modules/moment/moment.js"></script>
<script src="assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
<script src="assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
    var elems=Array.prototype.slice.call(document.querySelectorAll(".js-switch"));function toggle(e){for(var r=document.querySelectorAll('input[type="checkbox"]'),o=0;o<r.length;o++)r[o]!=e&&(r[o].checked=e.checked);$("table tbody tr").toggleClass("table-checked")}$(".js-switch").each(function(){new Switchery($(this)[0],$(this).data())}),$(document).ready(function(){$(".dropify").dropify(),$(".dropify-fr").dropify({messages:{default:"Glissez-déposez un fichier ici ou cliquez",replace:"Glissez-déposez un fichier ou cliquez pour remplacer",remove:"Supprimer",error:"Désolé, le fichier trop volumineux"}});var e=$("#input-file-events").dropify();e.on("dropify.beforeClear",function(e,r){return confirm('Do you really want to delete "'+r.file.name+'" ?')}),e.on("dropify.afterClear",function(e,r){alert("File deleted")}),e.on("dropify.errors",function(e,r){console.log("Has Errors")});var r=$("#input-file-to-destroy").dropify();r=r.data("dropify"),$("#toggleDropify").on("click",function(e){e.preventDefault(),r.isDropified()?r.destroy():r.init()})});
    $(".select2").select2(),$(".ajax").select2({ajax:{url:"https://api.github.com/search/repositories",dataType:"json",delay:250,data:function(e){return{q:e.term,page:e.page}},processResults:function(e,t){return t.page=t.page||1,{results:e.items,pagination:{more:30*t.page<e.total_count}}},cache:!0},escapeMarkup:function(e){return e},minimumInputLength:1});
    //notification
    @if(Session('success'))
    $.toast({
        heading: "Success",
        text: "{{ Session::get('success",
        position: "top-right",
        loaderBg: "#00c292",
        icon: "success",
        hideAfter: 6000,
        stack: 6
    });
    @endif
    @if(isset($errors))
    @foreach ($errors->all() as $message)
    $.toast({
        heading: "Errors",
        text: "{{$message}}",
        position: "top-right",
        loaderBg: "#FDCB17",
        icon: "error",
        hideAfter: 6000,
        stack: 6
    });
    @endforeach
    @endif
    //delete multi

    function deleteRecordRow(id, url) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ @csrf_token() }}'
                    },
                    type: "DELETE",
                    url: url,
                    data: {
                        id: id
                    },
                    success: function (data) {
                        swal.fire({
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            type: 'success'
                        }).then(function () {
                            location.reload();
                        });
                    },
                    error: function () {
                        swal.fire({
                            title: 'Lỗi...',
                            type: 'error',
                        })
                    }
                });
            }
        })
    }

    //get logoi

    jQuery(document).ready(function ($) {
        $('#clickLogout').on('click', function () {
            Swal.fire({
                title: 'Đăng xuất?',
                text: "Bạn có muốn đăng xuất không ?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.value) {
                    window.location.href = '{{ route("admin.logout") }}'
                }
            })
        });
    });
</script>

