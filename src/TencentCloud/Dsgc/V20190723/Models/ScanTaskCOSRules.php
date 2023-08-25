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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感识别任务COS识别规则
 *
 * @method COSDataRule getRegexRule() 获取regex规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegexRule(COSDataRule $RegexRule) 设置regex规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取规则状态；0 不启用, 1 启用
 * @method void setStatus(integer $Status) 设置规则状态；0 不启用, 1 启用
 * @method COSDataRule getKeywordRule() 获取关键词规则内容组，最大支持5个关键词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywordRule(COSDataRule $KeywordRule) 设置关键词规则内容组，最大支持5个关键词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method COSDataRule getIgnoreStringRule() 获取忽略词规则内容组，最大支持5个忽略词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreStringRule(COSDataRule $IgnoreStringRule) 设置忽略词规则内容组，最大支持5个忽略词。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMatch() 获取最大匹配距离，默认值为100。上限为500.
 * @method void setMaxMatch(integer $MaxMatch) 设置最大匹配距离，默认值为100。上限为500.
 */
class ScanTaskCOSRules extends AbstractModel
{
    /**
     * @var COSDataRule regex规则内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegexRule;

    /**
     * @var integer 规则状态；0 不启用, 1 启用
     */
    public $Status;

    /**
     * @var COSDataRule 关键词规则内容组，最大支持5个关键词。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeywordRule;

    /**
     * @var COSDataRule 忽略词规则内容组，最大支持5个忽略词。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreStringRule;

    /**
     * @var integer 最大匹配距离，默认值为100。上限为500.
     */
    public $MaxMatch;

    /**
     * @param COSDataRule $RegexRule regex规则内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 规则状态；0 不启用, 1 启用
     * @param COSDataRule $KeywordRule 关键词规则内容组，最大支持5个关键词。
注意：此字段可能返回 null，表示取不到有效值。
     * @param COSDataRule $IgnoreStringRule 忽略词规则内容组，最大支持5个忽略词。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMatch 最大匹配距离，默认值为100。上限为500.
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
        if (array_key_exists("RegexRule",$param) and $param["RegexRule"] !== null) {
            $this->RegexRule = new COSDataRule();
            $this->RegexRule->deserialize($param["RegexRule"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeywordRule",$param) and $param["KeywordRule"] !== null) {
            $this->KeywordRule = new COSDataRule();
            $this->KeywordRule->deserialize($param["KeywordRule"]);
        }

        if (array_key_exists("IgnoreStringRule",$param) and $param["IgnoreStringRule"] !== null) {
            $this->IgnoreStringRule = new COSDataRule();
            $this->IgnoreStringRule->deserialize($param["IgnoreStringRule"]);
        }

        if (array_key_exists("MaxMatch",$param) and $param["MaxMatch"] !== null) {
            $this->MaxMatch = $param["MaxMatch"];
        }
    }
}
