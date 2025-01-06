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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 问答对信息
 *
 * @method string getQaId() 获取问答id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaId(string $QaId) 设置问答id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnswer() 获取答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(string $Answer) 设置答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttributeLabels() 获取属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeLabels(array $AttributeLabels) 设置属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class QaItem extends AbstractModel
{
    /**
     * @var string 问答id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaId;

    /**
     * @var string 问题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var string 答案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array 属性标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeLabels;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $QaId 问答id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 问题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Answer 答案
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttributeLabels 属性标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("QaId",$param) and $param["QaId"] !== null) {
            $this->QaId = $param["QaId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("AttributeLabels",$param) and $param["AttributeLabels"] !== null) {
            $this->AttributeLabels = [];
            foreach ($param["AttributeLabels"] as $key => $value){
                $obj = new AttributeLabelReferItem();
                $obj->deserialize($value);
                array_push($this->AttributeLabels, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
