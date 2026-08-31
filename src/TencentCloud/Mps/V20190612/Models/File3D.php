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
 * Query 返回的单个产物文件
 *
 * @method string getType() 获取<p>文件类型，OBJ / GLB / FBX / STL / USDZ</p><p>枚举值：</p><ul><li>OBJ： 3D 通用交换格式</li><li>GLB： glTF 2.0 二进制（&quot;3D 界的 JPEG&quot;）</li><li>FBX： Autodesk 影视/游戏工业标准</li><li>STL： 3D 打印/CAD 三角面片</li><li>USDZ： Pixar/Apple 打包场景描述</li></ul>
 * @method void setType(string $Type) 设置<p>文件类型，OBJ / GLB / FBX / STL / USDZ</p><p>枚举值：</p><ul><li>OBJ： 3D 通用交换格式</li><li>GLB： glTF 2.0 二进制（&quot;3D 界的 JPEG&quot;）</li><li>FBX： Autodesk 影视/游戏工业标准</li><li>STL： 3D 打印/CAD 三角面片</li><li>USDZ： Pixar/Apple 打包场景描述</li></ul>
 * @method string getUrl() 获取<p>文件下载 URL（临时签名，TTL 一般 24h）</p>
 * @method void setUrl(string $Url) 设置<p>文件下载 URL（临时签名，TTL 一般 24h）</p>
 * @method string getPreviewImageUrl() 获取<p>预览图 URL（若有）</p>
 * @method void setPreviewImageUrl(string $PreviewImageUrl) 设置<p>预览图 URL（若有）</p>
 */
class File3D extends AbstractModel
{
    /**
     * @var string <p>文件类型，OBJ / GLB / FBX / STL / USDZ</p><p>枚举值：</p><ul><li>OBJ： 3D 通用交换格式</li><li>GLB： glTF 2.0 二进制（&quot;3D 界的 JPEG&quot;）</li><li>FBX： Autodesk 影视/游戏工业标准</li><li>STL： 3D 打印/CAD 三角面片</li><li>USDZ： Pixar/Apple 打包场景描述</li></ul>
     */
    public $Type;

    /**
     * @var string <p>文件下载 URL（临时签名，TTL 一般 24h）</p>
     */
    public $Url;

    /**
     * @var string <p>预览图 URL（若有）</p>
     */
    public $PreviewImageUrl;

    /**
     * @param string $Type <p>文件类型，OBJ / GLB / FBX / STL / USDZ</p><p>枚举值：</p><ul><li>OBJ： 3D 通用交换格式</li><li>GLB： glTF 2.0 二进制（&quot;3D 界的 JPEG&quot;）</li><li>FBX： Autodesk 影视/游戏工业标准</li><li>STL： 3D 打印/CAD 三角面片</li><li>USDZ： Pixar/Apple 打包场景描述</li></ul>
     * @param string $Url <p>文件下载 URL（临时签名，TTL 一般 24h）</p>
     * @param string $PreviewImageUrl <p>预览图 URL（若有）</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PreviewImageUrl",$param) and $param["PreviewImageUrl"] !== null) {
            $this->PreviewImageUrl = $param["PreviewImageUrl"];
        }
    }
}
