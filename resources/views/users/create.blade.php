<html>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</header>
<body>
<form method="post" action="/users">
    @csrf
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
   </div>
   <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" >
   </div>
   <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
   </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>