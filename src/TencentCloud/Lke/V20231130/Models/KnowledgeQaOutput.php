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
 * @method boolean getShowQuestionClarify() 获取是否展示问题澄清开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowQuestionClarify(boolean $ShowQuestionClarify) 设置是否展示问题澄清开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseQuestionClarify() 获取是否打开问题澄清
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseQuestionClarify(boolean $UseQuestionClarify) 设置是否打开问题澄清
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuestionClarifyKeywords() 获取问题澄清关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestionClarifyKeywords(array $QuestionClarifyKeywords) 设置问题澄清关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseRecommended() 获取是否打开推荐问题开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseRecommended(boolean $UseRecommended) 设置是否打开推荐问题开关
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
     * @var boolean 是否展示问题澄清开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowQuestionClarify;

    /**
     * @var boolean 是否打开问题澄清
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseQuestionClarify;

    /**
     * @var array 问题澄清关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuestionClarifyKeywords;

    /**
     * @var boolean 是否打开推荐问题开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseRecommended;

    /**
     * @param integer $Method 输出方式 1：流式 2：非流式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseGeneralKnowledge 通用模型回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BareAnswer 未知回复语，300字符以内
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowQuestionClarify 是否展示问题澄清开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseQuestionClarify 是否打开问题澄清
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuestionClarifyKeywords 问题澄清关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseRecommended 是否打开推荐问题开关
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

        if (array_key_exists("ShowQuestionClarify",$param) and $param["ShowQuestionClarify"] !== null) {
            $this->ShowQuestionClarify = $param["ShowQuestionClarify"];
        }

        if (array_key_exists("UseQuestionClarify",$param) and $param["UseQuestionClarify"] !== null) {
            $this->UseQuestionClarify = $param["UseQuestionClarify"];
        }

        if (array_key_exists("QuestionClarifyKeywords",$param) and $param["QuestionClarifyKeywords"] !== null) {
            $this->QuestionClarifyKeywords = $param["QuestionClarifyKeywords"];
        }

        if (array_key_exists("UseRecommended",$param) and $param["UseRecommended"] !== null) {
            $this->UseRecommended = $param["UseRecommended"];
        }
    }
}
