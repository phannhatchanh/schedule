<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cập nhật Thời Khóa Biểu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="relative z-10 grid grid-cols-[1fr,min(640px,100%),1fr] gap-y-8 px-4 pt-24 text-lg text-rose-100/90 xl:grid-cols-[1fr,minmax(auto,240px),min(640px,100%),minmax(auto,240px),1fr] xl:gap-x-9 xl:px-0 [&amp;>*]:col-start-2 xl:[&amp;>*]:col-start-3">
	<div class="w-full px-3 dark:border-gray-700">
		<div class="flex justify-start items-center text-gray-900 mb-4">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6 inline justify-center items-center"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
			<h1 class="inline justify-center items-center ml-1 font-bold">Cập nhật Thời Khóa Biểu</h1>
		</div>

		<?php include 'xuly.php';?>

		<div class="ml-1 mr-2 mb-2">
			<script src="../lastupdate.js?cache=<?php echo uniqid(); ?>"></script>
		</div>
		<div class="w-full text-gray-500 dark:text-gray-400 space-y-4">
			<form action="index.php" method="post" enctype="multipart/form-data">
				<div class="flex justify-between">
					<p class="ml-1 mr-2">GV dạy Sáng</p>
					<p><input type="file" name="gvsang" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">GV dạy Chiều</p>
					<p><input type="file" name="gvchieu" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">Lớp Sáng</p>
					<p><input type="file" name="lopsang" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">Lớp Chiều</p>
					<p><input type="file" name="lopchieu" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">Theo từng GV</p>
					<p><input type="file" name="tunggv" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">Theo từng Lớp</p>
					<p><input type="file" name="tunglop" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2">ĐT HSG</p>
					<p><input type="file" name="dthsg" size="20" /></p>
				</div>
				<div class="flex justify-between">
					<p class="ml-1 mr-2"></p>
					<p><input type="submit" value="Cập nhật" name="ok" class="bg-[#34a0cb] rounded text-white text-xs inline-block p-1 hover:bg-[#5cb4d6] cursor-pointer"/></p>
				</div>
			</form>
		</div>
	</div>
</main>
</body>
</html>
