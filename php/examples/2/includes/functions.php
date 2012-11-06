<?php
const MY_SESSION_ID = 'my_session_id';

function start_session()
{
    if (!isset($_COOKIE[MY_SESSION_ID])) {

        $sid = md5(time());

        setcookie(MY_SESSION_ID, $sid, 0);
        $_COOKIE[MY_SESSION_ID] = $sid;
    }
}

function get_session_id()
{
    return $_COOKIE[MY_SESSION_ID];
}

function store_into_session($name, $value)
{
    db_store($name, $value);
}

function get_from_session($name)
{
    $data = db_get();

    return isset($data[$name]) ? $data[$name] : '';
}

function db_connect()
{
    mysql_connect('localhost', 'root');
    mysql_select_db('joy_school_teaching');
}

function db_store($name, $value)
{
    db_connect();

    mysql_query('REPLACE INTO sessions_data SET sid="' . get_session_id() . '", name="' . mysql_real_escape_string($name) . '", value="' . mysql_real_escape_string($value) . '"');
}

function db_get()
{
    db_connect();

    $result = mysql_query('SELECT * FROM sessions_data WHERE sid="' . get_session_id() . '"');

    $return = array();

    while($row = mysql_fetch_assoc($result)) {

        $return[$row['name']] = $row['value'];
    }

    return $return;
}

start_session();
?>