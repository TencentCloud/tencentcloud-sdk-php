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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型对话多维分析行
 *
 * @method string getDimensionValue() 获取<p>维度取值。空值保留为空字符串。</p>
 * @method void setDimensionValue(string $DimensionValue) 设置<p>维度取值。空值保留为空字符串。</p>
 * @method integer getConversationCount() 获取<p>该取值的对话次数。</p>
 * @method void setConversationCount(integer $ConversationCount) 设置<p>该取值的对话次数。</p>
 * @method float getValue() 获取<p>该取值上当前指标的值。没有可计算样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置<p>该取值上当前指标的值。没有可计算样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TDEMSSEDimensionRow extends AbstractModel
{
    /**
     * @var string <p>维度取值。空值保留为空字符串。</p>
     */
    public $DimensionValue;

    /**
     * @var integer <p>该取值的对话次数。</p>
     */
    public $ConversationCount;

    /**
     * @var float <p>该取值上当前指标的值。没有可计算样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $DimensionValue <p>维度取值。空值保留为空字符串。</p>
     * @param integer $ConversationCount <p>该取值的对话次数。</p>
     * @param float $Value <p>该取值上当前指标的值。没有可计算样本时为 null。</p>
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
        if (array_key_exists("DimensionValue",$param) and $param["DimensionValue"] !== null) {
            $this->DimensionValue = $param["DimensionValue"];
        }

        if (array_key_exists("ConversationCount",$param) and $param["ConversationCount"] !== null) {
            $this->ConversationCount = $param["ConversationCount"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
