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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadMiniProgramSource请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getFileBase64() 获取<p>源码zip的Base64，请求包上限10240KB</p>
 * @method void setFileBase64(string $FileBase64) 设置<p>源码zip的Base64，请求包上限10240KB</p>
 * @method string getRelease() 获取<p>应用版本（可选）</p>
 * @method void setRelease(string $Release) 设置<p>应用版本（可选）</p>
 * @method string getFileName() 获取<p>原始文件名（可选）</p>
 * @method void setFileName(string $FileName) 设置<p>原始文件名（可选）</p>
 */
class UploadMiniProgramSourceRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>源码zip的Base64，请求包上限10240KB</p>
     */
    public $FileBase64;

    /**
     * @var string <p>应用版本（可选）</p>
     */
    public $Release;

    /**
     * @var string <p>原始文件名（可选）</p>
     */
    public $FileName;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $FileBase64 <p>源码zip的Base64，请求包上限10240KB</p>
     * @param string $Release <p>应用版本（可选）</p>
     * @param string $FileName <p>原始文件名（可选）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("Release",$param) and $param["Release"] !== null) {
            $this->Release = $param["Release"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
