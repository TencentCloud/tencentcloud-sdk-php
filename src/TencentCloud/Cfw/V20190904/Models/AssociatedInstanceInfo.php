<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业安全组关联实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getType() 获取实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库
 * @method void setType(integer $Type) 设置实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getIp() 获取内网IP
 * @method void setIp(string $Ip) 设置内网IP
 * @method integer getSecurityGroupCount() 获取关联安全组数量
 * @method void setSecurityGroupCount(integer $SecurityGroupCount) 设置关联安全组数量
 * @method integer getSecurityGroupRuleCount() 获取关联安全组规则数量
 * @method void setSecurityGroupRuleCount(integer $SecurityGroupRuleCount) 设置关联安全组规则数量
 * @method string getCdbId() 获取关联数据库代理Id
 * @method void setCdbId(string $CdbId) 设置关联数据库代理Id
 */
class AssociatedInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库
     */
    public $Type;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $Ip;

    /**
     * @var integer 关联安全组数量
     */
    public $SecurityGroupCount;

    /**
     * @var integer 关联安全组规则数量
     */
    public $SecurityGroupRuleCount;

    /**
     * @var string 关联数据库代理Id
     */
    public $CdbId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $Type 实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param string $PublicIp 公网IP
     * @param string $Ip 内网IP
     * @param integer $SecurityGroupCount 关联安全组数量
     * @param integer $SecurityGroupRuleCount 关联安全组规则数量
     * @param string $CdbId 关联数据库代理Id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("SecurityGroupCount",$param) and $param["SecurityGroupCount"] !== null) {
            $this->SecurityGroupCount = $param["SecurityGroupCount"];
        }

        if (array_key_exists("SecurityGroupRuleCount",$param) and $param["SecurityGroupRuleCount"] !== null) {
            $this->SecurityGroupRuleCount = $param["SecurityGroupRuleCount"];
        }

        if (array_key_exists("CdbId",$param) and $param["CdbId"] !== null) {
            $this->CdbId = $param["CdbId"];
        }
    }
}
