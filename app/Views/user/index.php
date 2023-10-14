<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello, world!</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vero repellat quaerat? Delectus odio consequuntur, vero ut, repudiandae deserunt quod, tenetur labore molestiae incidunt esse similique mollitia! Labore, eum delectus.</p>
            <p>ini untuk vue setelah ini</p>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.3.4/vue.cjs.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.3.4/vue.cjs.min.js" integrity="sha512-Nk4aRxW2zg0jN2rFYzF1Hc/xiTNTkk1LwMytaVrL7hK4Qij51+H7oNmKzDDYdUQzEEWAgBhzQ7F6bGYesDi1Bw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                new Vue({

                });
            </script>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>