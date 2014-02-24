<?php namespace Pyro\Module\Streams\Model;

use Pyro\Module\Streams\Entry\EntryModel;

class UsersProfilesEntryModel extends EntryModel
{
    /**
	 * The table
	 * @type string
	 */
    protected $table = 'profiles';

    /**
     * The compiled stream data as an array
     */
    protected static $streamData = array(
        'id' => 3,
        'stream_name' => 'lang:user_profile_fields_label',
        'stream_slug' => 'profiles',
        'stream_namespace' => 'users',
        'stream_prefix' => null,
        'about' => 'Profiles for users module',
        'view_options' => array(
            'display_name',
        ),
        'title_column' => 'display_name',
        'sorting' => 'title',
        'permissions' => 'N;',
        'hidden' => 'no',
        'menu_path' => null,
        'assignments' => array(
            array(
                'id' => 12,
                'sort_order' => 1,
                'stream_id' => 3,
                'field_id' => 12,
                'required' => 'yes',
                'unique' => 'no',
                'instructions' => 'users.field.display_name.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 12,
                    'field_name' => 'lang:user:display_name',
                    'field_slug' => 'display_name',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 50,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 13,
                'sort_order' => 2,
                'stream_id' => 3,
                'field_id' => 13,
                'required' => 'yes',
                'unique' => 'no',
                'instructions' => 'users.field.first_name.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 13,
                    'field_name' => 'lang:user:first_name_label',
                    'field_slug' => 'first_name',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 50,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 14,
                'sort_order' => 3,
                'stream_id' => 3,
                'field_id' => 14,
                'required' => 'yes',
                'unique' => 'no',
                'instructions' => 'users.field.last_name.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 14,
                    'field_name' => 'lang:user:last_name_label',
                    'field_slug' => 'last_name',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 50,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 15,
                'sort_order' => 4,
                'stream_id' => 3,
                'field_id' => 15,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.company.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 15,
                    'field_name' => 'lang:user:profile_company',
                    'field_slug' => 'company',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 100,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 16,
                'sort_order' => 5,
                'stream_id' => 3,
                'field_id' => 16,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.bio.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 16,
                    'field_name' => 'lang:user:profile_bio',
                    'field_slug' => 'bio',
                    'field_namespace' => 'users',
                    'field_type' => 'textarea',
                    'field_data' => null,
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 17,
                'sort_order' => 6,
                'stream_id' => 3,
                'field_id' => 17,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.lang.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 17,
                    'field_name' => 'lang:user:lang',
                    'field_slug' => 'lang',
                    'field_namespace' => 'users',
                    'field_type' => 'pyro_lang',
                    'field_data' => array(
                        'filter_theme' => 'yes',
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 18,
                'sort_order' => 7,
                'stream_id' => 3,
                'field_id' => 18,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.dob.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 18,
                    'field_name' => 'lang:user:profile_dob',
                    'field_slug' => 'dob',
                    'field_namespace' => 'users',
                    'field_type' => 'datetime',
                    'field_data' => array(
                        'use_time' => 'no',
                        'storage' => 'unix',
                        'input_type' => 'dropdown',
                        'start_date' => '-100Y',
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 19,
                'sort_order' => 8,
                'stream_id' => 3,
                'field_id' => 19,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.choice.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 19,
                    'field_name' => 'lang:user:profile_gender',
                    'field_slug' => 'choice',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'choice_type' => 'dropdown',
                        'choice_data' => ' : Not Telling
m : Male
f : Female',
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 20,
                'sort_order' => 9,
                'stream_id' => 3,
                'field_id' => 20,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.phone.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 20,
                    'field_name' => 'lang:user:profile_phone',
                    'field_slug' => 'phone',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 20,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 21,
                'sort_order' => 10,
                'stream_id' => 3,
                'field_id' => 21,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.mobile.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 21,
                    'field_name' => 'lang:user:profile_mobile',
                    'field_slug' => 'mobile',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 20,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 22,
                'sort_order' => 11,
                'stream_id' => 3,
                'field_id' => 22,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.address_line1.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 22,
                    'field_name' => 'lang:user:profile_address_line1',
                    'field_slug' => 'address_line1',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => null,
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 23,
                'sort_order' => 12,
                'stream_id' => 3,
                'field_id' => 23,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.address_line2.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 23,
                    'field_name' => 'lang:user:profile_address_line2',
                    'field_slug' => 'address_line2',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => null,
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 24,
                'sort_order' => 13,
                'stream_id' => 3,
                'field_id' => 24,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.address_line3.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 24,
                    'field_name' => 'lang:user:profile_address_line3',
                    'field_slug' => 'address_line3',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => null,
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 25,
                'sort_order' => 14,
                'stream_id' => 3,
                'field_id' => 25,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.postcode.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 25,
                    'field_name' => 'lang:user:profile_address_postcode',
                    'field_slug' => 'postcode',
                    'field_namespace' => 'users',
                    'field_type' => 'text',
                    'field_data' => array(
                        'max_length' => 20,
                    ),
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
            array(
                'id' => 26,
                'sort_order' => 15,
                'stream_id' => 3,
                'field_id' => 26,
                'required' => 'no',
                'unique' => 'no',
                'instructions' => 'users.field.website.instructions',
                'field_name' => null,
                'field' => array(
                    'id' => 26,
                    'field_name' => 'lang:user:profile_website',
                    'field_slug' => 'website',
                    'field_namespace' => 'users',
                    'field_type' => 'url',
                    'field_data' => null,
                    'view_options' => null,
                    'locked' => 'no',
                    'created_at' => '2014-02-24 15:53:54',
                    'updated_at' => '2014-02-24 15:53:54',
                ),
            ),
        ),
    );

    protected static $relationFieldsData = array(
    );

    
}