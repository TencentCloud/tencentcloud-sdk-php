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
 * @method string getImageBase64() 获取图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
 * @method integer getCardType() 获取0 自动，自动判断输入证件的类型
1 身份证人像面，指定输入证件类型为二代身份证人像面
2 身份证国徽面，指定输入证件类型为二代身份证国徽面
3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面
4 临时身份证人像面，指定输入证件类型为临时身份证人像面
5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面
6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面
7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面
8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面
9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面
10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面
11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面
12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面
该参数如果不填，将为您自动判断卡证类型。
 * @method void setCardType(integer $CardType) 设置0 自动，自动判断输入证件的类型
1 身份证人像面，指定输入证件类型为二代身份证人像面
2 身份证国徽面，指定输入证件类型为二代身份证国徽面
3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面
4 临时身份证人像面，指定输入证件类型为临时身份证人像面
5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面
6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面
7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面
8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面
9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面
10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面
11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面
12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面
该参数如果不填，将为您自动判断卡证类型。
 * @method boolean getEnablePortrait() 获取默认值为false，打开返回证件头像切图。
 * @method void setEnablePortrait(boolean $EnablePortrait) 设置默认值为false，打开返回证件头像切图。
 * @method boolean getEnableCropImage() 获取默认值为false，打开返回证件主体切图。
 * @method void setEnableCropImage(boolean $EnableCropImage) 设置默认值为false，打开返回证件主体切图。
 * @method boolean getEnableBorderCheck() 获取默认值为false，打开返回边缘完整性判断。
 * @method void setEnableBorderCheck(boolean $EnableBorderCheck) 设置默认值为false，打开返回边缘完整性判断。
 * @method boolean getEnableOcclusionCheck() 获取默认值为false，打开返回证件是否被遮挡。
 * @method void setEnableOcclusionCheck(boolean $EnableOcclusionCheck) 设置默认值为false，打开返回证件是否被遮挡。
 * @method boolean getEnableCopyCheck() 获取默认值为false，打开返回证件是否存在复印。
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) 设置默认值为false，打开返回证件是否存在复印。
 * @method boolean getEnableReshootCheck() 获取默认值为false，打开返回证件是否存在屏幕翻拍。
 * @method void setEnableReshootCheck(boolean $EnableReshootCheck) 设置默认值为false，打开返回证件是否存在屏幕翻拍。
 * @method boolean getEnablePSCheck() 获取默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效
 * @method void setEnablePSCheck(boolean $EnablePSCheck) 设置默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效
 * @method boolean getEnableWordCheck() 获取默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效
 * @method void setEnableWordCheck(boolean $EnableWordCheck) 设置默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效
 * @method boolean getEnableQualityCheck() 获取默认值为false，打开返回证件是否模糊。
 * @method void setEnableQualityCheck(boolean $EnableQualityCheck) 设置默认值为false，打开返回证件是否模糊。
 * @method boolean getEnableElectronCheck() 获取默认值为false，打开返回是否存在电子身份证判断。
 * @method void setEnableElectronCheck(boolean $EnableElectronCheck) 设置默认值为false，打开返回是否存在电子身份证判断。
 */
class RecognizeValidIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
     */
    public $ImageUrl;

    /**
     * @var integer 0 自动，自动判断输入证件的类型
1 身份证人像面，指定输入证件类型为二代身份证人像面
2 身份证国徽面，指定输入证件类型为二代身份证国徽面
3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面
4 临时身份证人像面，指定输入证件类型为临时身份证人像面
5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面
6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面
7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面
8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面
9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面
10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面
11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面
12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面
该参数如果不填，将为您自动判断卡证类型。
     */
    public $CardType;

    /**
     * @var boolean 默认值为false，打开返回证件头像切图。
     */
    public $EnablePortrait;

    /**
     * @var boolean 默认值为false，打开返回证件主体切图。
     */
    public $EnableCropImage;

    /**
     * @var boolean 默认值为false，打开返回边缘完整性判断。
     */
    public $EnableBorderCheck;

    /**
     * @var boolean 默认值为false，打开返回证件是否被遮挡。
     */
    public $EnableOcclusionCheck;

    /**
     * @var boolean 默认值为false，打开返回证件是否存在复印。
     */
    public $EnableCopyCheck;

    /**
     * @var boolean 默认值为false，打开返回证件是否存在屏幕翻拍。
     */
    public $EnableReshootCheck;

    /**
     * @var boolean 默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效
     */
    public $EnablePSCheck;

    /**
     * @var boolean 默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效
     */
    public $EnableWordCheck;

    /**
     * @var boolean 默认值为false，打开返回证件是否模糊。
     */
    public $EnableQualityCheck;

    /**
     * @var boolean 默认值为false，打开返回是否存在电子身份证判断。
     */
    public $EnableElectronCheck;

    /**
     * @param string $ImageBase64 图片的 Base64 值。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。要求图片经Base64编码后不超过 10M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
     * @param integer $CardType 0 自动，自动判断输入证件的类型
1 身份证人像面，指定输入证件类型为二代身份证人像面
2 身份证国徽面，指定输入证件类型为二代身份证国徽面
3 身份证人像国徽面，指定输入证件类型为二代身份证人像面或者国徽面
4 临时身份证人像面，指定输入证件类型为临时身份证人像面
5 临时身份证国徽面，指定输入证件类型为临时身份证国徽面
6 临时身份证人像国徽面，指定输入证件类型为临时身份证人像面或者国徽面
7 港澳台居住证人像面，指定输入证件类型为港澳台居住证人像面
8 港澳台居住证国徽面，指定输入证件类型为港澳台居住证国徽面
9 港澳台居住证人像国徽面，指定输入证件类型为港澳台居住证人像面或者国徽面
10 外国人永久居留身份证人像面，指定输入证件类型为外国人永久居留证人像面
11 外国人永久居留身份证国徽面，指定输入证件类型为外国人永久居留证国徽面
12 外国人永久居留身份证人像国徽面，指定输入证件类型为外国人永久居留证人像或者国徽面
该参数如果不填，将为您自动判断卡证类型。
     * @param boolean $EnablePortrait 默认值为false，打开返回证件头像切图。
     * @param boolean $EnableCropImage 默认值为false，打开返回证件主体切图。
     * @param boolean $EnableBorderCheck 默认值为false，打开返回边缘完整性判断。
     * @param boolean $EnableOcclusionCheck 默认值为false，打开返回证件是否被遮挡。
     * @param boolean $EnableCopyCheck 默认值为false，打开返回证件是否存在复印。
     * @param boolean $EnableReshootCheck 默认值为false，打开返回证件是否存在屏幕翻拍。
     * @param boolean $EnablePSCheck 默认值为false，打开返回证件是否存在PS。类型为：临时、港澳台居住证、外国人居住证失效
     * @param boolean $EnableWordCheck 默认值为false，打开返回字段级反光和字段级完整性告警。类型为：临时、港澳台居住证、外国人居住证失效
     * @param boolean $EnableQualityCheck 默认值为false，打开返回证件是否模糊。
     * @param boolean $EnableElectronCheck 默认值为false，打开返回是否存在电子身份证判断。
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
