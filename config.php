<?php
/*
 * SPDX-License-Identifier: AGPL-3.0-only
 * SPDX-FileCopyrightText: Copyright 2016 - 2018 Kopano b.v.
 * SPDX-FileCopyrightText: Copyright 2020 grammm GmbH
 *
 * Configuration file for GrammmDAV.
 */

define('MAPI_SERVER', 'default:');

// Authentication realm
define('SABRE_AUTH_REALM', 'grammm dav');

// Location of the SabreDAV server.
define('DAV_ROOT_URI', '/dav/');

// Location of the sync database (PDO syntax)
define('SYNC_DB', 'sqlite:/var/lib/grammm-dav/syncstate.db');

// Number of items to send in one request.
define('MAX_SYNC_ITEMS', 1000);

// Developer mode: verifies log messages
define('DEVELOPER_MODE', true);

// FIXME: solve the including of shared files properly
// Defines the path to shared gromox files
define('GROMOX_PHP_PATH', '/usr/share/gromox/http/php/');
