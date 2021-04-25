<template>
    <div>
        <Navbar></Navbar>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <h1>Contact Me</h1>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-justify">
                                You Found A Bugs or Another?
                                <br><br>

                                Telegram : @darbex_x<br>
                                Instagram: @arkun666
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
