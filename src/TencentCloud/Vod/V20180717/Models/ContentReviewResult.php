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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片智能内容识别任务结果
 *
 * @method string getType() 获取结果类型，取值范围：
<li>Porn.Image：图片画面中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Image：图片画面中的鉴别令人不安全的信息结果；</li>
<li>Political.Image：图片画面中的鉴别令人不适宜信息结果；</li>
<li>Porn.Ocr：图片 OCR 文字中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Ocr：图片 OCR 文字中的鉴别令人不安全的信息结果；</li>
<li>Political.Ocr：图片 OCR 文字中的鉴别令人不适宜信息结果。</li>
 * @method void setType(string $Type) 设置结果类型，取值范围：
<li>Porn.Image：图片画面中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Image：图片画面中的鉴别令人不安全的信息结果；</li>
<li>Political.Image：图片画面中的鉴别令人不适宜信息结果；</li>
<li>Porn.Ocr：图片 OCR 文字中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Ocr：图片 OCR 文字中的鉴别令人不安全的信息结果；</li>
<li>Political.Ocr：图片 OCR 文字中的鉴别令人不适宜信息结果。</li>
 * @method PornImageResult getPornImageResult() 获取图片画面中的鉴别令人反感的信息结果，当 Type 为 Porn.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornImageResult(PornImageResult $PornImageResult) 设置图片画面中的鉴别令人反感的信息结果，当 Type 为 Porn.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TerrorismImageResult getTerrorismImageResult() 获取图片画面中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismImageResult(TerrorismImageResult $TerrorismImageResult) 设置图片画面中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PoliticalImageResult getPoliticalImageResult() 获取图片画面中的鉴别令人不适宜信息结果，当 Type 为 Political.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalImageResult(PoliticalImageResult $PoliticalImageResult) 设置图片画面中的鉴别令人不适宜信息结果，当 Type 为 Political.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContentReviewOcrResult getPornOcrResult() 获取图片 OCR 文字中的鉴别令人反感的信息结果，当 Type 为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornOcrResult(ContentReviewOcrResult $PornOcrResult) 设置图片 OCR 文字中的鉴别令人反感的信息结果，当 Type 为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContentReviewOcrResult getTerrorismOcrResult() 获取图片 OCR 中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismOcrResult(ContentReviewOcrResult $TerrorismOcrResult) 设置图片 OCR 中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContentReviewOcrResult getPoliticalOcrResult() 获取图片 OCR 文字中的鉴别令人不适宜信息结果，当 Type 为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalOcrResult(ContentReviewOcrResult $PoliticalOcrResult) 设置图片 OCR 文字中的鉴别令人不适宜信息结果，当 Type 为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContentReviewResult extends AbstractModel
{
    /**
     * @var string 结果类型，取值范围：
<li>Porn.Image：图片画面中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Image：图片画面中的鉴别令人不安全的信息结果；</li>
<li>Political.Image：图片画面中的鉴别令人不适宜信息结果；</li>
<li>Porn.Ocr：图片 OCR 文字中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Ocr：图片 OCR 文字中的鉴别令人不安全的信息结果；</li>
<li>Political.Ocr：图片 OCR 文字中的鉴别令人不适宜信息结果。</li>
     */
    public $Type;

    /**
     * @var PornImageResult 图片画面中的鉴别令人反感的信息结果，当 Type 为 Porn.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornImageResult;

    /**
     * @var TerrorismImageResult 图片画面中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismImageResult;

    /**
     * @var PoliticalImageResult 图片画面中的鉴别令人不适宜信息结果，当 Type 为 Political.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalImageResult;

    /**
     * @var ContentReviewOcrResult 图片 OCR 文字中的鉴别令人反感的信息结果，当 Type 为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornOcrResult;

    /**
     * @var ContentReviewOcrResult 图片 OCR 中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismOcrResult;

    /**
     * @var ContentReviewOcrResult 图片 OCR 文字中的鉴别令人不适宜信息结果，当 Type 为 Political.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalOcrResult;

    /**
     * @param string $Type 结果类型，取值范围：
<li>Porn.Image：图片画面中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Image：图片画面中的鉴别令人不安全的信息结果；</li>
<li>Political.Image：图片画面中的鉴别令人不适宜信息结果；</li>
<li>Porn.Ocr：图片 OCR 文字中的鉴别令人反感的信息结果；</li>
<li>Terrorism.Ocr：图片 OCR 文字中的鉴别令人不安全的信息结果；</li>
<li>Political.Ocr：图片 OCR 文字中的鉴别令人不适宜信息结果。</li>
     * @param PornImageResult $PornImageResult 图片画面中的鉴别令人反感的信息结果，当 Type 为 Porn.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TerrorismImageResult $TerrorismImageResult 图片画面中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PoliticalImageResult $PoliticalImageResult 图片画面中的鉴别令人不适宜信息结果，当 Type 为 Political.Image 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContentReviewOcrResult $PornOcrResult 图片 OCR 文字中的鉴别令人反感的信息结果，当 Type 为 Porn.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContentReviewOcrResult $TerrorismOcrResult 图片 OCR 中的鉴别令人不安全的信息结果，当 Type 为 Terrorism.Ocr 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContentReviewOcrResult $PoliticalOcrResult 图片 OCR 文字中的鉴别令人不适宜信息结果，当 Type 为 Political.Ocr 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PornImageResult",$param) and $param["PornImageResult"] !== null) {
            $this->PornImageResult = new PornImageResult();
            $this->PornImageResult->deserialize($param["PornImageResult"]);
        }

        if (array_key_exists("TerrorismImageResult",$param) and $param["TerrorismImageResult"] !== null) {
            $this->TerrorismImageResult = new TerrorismImageResult();
            $this->TerrorismImageResult->deserialize($param["TerrorismImageResult"]);
        }

        if (array_key_exists("PoliticalImageResult",$param) and $param["PoliticalImageResult"] !== null) {
            $this->PoliticalImageResult = new PoliticalImageResult();
            $this->PoliticalImageResult->deserialize($param["PoliticalImageResult"]);
        }

        if (array_key_exists("PornOcrResult",$param) and $param["PornOcrResult"] !== null) {
            $this->PornOcrResult = new ContentReviewOcrResult();
            $this->PornOcrResult->deserialize($param["PornOcrResult"]);
        }

        if (array_key_exists("TerrorismOcrResult",$param) and $param["TerrorismOcrResult"] !== null) {
            $this->TerrorismOcrResult = new ContentReviewOcrResult();
            $this->TerrorismOcrResult->deserialize($param["TerrorismOcrResult"]);
        }

        if (array_key_exists("PoliticalOcrResult",$param) and $param["PoliticalOcrResult"] !== null) {
            $this->PoliticalOcrResult = new ContentReviewOcrResult();
            $this->PoliticalOcrResult->deserialize($param["PoliticalOcrResult"]);
        }
    }
}
