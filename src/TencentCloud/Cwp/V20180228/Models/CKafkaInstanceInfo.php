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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka实例信息
 *
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getKafkaVersion() 获取版本号
 * @method void setKafkaVersion(string $KafkaVersion) 设置版本号
 * @method array getTopicList() 获取主题列表
 * @method void setTopicList(array $TopicList) 设置主题列表
 * @method array getRouteList() 获取路由列表
 * @method void setRouteList(array $RouteList) 设置路由列表
 * @method integer getDiskSize() 获取磁盘容量，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置磁盘容量，单位GB
 * @method string getVpcId() 获取vpcId，如果为空，说明是基础网络
 * @method void setVpcId(string $VpcId) 设置vpcId，如果为空，说明是基础网络
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method integer getHealthy() 获取状态，1表示健康，2表示告警，3 表示实例状态异常
 * @method void setHealthy(integer $Healthy) 设置状态，1表示健康，2表示告警，3 表示实例状态异常
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getAz() 获取地域
 * @method void setAz(string $Az) 设置地域
 * @method integer getBandwidth() 获取实例带宽，单位Mbps
 * @method void setBandwidth(integer $Bandwidth) 设置实例带宽，单位Mbps
 */
class CKafkaInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 版本号
     */
    public $KafkaVersion;

    /**
     * @var array 主题列表
     */
    public $TopicList;

    /**
     * @var array 路由列表
     */
    public $RouteList;

    /**
     * @var integer 磁盘容量，单位GB
     */
    public $DiskSize;

    /**
     * @var string vpcId，如果为空，说明是基础网络
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var integer 状态，1表示健康，2表示告警，3 表示实例状态异常
     */
    public $Healthy;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 地域
     */
    public $Az;

    /**
     * @var integer 实例带宽，单位Mbps
     */
    public $Bandwidth;

    /**
     * @param string $InstanceID 实例ID
     * @param string $InstanceName 实例名称
     * @param string $KafkaVersion 版本号
     * @param array $TopicList 主题列表
     * @param array $RouteList 路由列表
     * @param integer $DiskSize 磁盘容量，单位GB
     * @param string $VpcId vpcId，如果为空，说明是基础网络
     * @param string $SubnetId 子网id
     * @param integer $Healthy 状态，1表示健康，2表示告警，3 表示实例状态异常
     * @param string $Zone 可用区
     * @param string $Az 地域
     * @param integer $Bandwidth 实例带宽，单位Mbps
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new CKafkaTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new CKafkaRouteInfo();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            $this->Az = $param["Az"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
