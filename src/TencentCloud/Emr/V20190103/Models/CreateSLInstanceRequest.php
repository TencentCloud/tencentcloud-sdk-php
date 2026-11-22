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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSLInstance请求参数结构体
 *
 * @method integer getDiskSize() 获取<p>实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。</p>
 * @method string getDiskType() 获取<p>实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。</p>
 * @method void setDiskType(string $DiskType) 设置<p>实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getNodeType() 获取<p>实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。</p>
 * @method void setNodeType(string $NodeType) 设置<p>实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。</p>
 * @method integer getPayMode() 获取<p>实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。</p>
 * @method void setPayMode(integer $PayMode) 设置<p>实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。</p>
 * @method array getZoneSettings() 获取<p>实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。</p>
 * @method void setZoneSettings(array $ZoneSettings) 设置<p>实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。</p>
 * @method string getClientToken() 获取<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method string getDeploymentMode() 获取<p>部署模式</p>
 * @method void setDeploymentMode(string $DeploymentMode) 设置<p>部署模式</p>
 * @method boolean getEnablePublicIP() 获取<p>是否开启公网 IP 访问，默认 false。TCBase 开启后会创建并绑定 EIP；内网 CLB 绑定 EIP 后，CLB 安全组对来自 EIP 的流量不生效，对来自内网 CLB 的流量生效。</p>
 * @method void setEnablePublicIP(boolean $EnablePublicIP) 设置<p>是否开启公网 IP 访问，默认 false。TCBase 开启后会创建并绑定 EIP；内网 CLB 绑定 EIP 后，CLB 安全组对来自 EIP 的流量不生效，对来自内网 CLB 的流量生效。</p>
 * @method PrePaySetting getPrePaySetting() 获取<p>预付费参数</p>
 * @method void setPrePaySetting(PrePaySetting $PrePaySetting) 设置<p>预付费参数</p>
 * @method array getSecurityGroupIds() 获取<p>TCBase 实例 CLB 绑定的安全组 ID 列表，形如 sg-xxxxxxxx，可通过 DescribeSecurityGroups 获取。绑定后管控侧会尝试补充 TCP 80、5432、5433 入站放通规则。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>TCBase 实例 CLB 绑定的安全组 ID 列表，形如 sg-xxxxxxxx，可通过 DescribeSecurityGroups 获取。绑定后管控侧会尝试补充 TCP 80、5432、5433 入站放通规则。</p>
 * @method array getTags() 获取<p>实例要绑定的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>实例要绑定的标签列表。</p>
 * @method boolean getTerminateProtection() 获取<p>是否开启实例销毁保护，默认 false；true 表示开启，开启后不允许销毁实例。</p>
 * @method void setTerminateProtection(boolean $TerminateProtection) 设置<p>是否开启实例销毁保护，默认 false；true 表示开启，开启后不允许销毁实例。</p>
 * @method string getUserName() 获取<p>服务用户名，对不需要用户名的服务不用传，8-16个字符，支持大写字母、小写字母、数字</p>
 * @method void setUserName(string $UserName) 设置<p>服务用户名，对不需要用户名的服务不用传，8-16个字符，支持大写字母、小写字母、数字</p>
 */
class CreateSLInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。</p>
     */
    public $DiskType;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。</p>
     */
    public $NodeType;

    /**
     * @var integer <p>实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。</p>
     */
    public $PayMode;

    /**
     * @var array <p>实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。</p>
     */
    public $ZoneSettings;

    /**
     * @var string <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     */
    public $ClientToken;

    /**
     * @var string <p>部署模式</p>
     */
    public $DeploymentMode;

    /**
     * @var boolean <p>是否开启公网 IP 访问，默认 false。TCBase 开启后会创建并绑定 EIP；内网 CLB 绑定 EIP 后，CLB 安全组对来自 EIP 的流量不生效，对来自内网 CLB 的流量生效。</p>
     */
    public $EnablePublicIP;

    /**
     * @var PrePaySetting <p>预付费参数</p>
     */
    public $PrePaySetting;

    /**
     * @var array <p>TCBase 实例 CLB 绑定的安全组 ID 列表，形如 sg-xxxxxxxx，可通过 DescribeSecurityGroups 获取。绑定后管控侧会尝试补充 TCP 80、5432、5433 入站放通规则。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>实例要绑定的标签列表。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启实例销毁保护，默认 false；true 表示开启，开启后不允许销毁实例。</p>
     */
    public $TerminateProtection;

    /**
     * @var string <p>服务用户名，对不需要用户名的服务不用传，8-16个字符，支持大写字母、小写字母、数字</p>
     */
    public $UserName;

    /**
     * @param integer $DiskSize <p>实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。</p>
     * @param string $DiskType <p>实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $NodeType <p>实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。</p>
     * @param integer $PayMode <p>实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。</p>
     * @param array $ZoneSettings <p>实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。</p>
     * @param string $ClientToken <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     * @param string $DeploymentMode <p>部署模式</p>
     * @param boolean $EnablePublicIP <p>是否开启公网 IP 访问，默认 false。TCBase 开启后会创建并绑定 EIP；内网 CLB 绑定 EIP 后，CLB 安全组对来自 EIP 的流量不生效，对来自内网 CLB 的流量生效。</p>
     * @param PrePaySetting $PrePaySetting <p>预付费参数</p>
     * @param array $SecurityGroupIds <p>TCBase 实例 CLB 绑定的安全组 ID 列表，形如 sg-xxxxxxxx，可通过 DescribeSecurityGroups 获取。绑定后管控侧会尝试补充 TCP 80、5432、5433 入站放通规则。</p>
     * @param array $Tags <p>实例要绑定的标签列表。</p>
     * @param boolean $TerminateProtection <p>是否开启实例销毁保护，默认 false；true 表示开启，开启后不允许销毁实例。</p>
     * @param string $UserName <p>服务用户名，对不需要用户名的服务不用传，8-16个字符，支持大写字母、小写字母、数字</p>
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeploymentMode",$param) and $param["DeploymentMode"] !== null) {
            $this->DeploymentMode = $param["DeploymentMode"];
        }

        if (array_key_exists("EnablePublicIP",$param) and $param["EnablePublicIP"] !== null) {
            $this->EnablePublicIP = $param["EnablePublicIP"];
        }

        if (array_key_exists("PrePaySetting",$param) and $param["PrePaySetting"] !== null) {
            $this->PrePaySetting = new PrePaySetting();
            $this->PrePaySetting->deserialize($param["PrePaySetting"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TerminateProtection",$param) and $param["TerminateProtection"] !== null) {
            $this->TerminateProtection = $param["TerminateProtection"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
