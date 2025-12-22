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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签重新标记配置。
允许动态重写目标、警报、抓取样本和远程写入样本的标签集。
 *
 * @method string getAction() 获取基于正则表达式匹配执行的动作。
- replace: Label替换, 必填: SourceLabels, Separator, Regex, TargetLabel, Replacement
- labeldrop: 丢弃Label, 必填: Regex
- labelkeep: 保留Label, 必填: Regex
- lowercase: 小写化, 必填: SourceLabels, Separator, TargetLabel
- uppercase: 大写化, 必填: SourceLabels, Separator, TargetLabel
- dropequal: 丢弃指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- keepequal: 保留指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- drop: 丢弃指标-正则匹配, 必填: SourceLabels, Separator, Regex
- keep: 保留指标-正则匹配, 必填: SourceLabels, Separator, Regex
- hashmod:哈希取模, 必填: SourceLabels, Separator, TargetLabel, Modulus
- labelmap:Label映射, 必填: Regex, Replacement
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置基于正则表达式匹配执行的动作。
- replace: Label替换, 必填: SourceLabels, Separator, Regex, TargetLabel, Replacement
- labeldrop: 丢弃Label, 必填: Regex
- labelkeep: 保留Label, 必填: Regex
- lowercase: 小写化, 必填: SourceLabels, Separator, TargetLabel
- uppercase: 大写化, 必填: SourceLabels, Separator, TargetLabel
- dropequal: 丢弃指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- keepequal: 保留指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- drop: 丢弃指标-正则匹配, 必填: SourceLabels, Separator, Regex
- keep: 保留指标-正则匹配, 必填: SourceLabels, Separator, Regex
- hashmod:哈希取模, 必填: SourceLabels, Separator, TargetLabel, Modulus
- labelmap:Label映射, 必填: Regex, Replacement
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceLabels() 获取原始label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceLabels(array $SourceLabels) 设置原始label
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeparator() 获取原始label连接符。 必填时不能为空串， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeparator(string $Separator) 设置原始label连接符。 必填时不能为空串， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetLabel() 获取目标label。必填时不能为空串，校验格式：`^[a-zA-Z_][a-zA-Z0-9_]*$` ， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetLabel(string $TargetLabel) 设置目标label。必填时不能为空串，校验格式：`^[a-zA-Z_][a-zA-Z0-9_]*$` ， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplacement() 获取替换值。如果正则表达式匹配，则对其执行替换操作。
- 必填时不能为空串，长度不能超过256
- 当action为LabelMap时， Replacement 校验格式：`^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplacement(string $Replacement) 设置替换值。如果正则表达式匹配，则对其执行替换操作。
- 必填时不能为空串，长度不能超过256
- 当action为LabelMap时， Replacement 校验格式：`^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegex() 获取正则表达式。提取与之匹配值。必填时不能为空串，校验必须是一个合法的 RE2 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(string $Regex) 设置正则表达式。提取与之匹配值。必填时不能为空串，校验必须是一个合法的 RE2 
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModulus() 获取获取源标签值的哈希值。必填时不能为空,不能为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModulus(integer $Modulus) 设置获取源标签值的哈希值。必填时不能为空,不能为0
注意：此字段可能返回 null，表示取不到有效值。
 */
class Relabeling extends AbstractModel
{
    /**
     * @var string 基于正则表达式匹配执行的动作。
- replace: Label替换, 必填: SourceLabels, Separator, Regex, TargetLabel, Replacement
- labeldrop: 丢弃Label, 必填: Regex
- labelkeep: 保留Label, 必填: Regex
- lowercase: 小写化, 必填: SourceLabels, Separator, TargetLabel
- uppercase: 大写化, 必填: SourceLabels, Separator, TargetLabel
- dropequal: 丢弃指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- keepequal: 保留指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- drop: 丢弃指标-正则匹配, 必填: SourceLabels, Separator, Regex
- keep: 保留指标-正则匹配, 必填: SourceLabels, Separator, Regex
- hashmod:哈希取模, 必填: SourceLabels, Separator, TargetLabel, Modulus
- labelmap:Label映射, 必填: Regex, Replacement
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var array 原始label
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceLabels;

    /**
     * @var string 原始label连接符。 必填时不能为空串， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Separator;

    /**
     * @var string 目标label。必填时不能为空串，校验格式：`^[a-zA-Z_][a-zA-Z0-9_]*$` ， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetLabel;

    /**
     * @var string 替换值。如果正则表达式匹配，则对其执行替换操作。
- 必填时不能为空串，长度不能超过256
- 当action为LabelMap时， Replacement 校验格式：`^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replacement;

    /**
     * @var string 正则表达式。提取与之匹配值。必填时不能为空串，校验必须是一个合法的 RE2 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @var integer 获取源标签值的哈希值。必填时不能为空,不能为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Modulus;

    /**
     * @param string $Action 基于正则表达式匹配执行的动作。
- replace: Label替换, 必填: SourceLabels, Separator, Regex, TargetLabel, Replacement
- labeldrop: 丢弃Label, 必填: Regex
- labelkeep: 保留Label, 必填: Regex
- lowercase: 小写化, 必填: SourceLabels, Separator, TargetLabel
- uppercase: 大写化, 必填: SourceLabels, Separator, TargetLabel
- dropequal: 丢弃指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- keepequal: 保留指标-完全匹配, 必填: SourceLabels, Separator, TargetLabel
- drop: 丢弃指标-正则匹配, 必填: SourceLabels, Separator, Regex
- keep: 保留指标-正则匹配, 必填: SourceLabels, Separator, Regex
- hashmod:哈希取模, 必填: SourceLabels, Separator, TargetLabel, Modulus
- labelmap:Label映射, 必填: Regex, Replacement
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceLabels 原始label
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Separator 原始label连接符。 必填时不能为空串， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetLabel 目标label。必填时不能为空串，校验格式：`^[a-zA-Z_][a-zA-Z0-9_]*$` ， 长度不能超过256
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Replacement 替换值。如果正则表达式匹配，则对其执行替换操作。
- 必填时不能为空串，长度不能超过256
- 当action为LabelMap时， Replacement 校验格式：`^(?:(?:[a-zA-Z_]|\$(?:\{\w+\}|\w+))+\w*)+$`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Regex 正则表达式。提取与之匹配值。必填时不能为空串，校验必须是一个合法的 RE2 
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Modulus 获取源标签值的哈希值。必填时不能为空,不能为0
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SourceLabels",$param) and $param["SourceLabels"] !== null) {
            $this->SourceLabels = $param["SourceLabels"];
        }

        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }

        if (array_key_exists("TargetLabel",$param) and $param["TargetLabel"] !== null) {
            $this->TargetLabel = $param["TargetLabel"];
        }

        if (array_key_exists("Replacement",$param) and $param["Replacement"] !== null) {
            $this->Replacement = $param["Replacement"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Modulus",$param) and $param["Modulus"] !== null) {
            $this->Modulus = $param["Modulus"];
        }
    }
}
