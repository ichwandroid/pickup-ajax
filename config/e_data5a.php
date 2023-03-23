<?php include "connect.php"; ?>

<div class="tbl-header">
    <table class="table-bordered">
        <thead class="bg-primary">
            <tr>
                <th style="width: 10%;">Waktu Scanning</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th style="width: 10%;">Nama Panggilan</th>
                <th style="width: 10%;">Jenis Kelamin</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 5%">Action</th>
            </tr>
        </thead>
    </table>
</div>
<div class="tbl-content">
    <table class="table-bordered">
        <tbody>
            <?php
            $query = mysqli_query($connect, "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE kelas='5 A - KHADIJAH R.A' ORDER BY tbl_scan.timescan DESC");
            while ($result = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td style="width: 10%;"><?php echo $result['TIMESCAN']; ?></td>
                    <td><?php echo $result['NAMA_LENGKAP']; ?></td>
                    <td><?php echo $result['KELAS']; ?></td>
                    <td style="width: 10%;"><?php echo $result['PANGGILAN']; ?></td>
                    <td style="width: 10%;"><?php echo $result['KELAMIN']; ?></td>
                    <td style="width: 10%;"><?php echo $result['STATUS']; ?></td>
                    <td style="width: 5%;"><i class='bx bx-message-square-edit'></i></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({
            'padding-right': scrollWidth
        });
    }).resize();
</script>