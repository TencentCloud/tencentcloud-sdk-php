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
 * 视频裂变输入
 *
 * @method array getImageUrls() 获取<p>视频裂变参考图url</p>
 * @method void setImageUrls(array $ImageUrls) 设置<p>视频裂变参考图url</p>
 * @method string getText() 获取<p>视频裂变商品信息参考文案</p>
 * @method void setText(string $Text) 设置<p>视频裂变商品信息参考文案</p>
 */
class AiFissionInput extends AbstractModel
{
    /**
     * @var array <p>视频裂变参考图url</p>
     */
    public $ImageUrls;

    /**
     * @var string <p>视频裂变商品信息参考文案</p>
     */
    public $Text;

    /**
     * @param array $ImageUrls <p>视频裂变参考图url</p>
     * @param string $Text <p>视频裂变商品信息参考文案</p>
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

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
