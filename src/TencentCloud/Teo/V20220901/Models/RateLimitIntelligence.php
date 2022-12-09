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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能客户端过滤
 *
 * @method string getSwitch() 获取功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getAction() 获取执行动作，取值有：
<li>monitor：观察；</li>
<li>alg：挑战。</li>
 * @method void setAction(string $Action) 设置执行动作，取值有：
<li>monitor：观察；</li>
<li>alg：挑战。</li>
 * @method integer getRuleId() 获取规则id，仅出参使用。
 * @method void setRuleId(integer $RuleId) 设置规则id，仅出参使用。
 */
class RateLimitIntelligence extends AbstractModel
{
    /**
     * @var string 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 执行动作，取值有：
<li>monitor：观察；</li>
<li>alg：挑战。</li>
     */
    public $Action;

    /**
     * @var integer 规则id，仅出参使用。
     */
    public $RuleId;

    /**
     * @param string $Switch 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $Action 执行动作，取值有：
<li>monitor：观察；</li>
<li>alg：挑战。</li>
     * @param integer $RuleId 规则id，仅出参使用。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
