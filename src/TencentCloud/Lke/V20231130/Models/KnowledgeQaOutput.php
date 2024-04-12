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
 * 应用管理输出配置
 *
 * @method integer getMethod() 获取输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(integer $Method) 设置输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseGeneralKnowledge() 获取通用模型回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseGeneralKnowledge(boolean $UseGeneralKnowledge) 设置通用模型回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBareAnswer() 获取未知回复语，300字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBareAnswer(string $BareAnswer) 设置未知回复语，300字符以内
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeQaOutput extends AbstractModel
{
    /**
     * @var integer 输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var boolean 通用模型回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseGeneralKnowledge;

    /**
     * @var string 未知回复语，300字符以内
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BareAnswer;

    /**
     * @param integer $Method 输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseGeneralKnowledge 通用模型回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BareAnswer 未知回复语，300字符以内
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("UseGeneralKnowledge",$param) and $param["UseGeneralKnowledge"] !== null) {
            $this->UseGeneralKnowledge = $param["UseGeneralKnowledge"];
        }

        if (array_key_exists("BareAnswer",$param) and $param["BareAnswer"] !== null) {
            $this->BareAnswer = $param["BareAnswer"];
        }
    }
}
