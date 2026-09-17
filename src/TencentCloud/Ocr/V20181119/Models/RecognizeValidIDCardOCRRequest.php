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
 * RecognizeValidIDCardOCR请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。</p>
 * @method integer getCardType() 获取<p>0 自动，自动判断输入证件的类型<br>1 身份证人像面，指定输入证件类型为二代身份证人像面<br>2 身份证国徽面，指定输入证件类型为二代身份证国徽面<br>3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面<br>4 临时身份证人像面，指定输入证件类型为临时身份证人像面<br>5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面<br>6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面<br>7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面<br>8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面<br>9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面<br>10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面<br>11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面<br>12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面<br>该参数如果不填，将为您自动判断卡证类型。</p>
 * @method void setCardType(integer $CardType) 设置<p>0 自动，自动判断输入证件的类型<br>1 身份证人像面，指定输入证件类型为二代身份证人像面<br>2 身份证国徽面，指定输入证件类型为二代身份证国徽面<br>3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面<br>4 临时身份证人像面，指定输入证件类型为临时身份证人像面<br>5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面<br>6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面<br>7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面<br>8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面<br>9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面<br>10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面<br>11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面<br>12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面<br>该参数如果不填，将为您自动判断卡证类型。</p>
 * @method boolean getEnablePortrait() 获取<p>默认值为false，打开返回证件头像切图。</p>
 * @method void setEnablePortrait(boolean $EnablePortrait) 设置<p>默认值为false，打开返回证件头像切图。</p>
 * @method boolean getEnableCropImage() 获取<p>默认值为false，打开返回证件主体切图。</p>
 * @method void setEnableCropImage(boolean $EnableCropImage) 设置<p>默认值为false，打开返回证件主体切图。</p>
 * @method boolean getEnableBorderCheck() 获取<p>默认值为false，打开返回边缘完整性判断。</p>
 * @method void setEnableBorderCheck(boolean $EnableBorderCheck) 设置<p>默认值为false，打开返回边缘完整性判断。</p>
 * @method boolean getEnableOcclusionCheck() 获取<p>默认值为false，打开返回证件是否被遮挡。</p>
 * @method void setEnableOcclusionCheck(boolean $EnableOcclusionCheck) 设置<p>默认值为false，打开返回证件是否被遮挡。</p>
 * @method boolean getEnableCopyCheck() 获取<p>默认值为false，打开返回证件是否存在复印。</p>
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) 设置<p>默认值为false，打开返回证件是否存在复印。</p>
 * @method boolean getEnableReshootCheck() 获取<p>默认值为false，打开返回证件是否存在屏幕翻拍。</p>
 * @method void setEnableReshootCheck(boolean $EnableReshootCheck) 设置<p>默认值为false，打开返回证件是否存在屏幕翻拍。</p>
 * @method boolean getEnableReflectCheck() 获取<p>默认值为false，打开返回是否存在反光。</p>
 * @method void setEnableReflectCheck(boolean $EnableReflectCheck) 设置<p>默认值为false，打开返回是否存在反光。</p>
 * @method boolean getEnablePSCheck() 获取<p>默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效</p>
 * @method void setEnablePSCheck(boolean $EnablePSCheck) 设置<p>默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效</p>
 * @method boolean getEnableWordCheck() 获取<p>默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效</p>
 * @method void setEnableWordCheck(boolean $EnableWordCheck) 设置<p>默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效</p>
 * @method boolean getEnableQualityCheck() 获取<p>默认值为false，打开返回证件是否模糊。</p>
 * @method void setEnableQualityCheck(boolean $EnableQualityCheck) 设置<p>默认值为false，打开返回证件是否模糊。</p>
 * @method boolean getEnableElectronCheck() 获取<p>默认值为false，打开返回是否存在电子身份证判断。</p>
 * @method void setEnableElectronCheck(boolean $EnableElectronCheck) 设置<p>默认值为false，打开返回是否存在电子身份证判断。</p>
 */
class RecognizeValidIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>0 自动，自动判断输入证件的类型<br>1 身份证人像面，指定输入证件类型为二代身份证人像面<br>2 身份证国徽面，指定输入证件类型为二代身份证国徽面<br>3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面<br>4 临时身份证人像面，指定输入证件类型为临时身份证人像面<br>5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面<br>6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面<br>7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面<br>8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面<br>9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面<br>10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面<br>11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面<br>12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面<br>该参数如果不填，将为您自动判断卡证类型。</p>
     */
    public $CardType;

    /**
     * @var boolean <p>默认值为false，打开返回证件头像切图。</p>
     */
    public $EnablePortrait;

    /**
     * @var boolean <p>默认值为false，打开返回证件主体切图。</p>
     */
    public $EnableCropImage;

    /**
     * @var boolean <p>默认值为false，打开返回边缘完整性判断。</p>
     */
    public $EnableBorderCheck;

    /**
     * @var boolean <p>默认值为false，打开返回证件是否被遮挡。</p>
     */
    public $EnableOcclusionCheck;

    /**
     * @var boolean <p>默认值为false，打开返回证件是否存在复印。</p>
     */
    public $EnableCopyCheck;

    /**
     * @var boolean <p>默认值为false，打开返回证件是否存在屏幕翻拍。</p>
     */
    public $EnableReshootCheck;

    /**
     * @var boolean <p>默认值为false，打开返回是否存在反光。</p>
     */
    public $EnableReflectCheck;

    /**
     * @var boolean <p>默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效</p>
     */
    public $EnablePSCheck;

    /**
     * @var boolean <p>默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效</p>
     */
    public $EnableWordCheck;

    /**
     * @var boolean <p>默认值为false，打开返回证件是否模糊。</p>
     */
    public $EnableQualityCheck;

    /**
     * @var boolean <p>默认值为false，打开返回是否存在电子身份证判断。</p>
     */
    public $EnableElectronCheck;

    /**
     * @param string $ImageBase64 <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。</p>
     * @param integer $CardType <p>0 自动，自动判断输入证件的类型<br>1 身份证人像面，指定输入证件类型为二代身份证人像面<br>2 身份证国徽面，指定输入证件类型为二代身份证国徽面<br>3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面<br>4 临时身份证人像面，指定输入证件类型为临时身份证人像面<br>5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面<br>6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面<br>7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面<br>8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面<br>9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面<br>10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面<br>11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面<br>12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面<br>该参数如果不填，将为您自动判断卡证类型。</p>
     * @param boolean $EnablePortrait <p>默认值为false，打开返回证件头像切图。</p>
     * @param boolean $EnableCropImage <p>默认值为false，打开返回证件主体切图。</p>
     * @param boolean $EnableBorderCheck <p>默认值为false，打开返回边缘完整性判断。</p>
     * @param boolean $EnableOcclusionCheck <p>默认值为false，打开返回证件是否被遮挡。</p>
     * @param boolean $EnableCopyCheck <p>默认值为false，打开返回证件是否存在复印。</p>
     * @param boolean $EnableReshootCheck <p>默认值为false，打开返回证件是否存在屏幕翻拍。</p>
     * @param boolean $EnableReflectCheck <p>默认值为false，打开返回是否存在反光。</p>
     * @param boolean $EnablePSCheck <p>默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效</p>
     * @param boolean $EnableWordCheck <p>默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效</p>
     * @param boolean $EnableQualityCheck <p>默认值为false，打开返回证件是否模糊。</p>
     * @param boolean $EnableElectronCheck <p>默认值为false，打开返回是否存在电子身份证判断。</p>
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("EnablePortrait",$param) and $param["EnablePortrait"] !== null) {
            $this->EnablePortrait = $param["EnablePortrait"];
        }

        if (array_key_exists("EnableCropImage",$param) and $param["EnableCropImage"] !== null) {
            $this->EnableCropImage = $param["EnableCropImage"];
        }

        if (array_key_exists("EnableBorderCheck",$param) and $param["EnableBorderCheck"] !== null) {
            $this->EnableBorderCheck = $param["EnableBorderCheck"];
        }

        if (array_key_exists("EnableOcclusionCheck",$param) and $param["EnableOcclusionCheck"] !== null) {
            $this->EnableOcclusionCheck = $param["EnableOcclusionCheck"];
        }

        if (array_key_exists("EnableCopyCheck",$param) and $param["EnableCopyCheck"] !== null) {
            $this->EnableCopyCheck = $param["EnableCopyCheck"];
        }

        if (array_key_exists("EnableReshootCheck",$param) and $param["EnableReshootCheck"] !== null) {
            $this->EnableReshootCheck = $param["EnableReshootCheck"];
        }

        if (array_key_exists("EnableReflectCheck",$param) and $param["EnableReflectCheck"] !== null) {
            $this->EnableReflectCheck = $param["EnableReflectCheck"];
        }

        if (array_key_exists("EnablePSCheck",$param) and $param["EnablePSCheck"] !== null) {
            $this->EnablePSCheck = $param["EnablePSCheck"];
        }

        if (array_key_exists("EnableWordCheck",$param) and $param["EnableWordCheck"] !== null) {
            $this->EnableWordCheck = $param["EnableWordCheck"];
        }

        if (array_key_exists("EnableQualityCheck",$param) and $param["EnableQualityCheck"] !== null) {
            $this->EnableQualityCheck = $param["EnableQualityCheck"];
        }

        if (array_key_exists("EnableElectronCheck",$param) and $param["EnableElectronCheck"] !== null) {
            $this->EnableElectronCheck = $param["EnableElectronCheck"];
        }
    }
}
