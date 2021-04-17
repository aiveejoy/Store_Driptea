<template>
    <div class="empty">
        <i class="fas fa-hourglass-start text-danger"></i>
        <v-icon color="red darken-2">mdi-database</v-icon>
        <span class="description text-danger"><b>{{title}}</b></span>
        <!-- <span style="font-size: 15px;">{{action}}</span> -->
    </div>
</template>
<style scoped>
.empty{
    width: 100%;
    margin-top: 25px;
    margin-bottom: 25px;
    float: left;
    min-height: 450px;
    overflow-y: hidden;
    text-align: center;
    border: solid 1px #ddd;
}
.empty i{
    font-size: 100px;
    padding-top: 150px;
}
.empty span{
    width: 100%;
    float: left;
}
.empty .description{
    font-size: 24px;
}
</style>
<script>
export default {
    data(){
        return{

        }
    },
    props: ['title']
}
</script>

