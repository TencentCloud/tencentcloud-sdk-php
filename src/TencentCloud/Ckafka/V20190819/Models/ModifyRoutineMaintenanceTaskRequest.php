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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoutineMaintenanceTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getMaintenanceType() 获取自动化运维类别
 * @method void setMaintenanceType(string $MaintenanceType) 设置自动化运维类别
 * @method string getMaintenanceSubtype() 获取INSTANCE_STORAGE_CAPACITY(磁盘自动扩容)/MESSAGE_RETENTION_PERIOD(磁盘动态消息保留策略)
 * @method void setMaintenanceSubtype(string $MaintenanceSubtype) 设置INSTANCE_STORAGE_CAPACITY(磁盘自动扩容)/MESSAGE_RETENTION_PERIOD(磁盘动态消息保留策略)
 * @method string getTopicName() 获取主题名
 * @method void setTopicName(string $TopicName) 设置主题名
 * @method integer getConfigureThreshold() 获取任务触发阈值
 * @method void setConfigureThreshold(integer $ConfigureThreshold) 设置任务触发阈值
 * @method integer getConfigureStepSize() 获取任务调整步长
 * @method void setConfigureStepSize(integer $ConfigureStepSize) 设置任务调整步长
 * @method integer getConfigureLimit() 获取任务调整上限
 * @method void setConfigureLimit(integer $ConfigureLimit) 设置任务调整上限
 * @method integer getPlannedTime() 获取任务预期触发时间，存储从当日 0AM 开始偏移的秒数
 * @method void setPlannedTime(integer $PlannedTime) 设置任务预期触发时间，存储从当日 0AM 开始偏移的秒数
 * @method string getExtraConfig() 获取任务额外信息
 * @method void setExtraConfig(string $ExtraConfig) 设置任务额外信息
 * @method integer getStatus() 获取任务状态
 * @method void setStatus(integer $Status) 设置任务状态
 * @method string getWeek() 获取执行week day
 * @method void setWeek(string $Week) 设置执行week day
 */
class ModifyRoutineMaintenanceTaskRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 自动化运维类别
     */
    public $MaintenanceType;

    /**
     * @var string INSTANCE_STORAGE_CAPACITY(磁盘自动扩容)/MESSAGE_RETENTION_PERIOD(磁盘动态消息保留策略)
     */
    public $MaintenanceSubtype;

    /**
     * @var string 主题名
     */
    public $TopicName;

    /**
     * @var integer 任务触发阈值
     */
    public $ConfigureThreshold;

    /**
     * @var integer 任务调整步长
     */
    public $ConfigureStepSize;

    /**
     * @var integer 任务调整上限
     */
    public $ConfigureLimit;

    /**
     * @var integer 任务预期触发时间，存储从当日 0AM 开始偏移的秒数
     */
    public $PlannedTime;

    /**
     * @var string 任务额外信息
     */
    public $ExtraConfig;

    /**
     * @var integer 任务状态
     */
    public $Status;

    /**
     * @var string 执行week day
     */
    public $Week;

    /**
     * @param string $InstanceId 实例id
     * @param string $MaintenanceType 自动化运维类别
     * @param string $MaintenanceSubtype INSTANCE_STORAGE_CAPACITY(磁盘自动扩容)/MESSAGE_RETENTION_PERIOD(磁盘动态消息保留策略)
     * @param string $TopicName 主题名
     * @param integer $ConfigureThreshold 任务触发阈值
     * @param integer $ConfigureStepSize 任务调整步长
     * @param integer $ConfigureLimit 任务调整上限
     * @param integer $PlannedTime 任务预期触发时间，存储从当日 0AM 开始偏移的秒数
     * @param string $ExtraConfig 任务额外信息
     * @param integer $Status 任务状态
     * @param string $Week 执行week day
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

        if (array_key_exists("MaintenanceType",$param) and $param["MaintenanceType"] !== null) {
            $this->MaintenanceType = $param["MaintenanceType"];
        }

        if (array_key_exists("MaintenanceSubtype",$param) and $param["MaintenanceSubtype"] !== null) {
            $this->MaintenanceSubtype = $param["MaintenanceSubtype"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConfigureThreshold",$param) and $param["ConfigureThreshold"] !== null) {
            $this->ConfigureThreshold = $param["ConfigureThreshold"];
        }

        if (array_key_exists("ConfigureStepSize",$param) and $param["ConfigureStepSize"] !== null) {
            $this->ConfigureStepSize = $param["ConfigureStepSize"];
        }

        if (array_key_exists("ConfigureLimit",$param) and $param["ConfigureLimit"] !== null) {
            $this->ConfigureLimit = $param["ConfigureLimit"];
        }

        if (array_key_exists("PlannedTime",$param) and $param["PlannedTime"] !== null) {
            $this->PlannedTime = $param["PlannedTime"];
        }

        if (array_key_exists("ExtraConfig",$param) and $param["ExtraConfig"] !== null) {
            $this->ExtraConfig = $param["ExtraConfig"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Week",$param) and $param["Week"] !== null) {
            $this->Week = $param["Week"];
        }
    }
}
