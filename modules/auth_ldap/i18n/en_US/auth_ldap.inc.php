<?php

// Please, do not edit this file !
// If you would like to help translating TBG,
// please visit https://www.transifex.com/projects/p/tbg

// Number of Sections: 3
// Number of Strings: 63
// Keys extracted from sources on: 2014 Sep 30.
// Translations extracted from Transifex on: 

// First occurrence is in: Actions.php
// ----------------------------------------------------------------------------
  $strings['Failed to connect to server'] = 'Failed to connect to server';
  $strings['Search failed:'] = 'Search failed:';
  $strings['Failed to validate groups'] = 'Failed to validate groups';
  $strings['HTTP Authentication Header not present'] = 'HTTP Authentication Header not present';
  $strings['Connection test successful. HTTP integrated authentication states your username is "USER"'] = 'Connection test successful. HTTP integrated authentication states your username is "USER"';
  $strings['Connection test successful'] = 'Connection test successful';
  $strings["Some of the groups you specified don't exist"] = "Some of the groups you specified don't exist";
  $strings['The following groups for the group restriction could not be found: %groups'] = 'The following groups for the group restriction could not be found: %groups';
  $strings['Pruning failed'] = 'Pruning failed';
  $strings['Pruning successful! %del users deleted'] = 'Pruning successful! %del users deleted';
  $strings['Import failed'] = 'Import failed';
  $strings['Import successful! %imp users imported, %upd users updated from LDAP'] = 'Import successful! %imp users imported, %upd users updated from LDAP';

// First occurrence is in: Auth_ldap.php
// ----------------------------------------------------------------------------
  $strings['Failed to bind:'] = 'Failed to bind:';
  $strings['User does not exist in the directory'] = 'User does not exist in the directory';
  $strings['This user was found multiple times in the directory, please contact your admimistrator'] = 'This user was found multiple times in the directory, please contact your admimistrator';
  $strings['Search failed'] = 'Search failed';
  $strings['You are not a member of a group allowed to log in'] = 'You are not a member of a group allowed to log in';
  $strings['Your password was not accepted by the server'] = 'Your password was not accepted by the server';
  $strings['HTTP authentication internal error.'] = 'HTTP authentication internal error.';
  $strings['HTTP integrated authentication is enabled but the HTTP header has not been provided by the web server.'] = 'HTTP integrated authentication is enabled but the HTTP header has not been provided by the web server.';

