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
 * 安全Bot配置
 *
 * @method string getSwitch() 获取bot开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置bot开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method BotManagedRule getBotManagedRule() 获取通用详细基础规则。如果为null，默认使用历史配置。
 * @method void setBotManagedRule(BotManagedRule $BotManagedRule) 设置通用详细基础规则。如果为null，默认使用历史配置。
 * @method BotPortraitRule getBotPortraitRule() 获取用户画像规则。如果为null，默认使用历史配置。
 * @method void setBotPortraitRule(BotPortraitRule $BotPortraitRule) 设置用户画像规则。如果为null，默认使用历史配置。
 * @method IntelligenceRule getIntelligenceRule() 获取Bot智能分析。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntelligenceRule(IntelligenceRule $IntelligenceRule) 设置Bot智能分析。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBotUserRules() 获取Bot自定义规则。如果为null，默认使用历史配置。
 * @method void setBotUserRules(array $BotUserRules) 设置Bot自定义规则。如果为null，默认使用历史配置。
 * @method array getAlgDetectRule() 获取Bot主动特征识别规则。
 * @method void setAlgDetectRule(array $AlgDetectRule) 设置Bot主动特征识别规则。
 * @method array getCustomizes() 获取Bot托管定制策略，入参可不填，仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomizes(array $Customizes) 设置Bot托管定制策略，入参可不填，仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotConfig extends AbstractModel
{
    /**
     * @var string bot开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var BotManagedRule 通用详细基础规则。如果为null，默认使用历史配置。
     */
    public $BotManagedRule;

    /**
     * @var BotPortraitRule 用户画像规则。如果为null，默认使用历史配置。
     */
    public $BotPortraitRule;

    /**
     * @var IntelligenceRule Bot智能分析。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntelligenceRule;

    /**
     * @var array Bot自定义规则。如果为null，默认使用历史配置。
     */
    public $BotUserRules;

    /**
     * @var array Bot主动特征识别规则。
     */
    public $AlgDetectRule;

    /**
     * @var array Bot托管定制策略，入参可不填，仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Customizes;

    /**
     * @param string $Switch bot开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param BotManagedRule $BotManagedRule 通用详细基础规则。如果为null，默认使用历史配置。
     * @param BotPortraitRule $BotPortraitRule 用户画像规则。如果为null，默认使用历史配置。
     * @param IntelligenceRule $IntelligenceRule Bot智能分析。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BotUserRules Bot自定义规则。如果为null，默认使用历史配置。
     * @param array $AlgDetectRule Bot主动特征识别规则。
     * @param array $Customizes Bot托管定制策略，入参可不填，仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("BotManagedRule",$param) and $param["BotManagedRule"] !== null) {
            $this->BotManagedRule = new BotManagedRule();
            $this->BotManagedRule->deserialize($param["BotManagedRule"]);
        }

        if (array_key_exists("BotPortraitRule",$param) and $param["BotPortraitRule"] !== null) {
            $this->BotPortraitRule = new BotPortraitRule();
            $this->BotPortraitRule->deserialize($param["BotPortraitRule"]);
        }

        if (array_key_exists("IntelligenceRule",$param) and $param["IntelligenceRule"] !== null) {
            $this->IntelligenceRule = new IntelligenceRule();
            $this->IntelligenceRule->deserialize($param["IntelligenceRule"]);
        }

        if (array_key_exists("BotUserRules",$param) and $param["BotUserRules"] !== null) {
            $this->BotUserRules = [];
            foreach ($param["BotUserRules"] as $key => $value){
                $obj = new BotUserRule();
                $obj->deserialize($value);
                array_push($this->BotUserRules, $obj);
            }
        }

        if (array_key_exists("AlgDetectRule",$param) and $param["AlgDetectRule"] !== null) {
            $this->AlgDetectRule = [];
            foreach ($param["AlgDetectRule"] as $key => $value){
                $obj = new AlgDetectRule();
                $obj->deserialize($value);
                array_push($this->AlgDetectRule, $obj);
            }
        }

        if (array_key_exists("Customizes",$param) and $param["Customizes"] !== null) {
            $this->Customizes = [];
            foreach ($param["Customizes"] as $key => $value){
                $obj = new BotUserRule();
                $obj->deserialize($value);
                array_push($this->Customizes, $obj);
            }
        }
    }
}
