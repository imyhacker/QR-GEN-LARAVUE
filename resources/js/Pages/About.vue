<template>
    <div>
        <Navbar></Navbar>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <h1>About Me</h1>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-justify">
                                Welcome to QrGen, your number one source for all things Qr Generate. We're dedicated to
                                giving you the very best of Qr Generate.
                                <br><br>

                                Founded in 2021 by Arikun, QrGen has come a long way from its beginnings in
                                Indramayu. When Arikun first started out, his passion for
                                Simply To Create QR CODE so that QrGen can offer you . We now serve customers all over
                                Town, and are thrilled that we're able to turn our passion into my own website.
                                <br><br>

                                I hope you enjoy my products as much as I enjoy offering them to you. If
                                you have any questions or comments, please don't hesitate to contact Me.
                                <br><br>

                                Sincerely,<br>

                                Arikun - 2021

                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import Navbar from './Layouts/Navbar.vue'
    export default {
        components: {
            Navbar
        },

        props: {
            dat: String
        },


    }

</script>
