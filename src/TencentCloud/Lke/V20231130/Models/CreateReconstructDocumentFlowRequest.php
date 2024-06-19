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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReconstructDocumentFlow请求参数结构体
 *
 * @method string getFileBase64() 获取图片的 Base64 值。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经Base64编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setFileBase64(string $FileBase64) 设置图片的 Base64 值。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经Base64编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getFileUrl() 获取图片的 Url 地址。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经 Base64 编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setFileUrl(string $FileUrl) 设置图片的 Url 地址。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经 Base64 编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method integer getFileStartPageNumber() 获取当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的起始页码，识别的页码包含当前值。
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) 设置当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的起始页码，识别的页码包含当前值。
 * @method integer getFileEndPageNumber() 获取当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的结束页码，识别的页码包含当前值。
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) 设置当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的结束页码，识别的页码包含当前值。
 * @method CreateReconstructDocumentFlowConfig getConfig() 获取创建智能文档识别任务配置信息
 * @method void setConfig(CreateReconstructDocumentFlowConfig $Config) 设置创建智能文档识别任务配置信息
 */
class CreateReconstructDocumentFlowRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经Base64编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $FileBase64;

    /**
     * @var string 图片的 Url 地址。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经 Base64 编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $FileUrl;

    /**
     * @var integer 当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的起始页码，识别的页码包含当前值。
     */
    public $FileStartPageNumber;

    /**
     * @var integer 当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的结束页码，识别的页码包含当前值。
     */
    public $FileEndPageNumber;

    /**
     * @var CreateReconstructDocumentFlowConfig 创建智能文档识别任务配置信息
     */
    public $Config;

    /**
     * @param string $FileBase64 图片的 Base64 值。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经Base64编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $FileUrl 图片的 Url 地址。 支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。 支持的图片大小：所下载图片经 Base64 编码后不超过 8M。图片下载时间不超过 3 秒。 支持的图片像素：单边介于20-10000px之间。 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param integer $FileStartPageNumber 当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的起始页码，识别的页码包含当前值。
     * @param integer $FileEndPageNumber 当传入文件是PDF类型（IsPdf=true）时，用来指定pdf识别的结束页码，识别的页码包含当前值。
     * @param CreateReconstructDocumentFlowConfig $Config 创建智能文档识别任务配置信息
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
        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CreateReconstructDocumentFlowConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
