<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 25.09.2018
 * Time: 20:36
 */
?>
<div class="container contact-form" align="center">
    <h2>User's resume</h2>
    <?php
    while ($dataresume = $data->fetch()) {
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" align="center">
                <h4>Photo</h4>
                <?php
                echo '<img width="350px" src="data:image/jpeg;base64,' . base64_encode($dataresume['photo']) . '" />';
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <table  class="table">
                <tr>
                    <td id="black">First Name:</td>
                    <td><?php echo $dataresume['name']; ?></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><?php echo $dataresume['surname'];?></td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td><?php echo $dataresume['birthdate'];?></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><?php echo $dataresume['country'];?></td>
                </tr>
                <tr>
                    <td>tel</td>
                    <td><?php echo $dataresume['tel'];?></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><?php echo $dataresume['email'];?></td>
                </tr>
                <tr>
                    <td>address</td>
                    <td><?php echo $dataresume['address'];?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">Education</td>
                </tr>
                <?php for ($i = 0; $i < 5; $i++) {
                    ?>
                    <tr <?php if ($dataresume["datebeginstudy$i"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Date of begin training:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["datebeginstudy$i"];
                            ?>
                        </td>
                    </tr>
                    <tr <?php if ($dataresume["dateendstudy$i"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Date of end training:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["dateendstudy$i"];
                            ?>
                        </td>
                    </tr>
                    <tr <?php if ($dataresume["studyname$i"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Name of the institution:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["studyname$i"];
                            ?>
                        </td>
                    </tr>
                    <tr <?php if ($dataresume["professionstudy$i"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Specialty:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["professionstudy$i"];
                            ?>
                        </td>
                    </tr>
                    <tr <?php if ($dataresume["doctor$i"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Rank:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["doctor$i"];
                            ?>
                        </td>
                    </tr>
                <?php }
                ?>
                <tr>
                    <td colspan="2" align="center">Work</td>
                </tr>
                <?php
                for ($j = 0; $j < 5; $j++) {
                    ?>
                    <tr <?php if ($dataresume["datebeginwork$j"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Date of begin work:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["datebeginwork$j"];
                            ?>
                        </td>
                    </tr>
                    <tr <?php if ($dataresume["dateendwork$j"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Date of end work:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["dateendwork$j"];
                            ?>
                        </td>
                    </tr>
                    <tr  <?php if ($dataresume["workname$j"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Name of the company:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["workname$j"];
                            ?>
                        </td>
                    </tr>
                    <tr  <?php if ($dataresume["professionwork$j"] == NULL) { ?> hidden="" <?php } ?>>
                        <td>
                            Specialty:
                        </td>
                        <td>
                            <?php
                            echo $dataresume["professionwork$j"];
                            ?>
                        </td>
                    </tr>
                <?php }
                ?>
                <tr>
                    <td colspan="2" align="center"></td>
                </tr>
                <tr>
                    <td>Interests:</td>
                    <td><?php echo $dataresume['interests'];?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php
        }
    ?>
</div>