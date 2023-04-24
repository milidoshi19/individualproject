<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo $row_user['name']; ?></span>
                    <span class="text-secondary text-small"><?php echo $row_user['role']; ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title"><b>Profile</b></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title"><?php echo $row_user['name']; ?></span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title"><?php echo $row_user['email']; ?></span>
                <i class="mdi mdi-email menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title"><?php echo $row_user['college']; ?></span>
                <i class="mdi mdi-city menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <span class="menu-title"><?php echo $row_user['select_level']; ?></span>
                <i class="mdi mdi-book-open-variant menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="process.php?delete_account_id=<?php echo $row_user['id']; ?>"
               onclick="return confirm('Are you sure?')">
                <span class="menu-title text-danger">Delete Account</span>
                <i class="mdi mdi-delete menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>