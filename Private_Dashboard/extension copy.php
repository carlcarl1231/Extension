<div class="col-md-12">
    <table id="dtable" class="table table-striped">
        <thead>
            <tr>
                <th>Filename</th>
                <th>FileSize</th>
                <th>Uploader</th>
                <th>Status</th>
                <th>Date/Time Upload</th>
                <th>Downloads</th>
                <th>Extension</th>
                <th>COPC</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require_once("include/connection.php");
            $query = mysqli_query($conn, "SELECT * FROM upload_files") or die(mysqli_error($conn));
            while ($file = mysqli_fetch_array($query)) {
                $display_options = !empty($file['display_options']) ? unserialize($file['display_options']) : [];

                // row always shows, but Extension/COPC will be blank if not in options
                $id = $file['ID'];
                $name = $file['NAME'];
                $size = $file['SIZE'];
                $uploads = $file['EMAIL'];
                $status = $file['ADMIN_STATUS'];
                $time = $file['TIMERS'];
                $download = $file['DOWNLOAD'];
            ?>
            <tr>
                <td width="20%"><?php echo $name; ?></td>
                <td><?php echo floor($size / 1000) . ' KB'; ?></td>
                <td><?php echo $uploads; ?></td>
                <td><?php echo $status; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $download; ?></td>
                <td>
                    <?php 
                    if (in_array('extension', $display_options)) {
                        echo pathinfo($file['NAME'], PATHINFO_EXTENSION);
                    }
                    ?>
                </td>
                <td>
                    <?php 
                    if (in_array('copc', $display_options)) {
                        echo $file['copc']; // assuming you have a column `copc` in your DB
                    }
                    ?>
                </td>
                <td>
                    <a href='view_file.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                    <a href='downloads.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-id="<?php echo $id; ?>" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
