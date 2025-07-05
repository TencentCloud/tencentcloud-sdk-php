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
 * RecognizeGeneralInvoice请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method array getTypes() 获取需要识别的票据类型列表，为空或不填表示识别全部类型。当传入单个类型时，图片均采用该票类型进行处理。
暂不支持多个参数进行局部控制。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
21：网约车行程单
22：海关进/出口货物报关单
23：海外发票
24：购物小票
25：销货清单
-1：其他发票
 * @method void setTypes(array $Types) 设置需要识别的票据类型列表，为空或不填表示识别全部类型。当传入单个类型时，图片均采用该票类型进行处理。
暂不支持多个参数进行局部控制。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
21：网约车行程单
22：海关进/出口货物报关单
23：海外发票
24：购物小票
25：销货清单
-1：其他发票
 * @method boolean getEnableOther() 获取是否开启其他票识别，默认值为true，开启后可支持其他发票的智能识别。	
 * @method void setEnableOther(boolean $EnableOther) 设置是否开启其他票识别，默认值为true，开启后可支持其他发票的智能识别。	
 * @method boolean getEnablePdf() 获取是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
 * @method void setEnablePdf(boolean $EnablePdf) 设置是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
 * @method boolean getEnableMultiplePage() 获取是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后EnablePdf和PdfPageNumber入参不进行控制。
 * @method void setEnableMultiplePage(boolean $EnableMultiplePage) 设置是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后EnablePdf和PdfPageNumber入参不进行控制。
 * @method boolean getEnableCutImage() 获取是否返回切割图片base64，默认值为false。
 * @method void setEnableCutImage(boolean $EnableCutImage) 设置是否返回切割图片base64，默认值为false。
 * @method boolean getEnableItemPolygon() 获取是否打开字段坐标返回。默认为false。
 * @method void setEnableItemPolygon(boolean $EnableItemPolygon) 设置是否打开字段坐标返回。默认为false。
 * @method boolean getEnableQRCode() 获取是否开启二维码识别。
 * @method void setEnableQRCode(boolean $EnableQRCode) 设置是否开启二维码识别。
 * @method boolean getEnableSeal() 获取是否开启印章识别，默认为false
 * @method void setEnableSeal(boolean $EnableSeal) 设置是否开启印章识别，默认为false
 */
class RecognizeGeneralInvoiceRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var array 需要识别的票据类型列表，为空或不填表示识别全部类型。当传入单个类型时，图片均采用该票类型进行处理。
暂不支持多个参数进行局部控制。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
21：网约车行程单
22：海关进/出口货物报关单
23：海外发票
24：购物小票
25：销货清单
-1：其他发票
     */
    public $Types;

    /**
     * @var boolean 是否开启其他票识别，默认值为true，开启后可支持其他发票的智能识别。	
     */
    public $EnableOther;

    /**
     * @var boolean 是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
     */
    public $EnablePdf;

    /**
     * @var integer 需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @var boolean 是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后EnablePdf和PdfPageNumber入参不进行控制。
     */
    public $EnableMultiplePage;

    /**
     * @var boolean 是否返回切割图片base64，默认值为false。
     */
    public $EnableCutImage;

    /**
     * @var boolean 是否打开字段坐标返回。默认为false。
     */
    public $EnableItemPolygon;

    /**
     * @var boolean 是否开启二维码识别。
     */
    public $EnableQRCode;

    /**
     * @var boolean 是否开启印章识别，默认为false
     */
    public $EnableSeal;

    /**
     * @param string $ImageBase64 图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。支持的图片像素：单边介于20-10000px之间。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param array $Types 需要识别的票据类型列表，为空或不填表示识别全部类型。当传入单个类型时，图片均采用该票类型进行处理。
暂不支持多个参数进行局部控制。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
21：网约车行程单
22：海关进/出口货物报关单
23：海外发票
24：购物小票
25：销货清单
-1：其他发票
     * @param boolean $EnableOther 是否开启其他票识别，默认值为true，开启后可支持其他发票的智能识别。	
     * @param boolean $EnablePdf 是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
     * @param boolean $EnableMultiplePage 是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后EnablePdf和PdfPageNumber入参不进行控制。
     * @param boolean $EnableCutImage 是否返回切割图片base64，默认值为false。
     * @param boolean $EnableItemPolygon 是否打开字段坐标返回。默认为false。
     * @param boolean $EnableQRCode 是否开启二维码识别。
     * @param boolean $EnableSeal 是否开启印章识别，默认为false
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

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("EnableOther",$param) and $param["EnableOther"] !== null) {
            $this->EnableOther = $param["EnableOther"];
        }

        if (array_key_exists("EnablePdf",$param) and $param["EnablePdf"] !== null) {
            $this->EnablePdf = $param["EnablePdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("EnableMultiplePage",$param) and $param["EnableMultiplePage"] !== null) {
            $this->EnableMultiplePage = $param["EnableMultiplePage"];
        }

        if (array_key_exists("EnableCutImage",$param) and $param["EnableCutImage"] !== null) {
            $this->EnableCutImage = $param["EnableCutImage"];
        }

        if (array_key_exists("EnableItemPolygon",$param) and $param["EnableItemPolygon"] !== null) {
            $this->EnableItemPolygon = $param["EnableItemPolygon"];
        }

        if (array_key_exists("EnableQRCode",$param) and $param["EnableQRCode"] !== null) {
            $this->EnableQRCode = $param["EnableQRCode"];
        }

        if (array_key_exists("EnableSeal",$param) and $param["EnableSeal"] !== null) {
            $this->EnableSeal = $param["EnableSeal"];
        }
    }
}
