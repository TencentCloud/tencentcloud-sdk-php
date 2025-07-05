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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库检索策略
 *
 * @method integer getStrategyType() 获取检索策略类型 0:混合检索，1：语义检索
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(integer $StrategyType) 设置检索策略类型 0:混合检索，1：语义检索
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTableEnhancement() 获取Excel检索增强开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableEnhancement(boolean $TableEnhancement) 设置Excel检索增强开关
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchStrategy extends AbstractModel
{
    /**
     * @var integer 检索策略类型 0:混合检索，1：语义检索
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var boolean Excel检索增强开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableEnhancement;

    /**
     * @param integer $StrategyType 检索策略类型 0:混合检索，1：语义检索
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TableEnhancement Excel检索增强开关
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TableEnhancement",$param) and $param["TableEnhancement"] !== null) {
            $this->TableEnhancement = $param["TableEnhancement"];
        }
    }
}
