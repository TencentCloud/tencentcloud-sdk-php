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
 * bot 用户画像规则
 *
 * @method string getSwitch() 获取本功能的开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置本功能的开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleID() 获取本规则的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置本规则的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlgManagedIds() 获取JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgManagedIds(array $AlgManagedIds) 设置JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCapManagedIds() 获取数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapManagedIds(array $CapManagedIds) 设置数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMonManagedIds() 获取观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonManagedIds(array $MonManagedIds) 设置观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDropManagedIds() 获取拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropManagedIds(array $DropManagedIds) 设置拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getManagedIds() 获取保留。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagedIds(array $ManagedIds) 设置保留。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransManagedIds() 获取保留。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransManagedIds(array $TransManagedIds) 设置保留。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotPortraitRule extends AbstractModel
{
    /**
     * @var string 本功能的开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var integer 本规则的ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var array JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgManagedIds;

    /**
     * @var array 数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapManagedIds;

    /**
     * @var array 观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonManagedIds;

    /**
     * @var array 拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropManagedIds;

    /**
     * @var array 保留。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagedIds;

    /**
     * @var array 保留。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransManagedIds;

    /**
     * @param string $Switch 本功能的开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleID 本规则的ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlgManagedIds JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CapManagedIds 数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MonManagedIds 观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DropManagedIds 拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ManagedIds 保留。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransManagedIds 保留。
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

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("AlgManagedIds",$param) and $param["AlgManagedIds"] !== null) {
            $this->AlgManagedIds = $param["AlgManagedIds"];
        }

        if (array_key_exists("CapManagedIds",$param) and $param["CapManagedIds"] !== null) {
            $this->CapManagedIds = $param["CapManagedIds"];
        }

        if (array_key_exists("MonManagedIds",$param) and $param["MonManagedIds"] !== null) {
            $this->MonManagedIds = $param["MonManagedIds"];
        }

        if (array_key_exists("DropManagedIds",$param) and $param["DropManagedIds"] !== null) {
            $this->DropManagedIds = $param["DropManagedIds"];
        }

        if (array_key_exists("ManagedIds",$param) and $param["ManagedIds"] !== null) {
            $this->ManagedIds = $param["ManagedIds"];
        }

        if (array_key_exists("TransManagedIds",$param) and $param["TransManagedIds"] !== null) {
            $this->TransManagedIds = $param["TransManagedIds"];
        }
    }
}
