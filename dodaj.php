<?php



$title = $_POST['title'];
$content = $_POST['content'];
$book = $_GET['book'];

$connection = pg_connect("host=sbazy  dbname=s1923434 user=s192434 password=e2007sl")
	or die("Couldn't connect to database: ".pg_last_error($connection));

$query ="insert into komentarz (book,title,content) VALUES ('$book','$title','$content');";
$result = pg_query($connection,$query)
	or die("Couldn't load to database: ".pg_last_error($connection));
pg_close($connection);
hedader('Location: ' . $_SERVER['HTTP_REFERER']);

echo '

  						<table class="table table-hover table-dark table-responsive">
  							<thead>
    							<tr>
      								<th>#</th>
      								<th>TytuÅ‚</th>
     								<th>TreÅ›Ä‡</th>
   								 </tr>
 							</thead>
  							<tbody>
    							<tr>
      								<th scope="row">1</th>
      								<td>1m, ,</td>
     								<td>fdsgf</td>
    							</tr>
	  							</tbody>
						</table>


'
?>