<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    header('Location: register.php');
    exit();
}

$name = !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : "Not Provided.";
$birthdate = !empty($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : "Not Provided.";
$sex = !empty($_POST['sex']) ? htmlspecialchars($_POST['sex']) : "Not Provided.";
$email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : "Not Provided.";
$address = !empty($_POST['address']) ? htmlspecialchars($_POST['address']) : "Not Provided.";
$department = !empty($_POST['department']) ? htmlspecialchars($_POST['department']) : "Not Provided.";
$program = !empty($_POST['program']) ? htmlspecialchars($_POST['program']) : "Not Provided.";
$mobile = !empty($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : "Not Provided.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Summary 🔥</title>
    <meta name="description" content="PHP Registration Form"/>
    <link rel="shortcut icon" href="../asset/Great-Dane.png" type="image/x-icon">
    <!-- Tailwind -->
    <link rel="stylesheet" href="../public/tailwind.css">
    <link rel="stylesheet" href="../public/output.css">

    <!-- Montserrat -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body class="bg-slate-900 font-[Montserrat] h-dvh overflow-hidden">
    
    <div class="flex flex-col justify-center items-center h-full">
        <div class="z-[-1] absolute inset-x-0 m-auto h-5/6 max-w-9/12 bg-gradient-to-tr from-indigo-400 via-teal-900 to-[#C084FC] blur-[118px]"></div>
        <h2 class="mx-auto text-4xl font-extrabold text-slate-50 md:text-5xl text-center">IPT10<br><span class="bg-gradient-to-r from-blue-300 to-[#c333c5] bg-clip-text text-transparent">Registration Summary</span></h2>
        <table class="bg-white text-black rounded-lg shadow-md w-7/12 mt-10">
            <thead>
                <tr>
                    <th class="p-4">Field</th>
                    <th class="p-4">Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4">Name</td>
                    <td class="p-4 <?php echo $sex === 'Male' ? 'bg-blue-500 text-white' : ($sex === 'Female' ? 'bg-red-500 text-white' : 'bg-slate-500 text-white'); ?>">
                        <?php echo $name; ?>
                    </td>
                </tr>
                <tr>
                    <td class="p-4">Birthdate</td>
                    <td class="p-4"><?php echo $birthdate; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Sex</td>
                    <td class="p-4"><?php echo $sex; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Email</td>
                    <td class="p-4"><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Address</td>
                    <td class="p-4"><?php echo $address; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Department</td>
                    <td class="p-4"><?php echo $department; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Program</td>
                    <td class="p-4"><?php echo $program; ?></td>
                </tr>
                <tr>
                    <td class="p-4">Mobile</td>
                    <td class="p-4"><?php echo $mobile; ?></td>
                </tr>
            </tbody>
        </table>

        <form action="register.php" method="get">
            <button type="submit" class="hover:font-medium text-white w-full mt-10 px-8 py-3 transition all delay-50 rounded-md <?php echo $sex === 'Male' ? 'bg-blue-500 hover:bg-blue-600' : ($sex === 'Female' ? 'bg-red-500 hover:bg-red-600' : 'bg-slate-500 hover:bg-slate-600'); ?>">Go Back</button>
        </form>
    </div>

</body>
</html>
