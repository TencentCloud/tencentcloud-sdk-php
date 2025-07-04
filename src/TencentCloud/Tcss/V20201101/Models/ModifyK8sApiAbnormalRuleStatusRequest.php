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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyK8sApiAbnormalRuleStatus请求参数结构体
 *
 * @method string getRuleID() 获取规则ID
 * @method void setRuleID(string $RuleID) 设置规则ID
 * @method boolean getStatus() 获取状态(true:开 false:关)
 * @method void setStatus(boolean $Status) 设置状态(true:开 false:关)
 */
class ModifyK8sApiAbnormalRuleStatusRequest extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleID;

    /**
     * @var boolean 状态(true:开 false:关)
     */
    public $Status;

    /**
     * @param string $RuleID 规则ID
     * @param boolean $Status 状态(true:开 false:关)
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
