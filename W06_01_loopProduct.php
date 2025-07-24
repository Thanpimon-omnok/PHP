<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for show Product</title>
    <link rel = "stylesheet" href = https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css></link>

    <!-- DataTable CSS -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">

     <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


    <style>
        .container{
            max-width: 800px;
        }
    </style>
</head>
<body>
  <?php  
$products = [
        
    ['id' => 1001, 'name'=>'Apple',      'price'=>70, 'quantity'=>30],
    ['id' => 1002, 'name'=>'Banana',     'price'=>60, 'quantity'=>50],
    ['id' => 1003, 'name'=>'Raspberry',  'price'=>70, 'quantity'=>20],
    ['id' => 1004, 'name'=>'Mango',      'price'=>70, 'quantity'=>45],
    ['id' => 1005, 'name'=>'Grapes',     'price'=>58, 'quantity'=>35],
    ['id' => 1006, 'name'=>'Pineapple',  'price'=>75, 'quantity'=>25],
    ['id' => 1007, 'name'=>'Strawberry', 'price'=>72, 'quantity'=>40],
    ['id' => 1008, 'name'=>'Blueberry',  'price'=>68, 'quantity'=>28],
    ['id' => 1009, 'name'=>'Orange',     'price'=>66, 'quantity'=>60],
    ['id' => 1010, 'name'=>'Watermelon', 'price'=>80, 'quantity'=>55],
    ['id' => 1011, 'name'=>'Kiwi',       'price'=>64, 'quantity'=>38],
    ['id' => 1012, 'name'=>'Papaya',     'price'=>62, 'quantity'=>33],
    ['id' => 1013, 'name'=>'Cherry',     'price'=>69, 'quantity'=>42],
    ['id' => 1014, 'name'=>'Guava',      'price'=>59, 'quantity'=>48],
    ['id' => 1015, 'name'=>'Lychee',     'price'=>67, 'quantity'=>31],
    ['id' => 1016, 'name'=>'Peach',      'price'=>63, 'quantity'=>39]
];
    // foreach($products as $product){
    //     echo $product['id']."สินค้า : " . $product["name"] . ", ราคา : " . $product["price"] . " บาท, จำนวน: ".$product["quantity"] . " ชิ้น <br>";
            
    //         }
?>

<div class="container mt-5">
    <h1>Product List</h1>

    <form action="" method="POST" class="mb-3">
        <div>
            <input type="number" name="price" placeholder="Enter Price" class="form-control mb-2">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>

    </form>



    <table id="productTable" class ="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Check submit form is submitted
                if(isset($_POST['price']) && !empty($_POST['price'])) {
                    $filter_price = $_POST['price'];
                    $filteredProducts = array_filter($products, function($product) use ($filter_price) {
                        return $product['price'] == $filter_price;
                     }
                );
                $filteredProducts = array_values($filteredProducts);

    } else {
        $filteredProducts = $products;
    }



                foreach($filteredProducts  as $index => $product){

            echo "<tr>";
            echo "<td>" . ($index+1). "</td>";
            echo "<td>" . $product["id"]. "</td>";
            echo "<td>" . $product["name"] . "</td>";
            echo "<td>" . $product["price"] . "</td>";
            echo "<td>" . $product["quantity"] . "</td>";
            echo "</tr>";
                
                }
            ?>
        </tbody>
    </table>
</div>


<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script  scr = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
    let table = new DataTable('#productTable');
</script>

<a href="index.php">Home</a>
</body>
</html>