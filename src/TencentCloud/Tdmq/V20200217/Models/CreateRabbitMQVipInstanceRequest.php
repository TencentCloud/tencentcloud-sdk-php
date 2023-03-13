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
 * @method boolean getAutoRenewFlag() 获取自动续费,不传默认为true
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置自动续费,不传默认为true
 * @method integer getTimeSpan() 获取购买时长,不传默认为1(月)
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长,不传默认为1(月)
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
     * @var boolean 自动续费,不传默认为true
     */
    public $AutoRenewFlag;

    /**
     * @var integer 购买时长,不传默认为1(月)
     */
    public $TimeSpan;

    /**
     * @param array $ZoneIds 可用区
     * @param string $VpcId 私有网络VpcId
     * @param string $SubnetId 私有网络SubnetId
     * @param string $ClusterName 集群名称
     * @param string $NodeSpec 节点规格,基础型rabbit-vip-basic-1,标准型rabbit-vip-basic-2,高阶1型rabbit-vip-basic-3,高阶2型rabbit-vip-basic-4。不传默认为基础型
     * @param integer $NodeNum 节点数量,多可用区最少为3节点。不传默认单可用区为1,多可用区为3
     * @param integer $StorageSize 单节点存储规格,不传默认为200G
     * @param boolean $EnableCreateDefaultHaMirrorQueue 镜像队列,不传默认为false
     * @param boolean $AutoRenewFlag 自动续费,不传默认为true
     * @param integer $TimeSpan 购买时长,不传默认为1(月)
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
    }
}
