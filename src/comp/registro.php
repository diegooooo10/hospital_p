<?php if (isset($_GET['registrado']) && $_GET['registrado'] == 'success'): ?>
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "¡Te has registrado correctamente!",
                icon: "success"
            });
        </script>
<?php endif; ?>