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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportAndroidInstanceImage请求参数结构体
 *
 * @method string getName() 获取镜像名称
 * @method void setName(string $Name) 设置镜像名称
 * @method string getURL() 获取镜像文件下载地址，要求是 tgz 压缩文件
 * @method void setURL(string $URL) 设置镜像文件下载地址，要求是 tgz 压缩文件
 * @method string getMD5() 获取镜像文件 MD5 值
 * @method void setMD5(string $MD5) 设置镜像文件 MD5 值
 * @method string getAndroidVersion() 获取安卓版本。
ANDROID10：默认值，安卓10
ANDROID12：安卓12
ANDROID14：安卓14
 * @method void setAndroidVersion(string $AndroidVersion) 设置安卓版本。
ANDROID10：默认值，安卓10
ANDROID12：安卓12
ANDROID14：安卓14
 * @method string getZone() 获取镜像可用区
 * @method void setZone(string $Zone) 设置镜像可用区
 */
class ImportAndroidInstanceImageRequest extends AbstractModel
{
    /**
     * @var string 镜像名称
     */
    public $Name;

    /**
     * @var string 镜像文件下载地址，要求是 tgz 压缩文件
     */
    public $URL;

    /**
     * @var string 镜像文件 MD5 值
     */
    public $MD5;

    /**
     * @var string 安卓版本。
ANDROID10：默认值，安卓10
ANDROID12：安卓12
ANDROID14：安卓14
     */
    public $AndroidVersion;

    /**
     * @var string 镜像可用区
     */
    public $Zone;

    /**
     * @param string $Name 镜像名称
     * @param string $URL 镜像文件下载地址，要求是 tgz 压缩文件
     * @param string $MD5 镜像文件 MD5 值
     * @param string $AndroidVersion 安卓版本。
ANDROID10：默认值，安卓10
ANDROID12：安卓12
ANDROID14：安卓14
     * @param string $Zone 镜像可用区
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("AndroidVersion",$param) and $param["AndroidVersion"] !== null) {
            $this->AndroidVersion = $param["AndroidVersion"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
