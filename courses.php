<?php include 'header.php'; ?>
<style>
  .course-link {
    text-decoration: none;
    color: inherit;
    display: block;
    height: 100%;
  }
  .course-link:hover {
    color: inherit;
  }
</style>
<style>
  .course-box {
    background-color: #f0f0f0; /* ✅ تغییر پس‌زمینه به خاکستری کم‌رنگ */
    border: 1px solid #ddd;
    border-radius: 6px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: start;
    cursor: pointer; /* ✅ نشانگر دست برای کلیک‌پذیر بودن */
  }

  .course-box:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .course-poster {
    width: 100%;
    height: 260px;
    object-fit: cover;
    object-position: top;
    transition: transform 0.3s ease;
    display: block;
  }

  .course-box:hover .course-poster {
    transform: scale(1.05);
  }

  .course-box h2 {
    font-size: 1.1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .course-box a.btn {
    margin-top: auto;
  }
</style>

<body class="flex flex-col min-h-screen bg-gray-50">

<main class="flex-grow flex justify-center items-start py-12 ">
<?php
// فرض می‌کنیم این داده‌ها از دیتابیس اومده
$courses = [
    [
        'id' => 1,
        'name' => 'دوره آموزش تخصصی " مبانی تضمین کیفیت در صنایع میکروبیولوژی و زیستی"',
        'poster' => 'poster1.jpg',
        'description' => 'برگزار کننده دوره: دانشگاه آزاداسلامی واحد اسلامشهر - آموزشهای تخصصی و کوتاه مدت و...',
        'price' => 700000,
    ],
    [
        'id' => 2,
        'name' => '#####',
        'poster' => 'poster2.jpg',
        'description' => '#####',
        'price' => 0000000,
    ],
    // سایر دوره‌ها...
];
?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4 max-w-7xl w-full">

  <?php foreach ($courses as $course): ?>
  <a href="course_details.php?id=<?php echo $course['id']; ?>" class="course-link">
    <div class="course-box">
      <img src="images/<?php echo $course['poster']; ?>" alt="Course Poster" class="course-poster">
      <div class="p-4 flex flex-col flex-grow">
        <h2 class="text-lg font-semibold mb-2"><?php echo $course['name']; ?></h2>
        <p class="text-gray-700 text-sm mb-4"><?php echo $course['description']; ?></p>

        <!-- ✅ قیمت و دکمه در یک خط -->
        <div class="flex justify-between items-center mt-auto">
          <span class="text-green-600 font-bold">
            <?php echo number_format($course['price']); ?> تومان
          </span>

          <form method="post" action="add_to_cart.php" onClick="event.stopPropagation();" class="inline">
            <input type="hidden" name="course_id" value="<?php echo $course['id']; ?>">
            <button type="submit" class="bg-blue-600 text-white px-3 py-1.5 rounded hover:bg-blue-700 text-sm">
              افزودن به سبد خرید
            </button>
          </form>
        </div>

      </div>
    </div>
  </a>
<?php endforeach; ?>

</div>

</main>


</body>

<?php include 'footer.php'; ?>
