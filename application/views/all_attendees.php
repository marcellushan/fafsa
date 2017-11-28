 <div class="main container">
 <h2 class="mytitle">List of all Registrants.
</h2>


<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Location</th>
			<th>Event Date</th>
			<th># attending</th>
			<th>Registration Date</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($attendees as $attendee): ?>
		<tr>
			<td><?=$attendee->attendee_name?></td>
			<td><?=$attendee->email?></td>
			<td><?=$attendee->phone?></td>
			<td><?=$attendee->location?></td>
			<td><? $date=date_create($attendee->event_date);?><?=date_format($date, 'F d, Y')?></td>
			<td><?=$attendee->num_attending?></td>
			<td><? $date=date_create($attendee->submit_date);?><?=date_format($date, 'F d, Y')?></td>
		</tr>
		<?php endforeach;?>
	
	
	</tbody>
			




</table>