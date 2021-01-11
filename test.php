<?php
include('header.php');
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$conn = mysqli_connect('localhost', 'root', '', 'blogth4');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
$sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result);
}
mysqli_close($conn);
?>
<div class="container">
    
        <table class="table table-striped table-inverse table-reponsive"  id="tableno1">
            <thead>
                <tr>
                    <th class="ghost">User ID</th>
                    <th>First name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration date</th>
                    <th>User level</th>
                    <th>Class</th>
                    <th>Adress 1</th>
                    <th>Adress 2</th>
                    <th>City</th>
                    <th>State country</th>
                    <th>Pcode</th>
                    <th>Phone</th>
                    <th>Paid</th>
                    <th>Status</th>
                    <th>Active code</th>
                    <th scope="col" class="ghost">Details</th>
                    <th scope="col" class="ghost" >Edit</th>
                    <th scope="col" class="ghost">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($row as $post) {
                    echo '<tr>';
                    echo '<td class="ghost">' . $post[0] . '</th>';
                    echo '<td >' . $post[1] . '</td>';
                    echo '<td >' . $post[2] . '</td>';
                    echo '<td >' . $post[3] . '</td>';
                    echo '<td >' . $post[5] . '</td>';
                    echo '<td >' . $post[6] . '</td>';
                    echo '<td >' . $post[7] . '</td>';
                    echo '<td >' . $post[8] . '</td>';
                    echo '<td >' . $post[9] . '</td>';
                    echo '<td >' . $post[10] . '</td>';
                    echo '<td >' . $post[11] . '</td>';
                    echo '<td >' . $post[12] . '</td>';
                    echo '<td >' . $post[13] . '</td>';
                    echo '<td >' . $post[14] . '</td>';
                    echo '<td >' . $post[15] . '</td>';
                    echo '<td >' . $post[16] . '</td>';
                    echo '<td scope="row" class="ghost"> <a href="display.php?id=' . $post[0] . '"> <i class="fas fa-file-alt"></i></td>';
                    echo '<td scope="row" class="ghost"> <a href="edit.php?id=' . $post[0] . '"> <i class="far fa-edit"></i></td>';
                    echo '<td scope="row" class="ghost"> <a href="delete.php?id=' . $post[0] . '"> <i class="fas fa-trash-alt"></i></td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
        </table>
    
</div>
<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
            <li class="page-item <?php if ($pageno <= 1) {
                                        echo 'disabled';
                                    } ?>">
                <a class="page-link" href="<?php if ($pageno <= 1) {
                                                echo '#';
                                            } else {
                                                echo "?pageno=" . ($pageno - 1);
                                            } ?>">Prev</a>
            </li>
            <li class="page-item <?php if ($pageno >= $total_pages) {
                                        echo 'disabled';
                                    } ?>">
                <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                                echo '#';
                                            } else {
                                                echo "?pageno=" . ($pageno + 1);
                                            } ?>">Next</a>
            </li>
            <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a>
            </li>
        </ul>
    </nav>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>


<script>
    $(document).ready(function() {
        var table = $('#tableno1').DataTable({
            scrollX: true,
            paging: false,
            searching: false,
            ordering: false,
        fixedColumns:   {
            leftColumns: 1,
            rightColumns: 3
        }
        });
    });
</script>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
</table>