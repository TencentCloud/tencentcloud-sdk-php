<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私网网关转发规则匹配ACL
 *
 * @method string getProtocol() 获取ACL协议类型，可选值:"ALL","TCP","UDP"
 * @method void setProtocol(string $Protocol) 设置ACL协议类型，可选值:"ALL","TCP","UDP"
 * @method string getSourcePort() 获取源端口。
 * @method void setSourcePort(string $SourcePort) 设置源端口。
 * @method string getSourceCidr() 获取源地址。支持`ip`或`cidr`格式"xxx.xxx.xxx.000/xx"
 * @method void setSourceCidr(string $SourceCidr) 设置源地址。支持`ip`或`cidr`格式"xxx.xxx.xxx.000/xx"
 * @method string getDestinationPort() 获取目的端口。
 * @method void setDestinationPort(string $DestinationPort) 设置目的端口。
 * @method string getDestinationCidr() 获取目的地址。
 * @method void setDestinationCidr(string $DestinationCidr) 设置目的地址。
 * @method integer getAclRuleId() 获取ACL规则`ID`。
 * @method void setAclRuleId(integer $AclRuleId) 设置ACL规则`ID`。
 * @method integer getAction() 获取是否匹配。
 * @method void setAction(integer $Action) 设置是否匹配。
 * @method string getDescription() 获取ACL规则描述
 * @method void setDescription(string $Description) 设置ACL规则描述
 */
class TranslationAclRule extends AbstractModel
{
    /**
     * @var string ACL协议类型，可选值:"ALL","TCP","UDP"
     */
    public $Protocol;

    /**
     * @var string 源端口。
     */
    public $SourcePort;

    /**
     * @var string 源地址。支持`ip`或`cidr`格式"xxx.xxx.xxx.000/xx"
     */
    public $SourceCidr;

    /**
     * @var string 目的端口。
     */
    public $DestinationPort;

    /**
     * @var string 目的地址。
     */
    public $DestinationCidr;

    /**
     * @var integer ACL规则`ID`。
     */
    public $AclRuleId;

    /**
     * @var integer 是否匹配。
     */
    public $Action;

    /**
     * @var string ACL规则描述
     */
    public $Description;

    /**
     * @param string $Protocol ACL协议类型，可选值:"ALL","TCP","UDP"
     * @param string $SourcePort 源端口。
     * @param string $SourceCidr 源地址。支持`ip`或`cidr`格式"xxx.xxx.xxx.000/xx"
     * @param string $DestinationPort 目的端口。
     * @param string $DestinationCidr 目的地址。
     * @param integer $AclRuleId ACL规则`ID`。
     * @param integer $Action 是否匹配。
     * @param string $Description ACL规则描述
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("DestinationPort",$param) and $param["DestinationPort"] !== null) {
            $this->DestinationPort = $param["DestinationPort"];
        }

        if (array_key_exists("DestinationCidr",$param) and $param["DestinationCidr"] !== null) {
            $this->DestinationCidr = $param["DestinationCidr"];
        }

        if (array_key_exists("AclRuleId",$param) and $param["AclRuleId"] !== null) {
            $this->AclRuleId = $param["AclRuleId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
