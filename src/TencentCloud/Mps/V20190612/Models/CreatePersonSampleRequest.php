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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonSample请求参数结构体
 *
 * @method string getName() 获取素材名称，长度限制：20 个字符。
 * @method void setName(string $Name) 设置素材名称，长度限制：20 个字符。
 * @method array getUsages() 获取素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜内容识别，等价于 Review.Face。
3. All：包含以上全部，等价于 1+2。
 * @method void setUsages(array $Usages) 设置素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜内容识别，等价于 Review.Face。
3. All：包含以上全部，等价于 1+2。
 * @method string getDescription() 获取素材描述，长度限制：1024 个字符。
 * @method void setDescription(string $Description) 设置素材描述，长度限制：1024 个字符。
 * @method array getFaceContents() 获取素材图片 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 jpeg、png 图片格式。数组长度限制：5 张图片。
注意：图片必须是单人像五官较清晰的照片，像素不低于 200*200。
 * @method void setFaceContents(array $FaceContents) 设置素材图片 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 jpeg、png 图片格式。数组长度限制：5 张图片。
注意：图片必须是单人像五官较清晰的照片，像素不低于 200*200。
 * @method array getTags() 获取素材标签
<li>数组长度限制：20 个标签；</li>
<li>单个标签长度限制：128 个字符。</li>
 * @method void setTags(array $Tags) 设置素材标签
<li>数组长度限制：20 个标签；</li>
<li>单个标签长度限制：128 个字符。</li>
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string 素材名称，长度限制：20 个字符。
     */
    public $Name;

    /**
     * @var array 素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜内容识别，等价于 Review.Face。
3. All：包含以上全部，等价于 1+2。
     */
    public $Usages;

    /**
     * @var string 素材描述，长度限制：1024 个字符。
     */
    public $Description;

    /**
     * @var array 素材图片 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 jpeg、png 图片格式。数组长度限制：5 张图片。
注意：图片必须是单人像五官较清晰的照片，像素不低于 200*200。
     */
    public $FaceContents;

    /**
     * @var array 素材标签
<li>数组长度限制：20 个标签；</li>
<li>单个标签长度限制：128 个字符。</li>
     */
    public $Tags;

    /**
     * @param string $Name 素材名称，长度限制：20 个字符。
     * @param array $Usages 素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜内容识别，等价于 Review.Face。
3. All：包含以上全部，等价于 1+2。
     * @param string $Description 素材描述，长度限制：1024 个字符。
     * @param array $FaceContents 素材图片 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 jpeg、png 图片格式。数组长度限制：5 张图片。
注意：图片必须是单人像五官较清晰的照片，像素不低于 200*200。
     * @param array $Tags 素材标签
<li>数组长度限制：20 个标签；</li>
<li>单个标签长度限制：128 个字符。</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
