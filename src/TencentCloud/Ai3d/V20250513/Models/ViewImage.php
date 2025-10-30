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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多视角图片
 *
 * @method string getViewType() 获取视角类型。
取值：back、left、right
 * @method void setViewType(string $ViewType) 设置视角类型。
取值：back、left、right
 * @method string getViewImageUrl() 获取图片Url地址
 * @method void setViewImageUrl(string $ViewImageUrl) 设置图片Url地址
 * @method string getViewImageBase64() 获取图片base64地址
 * @method void setViewImageBase64(string $ViewImageBase64) 设置图片base64地址
 */
class ViewImage extends AbstractModel
{
    /**
     * @var string 视角类型。
取值：back、left、right
     */
    public $ViewType;

    /**
     * @var string 图片Url地址
     */
    public $ViewImageUrl;

    /**
     * @var string 图片base64地址
     */
    public $ViewImageBase64;

    /**
     * @param string $ViewType 视角类型。
取值：back、left、right
     * @param string $ViewImageUrl 图片Url地址
     * @param string $ViewImageBase64 图片base64地址
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
        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("ViewImageUrl",$param) and $param["ViewImageUrl"] !== null) {
            $this->ViewImageUrl = $param["ViewImageUrl"];
        }

        if (array_key_exists("ViewImageBase64",$param) and $param["ViewImageBase64"] !== null) {
            $this->ViewImageBase64 = $param["ViewImageBase64"];
        }
    }
}
