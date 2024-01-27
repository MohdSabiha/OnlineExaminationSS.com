<!-- _templates/dashboard/_header.php content goes here -->

<div class="container mt-4">
    <h2>Exam Results</h2>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <h4>Exam Details</h4>
            <table class="table">
                <tr>
                    <td>Exam Name</td>
                    <td><?php echo $test->nama_test; ?></td>
                </tr>
                <tr>
                    <td>Start Date</td>
                    <td><?php echo $test->tgl_mulai; ?></td>
                </tr>
                <tr>
                    <td>End Date</td>
                    <td><?php echo $test->terlambat; ?></td>
                </tr>
                <!-- Add more details as needed -->
            </table>
        </div>

        <div class="col-md-6">
            <h4>Exam Results</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Correct Answer</th>
                        <th>Student's Answer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result) : ?>
                        <tr>
                            <td><?php echo $result->soal; ?></td>
                            <td><?php echo $result->jawaban; ?></td>
                            <td><?php echo $result->jawaban_mahasiswa; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- _templates/dashboard/_footer.php content goes here -->
