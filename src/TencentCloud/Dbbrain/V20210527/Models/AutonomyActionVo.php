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
 * redis自治事件任务详情
 *
 * @method integer getActionId() 获取自治任务ID。
 * @method void setActionId(integer $ActionId) 设置自治任务ID。
 * @method integer getEventId() 获取自治事件ID。
 * @method void setEventId(integer $EventId) 设置自治事件ID。
 * @method string getType() 获取类型：支持RedisAutoScaleUp
 * @method void setType(string $Type) 设置类型：支持RedisAutoScaleUp
 * @method string getTriggerTime() 获取自治任务触发时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method void setTriggerTime(string $TriggerTime) 设置自治任务触发时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method string getCreateTime() 获取自治任务创建时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method void setCreateTime(string $CreateTime) 设置自治任务创建时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method string getUpdateTime() 获取自治任务更新时间，格式: "yyyy-MM-dd HH:mm:ss"
 * @method void setUpdateTime(string $UpdateTime) 设置自治任务更新时间，格式: "yyyy-MM-dd HH:mm:ss"
 * @method string getFinishTime() 获取自治任务完成时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method void setFinishTime(string $FinishTime) 设置自治任务完成时间。格式: "yyyy-MM-dd HH:mm:ss"
 * @method integer getExpireTime() 获取剩余时间，单位：秒。
 * @method void setExpireTime(integer $ExpireTime) 设置剩余时间，单位：秒。
 * @method string getReason() 获取触发原因。
 * @method void setReason(string $Reason) 设置触发原因。
 * @method string getStatus() 获取自治任务状态：RUNNING，FINISHED，TERMINATED，CANCELLED
其中：
RUNNING    - 运行中  
FINISHED   - 已完成  
TERMINATED - 已终止  
CANCELLED  - 已取消  

 * @method void setStatus(string $Status) 设置自治任务状态：RUNNING，FINISHED，TERMINATED，CANCELLED
其中：
RUNNING    - 运行中  
FINISHED   - 已完成  
TERMINATED - 已终止  
CANCELLED  - 已取消  
 */
class AutonomyActionVo extends AbstractModel
{
    /**
     * @var integer 自治任务ID。
     */
    public $ActionId;

    /**
     * @var integer 自治事件ID。
     */
    public $EventId;

    /**
     * @var string 类型：支持RedisAutoScaleUp
     */
    public $Type;

    /**
     * @var string 自治任务触发时间。格式: "yyyy-MM-dd HH:mm:ss"
     */
    public $TriggerTime;

    /**
     * @var string 自治任务创建时间。格式: "yyyy-MM-dd HH:mm:ss"
     */
    public $CreateTime;

    /**
     * @var string 自治任务更新时间，格式: "yyyy-MM-dd HH:mm:ss"
     */
    public $UpdateTime;

    /**
     * @var string 自治任务完成时间。格式: "yyyy-MM-dd HH:mm:ss"
     */
    public $FinishTime;

    /**
     * @var integer 剩余时间，单位：秒。
     */
    public $ExpireTime;

    /**
     * @var string 触发原因。
     */
    public $Reason;

    /**
     * @var string 自治任务状态：RUNNING，FINISHED，TERMINATED，CANCELLED
其中：
RUNNING    - 运行中  
FINISHED   - 已完成  
TERMINATED - 已终止  
CANCELLED  - 已取消  

     */
    public $Status;

    /**
     * @param integer $ActionId 自治任务ID。
     * @param integer $EventId 自治事件ID。
     * @param string $Type 类型：支持RedisAutoScaleUp
     * @param string $TriggerTime 自治任务触发时间。格式: "yyyy-MM-dd HH:mm:ss"
     * @param string $CreateTime 自治任务创建时间。格式: "yyyy-MM-dd HH:mm:ss"
     * @param string $UpdateTime 自治任务更新时间，格式: "yyyy-MM-dd HH:mm:ss"
     * @param string $FinishTime 自治任务完成时间。格式: "yyyy-MM-dd HH:mm:ss"
     * @param integer $ExpireTime 剩余时间，单位：秒。
     * @param string $Reason 触发原因。
     * @param string $Status 自治任务状态：RUNNING，FINISHED，TERMINATED，CANCELLED
其中：
RUNNING    - 运行中  
FINISHED   - 已完成  
TERMINATED - 已终止  
CANCELLED  - 已取消  
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerTime",$param) and $param["TriggerTime"] !== null) {
            $this->TriggerTime = $param["TriggerTime"];
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
