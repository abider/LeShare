<?php

# ------------- Oauth ----------------
$api->post('/oauth/access_token', 'OauthController@issueAccessToken');
$api->post('/sms', 'OauthController@seedSmsCode');

# ------------- User -----------------
$api->get('/me', 'UsersController@me')->middleware('api.auth');
$api->put('/me', 'UsersController@store')->middleware('api.auth');

# ------------- Topics ---------------
$api->get('/topics', 'TopicsController@index');
$api->get('/topics/{id}', 'TopicsController@show');
$api->get('/me/topics', 'TopicsController@me')->middleware('api.auth');
$api->post('/topics', 'TopicsController@store')->middleware('api.auth');

# ------------- Comments -------------
$api->get('/topics/{topic_id}/comments', 'CommentsController@index');
$api->get('/comments/{id}', 'CommentsController@show');
$api->post('/topics/{topic_id}/comments', 'CommentsController@store')->middleware('api.auth');
$api->get('/me/comments', 'CommentsController@me')->middleware('api.auth');
