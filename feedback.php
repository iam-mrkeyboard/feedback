<?php include 'inc/header.php'?>

<?php 

$feedback =[


  [
    'id' => 1,
    'email' => 'john@example.com',
    'name' => 'John Doe',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!',
    'date' => '2024-01-15'
  ],
  [
    'id' => 2,
    'email' => 'jane@example.com',
    'name' => 'Jane Smith',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!',
    'date' => '2024-01-16'
  ],
  [
    'id' => 3,
    'email' => 'bob@example.com',
    'name' => 'Bob Johnson',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!',
    'date' => '2024-01-17'
  ]
];

?>

    <h2>Feedback</h2>

    <?php  if(empty($feedback)): ?>

      <p class="lead mt3">There is no feedback</p>


      <?php endif; ?>

      <?php foreach($feedback as $item): ?>

    <div class="card my-3  w-75">
     <div class="card-body text-center">
     <?php echo $item['body'] ?>
     <div class="text-secondary mt2">

     by <?php echo $item['name'] ?>
     </div>
     </div>
   </div>
<?php endforeach ?>

  
 <?php include 'inc/footer.php' ?>

