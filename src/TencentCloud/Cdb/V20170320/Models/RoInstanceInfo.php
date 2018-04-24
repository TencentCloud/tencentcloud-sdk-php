<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMasterInstanceId() 获取RO组对应的主实例的ID
 * @method void setMasterInstanceId(string $masterInstanceId) 设置RO组对应的主实例的ID
 * @method string getRoStatus() 获取RO实例在RO组内的状态，可能的值：online-在线，offline-下线
 * @method void setRoStatus(string $roStatus) 设置RO实例在RO组内的状态，可能的值：online-在线，offline-下线
 * @method string getOfflineTime() 获取RO实例在RO组内上一次下线的时间
 * @method void setOfflineTime(string $offlineTime) 设置RO实例在RO组内上一次下线的时间
 * @method integer getWeight() 获取RO实例在RO组内的权重
 * @method void setWeight(integer $weight) 设置RO实例在RO组内的权重
 * @method string getRegion() 获取RO实例所在区域名称，如ap-shanghai
 * @method void setRegion(string $region) 设置RO实例所在区域名称，如ap-shanghai
 * @method string getZone() 获取RO可用区的正式名称，如ap-shanghai-1
 * @method void setZone(string $zone) 设置RO可用区的正式名称，如ap-shanghai-1
 * @method string getInstanceId() 获取RO实例ID，格式如：cdbro-c1nl9rpv
 * @method void setInstanceId(string $instanceId) 设置RO实例ID，格式如：cdbro-c1nl9rpv
 * @method integer getStatus() 获取RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
 * @method void setStatus(integer $status) 设置RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
 * @method integer getInstanceType() 获取实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
 * @method void setInstanceType(integer $instanceType) 设置实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
 * @method string getInstanceName() 获取RO实例名称
 * @method void setInstanceName(string $instanceName) 设置RO实例名称
 * @method integer getHourFeeStatus() 获取按量计费状态，可能的取值：1-正常，2-欠费
 * @method void setHourFeeStatus(integer $hourFeeStatus) 设置按量计费状态，可能的取值：1-正常，2-欠费
 * @method integer getTaskStatus() 获取RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method void setTaskStatus(integer $taskStatus) 设置RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method integer getMemory() 获取RO实例内存大小，单位：MB
 * @method void setMemory(integer $memory) 设置RO实例内存大小，单位：MB
 * @method integer getVolume() 获取RO实例硬盘大小，单位：GB
 * @method void setVolume(integer $volume) 设置RO实例硬盘大小，单位：GB
 * @method integer getQps() 获取每次查询数量
 * @method void setQps(integer $qps) 设置每次查询数量
 * @method string getVip() 获取RO实例的内网IP地址
 * @method void setVip(string $vip) 设置RO实例的内网IP地址
 * @method integer getVport() 获取RO实例访问端口
 * @method void setVport(integer $vport) 设置RO实例访问端口
 * @method integer getVpcId() 获取RO实例所在私有网络ID
 * @method void setVpcId(integer $vpcId) 设置RO实例所在私有网络ID
 * @method integer getSubnetId() 获取RO实例所在私有网络子网ID
 * @method void setSubnetId(integer $subnetId) 设置RO实例所在私有网络子网ID
 * @method string getDeviceType() 获取RO实例规格描述，目前可取值 CUSTOM
 * @method void setDeviceType(string $deviceType) 设置RO实例规格描述，目前可取值 CUSTOM
 * @method string getEngineVersion() 获取RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6和5.7
 * @method void setEngineVersion(string $engineVersion) 设置RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6和5.7
 * @method string getDeadlineTime() 获取RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
 * @method void setDeadlineTime(string $deadlineTime) 设置RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
 * @method integer getPayType() 获取RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
 * @method void setPayType(integer $payType) 设置RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
 */

/**
 *RO实例的详细信息
 */
class RoInstanceInfo extends AbstractModel
{
    /**
     * @var string RO组对应的主实例的ID
     */
    public $masterInstanceId;

