<?php
/**
 * The template is used for displaying the Event List widget if the placeholder option isn't used.
 *
 * You can use this to edit how the output of the event list widget. For the shortcode [eo_events] see shortcode-event-list.php
 *
 * For a list of available functions (outputting dates, venue details etc) see http://codex.wp-event-organiser.com
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://docs.wp-event-organiser.com/theme-integration for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.7
 */
global $eo_event_loop,$eo_event_loop_args;

//The list ID / classes
$id      = ( $eo_event_loop_args['id'] ? 'id="'.$eo_event_loop_args['id'].'"' : '' );
$classes = $eo_event_loop_args['class'];
?>
<div class="row" id="events">
	<div class="col-md-6">
		<?php 
		$next_events = eo_get_events(array(
         'numberposts'=>1,
         'event_start_after'=>'last week',
			));
		$next_event=$next_events[0];
		$next_event_time = strtotime($next_event->StartDate);
		$eo_title=$next_event->post_title;
		$eo_excerpt = get_the_excerpt( $next_event->ID );
		if(strlen($eo_excerpt)>50){
			$eo_excerpt = substr($eo_excerpt,0,50).'...';
		}
		$eo_month=strtoupper(date('M',$next_event_time));
		$eo_date =date('d',$next_event_time);
		?>
		<div class="thumbnail">
			<div class="row">
				<div class="col-md-6">
					<div class="date-thumb">
						<div class="month"><?php echo $eo_month;?></div>
						<div class="date"><?php echo $eo_date;?></div>
					</div>
				</div>
				<div class="col-md-6">
					<h4><?php echo $eo_title;?></h4>
					<p><?php echo $eo_excerpt;?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<?php 
		$events = eo_get_events(array(
         'numberposts'=>5,
         'event_start_after'=>'last month',
         'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
    ));
		if ( $events) :  ?>

			<div <?php echo $id; ?> class="list-group <?php echo esc_attr( $classes );?>" > 
				<li class="list-group-item"><b><?php echo date('F Y');?></b></li>
				<?php foreach ( $events as $event ) :  ?>

					<?php
						//Generate HTML classes for this event
						$eo_event_classes = eo_get_event_classes();

						//For non-all-day events, include time format
						$format = eo_get_event_datetime_format();
					?>

					<a href="<?php echo get_permalink($event->ID); ?>" class="list-group-item <?php echo esc_attr( implode( ' ',$eo_event_classes ) ); ?>" >
						<?php 
							$eob_date = eo_get_the_start('d', $event->ID,null,$event->occurrence_id);
							$eob_class = $eob_date==$eo_date?'badge-primary':'badge-default';
						?>
						<span class="badge <?php echo $eob_class;?>">
						
							<?php echo $eob_date;?>
							
						</span>
						<?php echo get_the_title($event->ID); ?>
					</a>

				<?php endforeach; ?>

			</div>

		<?php elseif ( ! empty( $eo_event_loop_args['no_events'] ) ) :  ?>

			<ul id="<?php echo esc_attr( $id );?>" class="list-group <?php echo esc_attr( $classes );?>" > 
				<li class="list-group-item eo-no-events" > <?php echo $eo_event_loop_args['no_events']; ?> </li>
			</ul>

		<?php endif; ?>
	</div>
</div>
