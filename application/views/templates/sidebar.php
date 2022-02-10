<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                

                <!-- query menu -->
               
                <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT user_menu.id, menu
                        FROM user_menu JOIN user_access_menu
                          ON user_menu.id = user_access_menu.menu_id
                       WHERE user_access_menu.role_id = $role_id
                    ORDER BY user_access_menu.menu_id ASC
                     ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>

                <!-- Heading -->
                <?php foreach ($menu as $m) : ?>

                    <!-- <li class="nav-section">
                        <div class="sidebar-heading">



                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section"><?= $m['menu']; ?></h4>
                        </div>
                    </li> -->


                    <!-- siapkan sub menu sesuai menu -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT * FROM `user_sub_menu` where `menu_id` = $menuId and   `is_active` = 1";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item ">
                            <?php endif; ?>

                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <span><?= $sm['title']; ?></span></a>
                            </li>

                        <?php endforeach; ?>

                        <hr class="sidebar-divider mt-1">

                    <?php endforeach ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span></a>
                    </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->