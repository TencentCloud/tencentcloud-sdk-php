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
 * 输入信息详情
 *
 * @method string getType() 获取<p>传入的类型可选：URL，COS</p>
 * @method void setType(string $Type) 设置<p>传入的类型可选：URL，COS</p>
 * @method string getUrl() 获取<p>Url地址</p>
 * @method void setUrl(string $Url) 设置<p>Url地址</p>
 * @method string getBucketInfo() 获取<p>桶信息。当输入当时COS时，该字段不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketInfo(string $BucketInfo) 设置<p>桶信息。当输入当时COS时，该字段不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageUrlList() 获取<p>大模型审核可选输入图片列表</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>大模型审核可选输入图片列表</p>
 * @method string getTextContent() 获取<p>大模型审核场景下，base64编码的审核要求内容</p>
 * @method void setTextContent(string $TextContent) 设置<p>大模型审核场景下，base64编码的审核要求内容</p>
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string <p>传入的类型可选：URL，COS</p>
     */
    public $Type;

    /**
     * @var string <p>Url地址</p>
     */
    public $Url;

    /**
     * @var string <p>桶信息。当输入当时COS时，该字段不为空</p>
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
     * @param string $Type <p>传入的类型可选：URL，COS</p>
     * @param string $Url <p>Url地址</p>
     * @param string $BucketInfo <p>桶信息。当输入当时COS时，该字段不为空</p>
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
            $this->BucketInfo = $param["BucketInfo"];
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
