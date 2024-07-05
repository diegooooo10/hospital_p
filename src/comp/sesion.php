<?php if (isset($_GET['login']) && $_GET['login'] == 'success'): ?>
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "¡Has iniciado sesión con éxito!",
                icon: "success"
            });
        </script>
<?php endif; ?>