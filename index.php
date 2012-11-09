<? include('includes/header.php'); ?>
<?
	$projects = get_projects();
	$project_id = $_GET['project'];
	
	$projects_count = count($projects); $names = array(); foreach ($projects as $i => $project) { $names[$project->folder] = $i; }
	$project = $projects[$names[$project_id]];
	
	if (!$project) {
		$project = $projects[0];
		
		if ($project_id) {
			header('Location: /portfolio/' . $project->folder);
			exit;
		}
	}
	
	$next = "/portfolio/" . ($names[$project_id] + 1 >= count($projects) ? $projects[0]->folder : $projects[$names[$project_id] + 1]->folder);
	$prev = "/portfolio/" . ($names[$project_id] == 0 ? $projects[count($projects) - 1]->folder : $projects[$names[$project_id] - 1]->folder);
?>
			<div class="projects">
				<div class="row span11">
					<div class="nav-button prev"><a href="<?= $prev ?>">Previous</a></div>
					
					<div class="project">
						<div class="span4">
							<? foreach ($project->body as $section) { ?>
							<? if ($section->heading == 'title') { ?>
							<h3><?= $project->title ?></h3>
							<hr />
							<? } else {?>
							<h3><?= $section->heading ?></h3>
							<? } ?>
						
							<p><?= $section->heading == "In Their Words" ? '"' . $section->body . '"' : $section->body ?></p>
							<? } ?>
							
							<a href="http://sarahhearts.com/contact/" class="contact-me"><strong>Like what you see?</strong> Contact me</a>
						</div>

						<div class="images pull-right span6">
							<? foreach ($project->images as $image) { ?>
							<img src="/portfolio/img/projects/<?= $project->folder ?>/<?= $image ?>" alt="<?= $project->title ?> - <?= $image ?>" />
							<? } ?>
						</div>
					</div>
				
					<?= ++$i % 3 == 0 && $projects_count > $i ? '</div><hr /><div class="row">' : ($projects_count > $i ? '<hr class="visible-phone" />' : '') ?>

				<div class="nav-button next"><a href="<?= $next ?>">Next</a></div>
				</div>
			</div>

<? include('includes/footer.php'); ?>