    /**
     * @var string RO实例在RO组内的状态，可能的值：online-在线，offline-下线
     */
    public $roStatus;

    /**
     * @var string RO实例在RO组内上一次下线的时间
     */
    public $offlineTime;

    /**
     * @var integer RO实例在RO组内的权重
     */
    public $weight;

    /**
     * @var string RO实例所在区域名称，如ap-shanghai
     */
    public $region;

    /**
     * @var string RO可用区的正式名称，如ap-shanghai-1
     */
    public $zone;

    /**
     * @var string RO实例ID，格式如：cdbro-c1nl9rpv
     */
    public $instanceId;

    /**
     * @var integer RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
     */
    public $status;

    /**
     * @var integer 实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
     */
    public $instanceType;

    /**
     * @var string RO实例名称
     */
    public $instanceName;

    /**
     * @var integer 按量计费状态，可能的取值：1-正常，2-欠费
     */
    public $hourFeeStatus;

    /**
     * @var integer RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     */
    public $taskStatus;

    /**
     * @var integer RO实例内存大小，单位：MB
     */
    public $memory;

    /**
     * @var integer RO实例硬盘大小，单位：GB
     */
    public $volume;

    /**
     * @var integer 每次查询数量
     */
    public $qps;

    /**
     * @var string RO实例的内网IP地址
     */
    public $vip;

    /**
     * @var integer RO实例访问端口
     */
    public $vport;

    /**
     * @var integer RO实例所在私有网络ID
     */
    public $vpcId;

    /**
     * @var integer RO实例所在私有网络子网ID
     */
    public $subnetId;

    /**
     * @var string RO实例规格描述，目前可取值 CUSTOM
     */
    public $deviceType;

    /**
     * @var string RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6和5.7
     */
    public $engineVersion;

    /**
     * @var string RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
     */
    public $deadlineTime;

    /**
     * @var integer RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
     */
    public $payType;
    /**
     * @param string $masterInstanceId RO组对应的主实例的ID
     * @param string $roStatus RO实例在RO组内的状态，可能的值：online-在线，offline-下线
     * @param string $offlineTime RO实例在RO组内上一次下线的时间
     * @param integer $weight RO实例在RO组内的权重
     * @param string $region RO实例所在区域名称，如ap-shanghai
     * @param string $zone RO可用区的正式名称，如ap-shanghai-1
     * @param string $instanceId RO实例ID，格式如：cdbro-c1nl9rpv
     * @param integer $status RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
     * @param integer $instanceType 实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
     * @param string $instanceName RO实例名称
     * @param integer $hourFeeStatus 按量计费状态，可能的取值：1-正常，2-欠费
     * @param integer $taskStatus RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     * @param integer $memory RO实例内存大小，单位：MB
     * @param integer $volume RO实例硬盘大小，单位：GB
     * @param integer $qps 每次查询数量
     * @param string $vip RO实例的内网IP地址
     * @param integer $vport RO实例访问端口
     * @param integer $vpcId RO实例所在私有网络ID
     * @param integer $subnetId RO实例所在私有网络子网ID
     * @param string $deviceType RO实例规格描述，目前可取值 CUSTOM
     * @param string $engineVersion RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6和5.7
     * @param string $deadlineTime RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
     * @param integer $payType RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->masterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("RoStatus",$param) and $param["RoStatus"] !== null) {
            $this->roStatus = $param["RoStatus"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->offlineTime = $param["OfflineTime"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->status = $param["Status"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->instanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->instanceName = $param["InstanceName"];
        }

        if (array_key_exists("HourFeeStatus",$param) and $param["HourFeeStatus"] !== null) {
            $this->hourFeeStatus = $param["HourFeeStatus"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->taskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->volume = $param["Volume"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->qps = $param["Qps"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->vpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->subnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->deviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->engineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->deadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->payType = $param["PayType"];
        }
    }
}
