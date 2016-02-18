
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "kernel/string.h"
#include "kernel/concat.h"
#include "kernel/hash.h"


ZEPHIR_INIT_CLASS(Transbybd_TransApi) {

	ZEPHIR_REGISTER_CLASS(Transbybd, TransApi, transbybd, transapi, transbybd_transapi_method_entry, 0);

	zend_declare_property_null(transbybd_transapi_ce, SL("app_id"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(transbybd_transapi_ce, SL("sec_key"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_long(transbybd_transapi_ce, SL("curl_timeout"), 10, ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_class_constant_string(transbybd_transapi_ce, SL("URL"), "http://api.fanyi.baidu.com/api/trans/vip/translate" TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Transbybd_TransApi, setAppId) {

	zval *app_id;

	zephir_fetch_params(0, 1, 0, &app_id);



	zephir_update_property_this(this_ptr, SL("app_id"), app_id TSRMLS_CC);

}

PHP_METHOD(Transbybd_TransApi, getAppId) {

	

	RETURN_MEMBER(this_ptr, "app_id");

}

PHP_METHOD(Transbybd_TransApi, setSecKey) {

	zval *sec_key;

	zephir_fetch_params(0, 1, 0, &sec_key);



	zephir_update_property_this(this_ptr, SL("sec_key"), sec_key TSRMLS_CC);

}

PHP_METHOD(Transbybd_TransApi, getSecKey) {

	

	RETURN_MEMBER(this_ptr, "sec_key");

}

PHP_METHOD(Transbybd_TransApi, setCurlTimeout) {

	zval *curl_timeout;

	zephir_fetch_params(0, 1, 0, &curl_timeout);



	zephir_update_property_this(this_ptr, SL("curl_timeout"), curl_timeout TSRMLS_CC);

}

PHP_METHOD(Transbybd_TransApi, getCurlTimeout) {

	

	RETURN_MEMBER(this_ptr, "curl_timeout");

}

PHP_METHOD(Transbybd_TransApi, __construct) {

	zval *app_id_param = NULL, *sec_key_param = NULL;
	zval *app_id = NULL, *sec_key = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &app_id_param, &sec_key_param);

	if (unlikely(Z_TYPE_P(app_id_param) != IS_STRING && Z_TYPE_P(app_id_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'app_id' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(app_id_param) == IS_STRING)) {
		zephir_get_strval(app_id, app_id_param);
	} else {
		ZEPHIR_INIT_VAR(app_id);
		ZVAL_EMPTY_STRING(app_id);
	}
	if (unlikely(Z_TYPE_P(sec_key_param) != IS_STRING && Z_TYPE_P(sec_key_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'sec_key' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(sec_key_param) == IS_STRING)) {
		zephir_get_strval(sec_key, sec_key_param);
	} else {
		ZEPHIR_INIT_VAR(sec_key);
		ZVAL_EMPTY_STRING(sec_key);
	}


	zephir_update_property_this(this_ptr, SL("app_id"), app_id TSRMLS_CC);
	zephir_update_property_this(this_ptr, SL("sec_key"), sec_key TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Transbybd_TransApi, translate) {

	zval *args = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *query_param = NULL, *from_param = NULL, *to_param = NULL, *ret = NULL, *_0, _1, _2, *_3 = NULL, *_4, *_5;
	zval *query = NULL, *from = NULL, *to = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &query_param, &from_param, &to_param);

	if (unlikely(Z_TYPE_P(query_param) != IS_STRING && Z_TYPE_P(query_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'query' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(query_param) == IS_STRING)) {
		zephir_get_strval(query, query_param);
	} else {
		ZEPHIR_INIT_VAR(query);
		ZVAL_EMPTY_STRING(query);
	}
	if (unlikely(Z_TYPE_P(from_param) != IS_STRING && Z_TYPE_P(from_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'from' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(from_param) == IS_STRING)) {
		zephir_get_strval(from, from_param);
	} else {
		ZEPHIR_INIT_VAR(from);
		ZVAL_EMPTY_STRING(from);
	}
	if (unlikely(Z_TYPE_P(to_param) != IS_STRING && Z_TYPE_P(to_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'to' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(to_param) == IS_STRING)) {
		zephir_get_strval(to, to_param);
	} else {
		ZEPHIR_INIT_VAR(to);
		ZVAL_EMPTY_STRING(to);
	}


	ZEPHIR_INIT_VAR(args);
	array_init(args);
	ZEPHIR_INIT_NVAR(args);
	zephir_create_array(args, 5, 0 TSRMLS_CC);
	zephir_array_update_string(&args, SL("q"), &query, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_VAR(_0);
	zephir_read_property_this(&_0, this_ptr, SL("app_id"), PH_NOISY_CC);
	zephir_array_update_string(&args, SL("appid"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_SINIT_VAR(_1);
	ZVAL_LONG(&_1, 10000);
	ZEPHIR_SINIT_VAR(_2);
	ZVAL_LONG(&_2, 99999);
	ZEPHIR_CALL_FUNCTION(&_3, "rand", NULL, 1, &_1, &_2);
	zephir_check_call_status();
	zephir_array_update_string(&args, SL("salt"), &_3, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&args, SL("from"), &from, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&args, SL("to"), &to, PH_COPY | PH_SEPARATE);
	zephir_array_fetch_string(&_4, args, SL("salt"), PH_NOISY | PH_READONLY, "transbybd/transApi.zep", 33 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_3, this_ptr, "__buildsign", NULL, 2, query, _4);
	zephir_check_call_status();
	zephir_array_update_string(&args, SL("sign"), &_3, PH_COPY | PH_SEPARATE);
	ZEPHIR_CALL_METHOD(&ret, this_ptr, "__callmutil", NULL, 3, args);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(_5);
	zephir_json_decode(_5, &(_5), ret, zephir_get_intval(ZEPHIR_GLOBAL(global_true))  TSRMLS_CC);
	ZEPHIR_CPY_WRT(ret, _5);
	RETURN_CCTOR(ret);

}

PHP_METHOD(Transbybd_TransApi, __buildSign) {

	int salt;
	zval *query_param = NULL, *salt_param = NULL, *_0, _1, *_2, *_3, *_4;
	zval *query = NULL, *str = NULL, *ret = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query_param, &salt_param);

	if (unlikely(Z_TYPE_P(query_param) != IS_STRING && Z_TYPE_P(query_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'query' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (likely(Z_TYPE_P(query_param) == IS_STRING)) {
		zephir_get_strval(query, query_param);
	} else {
		ZEPHIR_INIT_VAR(query);
		ZVAL_EMPTY_STRING(query);
	}
	salt = zephir_get_intval(salt_param);


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("app_id"), PH_NOISY_CC);
	ZEPHIR_SINIT_VAR(_1);
	ZVAL_LONG(&_1, salt);
	_2 = zephir_fetch_nproperty_this(this_ptr, SL("sec_key"), PH_NOISY_CC);
	ZEPHIR_INIT_VAR(_3);
	ZEPHIR_CONCAT_VVVV(_3, _0, query, &_1, _2);
	zephir_get_strval(str, _3);
	ZEPHIR_INIT_VAR(_4);
	zephir_md5(_4, str);
	zephir_get_strval(ret, _4);
	RETURN_CTOR(ret);

}

PHP_METHOD(Transbybd_TransApi, __callMutil) {

	int ZEPHIR_LAST_CALL_STATUS, i;
	zephir_fcall_cache_entry *_1 = NULL, *_2 = NULL;
	zval *args_param = NULL, *ret = NULL, _0$$5 = zval_used_for_init;
	zval *args = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &args_param);

	args = args_param;


	ZEPHIR_INIT_VAR(ret);
	ZVAL_BOOL(ret, 0);
	i = 0;
	while (1) {
		if (i > 1) {
			break;
		}
		if (i == 1) {
			ZEPHIR_SINIT_NVAR(_0$$5);
			ZVAL_LONG(&_0$$5, 1);
			ZEPHIR_CALL_FUNCTION(NULL, "sleep", &_1, 4, &_0$$5);
			zephir_check_call_status();
		}
		ZEPHIR_CALL_METHOD(&ret, this_ptr, "__callonce", &_2, 5, args);
		zephir_check_call_status();
		i++;
	}
	RETURN_CCTOR(ret);

}

PHP_METHOD(Transbybd_TransApi, __callOnce) {

	zephir_fcall_cache_entry *_1 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *args_param = NULL, *ch = NULL, *data = NULL, *r = NULL, _0 = zval_used_for_init, _2 = zval_used_for_init, *_3;
	zval *args = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &args_param);

	args = args_param;


	ZEPHIR_CALL_FUNCTION(&ch, "curl_init", NULL, 6);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&data, this_ptr, "__convert", NULL, 7, args);
	zephir_check_call_status();
	ZEPHIR_SINIT_VAR(_0);
	ZVAL_LONG(&_0, 10015);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 8, ch, &_0, data);
	zephir_check_call_status();
	ZEPHIR_SINIT_NVAR(_0);
	ZVAL_LONG(&_0, 47);
	ZEPHIR_SINIT_VAR(_2);
	ZVAL_LONG(&_2, 1);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 8, ch, &_0, &_2);
	zephir_check_call_status();
	ZEPHIR_SINIT_NVAR(_0);
	ZVAL_LONG(&_0, 10002);
	ZEPHIR_SINIT_NVAR(_2);
	ZVAL_STRING(&_2, "http://api.fanyi.baidu.com/api/trans/vip/translate", 0);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 8, ch, &_0, &_2);
	zephir_check_call_status();
	_3 = zephir_fetch_nproperty_this(this_ptr, SL("curl_timeout"), PH_NOISY_CC);
	ZEPHIR_SINIT_NVAR(_0);
	ZVAL_LONG(&_0, 13);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 8, ch, &_0, _3);
	zephir_check_call_status();
	ZEPHIR_SINIT_NVAR(_0);
	ZVAL_LONG(&_0, 19913);
	ZEPHIR_SINIT_NVAR(_2);
	ZVAL_LONG(&_2, 1);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 8, ch, &_0, &_2);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&r, "curl_exec", NULL, 9, ch);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(NULL, "curl_close", NULL, 10, ch);
	zephir_check_call_status();
	RETURN_CCTOR(r);

}

PHP_METHOD(Transbybd_TransApi, __convert) {

	HashTable *_1$$3, *_4$$5;
	HashPosition _0$$3, _3$$5;
	zval *data;
	int ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_7 = NULL;
	zval *args, *key = NULL, *val = NULL, *k = NULL, *v = NULL, **_2$$3, *_11$$3, _12$$3, **_5$$5, *_6$$6 = NULL, *_8$$6 = NULL, *_9$$7 = NULL, *_10$$7 = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &args);



	ZEPHIR_INIT_VAR(data);
	ZVAL_EMPTY_STRING(data);
	if (Z_TYPE_P(args) == IS_ARRAY) {
		zephir_is_iterable(args, &_1$$3, &_0$$3, 0, 0, "transbybd/transApi.zep", 106);
		for (
		  ; zephir_hash_get_current_data_ex(_1$$3, (void**) &_2$$3, &_0$$3) == SUCCESS
		  ; zephir_hash_move_forward_ex(_1$$3, &_0$$3)
		) {
			ZEPHIR_GET_HMKEY(key, _1$$3, _0$$3);
			ZEPHIR_GET_HVALUE(val, _2$$3);
			if (Z_TYPE_P(val) == IS_ARRAY) {
				zephir_is_iterable(val, &_4$$5, &_3$$5, 0, 0, "transbybd/transApi.zep", 102);
				for (
				  ; zephir_hash_get_current_data_ex(_4$$5, (void**) &_5$$5, &_3$$5) == SUCCESS
				  ; zephir_hash_move_forward_ex(_4$$5, &_3$$5)
				) {
					ZEPHIR_GET_HMKEY(k, _4$$5, _3$$5);
					ZEPHIR_GET_HVALUE(v, _5$$5);
					ZEPHIR_CALL_FUNCTION(&_6$$6, "rawurlencode", &_7, 11, v);
					zephir_check_call_status();
					ZEPHIR_INIT_LNVAR(_8$$6);
					ZEPHIR_CONCAT_VSVSVS(_8$$6, key, "[", k, "]=", _6$$6, "&");
					zephir_concat_self(&data, _8$$6 TSRMLS_CC);
				}
			} else {
				ZEPHIR_CALL_FUNCTION(&_9$$7, "rawurlencode", &_7, 11, val);
				zephir_check_call_status();
				ZEPHIR_INIT_LNVAR(_10$$7);
				ZEPHIR_CONCAT_VSVS(_10$$7, key, "=", _9$$7, "&");
				zephir_concat_self(&data, _10$$7 TSRMLS_CC);
			}
		}
		ZEPHIR_INIT_VAR(_11$$3);
		ZEPHIR_SINIT_VAR(_12$$3);
		ZVAL_STRING(&_12$$3, "&", 0);
		zephir_fast_trim(_11$$3, data, &_12$$3, ZEPHIR_TRIM_BOTH TSRMLS_CC);
		RETURN_CCTOR(_11$$3);
	}
	RETVAL_ZVAL(args, 1, 0);
	RETURN_MM();

}

