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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVipInstance请求参数结构体
 *
 * @method array getZoneIds() 获取<p>可用区</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区</p>
 * @method string getVpcId() 获取<p>私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">私有网络</a>控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a>，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">私有网络</a>控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a>，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
 * @method string getSubnetId() 获取<p>私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">子网控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">子网控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getNodeSpec() 获取<p>集群的节点规格，需要输入对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
 * @method void setNodeSpec(string $NodeSpec) 设置<p>集群的节点规格，需要输入对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
 * @method integer getNodeNum() 获取<p>节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3</p>
 * @method integer getStorageSize() 获取<p>单节点存储规格,不传默认为200G</p>
 * @method void setStorageSize(integer $StorageSize) 设置<p>单节点存储规格,不传默认为200G</p>
 * @method boolean getEnableCreateDefaultHaMirrorQueue() 获取<p>是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false。该参数对4.x集群不生效。</p>
 * @method void setEnableCreateDefaultHaMirrorQueue(boolean $EnableCreateDefaultHaMirrorQueue) 设置<p>是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false。该参数对4.x集群不生效。</p>
 * @method boolean getAutoRenewFlag() 获取<p>仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true</p>
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置<p>仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true</p>
 * @method integer getTimeSpan() 获取<p>购买时长,不传默认为1(月)</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长,不传默认为1(月)</p>
 * @method integer getPayMode() 获取<p>付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月</p>
 * @method string getClusterVersion() 获取<p>集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7</p>
 * @method boolean getIsIntl() 获取<p>是否国际站请求，默认 false</p>
 * @method void setIsIntl(boolean $IsIntl) 设置<p>是否国际站请求，默认 false</p>
 * @method array getResourceTags() 获取<p>资源标签列表</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>资源标签列表</p>
 * @method integer getBandwidth() 获取<p>公网带宽大小，单位 Mbps</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>公网带宽大小，单位 Mbps</p>
 * @method boolean getEnablePublicAccess() 获取<p>是否打开公网接入，不传默认为false</p>
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) 设置<p>是否打开公网接入，不传默认为false</p>
 * @method boolean getEnableDeletionProtection() 获取<p>是否打开集群删除保护，不传默认为 false</p>
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置<p>是否打开集群删除保护，不传默认为 false</p>
 * @method string getClusterType() 获取<p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
 * @method string getCdcClusterId() 获取<p>CDC 集群 ID</p>
 * @method void setCdcClusterId(string $CdcClusterId) 设置<p>CDC 集群 ID</p>
 */
class CreateRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var array <p>可用区</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">私有网络</a>控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a>，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">子网控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群的节点规格，需要输入对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
     */
    public $NodeSpec;

    /**
     * @var integer <p>节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3</p>
     */
    public $NodeNum;

    /**
     * @var integer <p>单节点存储规格,不传默认为200G</p>
     */
    public $StorageSize;

    /**
     * @var boolean <p>是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false。该参数对4.x集群不生效。</p>
     */
    public $EnableCreateDefaultHaMirrorQueue;

    /**
     * @var boolean <p>仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>购买时长,不传默认为1(月)</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月</p>
     */
    public $PayMode;

    /**
     * @var string <p>集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7</p>
     */
    public $ClusterVersion;

    /**
     * @var boolean <p>是否国际站请求，默认 false</p>
     */
    public $IsIntl;

    /**
     * @var array <p>资源标签列表</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>公网带宽大小，单位 Mbps</p>
     */
    public $Bandwidth;

    /**
     * @var boolean <p>是否打开公网接入，不传默认为false</p>
     */
    public $EnablePublicAccess;

    /**
     * @var boolean <p>是否打开集群删除保护，不传默认为 false</p>
     */
    public $EnableDeletionProtection;

    /**
     * @var string <p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
     */
    public $ClusterType;

    /**
     * @var string <p>CDC 集群 ID</p>
     */
    public $CdcClusterId;

    /**
     * @param array $ZoneIds <p>可用区</p>
     * @param string $VpcId <p>私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">私有网络</a>控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a>，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
     * @param string $SubnetId <p>私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">子网控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $NodeSpec <p>集群的节点规格，需要输入对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
     * @param integer $NodeNum <p>节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3</p>
     * @param integer $StorageSize <p>单节点存储规格,不传默认为200G</p>
     * @param boolean $EnableCreateDefaultHaMirrorQueue <p>是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false。该参数对4.x集群不生效。</p>
     * @param boolean $AutoRenewFlag <p>仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true</p>
     * @param integer $TimeSpan <p>购买时长,不传默认为1(月)</p>
     * @param integer $PayMode <p>付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月</p>
     * @param string $ClusterVersion <p>集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7</p>
     * @param boolean $IsIntl <p>是否国际站请求，默认 false</p>
     * @param array $ResourceTags <p>资源标签列表</p>
     * @param integer $Bandwidth <p>公网带宽大小，单位 Mbps</p>
     * @param boolean $EnablePublicAccess <p>是否打开公网接入，不传默认为false</p>
     * @param boolean $EnableDeletionProtection <p>是否打开集群删除保护，不传默认为 false</p>
     * @param string $ClusterType <p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
     * @param string $CdcClusterId <p>CDC 集群 ID</p>
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeSpec",$param) and $param["NodeSpec"] !== null) {
            $this->NodeSpec = $param["NodeSpec"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("EnableCreateDefaultHaMirrorQueue",$param) and $param["EnableCreateDefaultHaMirrorQueue"] !== null) {
            $this->EnableCreateDefaultHaMirrorQueue = $param["EnableCreateDefaultHaMirrorQueue"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("IsIntl",$param) and $param["IsIntl"] !== null) {
            $this->IsIntl = $param["IsIntl"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("EnablePublicAccess",$param) and $param["EnablePublicAccess"] !== null) {
            $this->EnablePublicAccess = $param["EnablePublicAccess"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("CdcClusterId",$param) and $param["CdcClusterId"] !== null) {
            $this->CdcClusterId = $param["CdcClusterId"];
        }
    }
}
