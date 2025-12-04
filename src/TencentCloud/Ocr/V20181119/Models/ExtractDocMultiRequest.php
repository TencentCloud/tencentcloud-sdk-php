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
 * ExtractDocMulti请求参数结构体
 *
 * @method string getImageUrl() 获取图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method string getImageBase64() 获取图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为前3页。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为前3页。
 * @method array getItemNames() 获取自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=["姓名","性别"]
 * @method void setItemNames(array $ItemNames) 设置自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=["姓名","性别"]
 * @method boolean getItemNamesShowMode() 获取true：仅输出自定义字段
false：输出默认字段+自定义字段
默认true
 * @method void setItemNamesShowMode(boolean $ItemNamesShowMode) 设置true：仅输出自定义字段
false：输出默认字段+自定义字段
默认true
 * @method boolean getReturnFullText() 获取是否开启全文字段识别
 * @method void setReturnFullText(boolean $ReturnFullText) 设置是否开启全文字段识别
 * @method string getConfigId() 获取配置id支持：
General -- 通用场景 
InvoiceEng -- 国际invoice模板 
WayBillEng --海运订单模板
CustomsDeclaration -- 进出口报关单
WeightNote -- 磅单
MedicalMeter -- 血压仪表识别
BillOfLading -- 海运提单
EntrustmentBook -- 海运托书
Statement -- 对账单识别模板
BookingConfirmation -- 配舱通知书识别模板
AirWayBill -- 航空运单识别模板
Table -- 表格模板
SteelLabel -- 实物标签识别模板
CarInsurance -- 车辆保险单识别模板
MultiRealEstateCertificate -- 房产材料识别模板
MultiRealEstateMaterial -- 房产证明识别模板
HongKongUtilityBill -- 中国香港水电煤单识别模板
OverseasCheques -- 海外支票
RegistrationCertificate -- 备案证
​GridPhoto -- 电网系统照片
​SignaturePage -- 签署页
​SalesDeliveryNote -- 销售发货单



 * @method void setConfigId(string $ConfigId) 设置配置id支持：
General -- 通用场景 
InvoiceEng -- 国际invoice模板 
WayBillEng --海运订单模板
CustomsDeclaration -- 进出口报关单
WeightNote -- 磅单
MedicalMeter -- 血压仪表识别
BillOfLading -- 海运提单
EntrustmentBook -- 海运托书
Statement -- 对账单识别模板
BookingConfirmation -- 配舱通知书识别模板
AirWayBill -- 航空运单识别模板
Table -- 表格模板
SteelLabel -- 实物标签识别模板
CarInsurance -- 车辆保险单识别模板
MultiRealEstateCertificate -- 房产材料识别模板
MultiRealEstateMaterial -- 房产证明识别模板
HongKongUtilityBill -- 中国香港水电煤单识别模板
OverseasCheques -- 海外支票
RegistrationCertificate -- 备案证
​GridPhoto -- 电网系统照片
​SignaturePage -- 签署页
​SalesDeliveryNote -- 销售发货单



 * @method boolean getEnableCoord() 获取是否开启全文字段坐标值的识别
 * @method void setEnableCoord(boolean $EnableCoord) 设置是否开启全文字段坐标值的识别
 * @method boolean getOutputParentKey() 获取是否开启父子key识别，默认是
 * @method void setOutputParentKey(boolean $OutputParentKey) 设置是否开启父子key识别，默认是
 * @method ConfigAdvanced getConfigAdvanced() 获取模板的单个属性配置
 * @method void setConfigAdvanced(ConfigAdvanced $ConfigAdvanced) 设置模板的单个属性配置
 * @method string getOutputLanguage() 获取cn时，添加的key为中文  
en时，添加的key为英语
 * @method void setOutputLanguage(string $OutputLanguage) 设置cn时，添加的key为中文  
en时，添加的key为英语
 */
class ExtractDocMultiRequest extends AbstractModel
{
    /**
     * @var string 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为前3页。
     */
    public $PdfPageNumber;

    /**
     * @var array 自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=["姓名","性别"]
     */
    public $ItemNames;

    /**
     * @var boolean true：仅输出自定义字段
false：输出默认字段+自定义字段
默认true
     */
    public $ItemNamesShowMode;

    /**
     * @var boolean 是否开启全文字段识别
     */
    public $ReturnFullText;

