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
 * @method MediaInputInfo getImage() 获取图片路径。
 * @method void setImage(MediaInputInfo $Image) 设置图片路径。
 */
class AddOnImageInput extends AbstractModel
{
    /**
     * @var MediaInputInfo 图片路径。
     */
    public $Image;

    /**
     * @param MediaInputInfo $Image 图片路径。
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new MediaInputInfo();
            $this->Image->deserialize($param["Image"]);
        }
    }
}
