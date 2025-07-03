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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGatherRule请求参数结构体
 *
 * @method integer getRuleId() 获取所删除归集规则ID
 * @method void setRuleId(integer $RuleId) 设置所删除归集规则ID
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 */
class DeleteGatherRuleRequest extends AbstractModel
{
    /**
     * @var integer 所删除归集规则ID
     */
    public $RuleId;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @param integer $RuleId 所删除归集规则ID
     * @param string $Month 月份，不传默认当前月
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
