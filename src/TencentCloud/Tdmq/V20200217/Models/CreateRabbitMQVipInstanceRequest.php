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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVipInstance请求参数结构体
 *
 * @method array getZoneIds() 获取可用区
 * @method void setZoneIds(array $ZoneIds) 设置可用区
 * @method string getVpcId() 获取私有网络VpcId
 * @method void setVpcId(string $VpcId) 设置私有网络VpcId
 * @method string getSubnetId() 获取私有网络SubnetId
 * @method void setSubnetId(string $SubnetId) 设置私有网络SubnetId
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNodeSpec() 获取节点规格,基础型rabbit-vip-basic-1,标准型rabbit-vip-basic-2,高阶1型rabbit-vip-basic-3,高阶2型rabbit-vip-basic-4。不传默认为基础型
 * @method void setNodeSpec(string $NodeSpec) 设置节点规格,基础型rabbit-vip-basic-1,标准型rabbit-vip-basic-2,高阶1型rabbit-vip-basic-3,高阶2型rabbit-vip-basic-4。不传默认为基础型
 * @method integer getNodeNum() 获取节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
 * @method void setNodeNum(integer $NodeNum) 设置节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
 * @method integer getStorageSize() 获取单节点存储规格,不传默认为200G
 * @method void setStorageSize(integer $StorageSize) 设置单节点存储规格,不传默认为200G
 * @method boolean getEnableCreateDefaultHaMirrorQueue() 获取镜像队列,不传默认为false
 * @method void setEnableCreateDefaultHaMirrorQueue(boolean $EnableCreateDefaultHaMirrorQueue) 设置镜像队列,不传默认为false
 * @method boolean getAutoRenewFlag() 获取预付费使用。自动续费,不传默认为true
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置预付费使用。自动续费,不传默认为true
 * @method integer getTimeSpan() 获取购买时长,不传默认为1(月)
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长,不传默认为1(月)
 * @method integer getPayMode() 获取付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
 * @method void setPayMode(integer $PayMode) 设置付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
 * @method string getClusterVersion() 获取集群版本，不传默认为 3.8.30，可选值为 3.8.30 和 3.11.8
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本，不传默认为 3.8.30，可选值为 3.8.30 和 3.11.8
 * @method boolean getIsIntl() 获取是否国际站请求，默认 false
 * @method void setIsIntl(boolean $IsIntl) 设置是否国际站请求，默认 false
 * @method array getResourceTags() 获取资源标签列表
 * @method void setResourceTags(array $ResourceTags) 设置资源标签列表
 * @method integer getBandwidth() 获取公网带宽大小，单位 M
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽大小，单位 M
 * @method boolean getEnablePublicAccess() 获取是否打开公网接入，不传默认为false
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) 设置是否打开公网接入，不传默认为false
 */
class CreateRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var array 可用区
     */
    public $ZoneIds;

    /**
     * @var string 私有网络VpcId
     */
    public $VpcId;

    /**
     * @var string 私有网络SubnetId
     */
    public $SubnetId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 节点规格,基础型rabbit-vip-basic-1,标准型rabbit-vip-basic-2,高阶1型rabbit-vip-basic-3,高阶2型rabbit-vip-basic-4。不传默认为基础型
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
     * @var boolean 镜像队列,不传默认为false
     */
    public $EnableCreateDefaultHaMirrorQueue;

    /**
     * @var boolean 预付费使用。自动续费,不传默认为true
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
     * @var string 集群版本，不传默认为 3.8.30，可选值为 3.8.30 和 3.11.8
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
     * @var integer 公网带宽大小，单位 M
     */
    public $Bandwidth;

    /**
     * @var boolean 是否打开公网接入，不传默认为false
     */
    public $EnablePublicAccess;

    /**
     * @param array $ZoneIds 可用区
     * @param string $VpcId 私有网络VpcId
     * @param string $SubnetId 私有网络SubnetId
     * @param string $ClusterName 集群名称
     * @param string $NodeSpec 节点规格,基础型rabbit-vip-basic-1,标准型rabbit-vip-basic-2,高阶1型rabbit-vip-basic-3,高阶2型rabbit-vip-basic-4。不传默认为基础型
     * @param integer $NodeNum 节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
     * @param integer $StorageSize 单节点存储规格,不传默认为200G
     * @param boolean $EnableCreateDefaultHaMirrorQueue 镜像队列,不传默认为false
     * @param boolean $AutoRenewFlag 预付费使用。自动续费,不传默认为true
     * @param integer $TimeSpan 购买时长,不传默认为1(月)
     * @param integer $PayMode 付费方式，0 为后付费，即按量计费；1 为预付费，即包年包月。默认包年包月
     * @param string $ClusterVersion 集群版本，不传默认为 3.8.30，可选值为 3.8.30 和 3.11.8
     * @param boolean $IsIntl 是否国际站请求，默认 false
     * @param array $ResourceTags 资源标签列表
     * @param integer $Bandwidth 公网带宽大小，单位 M
     * @param boolean $EnablePublicAccess 是否打开公网接入，不传默认为false
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
    }
}
