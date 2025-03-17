<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片信息
 *
 * @method string getImageUrl() 获取图片Url。
 * @method void setImageUrl(string $ImageUrl) 设置图片Url。
 * @method string getImageBase64() 获取图片Base64。
 * @method void setImageBase64(string $ImageBase64) 设置图片Base64。
 */
class Image extends AbstractModel
{
    /**
     * @var string 图片Url。
     */
    public $ImageUrl;

    /**
     * @var string 图片Base64。
     */
    public $ImageBase64;

    /**
     * @param string $ImageUrl 图片Url。
     * @param string $ImageBase64 图片Base64。
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

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
