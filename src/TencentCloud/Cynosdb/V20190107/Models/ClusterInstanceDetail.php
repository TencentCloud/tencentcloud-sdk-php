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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceType() 获取引擎类型
 * @method void setInstanceType(string $InstanceType) 设置引擎类型
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceStatusDesc() 获取实例状态描述
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置实例状态描述
 * @method integer getInstanceCpu() 获取cpu核数
 * @method void setInstanceCpu(integer $InstanceCpu) 设置cpu核数
 * @method integer getInstanceMemory() 获取内存
 * @method void setInstanceMemory(integer $InstanceMemory) 设置内存
 * @method integer getInstanceStorage() 获取硬盘
 * @method void setInstanceStorage(integer $InstanceStorage) 设置硬盘
 * @method string getInstanceRole() 获取实例角色
 * @method void setInstanceRole(string $InstanceRole) 设置实例角色
 * @method integer getMaintainStartTime() 获取执行开始时间(距离0点的秒数)	
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置执行开始时间(距离0点的秒数)	
 * @method integer getMaintainDuration() 获取持续的时间(单位：秒)	
 * @method void setMaintainDuration(integer $MaintainDuration) 设置持续的时间(单位：秒)	
 * @method array getMaintainWeekDays() 获取可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 * @method string getServerlessStatus() 获取serverless实例子状态
 * @method void setServerlessStatus(string $ServerlessStatus) 设置serverless实例子状态
 * @method array getInstanceTasks() 获取实例任务信息
 * @method void setInstanceTasks(array $InstanceTasks) 设置实例任务信息
 * @method string getInstanceDeviceType() 获取实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method void setInstanceDeviceType(string $InstanceDeviceType) 设置实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method string getInstanceStorageType() 获取实例存储类型
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置实例存储类型
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
 * @method string getDbMode() 获取数据库类型
 * @method void setDbMode(string $DbMode) 设置数据库类型
 * @method array getNodeList() 获取节点列表
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
 * @method void setNodeList(array $NodeList) 设置节点列表
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
 */
class ClusterInstanceDetail extends AbstractModel
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
     * @var string 引擎类型
     */
    public $InstanceType;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例状态描述
     */
    public $InstanceStatusDesc;

    /**
     * @var integer cpu核数
     */
    public $InstanceCpu;

    /**
     * @var integer 内存
     */
    public $InstanceMemory;

    /**
     * @var integer 硬盘
     */
    public $InstanceStorage;

    /**
     * @var string 实例角色
     */
    public $InstanceRole;

    /**
     * @var integer 执行开始时间(距离0点的秒数)	
     */
    public $MaintainStartTime;

    /**
     * @var integer 持续的时间(单位：秒)	
     */
    public $MaintainDuration;

    /**
     * @var array 可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
     */
    public $MaintainWeekDays;

    /**
     * @var string serverless实例子状态
     */
    public $ServerlessStatus;

    /**
     * @var array 实例任务信息
     */
    public $InstanceTasks;

    /**
     * @var string 实例机器类型
1. common，通用型。
2. exclusive，独享型。
     */
    public $InstanceDeviceType;

    /**
     * @var string 实例存储类型
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
     */
    public $InstanceStorageType;

    /**
     * @var string 数据库类型
     */
    public $DbMode;

    /**
     * @var array 节点列表
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
     */
    public $NodeList;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceType 引擎类型
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceStatusDesc 实例状态描述
     * @param integer $InstanceCpu cpu核数
     * @param integer $InstanceMemory 内存
     * @param integer $InstanceStorage 硬盘
     * @param string $InstanceRole 实例角色
     * @param integer $MaintainStartTime 执行开始时间(距离0点的秒数)	
     * @param integer $MaintainDuration 持续的时间(单位：秒)	
     * @param array $MaintainWeekDays 可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
     * @param string $ServerlessStatus serverless实例子状态
     * @param array $InstanceTasks 实例任务信息
     * @param string $InstanceDeviceType 实例机器类型
1. common，通用型。
2. exclusive，独享型。
     * @param string $InstanceStorageType 实例存储类型
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
     * @param string $DbMode 数据库类型
     * @param array $NodeList 节点列表
说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("InstanceTasks",$param) and $param["InstanceTasks"] !== null) {
            $this->InstanceTasks = [];
            foreach ($param["InstanceTasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->InstanceTasks, $obj);
            }
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }
    }
}
