
 <?php
  header('Content-type: application/json');

  $albums = [

      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979
      ],

  ];



echo json_encode($albums);


?>
