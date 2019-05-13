<?php
    $file = $_FILES['image'];

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 4 * 1048576) {
                $fileNameNew = uniqid('', true) . '.' . $fileActualExt;
                $fileDestination = '../uploads/' . $fileNameNew;
                try {
                    include('connect.php');
                    try {
                        session_start();
                        $userLogged = $_SESSION['usermakeup'];
                        $passwdLogged = $_SESSION['passwdmakeup'];
                        $result = $connect->prepare("select est_id from kogiwear_makeapp.tbl_users where user_email=:userLogged and user_passwd=:passwdLogged");
                        $result->bindParam('userLogged', $userLogged, PDO::PARAM_STR);
                        $result->bindParam('passwdLogged', $passwdLogged, PDO::PARAM_STR);
                        $result->execute();
                        $count = $result -> rowCount();
                        if ($count == 1) {
                            $loop = $result -> fetchAll();
                            foreach ($loop as $show);
                            try {
                                $estId = $show['est_id'];
                                $connect->beginTransaction();
                                $deleteFile = $connect->prepare('select est_photo from kogiwear_makeapp.tbl_establishment where est_id = :id');
                                $deleteFile->bindParam(':id', $estId, PDO::PARAM_INT);
                                $deleteFile->execute();
                                $count = $deleteFile->rowCount();
                                if ($count > 0) {
                                    $estPhoto = $deleteFile->fetch(PDO::FETCH_ASSOC);
                                    if ($estPhoto['est_photo'] != null) {
                                        $patch = $estPhoto['est_photo'];
                                        if (is_file("../uploads/$patch")) {
                                            unlink("../uploads/$patch");
                                        }
                                    }
                                }
                            } catch (PDOException $error) {
                                ?>
                                <script>
                                    swal(
                                        'Erro!',
                                        '<?php echo $error; ?>',
                                        'error'
                                    );
                                </script>
                                <?php exit;
                            }
                        }
                    } catch (PDOException $error) {
                        ?>
                        <script>
                            swal(
                                'Erro!',
                                '<?php echo $error; ?>',
                                'error'
                            );
                        </script>
                        <?php exit;
                    }
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        try {
                            $id = $show['est_id'];
                            $image = $fileNameNew;
                            $uploader = $connect->prepare('update kogiwear_makeapp.tbl_establishment set est_photo = :newName where est_id = :id');
                            $uploader->bindParam(':newName', $fileNameNew, PDO::PARAM_STR);
                            $uploader->bindParam(':id', $id, PDO::PARAM_INT);
                            $uploader->execute();
                            $count = $uploader->rowCount();
                            if ($count > 0) {
                                $connect->commit();
                                ?>
                                <script>
                                    swal(
                                        'Sucesso!',
                                        'A imagem foi atualizada!',
                                        'success'
                                    );
                                </script>
                                <?php exit;
                            } else {
                                $connect->rollBack();
                                ?>
                                <script>
                                    swal(
                                        'Erro!',
                                        'Erro ao fazer o upload! (Código 01)',
                                        'error'
                                    );
                                </script>
                                <?php exit;
                            }
                        } catch (PDOException $error) {
                            ?>
                            <script>
                            swal(
                                'Erro!',
                                '<?php echo $error; ?>',
                                'error'
                            );
                            </script>
                                <?php exit;
                        }
                    }
                } catch (PDOException $error) {
                    $connect->rollBack();
                    ?>
                    <script>
                        swal(
                            'Erro!',
                            '<?php echo $error; ?>',
                            'error'
                        );
                    </script>
                    <?php exit;
                }
            } else {
                ?>
                <script>
                    swal(
                        'Alerta!',
                        'A imagem deve ter no máximo 4MB!',
                        'warning'
                    );
                </script>
                <?php exit;
            }
        } else {
            ?>
            <script>
                swal(
                    'Alerta!',
                    'Erro ao fazer o upload! (Código 02)',
                    'warning'
                );
            </script>
            <?php exit;
        }
    } else {
        ?>
        <script>
            swal(
                'Alerta!',
                'Você não pode fazer upload de arquivos deste tipo!',
                'warning'
            );
        </script>
        <?php exit;
    }