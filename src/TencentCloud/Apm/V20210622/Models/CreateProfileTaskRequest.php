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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProfileTask请求参数结构体
 *
 * @method string getServiceName() 获取应用名称
 * @method void setServiceName(string $ServiceName) 设置应用名称
 * @method string getInstanceId() 获取APM业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置APM业务系统ID
 * @method string getServiceInstance() 获取应用实例（在线）
 * @method void setServiceInstance(string $ServiceInstance) 设置应用实例（在线）
 * @method string getEvent() 获取事件类型（cpu、alloc）
 * @method void setEvent(string $Event) 设置事件类型（cpu、alloc）
 * @method integer getDuration() 获取任务持续时长(单位：毫秒)，范围限制在5~180秒
 * @method void setDuration(integer $Duration) 设置任务持续时长(单位：毫秒)，范围限制在5~180秒
 * @method integer getAllTimes() 获取执行次数，范围限制在1~100次
 * @method void setAllTimes(integer $AllTimes) 设置执行次数，范围限制在1~100次
 * @method integer getStartTime() 获取开始时间戳，0代表从当前开始(单位：秒)
 * @method void setStartTime(integer $StartTime) 设置开始时间戳，0代表从当前开始(单位：秒)
 * @method integer getTaskInterval() 获取任务执行间隔(单位：毫秒)，范围限制在10~600秒，不可小于1.5倍的Duration
 * @method void setTaskInterval(integer $TaskInterval) 设置任务执行间隔(单位：毫秒)，范围限制在10~600秒，不可小于1.5倍的Duration
 */
class CreateProfileTaskRequest extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $ServiceName;

    /**
     * @var string APM业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 应用实例（在线）
     */
    public $ServiceInstance;

    /**
     * @var string 事件类型（cpu、alloc）
     */
    public $Event;

    /**
     * @var integer 任务持续时长(单位：毫秒)，范围限制在5~180秒
     */
    public $Duration;

    /**
     * @var integer 执行次数，范围限制在1~100次
     */
    public $AllTimes;

    /**
     * @var integer 开始时间戳，0代表从当前开始(单位：秒)
     */
    public $StartTime;

    /**
     * @var integer 任务执行间隔(单位：毫秒)，范围限制在10~600秒，不可小于1.5倍的Duration
     */
    public $TaskInterval;

    /**
     * @param string $ServiceName 应用名称
     * @param string $InstanceId APM业务系统ID
     * @param string $ServiceInstance 应用实例（在线）
     * @param string $Event 事件类型（cpu、alloc）
     * @param integer $Duration 任务持续时长(单位：毫秒)，范围限制在5~180秒
     * @param integer $AllTimes 执行次数，范围限制在1~100次
     * @param integer $StartTime 开始时间戳，0代表从当前开始(单位：秒)
     * @param integer $TaskInterval 任务执行间隔(单位：毫秒)，范围限制在10~600秒，不可小于1.5倍的Duration
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceInstance",$param) and $param["ServiceInstance"] !== null) {
            $this->ServiceInstance = $param["ServiceInstance"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AllTimes",$param) and $param["AllTimes"] !== null) {
            $this->AllTimes = $param["AllTimes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskInterval",$param) and $param["TaskInterval"] !== null) {
            $this->TaskInterval = $param["TaskInterval"];
        }
    }
}
