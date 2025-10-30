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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多模态对话内容,支持图片与文字信息
 *
 * @method string getType() 获取对话类型，text表示文本对话内容，image_url表示图片对话内容
 * @method void setType(string $Type) 设置对话类型，text表示文本对话内容，image_url表示图片对话内容
 * @method string getText() 获取文本对话内容，当Type为text时需要填写该值
 * @method void setText(string $Text) 设置文本对话内容，当Type为text时需要填写该值
 * @method ImageUrl getImageUrl() 获取图片对话内容，当Type为image_url时需要填写该值
 * @method void setImageUrl(ImageUrl $ImageUrl) 设置图片对话内容，当Type为image_url时需要填写该值
 */
class MultiModalContent extends AbstractModel
{
    /**
     * @var string 对话类型，text表示文本对话内容，image_url表示图片对话内容
     */
    public $Type;

    /**
     * @var string 文本对话内容，当Type为text时需要填写该值
     */
    public $Text;

    /**
     * @var ImageUrl 图片对话内容，当Type为image_url时需要填写该值
     */
    public $ImageUrl;

    /**
     * @param string $Type 对话类型，text表示文本对话内容，image_url表示图片对话内容
     * @param string $Text 文本对话内容，当Type为text时需要填写该值
     * @param ImageUrl $ImageUrl 图片对话内容，当Type为image_url时需要填写该值
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

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = new ImageUrl();
            $this->ImageUrl->deserialize($param["ImageUrl"]);
        }
    }
}
