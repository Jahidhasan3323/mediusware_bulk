<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Post</li>
                        </ol> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Post</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-12">
                              <div>
                                <!-- search area start -->
                                <form class="form-inline" method="get" action="">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search Post ..." v-model='search' @keyup='getSearch'>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input type="date" class="form-control " id="exampleInputEmail1" placeholder="date" v-model='date' @blur='getSearch'>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select class="form-control select2"  v-model='group_id' @change='getSearch'>
                                              <option value="">select</option>
                                              <option v-for="group in data.groups" :value="group.id">{{group.type}}</option>
                                              
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div> -->
                                </form>
                                <!-- search area end -->
                                <div>
                                    <hr>
                                </div>
                                <!-- data list area start -->
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                    <tr >
                                        <th style=" width: 28%">Group Name</th>
                                        <th style="text-align: center; width: 12%">Group Type</th>
                                        <th style="text-align: center; width: 10%">Account Name</th>
                                        <th>Post Text</th>
                                        <th style="text-align: center; width: 15%">Time</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr  v-for="post in data.posts.data">
                                            <td>{{post.group_info.name}}</td>
                                            <td>{{post.group_info.type}}</td>
                                            <td>
                                                <img :src="post.account_info.avatar" class="rounded-circle" :alt="post.group_info.name" width="50px" height="50px">
                                            </td>
                                            <td>{{post.post_text}}</td>
                                            <td>{{post.sent_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- data list area end -->
                                <!-- pagination area start -->
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <pagination class="float-right" :data="data.posts" @pagination-change-page="getPagination" :limit="3"></pagination>
                                        
                                    </div>
                                </div>
                                <!-- pagination area end -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import "vue-select/dist/vue-select.css";
    Vue.component('pagination', require('laravel-vue-pagination'));
    export default {
        data(){
            return{
                data:{}, /*data retrive here*/
                 search:'', /*search input field data*/
                 date:'',  /*date input field data*/
                 group_id:'', /*group input field data*/
            }
        },
        methods:{
            /*pagination*/
            getPagination(page = 1){
            //this.$router.push(`/$post/${this.search}/${this.date}/${this.group_id}`)
            axios.get('/post?page=' + page)
                .then(response => {
                    this.data = response.data;
                });
            },
            /*search data*/
            getSearch(){
                axios.post('/post/search/',{
                    search:this.search,
                    date:this.date,
                    group_id:this.group_id,
                })
                .then(response=> this.data=response.data) 
            }
        },

        /*retrive all data*/
        mounted() {
            axios.get('/post')
            .then((response)=> this.data=response.data)
            .catch((error)=> console.log(error))

            
        }
    }
</script>
