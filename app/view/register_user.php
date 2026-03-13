<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>สมัครสมาชิก</title>

<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
body{font-family:'Sarabun',sans-serif;}
</style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-slate-900 to-indigo-950 min-h-screen flex items-center justify-center">

<div class="bg-slate-800/80 backdrop-blur-md p-10 rounded-3xl shadow-xl border border-slate-700 w-full max-w-lg">

<h2 class="text-3xl font-bold text-indigo-400 text-center mb-8">
สมัครสมาชิก
</h2>

<form action="index.php?action=doRegister" method="POST" class="space-y-4">

<input type="text" name="username" placeholder="Email" required class="input">

<input type="password" name="password" placeholder="Password" required class="input">

<div class="flex gap-4">
<input type="text" name="first_name" placeholder="ชื่อจริง" required class="input">
<input type="text" name="last_name" placeholder="นามสกุล" required class="input">
</div>

<input type="date" name="birthdate" required class="input">

<input type="text" name="phone" placeholder="เบอร์โทรศัพท์" required class="input">

<button class="btn-primary w-full">
สมัครสมาชิก
</button>

<button type="button"
onclick="window.location.href='index.php?action=login'"
class="btn-secondary w-full">
กลับหน้าล็อกอิน
</button>

</form>

</div>

<style>

.input{
@apply w-full px-4 py-3 rounded-xl bg-slate-700 border border-slate-600 text-white focus:ring-2 focus:ring-indigo-500 outline-none;
}

.btn-primary{
@apply bg-indigo-600 hover:bg-indigo-500 text-white py-3 rounded-xl font-bold transition hover:-translate-y-1;
}

.btn-secondary{
@apply bg-slate-700 hover:bg-slate-600 text-white py-3 rounded-xl;
}

</style>

</body>
</html>