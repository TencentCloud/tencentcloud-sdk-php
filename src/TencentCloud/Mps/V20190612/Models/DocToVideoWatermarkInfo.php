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
 * AIGC 文档生成视频水印图片信息
 *
 * @method string getImageUrl() 获取<p>用于生成视频的水印图片 URL。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>用于生成视频的水印图片 URL。</p>
 * @method string getPosition() 获取<p>水印图片位置。</p><p>枚举值：</p><ul><li>top-left： 左上角</li><li>top-right： 右上角</li><li>bottom-left： 左下角</li><li>bottom-right： 右下角</li></ul>
 * @method void setPosition(string $Position) 设置<p>水印图片位置。</p><p>枚举值：</p><ul><li>top-left： 左上角</li><li>top-right： 右上角</li><li>bottom-left： 左下角</li><li>bottom-right： 右下角</li></ul>
 */
class DocToVideoWatermarkInfo extends AbstractModel
{
    /**
     * @var string <p>用于生成视频的水印图片 URL。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>水印图片位置。</p><p>枚举值：</p><ul><li>top-left： 左上角</li><li>top-right： 右上角</li><li>bottom-left： 左下角</li><li>bottom-right： 右下角</li></ul>
     */
    public $Position;

    /**
     * @param string $ImageUrl <p>用于生成视频的水印图片 URL。</p>
     * @param string $Position <p>水印图片位置。</p><p>枚举值：</p><ul><li>top-left： 左上角</li><li>top-right： 右上角</li><li>bottom-left： 左下角</li><li>bottom-right： 右下角</li></ul>
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

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }
    }
}
