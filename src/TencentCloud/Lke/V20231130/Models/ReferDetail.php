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
 * 引用来源详情
 *
 * @method string getReferBizId() 获取引用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferBizId(string $ReferBizId) 设置引用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDocType() 获取文档类型 (1 QA, 2 文档段)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocType(integer $DocType) 设置文档类型 (1 QA, 2 文档段)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocName() 获取文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocName(string $DocName) 设置文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageContent() 获取分片内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageContent(string $PageContent) 设置分片内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnswer() 获取答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(string $Answer) 设置答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getConfidence() 获取置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(float $Confidence) 设置置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMark() 获取标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMark(integer $Mark) 设置标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHighlights() 获取分片高亮内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlights(array $Highlights) 设置分片高亮内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgData() 获取原始内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgData(string $OrgData) 设置原始内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPageInfos() 获取页码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageInfos(array $PageInfos) 设置页码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSheetInfos() 获取sheet信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSheetInfos(array $SheetInfos) 设置sheet信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocBizId() 获取文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeBizId() 获取知识库ID
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置知识库ID
 */
class ReferDetail extends AbstractModel
{
    /**
     * @var string 引用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferBizId;

    /**
     * @var integer 文档类型 (1 QA, 2 文档段)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocType;

    /**
     * @var string 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocName;

    /**
     * @var string 分片内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageContent;

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
     * @var float 置信度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var integer 标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mark;

    /**
     * @var array 分片高亮内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Highlights;

    /**
     * @var string 原始内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgData;

    /**
     * @var array 页码信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageInfos;

    /**
     * @var array sheet信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SheetInfos;

    /**
     * @var string 文档ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocBizId;

    /**
     * @var string 知识库ID
     */
    public $KnowledgeBizId;

    /**
     * @param string $ReferBizId 引用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DocType 文档类型 (1 QA, 2 文档段)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocName 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageContent 分片内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 问题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Answer 答案
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Confidence 置信度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mark 标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Highlights 分片高亮内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgData 原始内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PageInfos 页码信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SheetInfos sheet信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocBizId 文档ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeBizId 知识库ID
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
        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("DocType",$param) and $param["DocType"] !== null) {
            $this->DocType = $param["DocType"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("Highlights",$param) and $param["Highlights"] !== null) {
            $this->Highlights = [];
            foreach ($param["Highlights"] as $key => $value){
                $obj = new Highlight();
                $obj->deserialize($value);
                array_push($this->Highlights, $obj);
            }
        }

        if (array_key_exists("OrgData",$param) and $param["OrgData"] !== null) {
            $this->OrgData = $param["OrgData"];
        }

        if (array_key_exists("PageInfos",$param) and $param["PageInfos"] !== null) {
            $this->PageInfos = $param["PageInfos"];
        }

        if (array_key_exists("SheetInfos",$param) and $param["SheetInfos"] !== null) {
            $this->SheetInfos = $param["SheetInfos"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }
    }
}
