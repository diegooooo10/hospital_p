<?php if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'success'): ?>
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "¡Se ha enviado tu mensaje correctamente!",
                icon: "success"
            });
        </script>
<?php endif; ?>