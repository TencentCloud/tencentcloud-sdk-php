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
 * CreateAlarmShield请求参数结构体
 *
 * @method string getAlarmNoticeId() 获取通知渠道组id。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取通知渠道组id
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置通知渠道组id。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取通知渠道组id
 * @method integer getStartTime() 获取屏蔽规则开始时间，秒级(s)时间戳。
 * @method void setStartTime(integer $StartTime) 设置屏蔽规则开始时间，秒级(s)时间戳。
 * @method integer getEndTime() 获取屏蔽规则结束时间，秒级(s)时间戳。结束时间需要大于当前时间
 * @method void setEndTime(integer $EndTime) 设置屏蔽规则结束时间，秒级(s)时间戳。结束时间需要大于当前时间
 * @method integer getType() 获取屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
 * @method void setType(integer $Type) 设置屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
 * @method string getReason() 获取屏蔽原因。
 * @method void setReason(string $Reason) 设置屏蔽原因。
 * @method string getRule() 获取屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
 * @method void setRule(string $Rule) 设置屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
 */
class CreateAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string 通知渠道组id。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取通知渠道组id
     */
    public $AlarmNoticeId;

    /**
     * @var integer 屏蔽规则开始时间，秒级(s)时间戳。
     */
    public $StartTime;

    /**
     * @var integer 屏蔽规则结束时间，秒级(s)时间戳。结束时间需要大于当前时间
     */
    public $EndTime;

    /**
     * @var integer 屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
     */
    public $Type;

    /**
     * @var string 屏蔽原因。
     */
    public $Reason;

    /**
     * @var string 屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
     */
    public $Rule;

    /**
     * @param string $AlarmNoticeId 通知渠道组id。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取通知渠道组id
     * @param integer $StartTime 屏蔽规则开始时间，秒级(s)时间戳。
     * @param integer $EndTime 屏蔽规则结束时间，秒级(s)时间戳。结束时间需要大于当前时间
     * @param integer $Type 屏蔽类型。1：屏蔽所有通知，2：按照Rule参数屏蔽匹配规则的通知。
     * @param string $Reason 屏蔽原因。
     * @param string $Rule 屏蔽规则，当Type为2时必填。规则填写方式详见[产品文档](https://cloud.tencent.com/document/product/614/103178#rule)。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
