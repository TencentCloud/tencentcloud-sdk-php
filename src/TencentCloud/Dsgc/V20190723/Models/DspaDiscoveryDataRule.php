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
 * 敏感数据识别规则
 *
 * @method string getRuleType() 获取规则类型；取值：
keyword 关键字, 
regex 正则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置规则类型；取值：
keyword 关键字, 
regex 正则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleContent() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleContent(string $RuleContent) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtendParameters() 获取该字段是针对规则类型RuleType为keyword类型时的一个扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendParameters(array $ExtendParameters) 设置该字段是针对规则类型RuleType为keyword类型时的一个扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryDataRule extends AbstractModel
{
    /**
     * @var string 规则类型；取值：
keyword 关键字, 
regex 正则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleContent;

    /**
     * @var array 该字段是针对规则类型RuleType为keyword类型时的一个扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendParameters;

    /**
     * @param string $RuleType 规则类型；取值：
keyword 关键字, 
regex 正则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleContent 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtendParameters 该字段是针对规则类型RuleType为keyword类型时的一个扩展属性
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("ExtendParameters",$param) and $param["ExtendParameters"] !== null) {
            $this->ExtendParameters = [];
            foreach ($param["ExtendParameters"] as $key => $value){
                $obj = new DatagovRuleExtendParameter();
                $obj->deserialize($value);
                array_push($this->ExtendParameters, $obj);
            }
        }
    }
}
