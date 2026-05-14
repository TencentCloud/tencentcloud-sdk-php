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
 * SubmitExtractDocAgentJob请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为前5页。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为前5页。</p>
 * @method array getItemNames() 获取<p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
 * @method void setItemNames(array $ItemNames) 设置<p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
 * @method boolean getEnableCoord() 获取<p>是否需要返回坐标，默认false。</p>
 * @method void setEnableCoord(boolean $EnableCoord) 设置<p>是否需要返回坐标，默认false。</p>
 * @method integer getFileStartPageNumber() 获取<p>起始页</p>
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置<p>起始页</p>
 * @method integer getFileEndPageNumber() 获取<p>结束页</p>
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置<p>结束页</p>
 * @method string getModelConfig() 获取<p>model_hunyuan:选择混元底座视觉大模型精调抽取任务  model_youtu：选择优图底座多模态大模型精调抽取任务</p>
 * @method void setModelConfig(string $ModelConfig) 设置<p>model_hunyuan:选择混元底座视觉大模型精调抽取任务  model_youtu：选择优图底座多模态大模型精调抽取任务</p>
 */
class SubmitExtractDocAgentJobRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为前5页。</p>
     * @deprecated
     */
    public $PdfPageNumber;

    /**
     * @var array <p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
     */
    public $ItemNames;

    /**
     * @var boolean <p>是否需要返回坐标，默认false。</p>
     */
    public $EnableCoord;

    /**
     * @var integer <p>起始页</p>
     */
    public $FileStartPageNumber;

    /**
     * @var integer <p>结束页</p>
     */
    public $FileEndPageNumber;

    /**
     * @var string <p>model_hunyuan:选择混元底座视觉大模型精调抽取任务  model_youtu：选择优图底座多模态大模型精调抽取任务</p>
     */
    public $ModelConfig;

    /**
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为前5页。</p>
     * @param array $ItemNames <p>自定义抽取需要的字段名称、字段类型、字段提示词。</p>
     * @param boolean $EnableCoord <p>是否需要返回坐标，默认false。</p>
     * @param integer $FileStartPageNumber <p>起始页</p>
     * @param integer $FileEndPageNumber <p>结束页</p>
     * @param string $ModelConfig <p>model_hunyuan:选择混元底座视觉大模型精调抽取任务  model_youtu：选择优图底座多模态大模型精调抽取任务</p>
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

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("ItemNames",$param) and $param["ItemNames"] !== null) {
            $this->ItemNames = [];
            foreach ($param["ItemNames"] as $key => $value){
                $obj = new ItemNames();
                $obj->deserialize($value);
                array_push($this->ItemNames, $obj);
            }
        }

        if (array_key_exists("EnableCoord",$param) and $param["EnableCoord"] !== null) {
            $this->EnableCoord = $param["EnableCoord"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }

        if (array_key_exists("ModelConfig",$param) and $param["ModelConfig"] !== null) {
            $this->ModelConfig = $param["ModelConfig"];
        }
    }
}
