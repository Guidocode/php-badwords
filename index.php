<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.

Stampare a schermo il paragrafo e la sua lunghezza.

Una parola da censurare viene passata dall’utente tramite parametro GET.

Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre 
asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
  
  $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus pariatur aliquam officiis explicabo, maxime eius animi numquam magnam esse iste repellat totam autem commodi culpa architecto dolor sit dolorem obcaecati nobis dicta est veritatis labore assumenda. Ipsa quos id accusantium quidem odio laudantium reprehenderit sit molestias consequatur doloribus enim temporibus necessitatibus, officiis aliquam consectetur. Voluptas natus earum, possimus deserunt error eius aliquam delectus. Exercitationem quis odio tenetur temporibus iusto, cumque ducimus quisquam quidem nostrum fuga minima esse sequi incidunt! Similique ipsam harum ea, consequuntur eum minima velit corrupti doloribus corporis dolorem quasi molestiae vel odio, perspiciatis omnis facilis officiis esse!';

  // $censored_word = 'dolor';
  $censored_word = $_GET['censored_word'];

  $modified_paragraph = str_replace($censored_word, '***', $paragraph);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>php badwords</title>
</head>
<body>

  <!-- Paragrafo iniziale -->
  <p class="w-50 p-5">Paragrafo iniziale: <br> <?php echo $paragraph ?> </p>
  <span class="w-50 p-5">Il mio paragrafo iniziale è lungo: <?php echo strlen($paragraph) ?> </span>


  <!-- Paragrafo modificato -->
  <p class="w-50 p-5">Paragrafo modificato: <br> <?php echo $modified_paragraph ?> </p>
  <span class="w-50 p-5">Il mio paragrafo modificato è lungo: <?php echo strlen($modified_paragraph) ?> </span>

</body>
</html>