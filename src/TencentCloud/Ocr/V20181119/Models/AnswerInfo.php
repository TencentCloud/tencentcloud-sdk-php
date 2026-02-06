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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单题所有答案区域批改信息
 *
 * @method string getHandwriteInfo() 获取手写答案内容，比如选择题的手写的选项、填空题的手写内容
 * @method void setHandwriteInfo(string $HandwriteInfo) 设置手写答案内容，比如选择题的手写的选项、填空题的手写内容
 * @method boolean getIsCorrect() 获取答案是否正确
 * @method void setIsCorrect(boolean $IsCorrect) 设置答案是否正确
 * @method string getAnswerAnalysis() 获取答案分析结果

 * @method void setAnswerAnalysis(string $AnswerAnalysis) 设置答案分析结果

 * @method array getHandwriteInfoPositions() 获取答案区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHandwriteInfoPositions(array $HandwriteInfoPositions) 设置答案区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRightAnswer() 获取返回正确答案内容

QuestionConfigMap配置了（“TrueAnswer”：1）才生效返回
 * @method void setRightAnswer(string $RightAnswer) 设置返回正确答案内容

QuestionConfigMap配置了（“TrueAnswer”：1）才生效返回
 * @method array getKnowledgePoints() 获取返回题目的知识点内容

QuestionConfigMap配置了（“KnowledgePoints”：1）才生效返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgePoints(array $KnowledgePoints) 设置返回题目的知识点内容

QuestionConfigMap配置了（“KnowledgePoints”：1）才生效返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnswerInfo extends AbstractModel
{
    /**
     * @var string 手写答案内容，比如选择题的手写的选项、填空题的手写内容
     */
    public $HandwriteInfo;

    /**
     * @var boolean 答案是否正确
     */
    public $IsCorrect;

    /**
     * @var string 答案分析结果

     */
    public $AnswerAnalysis;

    /**
     * @var array 答案区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HandwriteInfoPositions;

    /**
     * @var string 返回正确答案内容

QuestionConfigMap配置了（“TrueAnswer”：1）才生效返回
     */
    public $RightAnswer;

    /**
     * @var array 返回题目的知识点内容

QuestionConfigMap配置了（“KnowledgePoints”：1）才生效返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgePoints;

    /**
     * @param string $HandwriteInfo 手写答案内容，比如选择题的手写的选项、填空题的手写内容
     * @param boolean $IsCorrect 答案是否正确
     * @param string $AnswerAnalysis 答案分析结果

     * @param array $HandwriteInfoPositions 答案区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RightAnswer 返回正确答案内容

QuestionConfigMap配置了（“TrueAnswer”：1）才生效返回
     * @param array $KnowledgePoints 返回题目的知识点内容

QuestionConfigMap配置了（“KnowledgePoints”：1）才生效返回
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
        if (array_key_exists("HandwriteInfo",$param) and $param["HandwriteInfo"] !== null) {
            $this->HandwriteInfo = $param["HandwriteInfo"];
        }

        if (array_key_exists("IsCorrect",$param) and $param["IsCorrect"] !== null) {
            $this->IsCorrect = $param["IsCorrect"];
        }

        if (array_key_exists("AnswerAnalysis",$param) and $param["AnswerAnalysis"] !== null) {
            $this->AnswerAnalysis = $param["AnswerAnalysis"];
        }

        if (array_key_exists("HandwriteInfoPositions",$param) and $param["HandwriteInfoPositions"] !== null) {
            $this->HandwriteInfoPositions = $param["HandwriteInfoPositions"];
        }

        if (array_key_exists("RightAnswer",$param) and $param["RightAnswer"] !== null) {
            $this->RightAnswer = $param["RightAnswer"];
        }

        if (array_key_exists("KnowledgePoints",$param) and $param["KnowledgePoints"] !== null) {
            $this->KnowledgePoints = $param["KnowledgePoints"];
        }
    }
}
