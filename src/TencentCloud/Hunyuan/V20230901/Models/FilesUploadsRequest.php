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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FilesUploads请求参数结构体
 *
 * @method string getName() 获取文件名。
 * @method void setName(string $Name) 设置文件名。
 * @method string getURL() 获取文件链接。目前支持 csv, doc, docx, pdf, ppt, pptx, txt, xls, xlsx 格式，单文件大小限制为100M。
 * @method void setURL(string $URL) 设置文件链接。目前支持 csv, doc, docx, pdf, ppt, pptx, txt, xls, xlsx 格式，单文件大小限制为100M。
 */
class FilesUploadsRequest extends AbstractModel
{
    /**
     * @var string 文件名。
     */
    public $Name;

    /**
     * @var string 文件链接。目前支持 csv, doc, docx, pdf, ppt, pptx, txt, xls, xlsx 格式，单文件大小限制为100M。
     */
    public $URL;

    /**
     * @param string $Name 文件名。
     * @param string $URL 文件链接。目前支持 csv, doc, docx, pdf, ppt, pptx, txt, xls, xlsx 格式，单文件大小限制为100M。
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
    }
}
