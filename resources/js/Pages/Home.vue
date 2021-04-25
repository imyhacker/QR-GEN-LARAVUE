<template>
    <div>
        <Navbar></Navbar>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2 style="font-family: Original Surfer">Make Your QRCODE It's Free!</h2>
                </div>
                <div class="col-md-12 mt-5">
                    <form @submit.prevent="isidata">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" v-model="form.isi" class="form-control"
                                        placeholder="Email, Link, Text, Etc." required>
                                    <small class="form-text text-muted">100% Not Input To Database! 100% Clean</small>

                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <input type="submit" class="buuton btn btn-secondary btn-block" value="Buat QR!"
                                    name="ya">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="container mt-4 mb-5" v-if="dat">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <qr-code v-bind:text="`${dat}`" color="#000" bg-color="#fff" error-level="H" id="su">
                            </qr-code>
                            
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
        data() {
            return {
                form: {
                    isi: ''
                }
            }
        },
        props: {
            dat: String
        },
        methods: {
            isidata() {
                this.$inertia.post('/make', this.form)
            }
        }

    }

</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap');

    .long {
        width: 160%;
    }

    .buuton {
        border-radius: 20px;
    }

    input[type=text] {
        border-radius: 20px;
        border-style: solid;
        color: tomato;
        background-color: white;
    }

    input[type=text]:hover {
        border-radius: 20px;
        border-style: dotted;
        background-color: white;
    }

</style>
