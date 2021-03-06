<?php
/**
 * View File - Facebook Widget Title
 */

/*
 * Print the 'before_title' HMTL set by the Theme.
 */
echo apply_filters( 'kbso_facebook_statuses_before_title', $before_title, $instance, $widget_id );

/*
 * Output the Title text set on the Widget.
 */
echo esc_html( apply_filters( 'kbso_facebook_statuses_title', $title, $instance, $widget_id ) );

/*
 * Print the 'after_title' HMTL set by the Theme.
 */
echo apply_filters( 'kbso_facebook_statuses_after_title', $after_title, $instance, $widget_id );