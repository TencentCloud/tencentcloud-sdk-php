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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自治事件详情
 *
 * @method integer getEventId() 获取自治事件ID。
 * @method void setEventId(integer $EventId) 设置自治事件ID。
 * @method string getType() 获取自治事件类型：支持RunningAutoRecovery，RedisAutoScale
 * @method void setType(string $Type) 设置自治事件类型：支持RunningAutoRecovery，RedisAutoScale
 * @method string getStatus() 获取自治事件状态：支持 RUNNING，FINISHED，TERMINATED
 * @method void setStatus(string $Status) 设置自治事件状态：支持 RUNNING，FINISHED，TERMINATED
 * @method string getReason() 获取触发原因。	
 * @method void setReason(string $Reason) 设置触发原因。	
 * @method integer getTriggerTime() 获取自治任务触发时间。
 * @method void setTriggerTime(integer $TriggerTime) 设置自治任务触发时间。
 * @method integer getLastTriggerTime() 获取自治任务最后触发时间。
 * @method void setLastTriggerTime(integer $LastTriggerTime) 设置自治任务最后触发时间。
 * @method integer getCreateTime() 获取自治任务创建时间。
 * @method void setCreateTime(integer $CreateTime) 设置自治任务创建时间。
 * @method integer getUpdateTime() 获取自治任务更新时间。
 * @method void setUpdateTime(integer $UpdateTime) 设置自治任务更新时间。
 * @method integer getFinishTime() 获取自治任务完成时间；非结束状态的时候，该值无意义。
 * @method void setFinishTime(integer $FinishTime) 设置自治任务完成时间；非结束状态的时候，该值无意义。
 */
class AutonomyEventVo extends AbstractModel
{
    /**
     * @var integer 自治事件ID。
     */
    public $EventId;

    /**
     * @var string 自治事件类型：支持RunningAutoRecovery，RedisAutoScale
     */
    public $Type;

    /**
     * @var string 自治事件状态：支持 RUNNING，FINISHED，TERMINATED
     */
    public $Status;

    /**
     * @var string 触发原因。	
     */
    public $Reason;

    /**
     * @var integer 自治任务触发时间。
     */
    public $TriggerTime;

    /**
     * @var integer 自治任务最后触发时间。
     */
    public $LastTriggerTime;

    /**
     * @var integer 自治任务创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 自治任务更新时间。
     */
    public $UpdateTime;

    /**
     * @var integer 自治任务完成时间；非结束状态的时候，该值无意义。
     */
    public $FinishTime;

    /**
     * @param integer $EventId 自治事件ID。
     * @param string $Type 自治事件类型：支持RunningAutoRecovery，RedisAutoScale
     * @param string $Status 自治事件状态：支持 RUNNING，FINISHED，TERMINATED
     * @param string $Reason 触发原因。	
     * @param integer $TriggerTime 自治任务触发时间。
     * @param integer $LastTriggerTime 自治任务最后触发时间。
     * @param integer $CreateTime 自治任务创建时间。
     * @param integer $UpdateTime 自治任务更新时间。
     * @param integer $FinishTime 自治任务完成时间；非结束状态的时候，该值无意义。
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("TriggerTime",$param) and $param["TriggerTime"] !== null) {
            $this->TriggerTime = $param["TriggerTime"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
