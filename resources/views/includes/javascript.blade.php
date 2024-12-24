<script src="{{ asset('assets/src/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/src/js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

<script src="{{ asset('assets/vendor_components/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/vendor_components/Flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/vendor_components/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/vendor_components/Flot/jquery.flot.categories.js') }}"></script>


<!-- Bsinx Admin App -->
<script src="{{ asset('assets/src/js/demo.js') }}"></script>
<script src="{{ asset('assets/src/js/template.js') }}"></script>
<script src="{{ asset('assets/src/js/pages/dashboard5.js') }}"></script>
<script src="{{ asset('assets/src/js/pages/data-table.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#type_id').select2({
            placeholder: "Select Type",
            allowClear: true
        });
        $('#business_id').select2({
            placeholder: "Select Business",
            allowClear: true
        });
        $('#category_id').select2({
            placeholder: "Select Category",
            allowClear: true
        });
        $('#sub_category_id').select2({
            placeholder: "Select Sub Category",
            allowClear: true
        });
        $('#group_id').select2({
            placeholder: "Select Group",
            allowClear: true
        });
        
    });
</script>
