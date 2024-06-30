<?php
session_start();

if (!$_SESSION['id_user'] || $_SESSION['role'] !== 'admin' ) {
    echo '<script>history.back()</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>darikita.com - Form Donasi</title>
    <link rel="stylesheet" href="../build/build.css">

    <!-- LOGO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- LOGO -->
    
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- FONT -->

</head>
<body>

<!-- Awal Navigasi -->

    <nav class="bg-warna_bg shadow-lg fixed top-0 left-0 right-0 z-20">
        <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
            <div class="flex p-2">
                <a href="../index.php" class="text-warna_aksen hover:text-blue-700 font-bold items-start just">Keluar <span class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;</span>|</a>
                <div class="items-start hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg bg-[#F8F9FB] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                        <li>
                            <a href="" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Donasi</a>
                        </li>
                        <li>
                            <a href="" class="block py-2 px-3 md:p-0 font-bold text-blue-600 ">User</a>
                        </li>
                    </ul>
                </div>
            </div>    
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                
                <?php
                    if (isset($_SESSION['status_login'])) {
                        ?>
                        <div>
                            <a href="./user-profil.php" class="text-warna_aksen font-bold"><?=$_SESSION['nama']?></a>
                            <a href="./user-profil.php"><i class="fa-regular fa-circle-user fa-2xl mt-5" style="color: #5592F2;"></i></a>
                        </div>
                        <?php
                    } else {
                        echo '<a href="./login.php">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">MASUK</button></a>';
                    }
                
                ?>


            </div>
        </div>
    </nav>
  

<!-- Akhir Navigasi -->

    <!-- FORM -->
   
    <div class="max-w-screen-xl mx-auto px-4 py-8 mt-32 mb-16">
        <div class="overflow-auto flex-grow h-80 border">
            <table class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700  sticky top-0">
                    <tr>
                        <th scope="col" class=" px-6 py-3 text-center bg-gray-100">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            No. HP
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3 text-center bg-gray-100">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-blue-600 hover:underline text-center">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

      
    
    <!-- FORM -->

<!-- Akhir Footer -->
</body>
</html>