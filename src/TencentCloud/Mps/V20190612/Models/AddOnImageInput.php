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
 * 图片处理编排中使用的输入参数。
 *
 * @method string getType() 获取<p>图片类型。</p>
 * @method void setType(string $Type) 设置<p>图片类型。</p>
 * @method MediaInputInfo getImage() 获取<p>图片路径。</p>
 * @method void setImage(MediaInputInfo $Image) 设置<p>图片路径。</p>
 */
class AddOnImageInput extends AbstractModel
{
    /**
     * @var string <p>图片类型。</p>
     */
    public $Type;

    /**
     * @var MediaInputInfo <p>图片路径。</p>
     */
    public $Image;

    /**
     * @param string $Type <p>图片类型。</p>
     * @param MediaInputInfo $Image <p>图片路径。</p>
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

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new MediaInputInfo();
            $this->Image->deserialize($param["Image"]);
        }
    }
}
