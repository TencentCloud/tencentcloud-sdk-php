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
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别。</p>
 * @method array getItemNames() 获取<p>自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=[&quot;姓名&quot;,&quot;性别&quot;]</p>
 * @method void setItemNames(array $ItemNames) 设置<p>自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=[&quot;姓名&quot;,&quot;性别&quot;]</p>
 * @method boolean getItemNamesShowMode() 获取<p>true：仅输出自定义字段<br>false：输出默认字段+自定义字段<br>默认true</p>
 * @method void setItemNamesShowMode(boolean $ItemNamesShowMode) 设置<p>true：仅输出自定义字段<br>false：输出默认字段+自定义字段<br>默认true</p>
 * @method boolean getReturnFullText() 获取<p>是否开启全文字段识别</p>
 * @method void setReturnFullText(boolean $ReturnFullText) 设置<p>是否开启全文字段识别</p>
 * @method string getConfigId() 获取<p>配置id支持：<br>General -- 通用场景<br>InvoiceEng -- 国际invoice模板<br>WayBillEng --海运订单模板<br>CustomsDeclaration -- 进出口报关单<br>WeightNote -- 磅单<br>MedicalMeter -- 血压仪表识别<br>BillOfLading -- 海运提单<br>EntrustmentBook -- 海运托书<br>Statement -- 对账单识别模板<br>BookingConfirmation -- 配舱通知书识别模板<br>AirWayBill -- 航空运单识别模板<br>Table -- 表格模板<br>SteelLabel -- 实物标签识别模板<br>CarInsurance -- 车辆保险单识别模板<br>MultiRealEstateCertificate -- 房产材料识别模板<br>MultiRealEstateMaterial -- 房产证明识别模板<br>HongKongUtilityBill -- 中国香港水电煤单识别模板<br>OverseasCheques -- 海外支票<br>RegistrationCertificate -- 备案证<br>u200bGridPhoto -- 电网系统照片<br>u200bSignaturePage -- 签署页<br>u200bSalesDeliveryNote -- 销售发货单</p>
 * @method void setConfigId(string $ConfigId) 设置<p>配置id支持：<br>General -- 通用场景<br>InvoiceEng -- 国际invoice模板<br>WayBillEng --海运订单模板<br>CustomsDeclaration -- 进出口报关单<br>WeightNote -- 磅单<br>MedicalMeter -- 血压仪表识别<br>BillOfLading -- 海运提单<br>EntrustmentBook -- 海运托书<br>Statement -- 对账单识别模板<br>BookingConfirmation -- 配舱通知书识别模板<br>AirWayBill -- 航空运单识别模板<br>Table -- 表格模板<br>SteelLabel -- 实物标签识别模板<br>CarInsurance -- 车辆保险单识别模板<br>MultiRealEstateCertificate -- 房产材料识别模板<br>MultiRealEstateMaterial -- 房产证明识别模板<br>HongKongUtilityBill -- 中国香港水电煤单识别模板<br>OverseasCheques -- 海外支票<br>RegistrationCertificate -- 备案证<br>u200bGridPhoto -- 电网系统照片<br>u200bSignaturePage -- 签署页<br>u200bSalesDeliveryNote -- 销售发货单</p>
 * @method boolean getEnableCoord() 获取<p>是否开启全文字段坐标值的识别</p>
 * @method void setEnableCoord(boolean $EnableCoord) 设置<p>是否开启全文字段坐标值的识别</p>
 * @method boolean getOutputParentKey() 获取<p>是否开启父子key识别，默认是</p>
 * @method void setOutputParentKey(boolean $OutputParentKey) 设置<p>是否开启父子key识别，默认是</p>
 * @method ConfigAdvanced getConfigAdvanced() 获取<p>模板的单个属性配置</p>
 * @method void setConfigAdvanced(ConfigAdvanced $ConfigAdvanced) 设置<p>模板的单个属性配置</p>
 * @method string getOutputLanguage() 获取<p>cn时，添加的key为中文<br>en时，添加的key为英语</p>
 * @method void setOutputLanguage(string $OutputLanguage) 设置<p>cn时，添加的key为中文<br>en时，添加的key为英语</p>
 * @method array getNewItemNames() 获取<p>自定义抽取需要的字段名称、字段类型、字段提示词</p>
 * @method void setNewItemNames(array $NewItemNames) 设置<p>自定义抽取需要的字段名称、字段类型、字段提示词</p>
 * @method string getMultiModelVersion() 获取<p>文档抽取（多模态）识别服务所用的算法模型版本<br>-目前入参支持“1.0”和“2.0“两个输入。</p><ul><li>2026年7月20日开始，默认为“2.0”，之前使用过本接口的账号若未填写本参数默认为“1.0”。</li><li>2026年7月20日后开通服务的账号仅支持输入“2.0”。</li><li>不同算法模型版本对应的文档抽取识别算法不同，新版本的整体效果会优于旧版本，建议使用“2.0”版本。<br>示例值：2.0</li></ul>
 * @method void setMultiModelVersion(string $MultiModelVersion) 设置<p>文档抽取（多模态）识别服务所用的算法模型版本<br>-目前入参支持“1.0”和“2.0“两个输入。</p><ul><li>2026年7月20日开始，默认为“2.0”，之前使用过本接口的账号若未填写本参数默认为“1.0”。</li><li>2026年7月20日后开通服务的账号仅支持输入“2.0”。</li><li>不同算法模型版本对应的文档抽取识别算法不同，新版本的整体效果会优于旧版本，建议使用“2.0”版本。<br>示例值：2.0</li></ul>
 */
class ExtractDocMultiRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别。</p>
     */
    public $PdfPageNumber;

    /**
     * @var array <p>自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=[&quot;姓名&quot;,&quot;性别&quot;]</p>
     */
    public $ItemNames;

    /**
     * @var boolean <p>true：仅输出自定义字段<br>false：输出默认字段+自定义字段<br>默认true</p>
     */
    public $ItemNamesShowMode;

    /**
     * @var boolean <p>是否开启全文字段识别</p>
     */
    public $ReturnFullText;

    /**
     * @var string <p>配置id支持：<br>General -- 通用场景<br>InvoiceEng -- 国际invoice模板<br>WayBillEng --海运订单模板<br>CustomsDeclaration -- 进出口报关单<br>WeightNote -- 磅单<br>MedicalMeter -- 血压仪表识别<br>BillOfLading -- 海运提单<br>EntrustmentBook -- 海运托书<br>Statement -- 对账单识别模板<br>BookingConfirmation -- 配舱通知书识别模板<br>AirWayBill -- 航空运单识别模板<br>Table -- 表格模板<br>SteelLabel -- 实物标签识别模板<br>CarInsurance -- 车辆保险单识别模板<br>MultiRealEstateCertificate -- 房产材料识别模板<br>MultiRealEstateMaterial -- 房产证明识别模板<br>HongKongUtilityBill -- 中国香港水电煤单识别模板<br>OverseasCheques -- 海外支票<br>RegistrationCertificate -- 备案证<br>u200bGridPhoto -- 电网系统照片<br>u200bSignaturePage -- 签署页<br>u200bSalesDeliveryNote -- 销售发货单</p>
     */
    public $ConfigId;

    /**
     * @var boolean <p>是否开启全文字段坐标值的识别</p>
     */
    public $EnableCoord;

    /**
     * @var boolean <p>是否开启父子key识别，默认是</p>
     */
    public $OutputParentKey;

    /**
     * @var ConfigAdvanced <p>模板的单个属性配置</p>
     */
    public $ConfigAdvanced;

    /**
     * @var string <p>cn时，添加的key为中文<br>en时，添加的key为英语</p>
     */
    public $OutputLanguage;

    /**
     * @var array <p>自定义抽取需要的字段名称、字段类型、字段提示词</p>
     */
    public $NewItemNames;

    /**
     * @var string <p>文档抽取（多模态）识别服务所用的算法模型版本<br>-目前入参支持“1.0”和“2.0“两个输入。</p><ul><li>2026年7月20日开始，默认为“2.0”，之前使用过本接口的账号若未填写本参数默认为“1.0”。</li><li>2026年7月20日后开通服务的账号仅支持输入“2.0”。</li><li>不同算法模型版本对应的文档抽取识别算法不同，新版本的整体效果会优于旧版本，建议使用“2.0”版本。<br>示例值：2.0</li></ul>
     */
    public $MultiModelVersion;

    /**
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别。</p>
     * @param array $ItemNames <p>自定义结构化功能需返回的字段名称，例：若客户想新增返回姓名、性别两个字段的识别结果，则输入ItemNames=[&quot;姓名&quot;,&quot;性别&quot;]</p>
     * @param boolean $ItemNamesShowMode <p>true：仅输出自定义字段<br>false：输出默认字段+自定义字段<br>默认true</p>
     * @param boolean $ReturnFullText <p>是否开启全文字段识别</p>
     * @param string $ConfigId <p>配置id支持：<br>General -- 通用场景<br>InvoiceEng -- 国际invoice模板<br>WayBillEng --海运订单模板<br>CustomsDeclaration -- 进出口报关单<br>WeightNote -- 磅单<br>MedicalMeter -- 血压仪表识别<br>BillOfLading -- 海运提单<br>EntrustmentBook -- 海运托书<br>Statement -- 对账单识别模板<br>BookingConfirmation -- 配舱通知书识别模板<br>AirWayBill -- 航空运单识别模板<br>Table -- 表格模板<br>SteelLabel -- 实物标签识别模板<br>CarInsurance -- 车辆保险单识别模板<br>MultiRealEstateCertificate -- 房产材料识别模板<br>MultiRealEstateMaterial -- 房产证明识别模板<br>HongKongUtilityBill -- 中国香港水电煤单识别模板<br>OverseasCheques -- 海外支票<br>RegistrationCertificate -- 备案证<br>u200bGridPhoto -- 电网系统照片<br>u200bSignaturePage -- 签署页<br>u200bSalesDeliveryNote -- 销售发货单</p>
     * @param boolean $EnableCoord <p>是否开启全文字段坐标值的识别</p>
     * @param boolean $OutputParentKey <p>是否开启父子key识别，默认是</p>
     * @param ConfigAdvanced $ConfigAdvanced <p>模板的单个属性配置</p>
     * @param string $OutputLanguage <p>cn时，添加的key为中文<br>en时，添加的key为英语</p>
     * @param array $NewItemNames <p>自定义抽取需要的字段名称、字段类型、字段提示词</p>
     * @param string $MultiModelVersion <p>文档抽取（多模态）识别服务所用的算法模型版本<br>-目前入参支持“1.0”和“2.0“两个输入。</p><ul><li>2026年7月20日开始，默认为“2.0”，之前使用过本接口的账号若未填写本参数默认为“1.0”。</li><li>2026年7月20日后开通服务的账号仅支持输入“2.0”。</li><li>不同算法模型版本对应的文档抽取识别算法不同，新版本的整体效果会优于旧版本，建议使用“2.0”版本。<br>示例值：2.0</li></ul>
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

        if (array_key_exists("NewItemNames",$param) and $param["NewItemNames"] !== null) {
            $this->NewItemNames = [];
            foreach ($param["NewItemNames"] as $key => $value){
                $obj = new ItemNames();
                $obj->deserialize($value);
                array_push($this->NewItemNames, $obj);
            }
        }

        if (array_key_exists("MultiModelVersion",$param) and $param["MultiModelVersion"] !== null) {
            $this->MultiModelVersion = $param["MultiModelVersion"];
        }
    }
}
