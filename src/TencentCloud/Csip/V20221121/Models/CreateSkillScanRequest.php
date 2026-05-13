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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSkillScan请求参数结构体
 *
 * @method string getFileBase64() 获取ZIP 文件内容的 Base64 编码
入参限制：文件大小上限 7MB（编码前），仅接受有效的 ZIP 格式
 * @method void setFileBase64(string $FileBase64) 设置ZIP 文件内容的 Base64 编码
入参限制：文件大小上限 7MB（编码前），仅接受有效的 ZIP 格式
 * @method string getFileName() 获取文件名，用于服务端日志记录
参数格式：形如 my-skill.zip
 * @method void setFileName(string $FileName) 设置文件名，用于服务端日志记录
参数格式：形如 my-skill.zip
 */
class CreateSkillScanRequest extends AbstractModel
{
    /**
     * @var string ZIP 文件内容的 Base64 编码
入参限制：文件大小上限 7MB（编码前），仅接受有效的 ZIP 格式
     */
    public $FileBase64;

    /**
     * @var string 文件名，用于服务端日志记录
参数格式：形如 my-skill.zip
     */
    public $FileName;

    /**
     * @param string $FileBase64 ZIP 文件内容的 Base64 编码
入参限制：文件大小上限 7MB（编码前），仅接受有效的 ZIP 格式
     * @param string $FileName 文件名，用于服务端日志记录
参数格式：形如 my-skill.zip
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
        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
