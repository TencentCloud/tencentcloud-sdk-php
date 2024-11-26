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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型token统计信息
 *
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstTokenCost() 获取首Token耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTokenCost(integer $FirstTokenCost) 设置首Token耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCost() 获取总耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCost(integer $TotalCost) 设置总耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputTokens() 获取输入Token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTokens(integer $InputTokens) 设置输入Token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputTokens() 获取输出Token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputTokens(integer $OutputTokens) 设置输出Token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTokens() 获取总Token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTokens(integer $TotalTokens) 设置总Token数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatisticInfo extends AbstractModel
{
    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var integer 首Token耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTokenCost;

    /**
     * @var integer 总耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCost;

    /**
     * @var integer 输入Token数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTokens;

    /**
     * @var integer 输出Token数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputTokens;

    /**
     * @var integer 总Token数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTokens;

    /**
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstTokenCost 首Token耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCost 总耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputTokens 输入Token数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputTokens 输出Token数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTokens 总Token数量
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("FirstTokenCost",$param) and $param["FirstTokenCost"] !== null) {
            $this->FirstTokenCost = $param["FirstTokenCost"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
