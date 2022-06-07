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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 门神配置
 *
 * @method string getSwitch() 获取开关
 * @method void setSwitch(string $Switch) 设置开关
 * @method string getLevel() 获取防护级别，loose/normal/strict/stricter/custom
 * @method void setLevel(string $Level) 设置防护级别，loose/normal/strict/stricter/custom
 * @method string getMode() 获取模式 block-阻断；observe-观察模式；close-关闭
 * @method void setMode(string $Mode) 设置模式 block-阻断；observe-观察模式；close-关闭
 * @method WafRule getWafRules() 获取门神黑白名单
 * @method void setWafRules(WafRule $WafRules) 设置门神黑白名单
 * @method AiRule getAiRule() 获取AI规则引擎防护
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiRule(AiRule $AiRule) 设置AI规则引擎防护
注意：此字段可能返回 null，表示取不到有效值。
 */
class WafConfig extends AbstractModel
{
    /**
     * @var string 开关
     */
    public $Switch;

    /**
     * @var string 防护级别，loose/normal/strict/stricter/custom
     */
    public $Level;

    /**
     * @var string 模式 block-阻断；observe-观察模式；close-关闭
     */
    public $Mode;

    /**
     * @var WafRule 门神黑白名单
     */
    public $WafRules;

    /**
     * @var AiRule AI规则引擎防护
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiRule;

    /**
     * @param string $Switch 开关
     * @param string $Level 防护级别，loose/normal/strict/stricter/custom
     * @param string $Mode 模式 block-阻断；observe-观察模式；close-关闭
     * @param WafRule $WafRules 门神黑白名单
     * @param AiRule $AiRule AI规则引擎防护
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("WafRules",$param) and $param["WafRules"] !== null) {
            $this->WafRules = new WafRule();
            $this->WafRules->deserialize($param["WafRules"]);
        }

        if (array_key_exists("AiRule",$param) and $param["AiRule"] !== null) {
            $this->AiRule = new AiRule();
            $this->AiRule->deserialize($param["AiRule"]);
        }
    }
}
