<?php if (isset($_GET['cita']) && $_GET['cita'] == 'success'): ?>
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "¡Tu cita se ha guardado con éxito!",
                icon: "success"
            });
        </script>
<?php endif; ?>