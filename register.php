<?php include 'header.php'; ?>
<main class="w-2/4 mx-auto mt-16 bg-white shadow-md rounded-2xl	 p-8 mb-12">
  <h2 class="text-2xl font-bold text-center text-green-700 mb-6">ثبت‌نام کاربر جدید</h2>

  <form action="register-process.php" method="POST" class="space-y-4">
    <div>
      <label class="block text-sm font-medium mb-1">نام کامل</label>
      <input type="text" name="fullname" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">ایمیل</label>
      <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">رمز عبور</label>
      <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">تکرار رمز عبور</label>
      <input type="password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">
      ثبت‌نام
    </button>
  </form>

  <div class="mt-4 text-sm text-center">
    قبلاً ثبت‌نام کرده‌اید؟
    <a href="login.php" class="text-green-600 hover:underline">ورود به حساب</a>
  </div>
</main>
<?php include 'footer.php'; ?>