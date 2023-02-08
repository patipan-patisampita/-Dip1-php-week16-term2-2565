<nav class="navbar navbar-expand-lg bg-body-white shadow stickeytop">
    <div class="container">
        <a class="navbar-brand" href="index.php">DEVcat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i>
                        หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="bi bi-bank2"></i> เกี่ยวกับ</a>
                </li>

                <?php if (isset($_SESSION['auth_user'])) : ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php print($_SESSION['auth_user']['user_name']); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">ประวัติส่วนตัว</a></li>

                        <li>
                            <form action="./allcode.php" method="post">
                                <button type="submit" name="logout_btn" class="dropdown-item">ออกจากระบบ</button>
                            </form>
                        </li>

                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php">DevCat</a></li> -->
                    </ul>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="bi bi-stack"></i> ลงทะเบียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="bi bi-person-lock"></i> เข้าสู่ระบบ</a>
                </li>

                <?php endif; ?>

            </ul>

        </div>
    </div>
</nav>