    /**
     * @var string 配置id支持：
General -- 通用场景 
InvoiceEng -- 国际invoice模板 
WayBillEng --海运订单模板
CustomsDeclaration -- 进出口报关单
WeightNote -- 磅单
MedicalMeter -- 血压仪表识别
BillOfLading -- 海运提单
EntrustmentBook -- 海运托书
Statement -- 对账单识别模板
BookingConfirmation -- 配舱通知书识别模板
AirWayBill -- 航空运单识别模板
Table -- 表格模板
SteelLabel -- 实物标签识别模板
CarInsurance -- 车辆保险单识别模板
MultiRealEstateCertificate -- 房产材料识别模板
MultiRealEstateMaterial -- 房产证明识别模板
HongKongUtilityBill -- 中国香港水电煤单识别模板
OverseasCheques -- 海外支票
RegistrationCertificate -- 备案证
​GridPhoto -- 电网系统照片
​SignaturePage -- 签署页
​SalesDeliveryNote -- 销售发货单



     */
    public $ConfigId;

    /**
     * @var boolean 是否开启全文字段坐标值的识别
     */
    public $EnableCoord;

    /**
     * @var boolean 是否开启父子key识别，默认是
     */
    public $OutputParentKey;

    /**
     * @var ConfigAdvanced 模板的单个属性配置
     */
    public $ConfigAdvanced;

    /**
     * @var string cn时，添加的key为中文  
en时，添加的key为英语
     */
    public $OutputLanguage;

    /**
     * @param string $ImageUrl 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param string $ImageBase64 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为前3页。
     * @param array $ItemNames 自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=["姓名","性别"]
     * @param boolean $ItemNamesShowMode true：仅输出自定义字段
false：输出默认字段+自定义字段
默认true
     * @param boolean $ReturnFullText 是否开启全文字段识别
     * @param string $ConfigId 配置id支持：
General -- 通用场景 
InvoiceEng -- 国际invoice模板 
WayBillEng --海运订单模板
CustomsDeclaration -- 进出口报关单
WeightNote -- 磅单
MedicalMeter -- 血压仪表识别
BillOfLading -- 海运提单
EntrustmentBook -- 海运托书
Statement -- 对账单识别模板
BookingConfirmation -- 配舱通知书识别模板
AirWayBill -- 航空运单识别模板
Table -- 表格模板
SteelLabel -- 实物标签识别模板
CarInsurance -- 车辆保险单识别模板
MultiRealEstateCertificate -- 房产材料识别模板
MultiRealEstateMaterial -- 房产证明识别模板
HongKongUtilityBill -- 中国香港水电煤单识别模板
OverseasCheques -- 海外支票
RegistrationCertificate -- 备案证
​GridPhoto -- 电网系统照片
​SignaturePage -- 签署页
​SalesDeliveryNote -- 销售发货单



     * @param boolean $EnableCoord 是否开启全文字段坐标值的识别
     * @param boolean $OutputParentKey 是否开启父子key识别，默认是
     * @param ConfigAdvanced $ConfigAdvanced 模板的单个属性配置
     * @param string $OutputLanguage cn时，添加的key为中文  
en时，添加的key为英语
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("ItemNames",$param) and $param["ItemNames"] !== null) {
            $this->ItemNames = $param["ItemNames"];
        }

        if (array_key_exists("ItemNamesShowMode",$param) and $param["ItemNamesShowMode"] !== null) {
            $this->ItemNamesShowMode = $param["ItemNamesShowMode"];
        }

        if (array_key_exists("ReturnFullText",$param) and $param["ReturnFullText"] !== null) {
            $this->ReturnFullText = $param["ReturnFullText"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("EnableCoord",$param) and $param["EnableCoord"] !== null) {
            $this->EnableCoord = $param["EnableCoord"];
        }

        if (array_key_exists("OutputParentKey",$param) and $param["OutputParentKey"] !== null) {
            $this->OutputParentKey = $param["OutputParentKey"];
        }

        if (array_key_exists("ConfigAdvanced",$param) and $param["ConfigAdvanced"] !== null) {
            $this->ConfigAdvanced = new ConfigAdvanced();
            $this->ConfigAdvanced->deserialize($param["ConfigAdvanced"]);
        }

        if (array_key_exists("OutputLanguage",$param) and $param["OutputLanguage"] !== null) {
            $this->OutputLanguage = $param["OutputLanguage"];
        }
    }
}
