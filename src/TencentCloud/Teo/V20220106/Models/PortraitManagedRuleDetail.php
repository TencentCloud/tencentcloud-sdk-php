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
 * 用户画像规则详情
 *
 * @method integer getRuleId() 获取规则唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTypeName() 获取规则所属类型的名字, botdb(用户画像)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则所属类型的名字, botdb(用户画像)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClassificationId() 获取规则内的功能分类Id(扫描器，Bot行为等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationId(integer $ClassificationId) 设置规则内的功能分类Id(扫描器，Bot行为等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取规则当前所属动作状态(block, alg, ...)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置规则当前所属动作状态(block, alg, ...)
注意：此字段可能返回 null，表示取不到有效值。
 */
class PortraitManagedRuleDetail extends AbstractModel
{
    /**
     * @var integer 规则唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 规则所属类型的名字, botdb(用户画像)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTypeName;

    /**
     * @var integer 规则内的功能分类Id(扫描器，Bot行为等)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationId;

    /**
     * @var string 规则当前所属动作状态(block, alg, ...)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $RuleId 规则唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTypeName 规则所属类型的名字, botdb(用户画像)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClassificationId 规则内的功能分类Id(扫描器，Bot行为等)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 规则当前所属动作状态(block, alg, ...)
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("ClassificationId",$param) and $param["ClassificationId"] !== null) {
            $this->ClassificationId = $param["ClassificationId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
