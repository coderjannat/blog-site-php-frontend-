<?php
include 'partials/header.php';
?>
    <!---------------------------------------------------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------- DASHBOARD -------------------------------------------------->

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toogle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toogle"><i class="uil uil-angle-left-b"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\add-post.php"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\index.php" class="active"><i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\manage-users.php"><i class="uil uil-house-user"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\add-catagory.php"><i class="uil uil-pen"></i>
                            <h5>Add Catagory</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin\manage-catagories.php"><i class="uil uil-list-ul"></i>
                            <h5>Manage Catagories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Catagory</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Lorem ipsum, amet consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-catagory.php" class="btn sm danger">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum,sit amet consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-catagory.php" class="btn sm danger">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum,sit amet consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-catagory.php" class="btn sm danger">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum,sit amet consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-catagory.php" class="btn sm danger">Delete</a></td>
                            </tr>
                            
                           
                    </tbody>
                </table>
            </main>
        </div>
    </section>

    <!---------------------------------------------------------------------------------------------------------------------------------->
    <!--========================================= FOOTER ================================================-->

<?php
include '../partials/footer.php';
?>