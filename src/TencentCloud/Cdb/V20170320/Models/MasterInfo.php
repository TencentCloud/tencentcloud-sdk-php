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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主实例信息
 *
 * @method string getRegion() 获取<p>地域信息</p>
 * @method void setRegion(string $Region) 设置<p>地域信息</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method integer getZoneId() 获取<p>可用区ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区ID</p>
 * @method string getZone() 获取<p>可用区信息</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getResourceId() 获取<p>实例长ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>实例长ID</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型</p>
 * @method integer getTaskStatus() 获取<p>任务状态</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务状态</p>
 * @method integer getMemory() 获取<p>内存容量</p>
 * @method void setMemory(integer $Memory) 设置<p>内存容量</p>
 * @method integer getVolume() 获取<p>硬盘容量</p>
 * @method void setVolume(integer $Volume) 设置<p>硬盘容量</p>
 * @method string getDeviceType() 获取<p>实例机型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例机型</p>
 * @method integer getQps() 获取<p>每秒查询数</p>
 * @method void setQps(integer $Qps) 设置<p>每秒查询数</p>
 * @method integer getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(integer $VpcId) 设置<p>私有网络ID</p>
 * @method integer getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>子网ID</p>
 * @method string getExClusterId() 获取<p>独享集群ID</p>
 * @method void setExClusterId(string $ExClusterId) 设置<p>独享集群ID</p>
 * @method string getExClusterName() 获取<p>独享集群名称</p>
 * @method void setExClusterName(string $ExClusterName) 设置<p>独享集群名称</p>
 */
class MasterInfo extends AbstractModel
{
    /**
     * @var string <p>地域信息</p>
     */
    public $Region;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var integer <p>可用区ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>可用区信息</p>
     */
    public $Zone;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例长ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>任务状态</p>
     */
    public $TaskStatus;

    /**
     * @var integer <p>内存容量</p>
     */
    public $Memory;

    /**
     * @var integer <p>硬盘容量</p>
     */
    public $Volume;

    /**
     * @var string <p>实例机型</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>每秒查询数</p>
     */
    public $Qps;

    /**
     * @var integer <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var integer <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>独享集群ID</p>
     */
    public $ExClusterId;

    /**
     * @var string <p>独享集群名称</p>
     */
    public $ExClusterName;

    /**
     * @param string $Region <p>地域信息</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param integer $ZoneId <p>可用区ID</p>
     * @param string $Zone <p>可用区信息</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $ResourceId <p>实例长ID</p>
     * @param integer $Status <p>实例状态</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $InstanceType <p>实例类型</p>
     * @param integer $TaskStatus <p>任务状态</p>
     * @param integer $Memory <p>内存容量</p>
     * @param integer $Volume <p>硬盘容量</p>
     * @param string $DeviceType <p>实例机型</p>
     * @param integer $Qps <p>每秒查询数</p>
     * @param integer $VpcId <p>私有网络ID</p>
     * @param integer $SubnetId <p>子网ID</p>
     * @param string $ExClusterId <p>独享集群ID</p>
     * @param string $ExClusterName <p>独享集群名称</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("ExClusterName",$param) and $param["ExClusterName"] !== null) {
            $this->ExClusterName = $param["ExClusterName"];
        }
    }
}
