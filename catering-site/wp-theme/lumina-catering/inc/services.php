<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumina_service_catalog()
{
    return [
        'corporate-events' => [
            'key'        => 'corp',
            'hero'       => 'corporate-gala.jpg',
            'img1'       => 'corporate-catering.jpg',
            'img2'       => 'product-launch.jpg',
            'breadcrumb' => 'Corporate Events',
            'eyebrow'    => 'Corporate Catering',
            'title'      => 'Dining That Makes the Meeting Memorable',
            'lead'       => 'From board lunches to 500-person galas, we deliver polished service that reflects your brand — on time, on brief, and without drama.',
        ],
        'weddings' => [
            'key'        => 'wed',
            'hero'       => 'wedding-catering.jpg',
            'img1'       => 'rooftop-wedding.jpg',
            'img2'       => 'dessert-table.jpg',
            'breadcrumb' => 'Weddings',
            'eyebrow'    => 'Wedding Catering',
            'title'      => 'A Feast Worthy of the Day',
            'lead'       => 'Cocktail hours, banquet courses and late-night bites — styled for Hong Kong weddings, from harbour rooftops to country clubs.',
        ],
        'private-celebrations' => [
            'key'        => 'priv',
            'hero'       => 'garden-party.jpg',
            'img1'       => 'private-events.jpg',
            'img2'       => 'gourmet-canapes.jpg',
            'breadcrumb' => 'Private Celebrations',
            'eyebrow'    => 'Private Events',
            'title'      => 'Intimate Hosting, Hotel-Level Finish',
            'lead'       => 'Birthdays, anniversaries, garden parties and home dinners — cooked and served as if you had a private club in your living room.',
        ],
        'full-service' => [
            'key'        => 'full',
            'hero'       => 'full-service.jpg',
            'img1'       => 'buffet-station.jpg',
            'img2'       => 'charity-gala.jpg',
            'breadcrumb' => 'Full-Service Catering',
            'eyebrow'    => 'Full Production',
            'title'      => 'Kitchen, Floor, Bar & Coordination',
            'lead'       => 'One team for food, beverage, staffing, rentals and on-site direction — so you are not stitching five vendors together.',
        ],
    ];
}

function lumina_current_service()
{
    $slug = get_post_field('post_name', get_queried_object_id());
    $all  = lumina_service_catalog();
    return $all[$slug] ?? null;
}
