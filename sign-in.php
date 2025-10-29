<?php
include "layouts/header.php";
?>
<body>
    <section class="d-flex justify-content-center align-items-center" style="height: 70vh;">
        <form action="database/register.php" method="post" class="w-50 border rounded bg-light h-75 d-flex flex-column justify-content-center align-items-center">
            <h2>Sign in</h2>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </section>

</body>

<!-- Bootstrap JS  -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>