<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                    <h1>Hola mundo</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>

    </table>
</template>

<script>
    export default {
        data(){
        return {
            proyectos:[
                {id:1,nomProy:
                "Proyecto x"},

            ]

            }
        },

        mounted() {
            axios.get('http://127.0.0.1:8000/proyectos').then(response=>(this.proyectos=response.data))
            console.log('Component mounted.')
        }
    }
</script>

