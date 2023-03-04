  <?php
$xml=simplexml_load_file("bookDETAIL.xml");
foreach($xml->book as $bk)
{
echo "Book no = $bk->bookno   <br>";
echo "Book name = $bk->bookname  <br>";
echo "Author Name= $bk->authorname <br>";
echo "Book Price = $bk->price  <br>"; 
echo "Year= $bk->year   <br>";
}
?>