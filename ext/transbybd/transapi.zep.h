
extern zend_class_entry *transbybd_transapi_ce;

ZEPHIR_INIT_CLASS(Transbybd_TransApi);

PHP_METHOD(Transbybd_TransApi, setAppId);
PHP_METHOD(Transbybd_TransApi, getAppId);
PHP_METHOD(Transbybd_TransApi, setSecKey);
PHP_METHOD(Transbybd_TransApi, getSecKey);
PHP_METHOD(Transbybd_TransApi, setCurlTimeout);
PHP_METHOD(Transbybd_TransApi, getCurlTimeout);
PHP_METHOD(Transbybd_TransApi, __construct);
PHP_METHOD(Transbybd_TransApi, translate);
PHP_METHOD(Transbybd_TransApi, __buildSign);
PHP_METHOD(Transbybd_TransApi, __callMutil);
PHP_METHOD(Transbybd_TransApi, __callOnce);
PHP_METHOD(Transbybd_TransApi, __convert);

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi_setappid, 0, 0, 1)
	ZEND_ARG_INFO(0, app_id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi_setseckey, 0, 0, 1)
	ZEND_ARG_INFO(0, sec_key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi_setcurltimeout, 0, 0, 1)
	ZEND_ARG_INFO(0, curl_timeout)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi___construct, 0, 0, 2)
	ZEND_ARG_INFO(0, app_id)
	ZEND_ARG_INFO(0, sec_key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi_translate, 0, 0, 3)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, from)
	ZEND_ARG_INFO(0, to)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi___buildsign, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, salt)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi___callmutil, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, args, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi___callonce, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, args, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_transbybd_transapi___convert, 0, 0, 1)
	ZEND_ARG_INFO(0, args)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(transbybd_transapi_method_entry) {
	PHP_ME(Transbybd_TransApi, setAppId, arginfo_transbybd_transapi_setappid, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, getAppId, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, setSecKey, arginfo_transbybd_transapi_setseckey, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, getSecKey, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, setCurlTimeout, arginfo_transbybd_transapi_setcurltimeout, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, getCurlTimeout, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, __construct, arginfo_transbybd_transapi___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Transbybd_TransApi, translate, arginfo_transbybd_transapi_translate, ZEND_ACC_PUBLIC)
	PHP_ME(Transbybd_TransApi, __buildSign, arginfo_transbybd_transapi___buildsign, ZEND_ACC_PRIVATE)
	PHP_ME(Transbybd_TransApi, __callMutil, arginfo_transbybd_transapi___callmutil, ZEND_ACC_PRIVATE)
	PHP_ME(Transbybd_TransApi, __callOnce, arginfo_transbybd_transapi___callonce, ZEND_ACC_PRIVATE)
	PHP_ME(Transbybd_TransApi, __convert, arginfo_transbybd_transapi___convert, ZEND_ACC_PRIVATE)
	PHP_FE_END
};
