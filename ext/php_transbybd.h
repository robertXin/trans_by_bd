
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_TRANSBYBD_H
#define PHP_TRANSBYBD_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_TRANSBYBD_NAME        "transbybd"
#define PHP_TRANSBYBD_VERSION     "0.0.1"
#define PHP_TRANSBYBD_EXTNAME     "transbybd"
#define PHP_TRANSBYBD_AUTHOR      ""
#define PHP_TRANSBYBD_ZEPVERSION  "0.9.2a-dev"
#define PHP_TRANSBYBD_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(transbybd)

	int initialized;

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	/* Global constants */
	zval *global_true;
	zval *global_false;
	zval *global_null;
	
ZEND_END_MODULE_GLOBALS(transbybd)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(transbybd)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) TSRMG(transbybd_globals_id, zend_transbybd_globals *, v)
#else
	#define ZEPHIR_GLOBAL(v) (transbybd_globals.v)
#endif

#ifdef ZTS
	#define ZEPHIR_VGLOBAL ((zend_transbybd_globals *) (*((void ***) tsrm_ls))[TSRM_UNSHUFFLE_RSRC_ID(transbybd_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(transbybd_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def transbybd_globals
#define zend_zephir_globals_def zend_transbybd_globals

extern zend_module_entry transbybd_module_entry;
#define phpext_transbybd_ptr &transbybd_module_entry

#endif
