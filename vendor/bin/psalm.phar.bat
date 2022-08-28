@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../psalm/phar/psalm.phar
php "%BIN_TARGET%" %*
