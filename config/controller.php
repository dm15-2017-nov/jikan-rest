<?php

return [

    'AnimeController@main' => [
        'table_name' => 'anime',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@characters_staff' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@characters' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@staff' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@episodes' => [
        'table_name' => 'anime_episodes',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@episode' => [
        'table_name' => 'anime_episode',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@news' => [
        'table_name' => 'anime_news',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@forum' => [
        'table_name' => 'anime_forum',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@videos' => [
        'table_name' => 'anime_videos',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@pictures' => [
        'table_name' => 'anime_pictures',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@stats' => [
        'table_name' => 'anime_stats',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@moreInfo' => [
        'table_name' => 'anime_moreinfo',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@recommendations' => [
        'table_name' => 'anime_recommendations',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@userupdates' => [
        'table_name' => 'anime_userupdates',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@reviews' => [
        'table_name' => 'anime_reviews',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'MangaController@main' => [
        'table_name' => 'manga',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@characters' => [
        'table_name' => 'manga_characters',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@news' => [
        'table_name' => 'manga_news',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@forum' => [
        'table_name' => 'manga_news',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@pictures' => [
        'table_name' => 'manga_pictures',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@stats' => [
        'table_name' => 'manga_stats',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@moreInfo' => [
        'table_name' => 'manga_moreinfo',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@recommendations' => [
        'table_name' => 'manga_recommendations',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@userupdates' => [
        'table_name' => 'manga_userupdates',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'MangaController@reviews' => [
        'table_name' => 'manga_reviews',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'CharacterController@main' => [
        'table_name' => 'characters',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'CharacterController@pictures' => [
        'table_name' => 'characters_pictures',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'PersonController@main' => [
        'table_name' => 'people',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'PersonController@pictures' => [
        'table_name' => 'people_pictures',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'SeasonController@archive' => 'season_archive',
    'SeasonController@later' => 'season_later',
    'SeasonController@main' => 'season',

    'ScheduleController@main' => 'schedule',

    'ProducerController@main' => 'producers',
    'ProducerController@resource' => 'producers_anime',

    'MagazineController@main' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_MAGAZINE_EXPIRE')
    ],
    'MagazineController@resource' => 'magazines_manga',

    'UserController@recentlyOnline' => 'users_recently_online',
    'UserController@profile' => [
        'table_name' => 'users',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'UserController@history' => [
        'table_name' => 'users_history',
        'ttl' => env('CACHE_USER_EXPIRE')
    ],
    'UserController@friends' => [
        'table_name' => 'users_friends',
        'ttl' => env('CACHE_USER_EXPIRE')
    ],
    'UserController@recommendations' => [
        'table_name' => 'users_recommendations',
        'ttl' => env('CACHE_USER_EXPIRE')
    ],
    'UserController@reviews' => [
        'table_name' => 'users_reviews',
        'ttl' => env('CACHE_USER_EXPIRE')
    ],
    'UserController@clubs' => [
        'table_name' => 'users_clubs',
        'ttl' => env('CACHE_USER_EXPIRE')
    ],
    'UserController@animelist' => 'users_animelist',
    'UserController@mangalist' => 'users_mangalist',

    'GenreController@mainAnime' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_GENRE_EXPIRE')
    ],
    'GenreController@mainManga' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_GENRE_EXPIRE')
    ],
    'GenreController@anime' => 'genres_anime',
    'GenreController@manga' => 'genres_manga',

    'TopController@anime' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'TopController@manga' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'TopController@characters' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'TopController@people' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'ReviewsController@bestVoted' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'SearchController@anime' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],
    'SearchController@manga' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],
    'SearchController@character' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],
    'SearchController@people' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],
    'SearchController@users' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],
    'SearchController@userById' => [
        'table_name' => 'common',
        'ttl' => env('CACHE_SEARCH_EXPIRE')
    ],

    'ClubController@main' => [
        'table_name' => 'clubs',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'ClubController@members' => [
        'table_name' => 'clubs_members',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'ReviewsController@anime' => [
        'table_name' => 'reviews',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'ReviewsController@manga' => [
        'table_name' => 'reviews',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'RecommendationsController@anime' => [
        'table_name' => 'recommendations',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'RecommendationsController@manga' => [
        'table_name' => 'recommendations',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'WatchController@recentEpisodes' => [
        'table_name' => 'watch',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'WatchController@popularEpisodes' => [
        'table_name' => 'watch',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'WatchController@recentPromos' => [
        'table_name' => 'watch',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'WatchController@popularPromos' => [
        'table_name' => 'watch',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

];