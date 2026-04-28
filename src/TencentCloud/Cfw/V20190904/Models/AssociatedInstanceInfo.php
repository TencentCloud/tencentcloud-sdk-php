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
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getType() 获取<p>实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库</p>
 * @method void setType(integer $Type) 设置<p>实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库</p>
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getVpcName() 获取<p>私有网络名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>私有网络名称</p>
 * @method string getPublicIp() 获取<p>公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
 * @method string getIp() 获取<p>内网IP</p>
 * @method void setIp(string $Ip) 设置<p>内网IP</p>
 * @method integer getSecurityGroupCount() 获取<p>关联安全组数量</p>
 * @method void setSecurityGroupCount(integer $SecurityGroupCount) 设置<p>关联安全组数量</p>
 * @method integer getSecurityGroupRuleCount() 获取<p>关联安全组规则数量</p>
 * @method void setSecurityGroupRuleCount(integer $SecurityGroupRuleCount) 设置<p>关联安全组规则数量</p>
 * @method string getCdbId() 获取<p>关联数据库代理Id</p>
 * @method void setCdbId(string $CdbId) 设置<p>关联数据库代理Id</p>
 * @method string getTkeClusterId() 获取<p>容器服务集群ID</p>
 * @method void setTkeClusterId(string $TkeClusterId) 设置<p>容器服务集群ID</p>
 */
class AssociatedInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库</p>
     */
    public $Type;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>关联安全组数量</p>
     */
    public $SecurityGroupCount;

    /**
     * @var integer <p>关联安全组规则数量</p>
     */
    public $SecurityGroupRuleCount;

    /**
     * @var string <p>关联数据库代理Id</p>
     */
    public $CdbId;

    /**
     * @var string <p>容器服务集群ID</p>
     */
    public $TkeClusterId;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $Type <p>实例类型，3是cvm实例,4是clb实例,5是eni实例,6是云数据库</p>
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $VpcName <p>私有网络名称</p>
     * @param string $PublicIp <p>公网IP</p>
     * @param string $Ip <p>内网IP</p>
     * @param integer $SecurityGroupCount <p>关联安全组数量</p>
     * @param integer $SecurityGroupRuleCount <p>关联安全组规则数量</p>
     * @param string $CdbId <p>关联数据库代理Id</p>
     * @param string $TkeClusterId <p>容器服务集群ID</p>
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

        if (array_key_exists("TkeClusterId",$param) and $param["TkeClusterId"] !== null) {
            $this->TkeClusterId = $param["TkeClusterId"];
        }
    }
}
