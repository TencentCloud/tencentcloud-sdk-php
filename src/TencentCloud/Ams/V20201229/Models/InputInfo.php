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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入信息详情
 *
 * @method string getType() 获取<p>该字段表示文件访问类型，取值为<strong>URL</strong>（资源链接）和<strong>COS</strong> (腾讯云对象存储)。</p>
 * @method void setType(string $Type) 设置<p>该字段表示文件访问类型，取值为<strong>URL</strong>（资源链接）和<strong>COS</strong> (腾讯云对象存储)。</p>
 * @method string getUrl() 获取<p>该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。</p>
 * @method void setUrl(string $Url) 设置<p>该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。</p>
 * @method BucketInfo getBucketInfo() 获取<p>该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketInfo(BucketInfo $BucketInfo) 设置<p>该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageUrlList() 获取<p>大模型审核可选输入图片列表</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>大模型审核可选输入图片列表</p>
 * @method string getTextContent() 获取<p>大模型审核场景下，base64编码的审核要求内容</p>
 * @method void setTextContent(string $TextContent) 设置<p>大模型审核场景下，base64编码的审核要求内容</p>
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string <p>该字段表示文件访问类型，取值为<strong>URL</strong>（资源链接）和<strong>COS</strong> (腾讯云对象存储)。</p>
     */
    public $Type;

    /**
     * @var string <p>该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。</p>
     */
    public $Url;

    /**
     * @var BucketInfo <p>该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketInfo;

    /**
     * @var array <p>大模型审核可选输入图片列表</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>大模型审核场景下，base64编码的审核要求内容</p>
     */
    public $TextContent;

    /**
     * @param string $Type <p>该字段表示文件访问类型，取值为<strong>URL</strong>（资源链接）和<strong>COS</strong> (腾讯云对象存储)。</p>
     * @param string $Url <p>该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。</p>
     * @param BucketInfo $BucketInfo <p>该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageUrlList <p>大模型审核可选输入图片列表</p>
     * @param string $TextContent <p>大模型审核场景下，base64编码的审核要求内容</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new BucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
