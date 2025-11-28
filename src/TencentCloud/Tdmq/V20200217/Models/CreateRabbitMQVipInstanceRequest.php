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
 * @method array getZoneIds() 获取可用区
 * @method void setZoneIds(array $ZoneIds) 设置可用区
 * @method string getVpcId() 获取私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录[私有网络](https://console.cloud.tencent.com/vpc/vpc?rid=1)控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录[私有网络](https://console.cloud.tencent.com/vpc/vpc?rid=1)控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
 * @method string getSubnetId() 获取私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录[子网控制台](https://console.cloud.tencent.com/vpc/subnet?rid=1)查询；也可以调用接口 [DescribeSubnets](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录[子网控制台](https://console.cloud.tencent.com/vpc/subnet?rid=1)查询；也可以调用接口 [DescribeSubnets](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNodeSpec() 获取集群的节点规格，需要输入对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
 * @method void setNodeSpec(string $NodeSpec) 设置集群的节点规格，需要输入对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
 * @method integer getNodeNum() 获取节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
 * @method void setNodeNum(integer $NodeNum) 设置节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
 * @method integer getStorageSize() 获取单节点存储规格,不传默认为200G
 * @method void setStorageSize(integer $StorageSize) 设置单节点存储规格,不传默认为200G
 * @method boolean getEnableCreateDefaultHaMirrorQueue() 获取是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false
 * @method void setEnableCreateDefaultHaMirrorQueue(boolean $EnableCreateDefaultHaMirrorQueue) 设置是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false
 * @method boolean getAutoRenewFlag() 获取仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true
 * @method integer getTimeSpan() 获取购买时长,不传默认为1(月)
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长,不传默认为1(月)
 * @method integer getPayMode() 获取付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
 * @method void setPayMode(integer $PayMode) 设置付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
 * @method string getClusterVersion() 获取集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7
 * @method boolean getIsIntl() 获取是否国际站请求，默认 false
 * @method void setIsIntl(boolean $IsIntl) 设置是否国际站请求，默认 false
 * @method array getResourceTags() 获取资源标签列表
 * @method void setResourceTags(array $ResourceTags) 设置资源标签列表
 * @method integer getBandwidth() 获取公网带宽大小，单位 Mbps
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽大小，单位 Mbps
 * @method boolean getEnablePublicAccess() 获取是否打开公网接入，不传默认为false
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) 设置是否打开公网接入，不传默认为false
 * @method boolean getEnableDeletionProtection() 获取是否打开集群删除保护，不传默认为 false
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否打开集群删除保护，不传默认为 false
 */
class CreateRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var array 可用区
     */
    public $ZoneIds;

    /**
     * @var string 私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录[私有网络](https://console.cloud.tencent.com/vpc/vpc?rid=1)控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录[子网控制台](https://console.cloud.tencent.com/vpc/subnet?rid=1)查询；也可以调用接口 [DescribeSubnets](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
     */
    public $SubnetId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群的节点规格，需要输入对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
     */
    public $NodeSpec;

    /**
     * @var integer 节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
     */
    public $NodeNum;

    /**
     * @var integer 单节点存储规格,不传默认为200G
     */
    public $StorageSize;

    /**
     * @var boolean 是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false
     */
    public $EnableCreateDefaultHaMirrorQueue;

    /**
     * @var boolean 仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true
     */
    public $AutoRenewFlag;

    /**
     * @var integer 购买时长,不传默认为1(月)
     */
    public $TimeSpan;

    /**
     * @var integer 付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
     */
    public $PayMode;

    /**
     * @var string 集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7
     */
    public $ClusterVersion;

    /**
     * @var boolean 是否国际站请求，默认 false
     */
    public $IsIntl;

    /**
     * @var array 资源标签列表
     */
    public $ResourceTags;

    /**
     * @var integer 公网带宽大小，单位 Mbps
     */
    public $Bandwidth;

    /**
     * @var boolean 是否打开公网接入，不传默认为false
     */
    public $EnablePublicAccess;

    /**
     * @var boolean 是否打开集群删除保护，不传默认为 false
     */
    public $EnableDeletionProtection;

    /**
     * @param array $ZoneIds 可用区
     * @param string $VpcId 私有网络ID，形如 vpc-xxx。有效的 VpcId 可通过登录[私有网络](https://console.cloud.tencent.com/vpc/vpc?rid=1)控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)，从接口返回中的 unVpcId 字段获取。若在创建子机时 VpcId 与 SubnetId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
     * @param string $SubnetId 私有网络子网 ID，形如 subnet-xxx。有效的私有网络子网 ID 可通过登录[子网控制台](https://console.cloud.tencent.com/vpc/subnet?rid=1)查询；也可以调用接口 [DescribeSubnets](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的 unSubnetId 字段获取。若在创建子机时 SubnetId 与 VpcId 同时传入 DEFAULT，则强制使用默认 vpc 网络。
     * @param string $ClusterName 集群名称
     * @param string $NodeSpec 集群的节点规格，需要输入对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
     * @param integer $NodeNum 节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
     * @param integer $StorageSize 单节点存储规格,不传默认为200G
     * @param boolean $EnableCreateDefaultHaMirrorQueue 是否开启默认镜像队列，true 表示为开启，false 表示为不开启。不传默认为 false
     * @param boolean $AutoRenewFlag 仅预付费集群（PayMode 参数为 1 时）使用该参数，表示是否自动续费，true 表示打开自动续费。不传默认为 true
     * @param integer $TimeSpan 购买时长,不传默认为1(月)
     * @param integer $PayMode 付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
     * @param string $ClusterVersion 集群版本，不传默认为 3.8.30，可选值为 3.8.30、3.11.8和3.13.7
     * @param boolean $IsIntl 是否国际站请求，默认 false
     * @param array $ResourceTags 资源标签列表
     * @param integer $Bandwidth 公网带宽大小，单位 Mbps
     * @param boolean $EnablePublicAccess 是否打开公网接入，不传默认为false
     * @param boolean $EnableDeletionProtection 是否打开集群删除保护，不传默认为 false
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
    }
}
