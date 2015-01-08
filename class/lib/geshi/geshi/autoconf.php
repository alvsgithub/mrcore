<?php
/*************************************************************************************
 * autoconf.php
 * -----
 * Author: Mihai Vasilian (grayasm@gmail.com)
 * Copyright: (c) 2010 Mihai Vasilian
 * Release Version: 1.0.8.9
 * Date Started: 2010/01/25
 *
 * autoconf language file for GeSHi.
 *
 ***********************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Autoconf',
    'COMMENT_SINGLE' => array(2 => '#'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Single Line comment started by dnl
        3 => '/(?<!\$)\bdnl\b.*$/m',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'AC_ACT_IFELSE',
            'AC_AIX',
            'AC_ALLOCA',
            'AC_ARG_ARRAY',
            'AC_ARG_ENABLE',
            'AC_ARG_PROGRAM',
            'AC_ARG_VAR',
            'AC_ARG_WITH',
            'AC_AUTOCONF_VERSION',
            'AC_BEFORE',
            'AC_C_BACKSLASH_A',
            'AC_C_BIGENDIAN',
            'AC_C_CHAR_UNSIGNED',
            'AC_C_CONST',
            'AC_C_CROSS',
            'AC_C_FLEXIBLE_ARRAY_MEMBER',
            'AC_C_INLINE',
            'AC_C_LONG_DOUBLE',
            'AC_C_PROTOTYPES',
            'AC_C_RESTRICT',
            'AC_C_STRINGIZE',
            'AC_C_TYPEOF',
            'AC_C_VARARRAYS',
            'AC_C_VOLATILE',
            'AC_CACHE_CHECK',
            'AC_CACHE_LOAD',
            'AC_CACHE_SAVE',
            'AC_CACHE_VAL',
            'AC_CANONICAL_BUILD',
            'AC_CANONICAL_HOST',
            'AC_CANONICAL_SYSTEM',
            'AC_CANONICAL_TARGET',
            'AC_CHAR_UNSIGNED',
            'AC_CHECK_ALIGNOF',
            'AC_CHECK_DECL',
            'AC_CHECK_DECLS',
            'AC_CHECK_DECLS_ONCE',
            'AC_CHECK_FILE',
            'AC_CHECK_FILES',
            'AC_CHECK_FUNC',
            'AC_CHECK_FUNCS',
            'AC_CHECK_FUNCS_ONCE',
            'AC_CHECK_HEADER',
            'AC_CHECK_HEADERS',
            'AC_CHECK_HEADERS_ONCE',
            'AC_CHECK_LIB',
            'AC_CHECK_MEMBER',
            'AC_CHECK_MEMBERS',
            'AC_CHECK_PROG',
            'AC_CHECK_PROGS',
            'AC_CHECK_SIZEOF',
            'AC_CHECK_TARGET_TOOL',
            'AC_CHECK_TARGET_TOOLS',
            'AC_CHECK_TOOL',
            'AC_CHECK_TOOLS',
            'AC_CHECK_TYPE',
            'AC_CHECK_TYPES',
            'AC_CHECKING',
            'AC_COMPILE_CHECK',
            'AC_COMPILE_IFELSE',
            'AC_COMPUTE_INT',
            'AC_CONFIG_AUX_DIR',
            'AC_CONFIG_COMMANDS',
            'AC_CONFIG_COMMANDS_POST',
            'AC_CONFIG_COMMANDS_PRE',
            'AC_CONFIG_FILES',
            'AC_CONFIG_HEADERS',
            'AC_CONFIG_ITEMS',
            'AC_CONFIG_LIBOBJ_DIR',
            'AC_CONFIG_LINKS',
            'AC_CONFIG_MACRO_DIR',
            'AC_CONFIG_SRCDIR',
            'AC_CONFIG_SUBDIRS',
            'AC_CONFIG_TESTDIR',
            'AC_CONST',
            'AC_COPYRIGHT',
            'AC_CROSS_CHECK',
            'AC_CYGWIN',
            'AC_DATAROOTDIR_CHECKED',
            'AC_DECL_SYS_SIGLIST',
            'AC_DECL_YYTEXT',
            'AC_DEFINE',
            'AC_DEFINE_UNQUOTED',
            'AC_DEFUN',
            'AC_DEFUN_ONCE',
            'AC_DIAGNOSE',
            'AC_DIR_HEADER',
            'AC_DISABLE_OPTION_CHECKING',
            'AC_DYNIX_SEQ',
            'AC_EGREP_CPP',
            'AC_EGREP_HEADER',
            'AC_EMXOS2',
            'AC_ENABLE',
            'AC_ERLANG_CHECK_LIB',
            'AC_ERLANG_NEED_ERL',
            'AC_ERLANG_NEED_ERLC',
            'AC_ERLANG_PATH_ERL',
            'AC_ERLANG_PATH_ERLC',
            'AC_ERLANG_SUBST_ERTS_VER',
            'AC_ERLANG_SUBST_INSTALL_LIB_DIR',
            'AC_ERLANG_SUBST_INSTALL_LIB_SUBDIR',
            'AC_ERLANG_SUBST_LIB_DIR',
            'AC_ERLANG_SUBST_ROOT_DIR',
            'AC_ERROR',
            'AC_EXEEXT',
            'AC_F77_DUMMY_MAIN',
            'AC_F77_FUNC',
            'AC_F77_LIBRARY_LDFLAGS',
            'AC_F77_MAIN',
            'AC_F77_WRAPPERS',
            'AC_FATAL',
            'AC_FC_FREEFORM',
            'AC_FC_FUNC',
            'AC_FC_LIBRARY_LDFLAGS',
            'AC_FC_MAIN',
            'AC_FC_SRCEXT',
            'AC_FC_WRAPPERS',
            'AC_FIND_X',
            'AC_FIND_XTRA',
            'AC_FOREACH',
            'AC_FUNC_ALLOCA',
            'AC_FUNC_CHECK',
            'AC_FUNC_CHOWN',
            'AC_FUNC_CLOSEDIR_VOID',
            'AC_FUNC_ERROR_AT_LINE',
            'AC_FUNC_FNMATCH',
            'AC_FUNC_FNMATCH_GNU',
            'AC_FUNC_FORK',
            'AC_FUNC_FSEEKO',
            'AC_FUNC_GETGROUPS',
            'AC_FUNC_GETLOADAVG',
            'AC_FUNC_GETMNTENT',
            'AC_FUNC_GETPGRP',
            'AC_FUNC_LSTAT',
            'AC_FUNC_LSTAT_FOLLOWS_SLASHED_SYMLINK',
            'AC_FUNC_MALLOC',
            'AC_FUNC_MBRTOWC',
            'AC_FUNC_MEMCMP',
            'AC_FUNC_MKTIME',
            'AC_FUNC_MMAP',
            'AC_FUNC_OBSTACK',
            'AC_FUNC_REALLOC',
            'AC_FUNC_SELECT_ARGTYPES',
            'AC_FUNC_SETPGRP',
            'AC_FUNC_SETVBUF_REVERSED',
            'AC_FUNC_STAT',
            'AC_FUNC_STRCOLL',
            'AC_FUNC_STRERROR_R',
            'AC_FUNC_STRFTIME',
            'AC_FUNC_STRNLEN',
            'AC_FUNC_STRTOD',
            'AC_FUNC_STRTOLD',
            'AC_FUNC_UTIME_NULL',
            'AC_FUNC_VPRINTF',
            'AC_FUNC_WAIT3',
            'AC_GCC_TRADITIONAL',
            'AC_GETGROUPS_T',
            'AC_GETLOADAVG',
            'AC_GNU_SOURCE',
            'AC_HAVE_FUNCS',
            'AC_HAVE_HEADERS',
            'AC_HAVE_LIBRARY',
            'AC_HAVE_POUNDBANG',
            'AC_HEADER_ASSERT',
            'AC_HEADER_CHECK',
            'AC_HEADER_DIRENT',
            'AC_HEADER_EGREP',
            'AC_HEADER_MAJOR',
            'AC_HEADER_RESOLV',
            'AC_HEADER_STAT',
            'AC_HEADER_STDBOOL',
            'AC_HEADER_STDC',
            'AC_HEADER_SYS_WAIT',
            'AC_HEADER_TIME',
            'AC_HEADER_TIOCGWINSZ',
            'AC_HELP_STRING',
            'AC_INCLUDES_DEFAULT',
            'AC_INIT',
            'AC_INLINE',
            'AC_INT_16_BITS',
            'AC_IRIX_SUN',
            'AC_ISC_POSIX',
            'AC_LANG_ASSERT',
            'AC_LANG_C',
            'AC_LANG_CALL',
            'AC_LANG_CONFTEST',
            'AC_LANG_CPLUSPLUS',
            'AC_LANG_FORTRAN77',
            'AC_LANG_FUNC_LINK_TRY',
            'AC_LANG_POP',
            'AC_LANG_PROGRAM',
            'AC_LANG_PUSH',
            'AC_LANG_RESTORE',
            'AC_LANG_SAVE',
            'AC_LANG_SOURCE',
            'AC_LANG_WERROR',
            'AC_LIBOBJ',
            'AC_LIBSOURCE',
            'AC_LIBSOURCES',
            'AC_LINK_FILES',
            'AC_LINK_IFELSE',
            'AC_LN_S',
            'AC_LONG_64_BITS',
            'AC_LONG_DOUBLE',
            'AC_LONG_FILE_NAMES',
            'AC_MAJOR_HEADER',
            'AC_MEMORY_H',
            'AC_MINGW32',
            'AC_MINIX',
            'AC_MINUS_C_MINUS_O',
            'AC_MMAP',
            'AC_MODE_T',
            'AC_MSG_CHECKING',
            'AC_MSG_ERROR',
            'AC_MSG_FAILURE',
            'AC_MSG_NOTICE',
            'AC_MSG_RESULT',
            'AC_MSG_WARN',
            'AC_OBJEXT',
            'AC_OBSOLETE',
            'AC_OFF_T',
            'AC_OPENMP',
            'AC_OUTPUT',
            'AC_OUTPUT_COMMANDS',
            'AC_PACKAGE_BUGREPORT',
            'AC_PACKAGE_NAME',
            'AC_PACKAGE_STRING',
            'AC_PACKAGE_TARNAME',
            'AC_PACKAGE_URL',
            'AC_PACKAGE_VERSION',
            'AC_PATH_PROG',
            'AC_PATH_PROGS',
            'AC_PATH_PROGS_FEATURE_CHECK',
            'AC_PATH_TARGET_TOOL',
            'AC_PATH_TOOL',
            'AC_PATH_X',
            'AC_PATH_XTRA',
            'AC_PID_T',
            'AC_PREFIX',
            'AC_PREFIX_DEFAULT',
            'AC_PREFIX_PROGRAM',
            'AC_PREPROC_IFELSE',
            'AC_PREREQ',
            'AC_PRESERVE_HELP_ORDER',
            'AC_PROG_AWK',
            'AC_PROG_CC',
            'AC_PROG_CC_C89',
            'AC_PROG_CC_C99',
            'AC_PROG_CC_C_O',
            'AC_PROG_CC_STDC',
            'AC_PROG_CPP',
            'AC_PROG_CPP_WERROR',
            'AC_PROG_CXX',
            'AC_PROG_CXX_C_O',
            'AC_PROG_CXXCPP',
            'AC_PROG_EGREP',
            'AC_PROG_F77',
            'AC_PROG_F77_C_O',
            'AC_PROG_FC',
            'AC_PROG_FC_C_O',
            'AC_PROG_FGREP',
            'AC_PROG_GCC_TRADITIONAL',
            'AC_PROG_GREP',
            'AC_PROG_INSTALL',
            'AC_PROG_LEX',
            'AC_PROG_LN_S',
            'AC_PROG_MAKE_SET',
            'AC_PROG_MKDIR_P',
            'AC_PROG_OBJC',
            'AC_PROG_OBJCPP',
            'AC_PROG_OBJCXX',
            'AC_PROG_OBJCXXCPP',
            'AC_PROG_RANLIB',
            'AC_PROG_SED',
            'AC_PROG_YACC',
            'AC_PROGRAM_CHECK',
            'AC_PROGRAM_EGREP',
            'AC_PROGRAM_PATH',
            'AC_PROGRAMS_CHECK',
            'AC_PROGRAMS_PATH',
            'AC_REMOTE_TAPE',
            'AC_REPLACE_FNMATCH',
            'AC_REPLACE_FUNCS',
            'AC_REQUIRE',
            'AC_REQUIRE_AUX_FILE',
            'AC_REQUIRE_CPP',
            'AC_RESTARTABLE_SYSCALLS',
            'AC_RETSIGTYPE',
            'AC_REVISION',
            'AC_RSH',
            'AC_RUN_IFELSE',
            'AC_SCO_INTL',
            'AC_SEARCH_LIBS',
            'AC_SET_MAKE',
            'AC_SETVBUF_REVERSED',
            'AC_SIZE_T',
            'AC_SIZEOF_TYPE',
            'AC_ST_BLKSIZE',
            'AC_ST_BLOCKS',
            'AC_ST_RDEV',
            'AC_STAT_MACROS_BROKEN',
            'AC_STDC_HEADERS',
            'AC_STRCOLL',
            'AC_STRUCT_DIRENT_D_INO',
            'AC_STRUCT_DIRENT_D_TYPE',
            'AC_STRUCT_ST_BLKSIZE',
            'AC_STRUCT_ST_BLOCKS',
            'AC_STRUCT_ST_RDEV',
            'AC_STRUCT_TIMEZONE',
            'AC_STRUCT_TM',
            'AC_SUBST',
            'AC_SUBST_FILE',
            'AC_SYS_INTERPRETER',
            'AC_SYS_LARGEFILE',
            'AC_SYS_LONG_FILE_NAMES',
            'AC_SYS_POSIX_TERMIOS',
            'AC_SYS_RESTARTABLE_SYSCALLS',
            'AC_SYS_SIGLIST_DECLARED',
            'AC_TEST_CPP',
            'AC_TEST_PROGRAM',
            'AC_TIME_WITH_SYS_TIME',
            'AC_TIMEZONE',
            'AC_TRY_ACT',
            'AC_TRY_COMPILE',
            'AC_TRY_CPP',
            'AC_TRY_LINK',
            'AC_TRY_LINK_FUNC',
            'AC_TRY_RUN',
            'AC_TYPE_GETGROUPS',
            'AC_TYPE_INT16_T',
            'AC_TYPE_INT32_T',
            'AC_TYPE_INT64_T',
            'AC_TYPE_INT8_T',
            'AC_TYPE_INTMAX_T',
            'AC_TYPE_INTPTR_T',
            'AC_TYPE_LONG_DOUBLE',
            'AC_TYPE_LONG_DOUBLE_WIDER',
            'AC_TYPE_LONG_LONG_INT',
            'AC_TYPE_MBSTATE_T',
            'AC_TYPE_MODE_T',
            'AC_TYPE_OFF_T',
            'AC_TYPE_PID_T',
            'AC_TYPE_SIGNAL',
            'AC_TYPE_SIZE_T',
            'AC_TYPE_SSIZE_T',
            'AC_TYPE_UID_T',
            'AC_TYPE_UINT16_T',
            'AC_TYPE_UINT32_T',
            'AC_TYPE_UINT64_T',
            'AC_TYPE_UINT8_T',
            'AC_TYPE_UINTMAX_T',
            'AC_TYPE_UINTPTR_T',
            'AC_TYPE_UNSIGNED_LONG_LONG_INT',
            'AC_UID_T',
            'AC_UNISTD_H',
            'AC_USE_SYSTEM_EXTENSIONS',
            'AC_USG',
            'AC_UTIME_NULL',
            'AC_VALIDATE_CACHED_SYSTEM_TUPLE',
            'AC_VERBOSE',
            'AC_VFORK',
            'AC_VPRINTF',
            'AC_WAIT3',
            'AC_WARN',
            'AC_WARNING',
            'AC_WITH',
            'AC_WORDS_BIGENDIAN',
            'AC_XENIX_DIR',
            'AC_YYTEXT_POINTER',
            'AH_BOTTOM',
            'AH_HEADER',
            'AH_TEMPLATE',
            'AH_TOP',
            'AH_VERBATIM',
            'AU_ALIAS',
            'AU_DEFUN'),
            ),
    'SYMBOLS' => array('(', ')', '[', ']', '!', '@', '%', '&', '*', '|', '/', '<', '>', ';;', '`'),
    'CASE_SENSITIVE' => array(
            GESHI_COMMENTS => false,
                1 => true,
                ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00ffff;',
            ),
        'COMMENTS' => array(
            1 => 'color: #666666;',
            2 => 'color: #339900;',
            3 => 'color: #666666;',
            'MULTI' => 'color: #ff0000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;',
            1 => 'color: #000099;',
            2 => 'color: #660099;',
            3 => 'color: #660099;',
            4 => 'color: #660099;',
            5 => 'color: #006699;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #008000;'
            ),
        'STRINGS' => array(
            0 => 'color: #996600;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;',
            2 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #000080;',
            2 => 'color: #000040;',
            3 => 'color: #000040;',
            4 => 'color: #008080;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '$'
            ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![\.\-a-zA-Z0-9_\$\#])",
            'DISALLOWED_AFTER' =>  "(?![\.\-a-zA-Z0-9_%\\/])"
            )
        )
);

?>