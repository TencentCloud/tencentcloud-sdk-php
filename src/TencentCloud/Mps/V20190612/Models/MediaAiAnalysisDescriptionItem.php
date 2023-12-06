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
 * @method array getParagraphs() 获取分段结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParagraphs(array $Paragraphs) 设置分段结果。
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
     * @var array 分段结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paragraphs;

    /**
     * @param string $Description 智能描述。
     * @param float $Confidence 智能描述的可信度，取值范围是 0 到 100。
     * @param array $Paragraphs 分段结果。
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

        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new AiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }
    }
}
