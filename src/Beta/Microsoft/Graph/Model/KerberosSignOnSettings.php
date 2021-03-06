<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KerberosSignOnSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* KerberosSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KerberosSignOnSettings extends Entity
{
    /**
    * Gets the KerberosServicePrincipalName
    *
    * @return string The KerberosServicePrincipalName
    */
    public function getKerberosServicePrincipalName()
    {
        if (array_key_exists("kerberosServicePrincipalName", $this->_propDict)) {
            return $this->_propDict["kerberosServicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the KerberosServicePrincipalName
    *
    * @param string $val The value of the KerberosServicePrincipalName
    *
    * @return KerberosSignOnSettings
    */
    public function setKerberosServicePrincipalName($val)
    {
        $this->_propDict["kerberosServicePrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the KerberosSignOnMappingAttributeType
    *
    * @return KerberosSignOnMappingAttributeType The KerberosSignOnMappingAttributeType
    */
    public function getKerberosSignOnMappingAttributeType()
    {
        if (array_key_exists("kerberosSignOnMappingAttributeType", $this->_propDict)) {
            if (is_a($this->_propDict["kerberosSignOnMappingAttributeType"], "Beta\Microsoft\Graph\Model\KerberosSignOnMappingAttributeType")) {
                return $this->_propDict["kerberosSignOnMappingAttributeType"];
            } else {
                $this->_propDict["kerberosSignOnMappingAttributeType"] = new KerberosSignOnMappingAttributeType($this->_propDict["kerberosSignOnMappingAttributeType"]);
                return $this->_propDict["kerberosSignOnMappingAttributeType"];
            }
        }
        return null;
    }

    /**
    * Sets the KerberosSignOnMappingAttributeType
    *
    * @param KerberosSignOnMappingAttributeType $val The value to assign to the KerberosSignOnMappingAttributeType
    *
    * @return KerberosSignOnSettings The KerberosSignOnSettings
    */
    public function setKerberosSignOnMappingAttributeType($val)
    {
        $this->_propDict["KerberosSignOnMappingAttributeType"] = $val;
         return $this;
    }
}
