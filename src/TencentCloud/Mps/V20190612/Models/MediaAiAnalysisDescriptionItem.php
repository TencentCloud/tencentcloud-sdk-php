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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能描述信息
 *
 * @method string getDescription() 获取智能描述。
 * @method void setDescription(string $Description) 设置智能描述。
 * @method float getConfidence() 获取智能描述的可信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置智能描述的可信度，取值范围是 0 到 100。
 * @method string getTitle() 获取智能描述标题
 * @method void setTitle(string $Title) 设置智能描述标题
 * @method array getKeywords() 获取智能描述关键词
 * @method void setKeywords(array $Keywords) 设置智能描述关键词
 * @method array getParagraphs() 获取分段结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParagraphs(array $Paragraphs) 设置分段结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMindMapUrl() 获取摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMindMapUrl(string $MindMapUrl) 设置摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaAiAnalysisDescriptionItem extends AbstractModel
{
    /**
     * @var string 智能描述。
     */
    public $Description;

    /**
     * @var float 智能描述的可信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var string 智能描述标题
     */
    public $Title;

    /**
     * @var array 智能描述关键词
     */
    public $Keywords;

    /**
     * @var array 分段结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paragraphs;

    /**
     * @var string 摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MindMapUrl;

    /**
     * @param string $Description 智能描述。
     * @param float $Confidence 智能描述的可信度，取值范围是 0 到 100。
     * @param string $Title 智能描述标题
     * @param array $Keywords 智能描述关键词
     * @param array $Paragraphs 分段结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MindMapUrl 摘要思维导图地址
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new AiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }

        if (array_key_exists("MindMapUrl",$param) and $param["MindMapUrl"] !== null) {
            $this->MindMapUrl = $param["MindMapUrl"];
        }
    }
}
