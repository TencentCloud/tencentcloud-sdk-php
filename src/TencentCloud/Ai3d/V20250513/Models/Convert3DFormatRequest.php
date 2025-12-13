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
 * Convert3DFormat请求参数结构体
 *
 * @method string getFile3D() 获取3D文件url地址。
 * @method void setFile3D(string $File3D) 设置3D文件url地址。
 * @method string getFormat() 获取返回的3D文件格式，参考值：STL, USDZ, FBX, MP4, GIF。
 * @method void setFormat(string $Format) 设置返回的3D文件格式，参考值：STL, USDZ, FBX, MP4, GIF。
 */
class Convert3DFormatRequest extends AbstractModel
{
    /**
     * @var string 3D文件url地址。
     */
    public $File3D;

    /**
     * @var string 返回的3D文件格式，参考值：STL, USDZ, FBX, MP4, GIF。
     */
    public $Format;

    /**
     * @param string $File3D 3D文件url地址。
     * @param string $Format 返回的3D文件格式，参考值：STL, USDZ, FBX, MP4, GIF。
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
        if (array_key_exists("File3D",$param) and $param["File3D"] !== null) {
            $this->File3D = $param["File3D"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
