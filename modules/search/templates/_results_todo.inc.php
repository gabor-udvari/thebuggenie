<?php foreach ($issues as $issue): ?>
	<?php list ($showtablestart, $showheader, $prevgroup_id, $groupby_description) = searchActions::resultGrouping($issue, $groupby, $cc, $prevgroup_id); ?>
	<?php if ($showtablestart && $cc > 1): ?>
		<?php echo '</tbody></table>'; ?>
	<?php endif; ?>
	<?php if ($showheader): ?>
		<h3 style="margin-top: 20px;"><?php echo $groupby_description; ?></h3>
	<?php endif; ?>
	<?php if ($showtablestart): ?>
		<table style="width: 100%;" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th style="width: auto; padding-left: 2px;"><?php echo __('Title'); ?></th>
					<th style="text-align: center; width: 70px;"><?php echo __('Progress'); ?></th>
					<th style="width: auto;"><?php echo __('Description'); ?></th>
					<th style="width: 170px;"><?php echo __('More info'); ?></th>
				</tr>
			</thead>
			<tbody>
	<?php endif; ?>
				<tr class="<?php if ($issue->hasUnsavedChanges()): ?> changed<?php endif; ?><?php if ($issue->isBlocking()): ?> blocking<?php endif; ?>">
					<td style="padding: 3px;"><?php echo $issue->getTitle(); ?></td>
					<td style="text-align: center; background-color: <?php

						switch (true)
						{
							case ($issue->getPercentCompleted() == 0):
								echo '#BF0303; color: #FFF';
								break;
							case ($issue->getPercentCompleted() <= 20):
								echo '#80B5FF';
								break;
							case ($issue->getPercentCompleted() <= 40):
								echo '#FFF6C8';
								break;
							case ($issue->getPercentCompleted() <= 60):
								echo '#F3C300';
								break;
							case ($issue->getPercentCompleted() < 100):
								echo '#D9E8C3';
								break;
							case ($issue->getPercentCompleted() == 100):
								echo '#37A42B';
								break;
						}

					?>; font-weight: bold;"><?php echo $issue->getPercentCompleted(); ?>%</td>
					<td style="padding: 3px;"><?php echo ($issue->getDescription() != '') ? $issue->getDescription() : '<span class="faded_medium">'.__('No description provided').'</span>'; ?></td>
					<td class="result_issue"><?php echo link_tag(make_url('viewissue', array('project_key' => $issue->getProject()->getKey(), 'issue_no' => $issue->getFormattedIssueNo())), $issue->getFormattedIssueNo(true, true)); ?></td>
				</tr>
	<?php if ($cc == count($issues)): ?>
			</tbody>
		</table>
	<?php endif; ?>
	<?php $cc++; ?>
<?php endforeach; ?>