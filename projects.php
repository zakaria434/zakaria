<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="project-card" style="position: relative; border: 1px solid #ddd; border-radius: 8px; margin: 16px; box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1); overflow: hidden; height: 500px;">
    <!-- Background iframe -->
    <iframe src="https://zakaria434.github.io/AWR/" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1; pointer-events: none;"></iframe>
    
    <!-- Content overlay -->
    <div style="position: relative; z-index: 2; background: rgba(0, 0, 0, 0.5); color: white; padding: 16px; border-radius: 8px; height: 100%;">
        <h3 style="margin: 0;">AWR</h3>
        <p>AWR Project</p>
        <a href="https://zakaria434.github.io/AWR" style="display: inline-block; margin-top: 8px; padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">View Project</a>
    </div>
</div>
<div class="project-card" style="position: relative; border: 1px solid #ddd; border-radius: 8px; margin: 16px; box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1); overflow: hidden; height: 500px;">
    <!-- Background iframe -->
    <img src="..\website\images\coming_soon.png" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1; pointer-events: none;">
    
    <!-- Content overlay -->
    <div style="position: relative; z-index: 2; background: rgba(0, 0, 0, 0.5); color: white; padding: 16px; border-radius: 8px; height: 100%;">
        <h3 style="margin: 0;">lbaali</h3>
        <p>lbaali project</p>
        <a href="http://lbaali.byethost7.com/?i=1" style="display: inline-block; margin-top: 8px; padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">View Project</a>
    </div>
</div>

</body>
</html>
<?php include("footer.php") ?>