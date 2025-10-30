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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUebaRuleSwitch请求参数结构体
 *
 * @method string getRuleID() 获取策略ID
 * @method void setRuleID(string $RuleID) 设置策略ID
 * @method boolean getStatus() 获取开关状态
 * @method void setStatus(boolean $Status) 设置开关状态
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class ModifyUebaRuleSwitchRequest extends AbstractModel
{
    /**
     * @var string 策略ID
     */
    public $RuleID;

    /**
     * @var boolean 开关状态
     */
    public $Status;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param string $RuleID 策略ID
     * @param boolean $Status 开关状态
     * @param array $MemberId 集团账号的成员id
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