// First occurrence is in: templates/_settings.inc.php
// ----------------------------------------------------------------------------
  $strings['Use this page to set up the connection details for your LDAP or Active Directory server. It is highly recommended that you read the online help before use, as misconfiguration may prevent you from accessing configuration pages to rectify issues.'] = 'Use this page to set up the connection details for your LDAP or Active Directory server. It is highly recommended that you read the online help before use, as misconfiguration may prevent you from accessing configuration pages to rectify issues.';
  $strings['View the online documentation'] = 'View the online documentation';
  $strings['LDAP support is not installed'] = 'LDAP support is not installed';
  $strings['The PHP LDAP extension is required to use this functionality. As this module is not installed, all functionality on this page has been disabled.'] = 'The PHP LDAP extension is required to use this functionality. As this module is not installed, all functionality on this page has been disabled.';
  $strings['Important information'] = 'Important information';
  $strings['When you enable LDAP as your authentication backend in Authentication configuration, you will lose access to all accounts which do not also exist in the LDAP database. This may mean you lose administrative access.'] = 'When you enable LDAP as your authentication backend in Authentication configuration, you will lose access to all accounts which do not also exist in the LDAP database. This may mean you lose administrative access.';
  $strings['To resolve this issue, either import all users using the tool on this page and make one an administrator using Users configuration, or create a user with the same username as one in LDAP and make that one an administrator.'] = 'To resolve this issue, either import all users using the tool on this page and make one an administrator using Users configuration, or create a user with the same username as one in LDAP and make that one an administrator.';
  $strings['Connection details'] = 'Connection details';
  $strings['Hostname'] = 'Hostname';
  $strings['Use URL syntax (ldap://hostname:port). If your server requires SSL, use ldaps://hostname/ in this field.'] = 'Use URL syntax (ldap://hostname:port). If your server requires SSL, use ldaps://hostname/ in this field.';
  $strings['Base DN'] = 'Base DN';
  $strings['This should be the DN string for an OU where all user and group OUs can be found. For example, DC=ldap,DC=example,DC=com.'] = 'This should be the DN string for an OU where all user and group OUs can be found. For example, DC=ldap,DC=example,DC=com.';
  $strings['Object DN attribute'] = 'Object DN attribute';
  $strings['Enter the name of the property containing the distinguished name of an object. On Linux systems this may be entrydn (which is the default value if this is left blank), on Active Directory it is distinguishedName.'] = 'Enter the name of the property containing the distinguished name of an object. On Linux systems this may be entrydn (which is the default value if this is left blank), on Active Directory it is distinguishedName.';
  $strings['User class'] = 'User class';
  $strings['Enter the value to check for in objectClass for users. Leave blank to use the default of person'] = 'Enter the value to check for in objectClass for users. Leave blank to use the default of person';
  $strings['Username attribute'] = 'Username attribute';
  $strings['This field should contain the name of the attribute where the username is stored, such as uid.'] = 'This field should contain the name of the attribute where the username is stored, such as uid.';
  $strings['Full name attribute'] = 'Full name attribute';
  $strings['Given name attribute'] = 'Given name attribute';
  $strings['Email address attribute'] = 'Email address attribute';
  $strings['Group class'] = 'Group class';
  $strings['Enter the value to check for in objectClass for groups. Leave blank to use the default of group'] = 'Enter the value to check for in objectClass for groups. Leave blank to use the default of group';
  $strings['Group members attribute'] = 'Group members attribute';
  $strings['This field should contain the name of the attribute where the list of members of a group is stored, such as uniqueMember.'] = 'This field should contain the name of the attribute where the list of members of a group is stored, such as uniqueMember.';
  $strings['Allowed groups'] = 'Allowed groups';
  $strings['You may wish to restrict access to users who belong to certain groups in LDAP. If so, write a comma separated list of group names here. Leave blank to disable this feature.'] = 'You may wish to restrict access to users who belong to certain groups in LDAP. If so, write a comma separated list of group names here. Leave blank to disable this feature.';
  $strings['Control username'] = 'Control username';
  $strings['Control user password'] = 'Control user password';
  $strings['Please insert the authentication details for a user who can access all LDAP records. Only read only access is necessary, and for an anonyous bind leave this blank.'] = 'Please insert the authentication details for a user who can access all LDAP records. Only read only access is necessary, and for an anonyous bind leave this blank.';
  $strings['Use HTTP Integrated Authentication'] = 'Use HTTP Integrated Authentication';
  $strings['Activate to enabled automatic user login using HTTP integrated authentication. This requires your web server to be authenticating the user (e.g. HTTP Basic Authentication, Kerberos etc).'] = 'Activate to enabled automatic user login using HTTP integrated authentication. This requires your web server to be authenticating the user (e.g. HTTP Basic Authentication, Kerberos etc).';
  $strings['HTTP header field'] = 'HTTP header field';
  $strings['If using HTTP integrated authentication specify the HTTP header field that will contain the user name.'] = 'If using HTTP integrated authentication specify the HTTP header field that will contain the user name.';
  $strings['Click "%save" to save the settings'] = 'Click "%save" to save the settings';
  $strings['Save'] = 'Save';
  $strings['Test connection'] = 'Test connection';
  $strings['After configuring and saving your connection settings, you should test your connection to the LDAP server. This test does not check whether the DN and attributes can allow The Bug Genie to correctly find users, but it will give an indication if The Bug Genie can talk to your LDAP server, and if any groups you specify exist. If HTTP integrated authentication is enabled, this will also test that your web server is providing the REMOTE_USER header.'] = 'After configuring and saving your connection settings, you should test your connection to the LDAP server. This test does not check whether the DN and attributes can allow The Bug Genie to correctly find users, but it will give an indication if The Bug Genie can talk to your LDAP server, and if any groups you specify exist. If HTTP integrated authentication is enabled, this will also test that your web server is providing the REMOTE_USER header.';
  $strings['Import all users'] = 'Import all users';
  $strings['You can import all users who can log in from LDAP into The Bug Genie with this tool. This will not let them log in without switching to LDAP Authentication. We recomemnd you do this before switching over, and make at least one of the new users an administrator. Already existing users with the same username will be updated.'] = 'You can import all users who can log in from LDAP into The Bug Genie with this tool. This will not let them log in without switching to LDAP Authentication. We recomemnd you do this before switching over, and make at least one of the new users an administrator. Already existing users with the same username will be updated.';
  $strings['Import users'] = 'Import users';
  $strings['Prune users'] = 'Prune users';
  $strings['To remove the data from The Bug Genie of users who can no longer log in via LDAP, run this tool. These users would not be able to log in anyway, but it will keep your user list clean. The guest user is not affected, but it may affect your current user - if this is deleted you will be logged out.'] = 'To remove the data from The Bug Genie of users who can no longer log in via LDAP, run this tool. These users would not be able to log in anyway, but it will keep your user list clean. The guest user is not affected, but it may affect your current user - if this is deleted you will be logged out.';
