
<body>
        <h1>unauthorized<h1>
        <p>you will be redirected to login page in a few seconds</p>
</body>

<script>
    setTimeout(function(){ 
      let baseUrl =  window.location.origin;
      window.location.href = baseUrl + '/login'
    }, 3000);
</script>


