<template>
	<li class="dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <span class="glyphicon glyphicon-bell"></span>
        Notification <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li v-for="notification in notifications"></li>
           <a href="#">{{ JSON.parse(notification.data).item.id }}</a>
            </a>
      </ul>
        </li>
</template>
<script>
    export default {
      props:['notification'],
      // methods:{
      // 	MarkAsRead: function(notification){
      //       var data={
      //       	id:notification.id
      //       };
            // axios.post('/notification/getJsread',data).then(response=>{

            // });
      	//}
      //}
  }
</script>