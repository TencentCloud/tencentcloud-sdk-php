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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据存储信息
 *
 * @method string getType() 获取<p>类型 可选：<br>URL 资源链接类型<br>COS 腾讯云对象存储类型</p>
 * @method void setType(string $Type) 设置<p>类型 可选：<br>URL 资源链接类型<br>COS 腾讯云对象存储类型</p>
 * @method string getUrl() 获取<p>资源链接</p>
 * @method void setUrl(string $Url) 设置<p>资源链接</p>
 * @method BucketInfo getBucketInfo() 获取<p>腾讯云存储桶信息</p>
 * @method void setBucketInfo(BucketInfo $BucketInfo) 设置<p>腾讯云存储桶信息</p>
 * @method array getImageUrlList() 获取<p>大模型审核场景下，送审的图片列表</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>大模型审核场景下，送审的图片列表</p>
 * @method string getTextContent() 获取<p>大模型审核场景下，base64编码的审核要求内容</p>
 * @method void setTextContent(string $TextContent) 设置<p>大模型审核场景下，base64编码的审核要求内容</p>
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string <p>类型 可选：<br>URL 资源链接类型<br>COS 腾讯云对象存储类型</p>
     */
    public $Type;

    /**
     * @var string <p>资源链接</p>
     */
    public $Url;

    /**
     * @var BucketInfo <p>腾讯云存储桶信息</p>
     */
    public $BucketInfo;

    /**
     * @var array <p>大模型审核场景下，送审的图片列表</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>大模型审核场景下，base64编码的审核要求内容</p>
     */
    public $TextContent;

    /**
     * @param string $Type <p>类型 可选：<br>URL 资源链接类型<br>COS 腾讯云对象存储类型</p>
     * @param string $Url <p>资源链接</p>
     * @param BucketInfo $BucketInfo <p>腾讯云存储桶信息</p>
     * @param array $ImageUrlList <p>大模型审核场景下，送审的图片列表</p>
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
