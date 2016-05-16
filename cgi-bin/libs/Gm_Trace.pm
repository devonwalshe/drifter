package Gm_Trace;

###############################################################################
# Greymatter 1.8.2                             
# Copyright (c)2000-2008, The Greymatter team 
# http://greymatterforum.proboards82.com/     
# By possessing this software, you agree not to hold the author responsible for 
# any problems that may arise from your installation or usage of Greymatter 
# itself,or from any content generated by yourself or others through the use of 
# this program.  You may freely modify and redistribute this program, so long
# as every copyright notice (including in this manual and in the Greymatter 
# code) remains fully intact.  Finally, you may not sell or in any way make
# a financial profit from this program, either in original or modified form.
# Your possession of this software signifies that you agree to these terms; 
# please delete your copy of this software if you don't agree to these terms.
# Original Creators Noah Grey
#
###############################################################################
#
# Created by  : Pete Finnigan - pete@petefinnigan.com - Mar 2007
# Maintainer  : Pete Finnigan - pete@petefinnigan.com
# Module Name : Gm_Trace:: 
# Description : This module implements asimple trace package to enable bug 
#               solution where it is hard to woirk out what GM was doing.
#               The package is very simple and includes only two external 
#               calls:
#
#               SetTrace - This call is used to define the location of the
#                          trace file if it is not set to the default for your
#                          own system. The default trace file location will
#                          be controlled by a configuration parameter in 
#                          future versions. Also the ability to trace GM will
#                          also become a coniguration parameter in future 
#                          releases so that trace intrumentation calls can be 
#                          added to GM but turned off via the admin function
#                          This may be done by allowing modification of the
#                          package via the admin screens to save having the 
#                          package need to use the config calls to read in
#                          parameters.
#               Trace    - This function prints out the trace message passed 
#                          to it, plus core information including:
#                              date_time
#                              level
# 

#
# Who	Date	Description
# ===	=====	=============
# PF	Mar 07	First Issue
#

# enables trace of GM when its all instrumented. levels / on/off can be set
# trace could be enabled by the user of gm and the trace file included with
# bug reports to aid fixing a bug

# -----------------------------------------------------------------------------
# TODO - Add new feature requirements
#
#   add caller() calls to print out the line, filename and sub name
# -----------------------------------------------------------------------------

# -----------------------------------------------------------------------------
# Set up the package
# -----------------------------------------------------------------------------

use strict;
use warnings;

use POSIX qw(strftime);
# -----------------------------------------------------------------------------
# Define trace parameters
# -----------------------------------------------------------------------------

my %trace = (
	trace_file_name  => '/xxxxxxx/trace.trc',
	trace_on         => 1,
	trace_file_level => 5,
);

# -----------------------------------------------------------------------------
# Public Functions
# -----------------------------------------------------------------------------

# -----------------------------------------------------------------------------
# Name        : TraceOn
# Parameters  : None
# Description : This function turns trace generation on dynamically
# -----------------------------------------------------------------------------

sub TraceOn
{
	_SetTrace(trace_on => 1);
}

# -----------------------------------------------------------------------------
# Name        : TraceOff
# Parameters  : None
# Description : This function turns off trace generation on dynamically
# -----------------------------------------------------------------------------

sub TraceOff
{
	_SetTrace(trace_on => 0);
}

# -----------------------------------------------------------------------------
# Trace
#    level = 1 - 5 to allow printing out of data set by the master level
#     
#    1 = Error
#    2 = function in / out
#    3 = program flow
#    4 = debug - including parameters
#
#    msg - The text to be printed in the trace file
# -----------------------------------------------------------------------------

sub Trace
{
	my (%params) = @_;
	my $level = $params{'level'};
	my $msg = $params{'msg'};
	my $date_time=strftime("%a, %d %b %Y %H:%M:%S %z",gmtime(time));
	if ($level)
	{
		if ($level <= $trace{trace_file_level})
		{
			if (open GMTRACE, ">>".$trace{trace_file_name})
			{
				print GMTRACE "$date_time" . ":$level:$msg" . "\n";
				close GMTRACE;
			}
		}
	}
	else
	{
		# if the level ommitted assume level 1 and print
		if (open GMTRACE, ">>".$trace{trace_file_name})
		{
			print GMTRACE "$date_time" . ":1:$msg" . "\n";
			close GMTRACE;
		}
	}
}


# -----------------------------------------------------------------------------
# Private Functions
# -----------------------------------------------------------------------------

# -----------------------------------------------------------------------------
# _SetTrace
#    trace_on = 1 turns trace on dynamically
#               0 turns trace off dynamically
#    trace_file_name = '{file location and name}' - if different to default
#    trace_file_level = 
# -----------------------------------------------------------------------------

sub _SetTrace
{
	my (%params) = (
		trace_file_name  => '/xxxxxxxx/trace.trc',
		trace_on         => 1,
		trace_file_level => 5,
		@_,	
	);
	if ($params{trace_on} == 1)
	{
		$trace{trace_on} = 1;	
	}
	else
	{
		$trace{trace_on} = 0;	
	}
	if ($params{trace_file_name} !~ '/xxxxxxxxxxx/trace.trc')
	{
		$trace{trace_file_name} = $params{trace_file_name};
	}
	if ($params{trace_file_level})
	{
		$trace{trace_file_level} = $params{trace_file_level};
	}
}


1;