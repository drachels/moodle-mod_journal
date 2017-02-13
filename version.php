<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Only when master becomes a stable the version value will be changed for
// the current date. Otherwise we just increase the last NN by one.

$plugin->component = 'mod_journal';
$plugin->version  = 2017021300;
$plugin->requires = 2016120500;  // Moodle 3.2
$plugin->release = '32.0 (Build: 2016062800)';
$plugin->maturity = MATURITY_STABLE;
$plugin->cron     = 60;
