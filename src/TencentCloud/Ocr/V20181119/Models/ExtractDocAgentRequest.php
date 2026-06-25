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
 * ExtractDocAgent请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method array getItemNames() 获取<p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
 * @method void setItemNames(array $ItemNames) 设置<p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF时有效。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF时有效。</p>
 * @method boolean getEnableCoord() 获取<p>是否需要返回坐标</p><p>默认值：false</p>
 * @method void setEnableCoord(boolean $EnableCoord) 设置<p>是否需要返回坐标</p><p>默认值：false</p>
 * @method boolean getEnableAudit() 获取<p>是否需要开启审核逻辑(支持对字段配置比对内容和比对的语意规则)</p><p>默认值：false</p>
 * @method void setEnableAudit(boolean $EnableAudit) 设置<p>是否需要开启审核逻辑(支持对字段配置比对内容和比对的语意规则)</p><p>默认值：false</p>
 */
class ExtractDocAgentRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var array <p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
     */
    public $ItemNames;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF时有效。</p>
     */
    public $PdfPageNumber;

    /**
     * @var boolean <p>是否需要返回坐标</p><p>默认值：false</p>
     */
    public $EnableCoord;

    /**
     * @var boolean <p>是否需要开启审核逻辑(支持对字段配置比对内容和比对的语意规则)</p><p>默认值：false</p>
     */
    public $EnableAudit;

    /**
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。 要求图片/PDF经Base64编码后不超过 10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。 图片支持的像素范围：需介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param array $ItemNames <p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF时有效。</p>
     * @param boolean $EnableCoord <p>是否需要返回坐标</p><p>默认值：false</p>
     * @param boolean $EnableAudit <p>是否需要开启审核逻辑(支持对字段配置比对内容和比对的语意规则)</p><p>默认值：false</p>
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

        if (array_key_exists("ItemNames",$param) and $param["ItemNames"] !== null) {
            $this->ItemNames = [];
            foreach ($param["ItemNames"] as $key => $value){
                $obj = new ItemNames();
                $obj->deserialize($value);
                array_push($this->ItemNames, $obj);
            }
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("EnableCoord",$param) and $param["EnableCoord"] !== null) {
            $this->EnableCoord = $param["EnableCoord"];
        }

        if (array_key_exists("EnableAudit",$param) and $param["EnableAudit"] !== null) {
            $this->EnableAudit = $param["EnableAudit"];
        }
    }
}
