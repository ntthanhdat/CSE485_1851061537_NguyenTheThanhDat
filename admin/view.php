
<div class="">
    
        <table class="table table-striped table-inverse "  id="tableno1">
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
                    <th>Memberid</th>
                    <th scope="col" class="ghost ghost1">Details</th>
                    <th scope="col" class="ghost ghost1" >Edit</th>
                    <th scope="col" class="ghost ghost1">Delete</th>
                </tr>
            </thead>
            <tbody id="myTable">
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
                    echo '<td >' . $post[17] . '</td>';
                    echo '<td scope="row" class="ghost  ghost1"> <a href="display.php?id=' . $post[0] . '"> <i class="fas fa-file-alt"></i></td>';
                    echo '<td scope="row" class="ghost  ghost1"> <a href="edit.php?id=' . $post[0] . '"> <i class="far fa-edit"></i></td>';
                    echo '<td scope="row" class="ghost  ghost1"> <a href="delete.php?id=' . $post[0] . '"> <i class="fas fa-trash-alt"></i></td>';
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
