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
 * Bot智能分析规则详情
 *
 * @method string getLabel() 获取恶意BOT
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置恶意BOT
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置动作
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntelligenceRuleItem extends AbstractModel
{
    /**
     * @var string 恶意BOT
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @param string $Label 恶意BOT
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 动作
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
