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
 * 安全Bot配置
 *
 * @method string getSwitch() 获取开关。
1. on 开启
2. off 关闭
 * @method void setSwitch(string $Switch) 设置开关。
1. on 开启
2. off 关闭
 * @method BotManagedRule getManagedRule() 获取通用详细基础规则。
 * @method void setManagedRule(BotManagedRule $ManagedRule) 设置通用详细基础规则。
 * @method BotManagedRule getUaBotRule() 获取ua基础规则。
 * @method void setUaBotRule(BotManagedRule $UaBotRule) 设置ua基础规则。
 * @method BotManagedRule getIspBotRule() 获取isp基础规则。
 * @method void setIspBotRule(BotManagedRule $IspBotRule) 设置isp基础规则。
 * @method BotPortraitRule getPortraitRule() 获取用户画像规则。
 * @method void setPortraitRule(BotPortraitRule $PortraitRule) 设置用户画像规则。
 * @method IntelligenceRule getIntelligenceRule() 获取Bot智能分析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntelligenceRule(IntelligenceRule $IntelligenceRule) 设置Bot智能分析。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotConfig extends AbstractModel
{
    /**
     * @var string 开关。
1. on 开启
2. off 关闭
     */
    public $Switch;

    /**
     * @var BotManagedRule 通用详细基础规则。
     */
    public $ManagedRule;

    /**
     * @var BotManagedRule ua基础规则。
     */
    public $UaBotRule;

    /**
     * @var BotManagedRule isp基础规则。
     */
    public $IspBotRule;

    /**
     * @var BotPortraitRule 用户画像规则。
     */
    public $PortraitRule;

    /**
     * @var IntelligenceRule Bot智能分析。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntelligenceRule;

    /**
     * @param string $Switch 开关。
1. on 开启
2. off 关闭
     * @param BotManagedRule $ManagedRule 通用详细基础规则。
     * @param BotManagedRule $UaBotRule ua基础规则。
     * @param BotManagedRule $IspBotRule isp基础规则。
     * @param BotPortraitRule $PortraitRule 用户画像规则。
     * @param IntelligenceRule $IntelligenceRule Bot智能分析。
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

        if (array_key_exists("ManagedRule",$param) and $param["ManagedRule"] !== null) {
            $this->ManagedRule = new BotManagedRule();
            $this->ManagedRule->deserialize($param["ManagedRule"]);
        }

        if (array_key_exists("UaBotRule",$param) and $param["UaBotRule"] !== null) {
            $this->UaBotRule = new BotManagedRule();
            $this->UaBotRule->deserialize($param["UaBotRule"]);
        }

        if (array_key_exists("IspBotRule",$param) and $param["IspBotRule"] !== null) {
            $this->IspBotRule = new BotManagedRule();
            $this->IspBotRule->deserialize($param["IspBotRule"]);
        }

        if (array_key_exists("PortraitRule",$param) and $param["PortraitRule"] !== null) {
            $this->PortraitRule = new BotPortraitRule();
            $this->PortraitRule->deserialize($param["PortraitRule"]);
        }

        if (array_key_exists("IntelligenceRule",$param) and $param["IntelligenceRule"] !== null) {
            $this->IntelligenceRule = new IntelligenceRule();
            $this->IntelligenceRule->deserialize($param["IntelligenceRule"]);
        }
    }
}
