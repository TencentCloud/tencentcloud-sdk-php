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
 * 安卓应用Cos数据
 *
 * @method string getAndroidAppId() 获取安卓应用ID
 * @method void setAndroidAppId(string $AndroidAppId) 设置安卓应用ID
 * @method string getFileName() 获取应用名称（支持 apk 和 tgz 两种格式文件，当应用 AppMode 为 NORMAL 时，只支持上传 apk 类型文件，当应用 AppMode 为 ADVANCED 高级模式时，只支持上传  tgz 类型文件）
 * @method void setFileName(string $FileName) 设置应用名称（支持 apk 和 tgz 两种格式文件，当应用 AppMode 为 NORMAL 时，只支持上传 apk 类型文件，当应用 AppMode 为 ADVANCED 高级模式时，只支持上传  tgz 类型文件）
 */
class AndroidAppCosInfo extends AbstractModel
{
    /**
     * @var string 安卓应用ID
     */
    public $AndroidAppId;

    /**
     * @var string 应用名称（支持 apk 和 tgz 两种格式文件，当应用 AppMode 为 NORMAL 时，只支持上传 apk 类型文件，当应用 AppMode 为 ADVANCED 高级模式时，只支持上传  tgz 类型文件）
     */
    public $FileName;

    /**
     * @param string $AndroidAppId 安卓应用ID
     * @param string $FileName 应用名称（支持 apk 和 tgz 两种格式文件，当应用 AppMode 为 NORMAL 时，只支持上传 apk 类型文件，当应用 AppMode 为 ADVANCED 高级模式时，只支持上传  tgz 类型文件）
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
        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
