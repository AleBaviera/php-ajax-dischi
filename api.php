
 <?php
  header('Content-type: application/json');

  $albums = [

      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979,
          'poster' => 'img/theWall.jpeg'
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979,
          'poster' => 'img/theWall.jpeg'
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979,
          'poster' => 'img/theWall.jpeg'
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979,
          'poster' => 'img/theWall.jpeg'
      ],
      [
          'author' => 'Pink Floyd',
          'title' => 'The wall',
          'year' => 1979,
          'poster' => 'img/theWall.jpeg'
      ],

  ];



echo json_encode($albums);


?>
