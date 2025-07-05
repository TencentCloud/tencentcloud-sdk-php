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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 融合信息
 *
 * @method array getImageUrls() 获取用户图 URL 列表
 * @method void setImageUrls(array $ImageUrls) 设置用户图 URL 列表
 * @method Rect getTemplateFaceRect() 获取模版图人脸坐标。
 * @method void setTemplateFaceRect(Rect $TemplateFaceRect) 设置模版图人脸坐标。
 */
class FaceInfo extends AbstractModel
{
    /**
     * @var array 用户图 URL 列表
     */
    public $ImageUrls;

    /**
     * @var Rect 模版图人脸坐标。
     */
    public $TemplateFaceRect;

    /**
     * @param array $ImageUrls 用户图 URL 列表
     * @param Rect $TemplateFaceRect 模版图人脸坐标。
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
        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("TemplateFaceRect",$param) and $param["TemplateFaceRect"] !== null) {
            $this->TemplateFaceRect = new Rect();
            $this->TemplateFaceRect->deserialize($param["TemplateFaceRect"]);
        }
    }
}
