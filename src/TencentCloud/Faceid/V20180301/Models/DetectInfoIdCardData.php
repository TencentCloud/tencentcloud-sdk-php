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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核身身份证图片信息
 *
 * @method string getOcrFront() 获取OCR正面照片的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrFront(string $OcrFront) 设置OCR正面照片的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrBack() 获取OCR反面照片的base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrBack(string $OcrBack) 设置OCR反面照片的base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessedFrontImage() 获取旋转裁边后的正面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessedFrontImage(string $ProcessedFrontImage) 设置旋转裁边后的正面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessedBackImage() 获取旋转裁边后的背面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessedBackImage(string $ProcessedBackImage) 设置旋转裁边后的背面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatar() 获取身份证正面人像图base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置身份证正面人像图base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarnInfos() 获取身份证人像面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnInfos(array $WarnInfos) 设置身份证人像面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackWarnInfos() 获取身份证国徽面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackWarnInfos(array $BackWarnInfos) 设置身份证国徽面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectInfoIdCardData extends AbstractModel
{
    /**
     * @var string OCR正面照片的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrFront;

    /**
     * @var string OCR反面照片的base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrBack;

    /**
     * @var string 旋转裁边后的正面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessedFrontImage;

    /**
     * @var string 旋转裁边后的背面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessedBackImage;

    /**
     * @var string 身份证正面人像图base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var array 身份证人像面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnInfos;

    /**
     * @var array 身份证国徽面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackWarnInfos;

    /**
     * @param string $OcrFront OCR正面照片的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrBack OCR反面照片的base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessedFrontImage 旋转裁边后的正面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessedBackImage 旋转裁边后的背面照片base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Avatar 身份证正面人像图base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WarnInfos 身份证人像面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackWarnInfos 身份证国徽面告警码，开启身份证告警功能后才会返回，返回数组中可能出现的告警码如下：
-9100 身份证有效日期不合法告警，
-9101 身份证边框不完整告警，
-9102 身份证复印件告警，
-9103 身份证翻拍告警，
-9105 身份证框内遮挡告警，
-9104 临时身份证告警，
-9106 身份证 PS 告警，
-9107 身份证反光告警。
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
        if (array_key_exists("OcrFront",$param) and $param["OcrFront"] !== null) {
            $this->OcrFront = $param["OcrFront"];
        }

        if (array_key_exists("OcrBack",$param) and $param["OcrBack"] !== null) {
            $this->OcrBack = $param["OcrBack"];
        }

        if (array_key_exists("ProcessedFrontImage",$param) and $param["ProcessedFrontImage"] !== null) {
            $this->ProcessedFrontImage = $param["ProcessedFrontImage"];
        }

        if (array_key_exists("ProcessedBackImage",$param) and $param["ProcessedBackImage"] !== null) {
            $this->ProcessedBackImage = $param["ProcessedBackImage"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("WarnInfos",$param) and $param["WarnInfos"] !== null) {
            $this->WarnInfos = $param["WarnInfos"];
        }

        if (array_key_exists("BackWarnInfos",$param) and $param["BackWarnInfos"] !== null) {
            $this->BackWarnInfos = $param["BackWarnInfos"];
        }
    }
}
