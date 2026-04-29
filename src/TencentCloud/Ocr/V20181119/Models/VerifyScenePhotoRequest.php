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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyScenePhoto请求参数结构体
 *
 * @method string getScene() 获取<p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照</p>
 * @method void setScene(string $Scene) 设置<p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照</p>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method string getImageBase64() 获取<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 */
class VerifyScenePhotoRequest extends AbstractModel
{
    /**
     * @var string <p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照</p>
     */
    public $Scene;

    /**
     * @var string <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageBase64;

    /**
     * @param string $Scene <p>场景类型参数，如果场景无法细分请选用该大类的第一个子类，目前支持以下类型：<br><strong>经营场所照</strong><br>0101 门头照<br>0102 店内照<br>0103 流动经营照</p>
     * @param string $ImageUrl <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ImageBase64 <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
