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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警屏蔽任务配置
 *
 * @method string getAlarmNoticeId() 获取通知渠道组Id
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置通知渠道组Id
 * @method string getTaskId() 获取屏蔽规则id
 * @method void setTaskId(string $TaskId) 设置屏蔽规则id
 * @method integer getStartTime() 获取屏蔽开始时间（秒级时间戳）。
 * @method void setStartTime(integer $StartTime) 设置屏蔽开始时间（秒级时间戳）。
 * @method integer getEndTime() 获取屏蔽结束时间（秒级时间戳）。
 * @method void setEndTime(integer $EndTime) 设置屏蔽结束时间（秒级时间戳）。
 * @method integer getType() 获取屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
 * @method void setType(integer $Type) 设置屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
 * @method string getRule() 获取屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
 * @method void setRule(string $Rule) 设置屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
 * @method string getReason() 获取屏蔽原因。
 * @method void setReason(string $Reason) 设置屏蔽原因。
 * @method integer getSource() 获取规则创建来源。
1. 控制台，2.api，3.告警通知
 * @method void setSource(integer $Source) 设置规则创建来源。
1. 控制台，2.api，3.告警通知
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 * @method integer getStatus() 获取规则状态。
0：暂未生效，1：生效中，2：已失效
 * @method void setStatus(integer $Status) 设置规则状态。
0：暂未生效，1：生效中，2：已失效
 * @method integer getCreateTime() 获取规则创建时间。秒级时间戳(s)
 * @method void setCreateTime(integer $CreateTime) 设置规则创建时间。秒级时间戳(s)
 * @method integer getUpdateTime() 获取规则更新时间。秒级时间戳(s)
 * @method void setUpdateTime(integer $UpdateTime) 设置规则更新时间。秒级时间戳(s)
 */
class AlarmShieldInfo extends AbstractModel
{
    /**
     * @var string 通知渠道组Id
     */
    public $AlarmNoticeId;

    /**
     * @var string 屏蔽规则id
     */
    public $TaskId;

    /**
     * @var integer 屏蔽开始时间（秒级时间戳）。
     */
    public $StartTime;

    /**
     * @var integer 屏蔽结束时间（秒级时间戳）。
     */
    public $EndTime;

    /**
     * @var integer 屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
     */
    public $Type;

    /**
     * @var string 屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
     */
    public $Rule;

    /**
     * @var string 屏蔽原因。
     */
    public $Reason;

    /**
     * @var integer 规则创建来源。
1. 控制台，2.api，3.告警通知
     */
    public $Source;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @var integer 规则状态。
0：暂未生效，1：生效中，2：已失效
     */
    public $Status;

    /**
     * @var integer 规则创建时间。秒级时间戳(s)
     */
    public $CreateTime;

    /**
     * @var integer 规则更新时间。秒级时间戳(s)
     */
    public $UpdateTime;

    /**
     * @param string $AlarmNoticeId 通知渠道组Id
     * @param string $TaskId 屏蔽规则id
     * @param integer $StartTime 屏蔽开始时间（秒级时间戳）。
     * @param integer $EndTime 屏蔽结束时间（秒级时间戳）。
     * @param integer $Type 屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
     * @param string $Rule 屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
     * @param string $Reason 屏蔽原因。
     * @param integer $Source 规则创建来源。
1. 控制台，2.api，3.告警通知
     * @param string $Operator 操作者。
     * @param integer $Status 规则状态。
0：暂未生效，1：生效中，2：已失效
     * @param integer $CreateTime 规则创建时间。秒级时间戳(s)
     * @param integer $UpdateTime 规则更新时间。秒级时间戳(s)
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
