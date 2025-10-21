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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点 CNAME 模式接入验证归属权或域名申请免费证书时，使用 HTTP 访问验证文件时所需的信息。
 *
 * @method string getPath() 获取EdgeOne 后台服务器将通过 http://{Host}{URL Path} 的格式（例如 http://www.example.com/.well-known/teo-verification/z12h416twn.txt）获取文件验证信息。其中，本字段为您需要创建的 URL Path 部分，Host 为当前加速域名。
 * @method void setPath(string $Path) 设置EdgeOne 后台服务器将通过 http://{Host}{URL Path} 的格式（例如 http://www.example.com/.well-known/teo-verification/z12h416twn.txt）获取文件验证信息。其中，本字段为您需要创建的 URL Path 部分，Host 为当前加速域名。
 * @method string getContent() 获取验证文件的内容。该字段的内容需要您填写至 Path 字段返回的 txt 文件中。
 * @method void setContent(string $Content) 设置验证文件的内容。该字段的内容需要您填写至 Path 字段返回的 txt 文件中。
 */
class FileVerification extends AbstractModel
{
    /**
     * @var string EdgeOne 后台服务器将通过 http://{Host}{URL Path} 的格式（例如 http://www.example.com/.well-known/teo-verification/z12h416twn.txt）获取文件验证信息。其中，本字段为您需要创建的 URL Path 部分，Host 为当前加速域名。
     */
    public $Path;

    /**
     * @var string 验证文件的内容。该字段的内容需要您填写至 Path 字段返回的 txt 文件中。
     */
    public $Content;

    /**
     * @param string $Path EdgeOne 后台服务器将通过 http://{Host}{URL Path} 的格式（例如 http://www.example.com/.well-known/teo-verification/z12h416twn.txt）获取文件验证信息。其中，本字段为您需要创建的 URL Path 部分，Host 为当前加速域名。
     * @param string $Content 验证文件的内容。该字段的内容需要您填写至 Path 字段返回的 txt 文件中。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
