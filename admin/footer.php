<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>


<script>
    $(document).ready(function() {
        if ($(window).width() < 767) {
            $("#tableno1").attr('class', 'table table-striped table-inverse table-responsive');
            $(".ghost1").attr('class', '');
            var table = $('#tableno1').DataTable({
                scrollX: true,
                paging: false,
                searching: false,
                ordering: false,
                fixedColumns: {
                    leftColumns: 1
                }
            });
        } else {
            $("#tableno1").attr('class', 'table table-striped table-inverse');
            var table = $('#tableno1').DataTable({
                scrollX: true,
                paging: false,
                searching: false,
                ordering: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 3
                }
            });
        }

        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });




    });
</script>
</body>

</html>