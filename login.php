<?php include 'header.php'; ?>

<main class="flex-grow w-2/4 mx-auto mt-16 bg-white shadow-md rounded-2xl p-8 mb-12">
  <h2 class="text-2xl font-bold text-center text-green-700 mb-6">ورود به حساب کاربری</h2>

  <form action="login-process.php" method="POST" class="space-y-4">
    <div>
      <label class="block text-sm font-medium mb-1">نام کاربری یا ایمیل</label>
      <input type="text" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">رمز عبور</label>
      <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">
      ورود
    </button>
  </form>

  <div class="flex justify-between items-center mt-4 text-sm">
    <a href="forgot-password.php" class="text-green-600 hover:underline">فراموشی رمز عبور؟</a>
    <a href="register.php" class="text-green-600 hover:underline">ثبت‌نام</a>
  </div>
</main>


<?php include 'footer.php'; ?>
