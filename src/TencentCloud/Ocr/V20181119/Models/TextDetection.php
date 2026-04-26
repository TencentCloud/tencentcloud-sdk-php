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
 * 文字识别结果
 *
 * @method string getDetectedText() 获取<p>识别出的文本行内容。</p>
 * @method void setDetectedText(string $DetectedText) 设置<p>识别出的文本行内容。</p>
 * @method integer getConfidence() 获取<p>置信度 0 ~100。</p>
 * @method void setConfidence(integer $Confidence) 设置<p>置信度 0 ~100。</p>
 * @method array getPolygon() 获取<p>文本行坐标，以四个顶点坐标表示。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolygon(array $Polygon) 设置<p>文本行坐标，以四个顶点坐标表示。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvancedInfo() 获取<p>此字段为扩展字段。GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。</p>
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置<p>此字段为扩展字段。GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。</p>
 * @method ItemCoord getItemPolygon() 获取<p>文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）。</p>
 * @method void setItemPolygon(ItemCoord $ItemPolygon) 设置<p>文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）。</p>
 * @method array getWords() 获取<p>识别出来的单字信息包括单字（包括单字Character和单字置信度confidence）， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
 * @method void setWords(array $Words) 设置<p>识别出来的单字信息包括单字（包括单字Character和单字置信度confidence）， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
 * @method array getWordCoordPoint() 获取<p>单字在原图中的四点坐标， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
 * @method void setWordCoordPoint(array $WordCoordPoint) 设置<p>单字在原图中的四点坐标， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
 * @method string getLanguage() 获取<p>语种信息。注：仅ConfigID配置为MulOCR时支持。zh:中文; en:英文; tha:泰语; may:印尼语; jap:日语; kor:韩语; spa:西班牙语; fre:法语; ger:德语; por:葡萄牙语; vie:越南语; may:马来语; rus:俄语; ita:意大利语; hol:荷兰语; swe:瑞典语; fin:芬兰语; nor:挪威语; hun:匈牙利语; ara:阿拉伯语; hi:印地语。</p>
 * @method void setLanguage(string $Language) 设置<p>语种信息。注：仅ConfigID配置为MulOCR时支持。zh:中文; en:英文; tha:泰语; may:印尼语; jap:日语; kor:韩语; spa:西班牙语; fre:法语; ger:德语; por:葡萄牙语; vie:越南语; may:马来语; rus:俄语; ita:意大利语; hol:荷兰语; swe:瑞典语; fin:芬兰语; nor:挪威语; hun:匈牙利语; ara:阿拉伯语; hi:印地语。</p>
 */
class TextDetection extends AbstractModel
{
    /**
     * @var string <p>识别出的文本行内容。</p>
     */
    public $DetectedText;

    /**
     * @var integer <p>置信度 0 ~100。</p>
     */
    public $Confidence;

    /**
     * @var array <p>文本行坐标，以四个顶点坐标表示。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Polygon;

    /**
     * @var string <p>此字段为扩展字段。GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。</p>
     */
    public $AdvancedInfo;

    /**
     * @var ItemCoord <p>文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）。</p>
     */
    public $ItemPolygon;

    /**
     * @var array <p>识别出来的单字信息包括单字（包括单字Character和单字置信度confidence）， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
     */
    public $Words;

    /**
     * @var array <p>单字在原图中的四点坐标， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
     */
    public $WordCoordPoint;

    /**
     * @var string <p>语种信息。注：仅ConfigID配置为MulOCR时支持。zh:中文; en:英文; tha:泰语; may:印尼语; jap:日语; kor:韩语; spa:西班牙语; fre:法语; ger:德语; por:葡萄牙语; vie:越南语; may:马来语; rus:俄语; ita:意大利语; hol:荷兰语; swe:瑞典语; fin:芬兰语; nor:挪威语; hun:匈牙利语; ara:阿拉伯语; hi:印地语。</p>
     */
    public $Language;

    /**
     * @param string $DetectedText <p>识别出的文本行内容。</p>
     * @param integer $Confidence <p>置信度 0 ~100。</p>
     * @param array $Polygon <p>文本行坐标，以四个顶点坐标表示。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvancedInfo <p>此字段为扩展字段。GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。</p>
     * @param ItemCoord $ItemPolygon <p>文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）。</p>
     * @param array $Words <p>识别出来的单字信息包括单字（包括单字Character和单字置信度confidence）， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
     * @param array $WordCoordPoint <p>单字在原图中的四点坐标， 支持识别的接口：GeneralBasicOCR、GeneralAccurateOCR。</p>
     * @param string $Language <p>语种信息。注：仅ConfigID配置为MulOCR时支持。zh:中文; en:英文; tha:泰语; may:印尼语; jap:日语; kor:韩语; spa:西班牙语; fre:法语; ger:德语; por:葡萄牙语; vie:越南语; may:马来语; rus:俄语; ita:意大利语; hol:荷兰语; swe:瑞典语; fin:芬兰语; nor:挪威语; hun:匈牙利语; ara:阿拉伯语; hi:印地语。</p>
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
        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("ItemPolygon",$param) and $param["ItemPolygon"] !== null) {
            $this->ItemPolygon = new ItemCoord();
            $this->ItemPolygon->deserialize($param["ItemPolygon"]);
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new DetectedWords();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("WordCoordPoint",$param) and $param["WordCoordPoint"] !== null) {
            $this->WordCoordPoint = [];
            foreach ($param["WordCoordPoint"] as $key => $value){
                $obj = new DetectedWordCoordPoint();
                $obj->deserialize($value);
                array_push($this->WordCoordPoint, $obj);
            }
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}
