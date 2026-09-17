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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 样本管理，人脸数据操作。
 *
 * @method string getType() 获取<p>操作类型，可选值：add（添加）、delete（删除）、reset（重置）。重置操作将清空该人物已有人脸数据，并添加 FaceContents 指定人脸数据。</p>
 * @method void setType(string $Type) 设置<p>操作类型，可选值：add（添加）、delete（删除）、reset（重置）。重置操作将清空该人物已有人脸数据，并添加 FaceContents 指定人脸数据。</p>
 * @method array getFaceIds() 获取<p>人脸 ID 集合，当 Type为delete 时，该字段必填。</p>
 * @method void setFaceIds(array $FaceIds) 设置<p>人脸 ID 集合，当 Type为delete 时，该字段必填。</p>
 * @method array getFaceContents() 获取<p>人脸图片 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串集合，仅支持 jpeg、png 图片格式。</p><li>当 Type为add 或 reset 时，该字段必填；</li><li>数组长度限制：5 张图片。</li>注意：图片必须是单人像正面人脸较清晰的照片，像素不低于 200*200。
 * @method void setFaceContents(array $FaceContents) 设置<p>人脸图片 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串集合，仅支持 jpeg、png 图片格式。</p><li>当 Type为add 或 reset 时，该字段必填；</li><li>数组长度限制：5 张图片。</li>注意：图片必须是单人像正面人脸较清晰的照片，像素不低于 200*200。
 */
class AiSampleFaceOperation extends AbstractModel
{
    /**
     * @var string <p>操作类型，可选值：add（添加）、delete（删除）、reset（重置）。重置操作将清空该人物已有人脸数据，并添加 FaceContents 指定人脸数据。</p>
     */
    public $Type;

    /**
     * @var array <p>人脸 ID 集合，当 Type为delete 时，该字段必填。</p>
     */
    public $FaceIds;

    /**
     * @var array <p>人脸图片 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串集合，仅支持 jpeg、png 图片格式。</p><li>当 Type为add 或 reset 时，该字段必填；</li><li>数组长度限制：5 张图片。</li>注意：图片必须是单人像正面人脸较清晰的照片，像素不低于 200*200。
     */
    public $FaceContents;

    /**
     * @param string $Type <p>操作类型，可选值：add（添加）、delete（删除）、reset（重置）。重置操作将清空该人物已有人脸数据，并添加 FaceContents 指定人脸数据。</p>
     * @param array $FaceIds <p>人脸 ID 集合，当 Type为delete 时，该字段必填。</p>
     * @param array $FaceContents <p>人脸图片 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串集合，仅支持 jpeg、png 图片格式。</p><li>当 Type为add 或 reset 时，该字段必填；</li><li>数组长度限制：5 张图片。</li>注意：图片必须是单人像正面人脸较清晰的照片，像素不低于 200*200。
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

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }
    }
}
