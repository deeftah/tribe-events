<?php
/**
 * Photo View Single Event
 * This file contains one event in the photo view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/photo/single_event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

global $post;

?>

<div class="tribe-events-photo-event-wrap">

	<?php echo tribe_event_featured_image( null, 'event-large' ); ?>

	<div class="tribe-events-event-details tribe-clearfix">

		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ); ?>
		<h2 class="tribe-events-list-event-title">
			<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ); ?>

		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ); ?>
		<div class="tribe-events-event-meta">
			<div class="tribe-event-schedule-details">
				<?php if ( ! empty( $post->distance ) ) : ?>
					<strong>[<?php echo tribe_get_distance_with_unit( $post->distance ); ?>]</strong>
				<?php endif; ?>
				<?php echo tribe_events_event_schedule_details(); ?>
			</div>
		</div><!-- .tribe-events-event-meta -->
		<div class="vcard adr location">
			<?php if ( tribe_get_venue() != '' ): ?>
				<span class="fn org tribe-venue"><?php echo tribe_get_venue_link(); ?></span><br />
			<?php endif ?>
			<?php if ( tribe_get_city() != '' ): ?>
				<span class="locality"><?php echo tribe_get_city(); ?>, </span>
			<?php endif ?>
			<?php if ( tribe_get_region() != '' ): ?>
				<span class="region"><?php echo tribe_get_region(); ?>, </span>
			<?php endif ?>
			<?php if ( tribe_get_country() != '' ): ?>
				<span class="country-name"><?php echo tribe_get_country(); ?></span>
			<?php endif ?>
		</div>
		<?php do_action( 'tribe_events_after_the_meta' ); ?>

		<!-- Event Content REMOVED-->

	</div><!-- /.tribe-events-event-details -->

</div><!-- /.tribe-events-photo-event-wrap -->
