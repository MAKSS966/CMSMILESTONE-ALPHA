<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Login extends ORM
{
	protected $_table_name = 'users';
	public function rules( )
	{
		return array(
			'username' => array(
				array( 'not_empty' ),
				array( 'min_length', array( ':value', 7 ) ),
			),
			'password' => array(
				array( 'not_empty' ),
				array( 'min_length', array( ':value', 7 ) ),
			)
		);
	}
	public function labels( )
	{
		return array(
			'username' => 'Login',
			'password' => 'Hasło',
		);
	}
	public function filtres( )
	{
		 return array(
            'username' => array(
                array('trim'),
                array('strip_tags'),
                array('preg_replace', array('/(\s{3,})/', ' ', ':value')),
                array('preg_replace', array('~(.?)\1{4,}~', '$1', ':value')),
            ),
            'password' => array(
            	array('trim'),
            	array('strip_tags'),
            	array('preg_replace', array('/(\s{3,})/', ' ', ':value')),
                array('preg_replace', array('~(.?)\1{4,}~', '$1', ':value')),
                array(array(Auth::instance(), 'hash')),
            ),
        );
	}
	public function create(Validation $validation = NULL)
    {
        return parent::create($validation);
	}
	public function hash_password($password)
    {
        // Do something to hash the password
    }
}
