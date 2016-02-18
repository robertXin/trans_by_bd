<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Transbybd',
    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'TransApi',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'app_id',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 7,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 8,
              'char' => 2,
            ),
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 10,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'sec_key',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 11,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 12,
              'char' => 2,
            ),
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 14,
          'char' => 10,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'curl_timeout',
          'default' => 
          array (
            'type' => 'int',
            'value' => '10',
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 14,
            'char' => 29,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 15,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 16,
              'char' => 2,
            ),
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 18,
          'char' => 6,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'app_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 20,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'sec_key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 20,
              'char' => 60,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'app_id',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'app_id',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 22,
                    'char' => 29,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 22,
                  'char' => 29,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 23,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'sec_key',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'sec_key',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 23,
                    'char' => 30,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 23,
                  'char' => 30,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 24,
              'char' => 2,
            ),
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 20,
          'last-line' => 26,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'translate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 26,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'from',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 26,
              'char' => 54,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'to',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 26,
              'char' => 65,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'args',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 28,
                    'char' => 18,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 28,
                  'char' => 18,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 29,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ret',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 29,
                  'char' => 10,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 31,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'args',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'q',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 19,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'query',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 26,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 31,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'appid',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 35,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 31,
                            'char' => 42,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'app_id',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 31,
                            'char' => 49,
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 49,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 31,
                        'char' => 49,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'salt',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 57,
                        ),
                        'value' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'rand',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'int',
                                'value' => '10000',
                                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                'line' => 31,
                                'char' => 69,
                              ),
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 31,
                              'char' => 69,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'int',
                                'value' => '99999',
                                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                'line' => 31,
                                'char' => 75,
                              ),
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 31,
                              'char' => 75,
                            ),
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 76,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 31,
                        'char' => 76,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'from',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 84,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'from',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 90,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 31,
                        'char' => 90,
                      ),
                      4 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'to',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 96,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'to',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 31,
                          'char' => 100,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 31,
                        'char' => 100,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 31,
                    'char' => 101,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 31,
                  'char' => 101,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 33,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'args',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'sign',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 33,
                      'char' => 21,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 33,
                      'char' => 30,
                    ),
                    'name' => '__buildSign',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'query',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 33,
                          'char' => 48,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 33,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'args',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 33,
                            'char' => 53,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'salt',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 33,
                            'char' => 60,
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 33,
                          'char' => 61,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 33,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 33,
                    'char' => 62,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 33,
                  'char' => 62,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 35,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 35,
                      'char' => 21,
                    ),
                    'name' => '__callMutil',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'args',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 35,
                          'char' => 38,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 35,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 35,
                    'char' => 39,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 35,
                  'char' => 39,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 37,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'json_decode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ret',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 37,
                          'char' => 31,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 37,
                        'char' => 31,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 37,
                          'char' => 37,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 37,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 37,
                    'char' => 38,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 37,
                  'char' => 38,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 39,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ret',
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 39,
                'char' => 16,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 40,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 27,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 27,
            'char' => 2,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 26,
          'last-line' => 42,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '__buildSign',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 42,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'salt',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 42,
              'char' => 53,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'str',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 44,
                  'char' => 13,
                ),
                1 => 
                array (
                  'variable' => 'ret',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 44,
                  'char' => 17,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 46,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'str',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 46,
                            'char' => 18,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'app_id',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 46,
                            'char' => 25,
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 46,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'query',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 46,
                          'char' => 31,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 46,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'salt',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 46,
                        'char' => 36,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 46,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 46,
                        'char' => 42,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'sec_key',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 46,
                        'char' => 50,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 46,
                      'char' => 50,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 46,
                    'char' => 50,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 46,
                  'char' => 50,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 48,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'str',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 48,
                      'char' => 17,
                    ),
                    'name' => 'md5',
                    'call-type' => 1,
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 48,
                    'char' => 23,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 48,
                  'char' => 23,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 50,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ret',
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 50,
                'char' => 13,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 51,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 43,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 43,
            'char' => 2,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 42,
          'last-line' => 53,
          'char' => 17,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '__callMutil',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'args',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 53,
              'char' => 42,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 55,
                    'char' => 18,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 55,
                  'char' => 18,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 56,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 56,
                    'char' => 12,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 56,
                  'char' => 12,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 58,
              'char' => 6,
            ),
            2 => 
            array (
              'type' => 'loop',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'i',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 59,
                      'char' => 9,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 59,
                      'char' => 13,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 59,
                    'char' => 13,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'break',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 61,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 62,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'i',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 62,
                      'char' => 10,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 62,
                      'char' => 14,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 62,
                    'char' => 14,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'sleep',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '1',
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 63,
                              'char' => 12,
                            ),
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 63,
                            'char' => 12,
                          ),
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 63,
                        'char' => 13,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 64,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 65,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'ret',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 65,
                          'char' => 19,
                        ),
                        'name' => '__callOnce',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'args',
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 65,
                              'char' => 35,
                            ),
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 65,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 65,
                        'char' => 36,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 65,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 66,
                  'char' => 6,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'incr',
                      'variable' => 'i',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 66,
                      'char' => 11,
                    ),
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 67,
                  'char' => 3,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 69,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ret',
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 69,
                'char' => 13,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 70,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 54,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 54,
            'char' => 2,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 53,
          'last-line' => 72,
          'char' => 17,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '__callOnce',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'args',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 72,
              'char' => 41,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ch',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 74,
                  'char' => 9,
                ),
                1 => 
                array (
                  'variable' => 'data',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 74,
                  'char' => 14,
                ),
                2 => 
                array (
                  'variable' => 'r',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 74,
                  'char' => 16,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 76,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ch',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_init',
                    'call-type' => 1,
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 76,
                    'char' => 23,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 76,
                  'char' => 23,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 78,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 78,
                      'char' => 25,
                    ),
                    'name' => '__convert',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'args',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 78,
                          'char' => 40,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 78,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 78,
                    'char' => 41,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 78,
                  'char' => 41,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 79,
              'char' => 19,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 79,
                      'char' => 23,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 79,
                    'char' => 23,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_POSTFIELDS',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 79,
                      'char' => 43,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 79,
                    'char' => 43,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 79,
                      'char' => 49,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 79,
                    'char' => 49,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 79,
                'char' => 50,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 80,
              'char' => 19,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 80,
                      'char' => 23,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 80,
                    'char' => 23,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_POST',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 80,
                      'char' => 37,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 80,
                    'char' => 37,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 80,
                      'char' => 40,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 80,
                    'char' => 40,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 80,
                'char' => 41,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 82,
              'char' => 16,
            ),
            5 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 82,
                      'char' => 20,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 82,
                    'char' => 20,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_URL',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 82,
                      'char' => 33,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 82,
                    'char' => 33,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'TransApi',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 82,
                        'char' => 48,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'URL',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 82,
                        'char' => 48,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 82,
                      'char' => 48,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 82,
                    'char' => 48,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 82,
                'char' => 49,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 83,
              'char' => 16,
            ),
            6 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 83,
                      'char' => 20,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 83,
                    'char' => 20,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_TIMEOUT',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 83,
                      'char' => 37,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 83,
                    'char' => 37,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 83,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'curl_timeout',
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 83,
                        'char' => 57,
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 83,
                      'char' => 57,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 83,
                    'char' => 57,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 83,
                'char' => 58,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 84,
              'char' => 16,
            ),
            7 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 84,
                      'char' => 20,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 84,
                    'char' => 20,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_RETURNTRANSFER',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 84,
                      'char' => 44,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 84,
                    'char' => 44,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 84,
                      'char' => 47,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 84,
                    'char' => 47,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 84,
                'char' => 48,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 86,
              'char' => 8,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'r',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_exec',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ch',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 86,
                          'char' => 26,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 86,
                        'char' => 26,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 86,
                    'char' => 27,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 86,
                  'char' => 27,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 87,
              'char' => 15,
            ),
            9 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_close',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 87,
                      'char' => 19,
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 87,
                    'char' => 19,
                  ),
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 87,
                'char' => 20,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 88,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'r',
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 88,
                'char' => 14,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 89,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 73,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 73,
            'char' => 2,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 72,
          'last-line' => 91,
          'char' => 17,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '__convert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'args',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 91,
              'char' => 33,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 93,
                    'char' => 19,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 93,
                  'char' => 19,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 94,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'key',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 94,
                  'char' => 10,
                ),
                1 => 
                array (
                  'variable' => 'val',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 94,
                  'char' => 14,
                ),
                2 => 
                array (
                  'variable' => 'k',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 94,
                  'char' => 16,
                ),
                3 => 
                array (
                  'variable' => 'v',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 94,
                  'char' => 18,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 96,
              'char' => 7,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'args',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 96,
                    'char' => 22,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 96,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 96,
                  'char' => 32,
                ),
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 96,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'args',
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 97,
                    'char' => 30,
                  ),
                  'key' => 'key',
                  'value' => 'val',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'equals',
                        'left' => 
                        array (
                          'type' => 'typeof',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'val',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 98,
                            'char' => 29,
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 98,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'array',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 98,
                          'char' => 39,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 98,
                        'char' => 39,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'for',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'val',
                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                            'line' => 99,
                            'char' => 33,
                          ),
                          'key' => 'k',
                          'value' => 'v',
                          'reverse' => 0,
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'concat-assign',
                                  'variable' => 'data',
                                  'expr' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'concat',
                                          'left' => 
                                          array (
                                            'type' => 'concat',
                                            'left' => 
                                            array (
                                              'type' => 'variable',
                                              'value' => 'key',
                                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                              'line' => 100,
                                              'char' => 36,
                                            ),
                                            'right' => 
                                            array (
                                              'type' => 'string',
                                              'value' => '[',
                                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                              'line' => 100,
                                              'char' => 40,
                                            ),
                                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                            'line' => 100,
                                            'char' => 40,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'k',
                                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                            'line' => 100,
                                            'char' => 42,
                                          ),
                                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                          'line' => 100,
                                          'char' => 42,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => ']=',
                                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                          'line' => 100,
                                          'char' => 47,
                                        ),
                                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                        'line' => 100,
                                        'char' => 47,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'fcall',
                                        'name' => 'rawurlencode',
                                        'call-type' => 1,
                                        'parameters' => 
                                        array (
                                          0 => 
                                          array (
                                            'parameter' => 
                                            array (
                                              'type' => 'variable',
                                              'value' => 'v',
                                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                              'line' => 100,
                                              'char' => 62,
                                            ),
                                            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                            'line' => 100,
                                            'char' => 62,
                                          ),
                                        ),
                                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                        'line' => 100,
                                        'char' => 63,
                                      ),
                                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                      'line' => 100,
                                      'char' => 63,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '&',
                                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                      'line' => 100,
                                      'char' => 67,
                                    ),
                                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                    'line' => 100,
                                    'char' => 67,
                                  ),
                                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                  'line' => 100,
                                  'char' => 67,
                                ),
                              ),
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 101,
                              'char' => 18,
                            ),
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 102,
                          'char' => 14,
                        ),
                      ),
                      'else_statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'concat-assign',
                              'variable' => 'data',
                              'expr' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'key',
                                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                      'line' => 103,
                                      'char' => 32,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '=',
                                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                      'line' => 103,
                                      'char' => 36,
                                    ),
                                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                    'line' => 103,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'rawurlencode',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'val',
                                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                          'line' => 103,
                                          'char' => 53,
                                        ),
                                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                        'line' => 103,
                                        'char' => 53,
                                      ),
                                    ),
                                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                    'line' => 103,
                                    'char' => 54,
                                  ),
                                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                  'line' => 103,
                                  'char' => 54,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '&',
                                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                  'line' => 103,
                                  'char' => 58,
                                ),
                                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                                'line' => 103,
                                'char' => 58,
                              ),
                              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                              'line' => 103,
                              'char' => 58,
                            ),
                          ),
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 104,
                          'char' => 14,
                        ),
                      ),
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 105,
                      'char' => 10,
                    ),
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 106,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                      'line' => 106,
                      'char' => 22,
                    ),
                    'name' => 'trim',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '&',
                          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                          'line' => 106,
                          'char' => 31,
                        ),
                        'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                        'line' => 106,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                    'line' => 106,
                    'char' => 32,
                  ),
                  'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                  'line' => 107,
                  'char' => 6,
                ),
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 108,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'args',
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 108,
                'char' => 17,
              ),
              'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
              'line' => 109,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
                'line' => 92,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 92,
            'char' => 2,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 91,
          'last-line' => 110,
          'char' => 17,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'URL',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'http://api.fanyi.baidu.com/api/trans/vip/translate',
            'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
            'line' => 18,
            'char' => 66,
          ),
          'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
          'line' => 20,
          'char' => 7,
        ),
      ),
      'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/mnt/hgfs/robert/zephir_test/transbybd/transbybd/transApi.zep',
    'line' => 3,
    'char' => 5,
  ),
);