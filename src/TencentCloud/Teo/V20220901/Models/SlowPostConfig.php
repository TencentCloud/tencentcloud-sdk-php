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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢速攻击配置。
 *
 * @method string getSwitch() 获取开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method FirstPartConfig getFirstPartConfig() 获取首包配置。
 * @method void setFirstPartConfig(FirstPartConfig $FirstPartConfig) 设置首包配置。
 * @method SlowRateConfig getSlowRateConfig() 获取基础配置。
 * @method void setSlowRateConfig(SlowRateConfig $SlowRateConfig) 设置基础配置。
 * @method string getAction() 获取慢速攻击的处置动作，取值有：
<li>monitor：观察；</li>
<li>drop：拦截。</li>
 * @method void setAction(string $Action) 设置慢速攻击的处置动作，取值有：
<li>monitor：观察；</li>
<li>drop：拦截。</li>
 * @method integer getRuleId() 获取本规则的Id。
 * @method void setRuleId(integer $RuleId) 设置本规则的Id。
 */
class SlowPostConfig extends AbstractModel
{
    /**
     * @var string 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var FirstPartConfig 首包配置。
     */
    public $FirstPartConfig;

    /**
     * @var SlowRateConfig 基础配置。
     */
    public $SlowRateConfig;

    /**
     * @var string 慢速攻击的处置动作，取值有：
<li>monitor：观察；</li>
<li>drop：拦截。</li>
     */
    public $Action;

    /**
     * @var integer 本规则的Id。
     */
    public $RuleId;

    /**
     * @param string $Switch 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param FirstPartConfig $FirstPartConfig 首包配置。
     * @param SlowRateConfig $SlowRateConfig 基础配置。
     * @param string $Action 慢速攻击的处置动作，取值有：
<li>monitor：观察；</li>
<li>drop：拦截。</li>
     * @param integer $RuleId 本规则的Id。
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

        if (array_key_exists("FirstPartConfig",$param) and $param["FirstPartConfig"] !== null) {
            $this->FirstPartConfig = new FirstPartConfig();
            $this->FirstPartConfig->deserialize($param["FirstPartConfig"]);
        }

        if (array_key_exists("SlowRateConfig",$param) and $param["SlowRateConfig"] !== null) {
            $this->SlowRateConfig = new SlowRateConfig();
            $this->SlowRateConfig->deserialize($param["SlowRateConfig"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
