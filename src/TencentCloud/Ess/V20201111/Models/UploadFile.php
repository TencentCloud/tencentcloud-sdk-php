<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (UploadFile) 用于描述多文件上传的文件信息。
 *
 * @method string getFileBody() 获取Base64编码后的文件内容
 * @method void setFileBody(string $FileBody) 设置Base64编码后的文件内容
 * @method string getFileName() 获取文件名，最大长度不超过200字符
 * @method void setFileName(string $FileName) 设置文件名，最大长度不超过200字符
 */
class UploadFile extends AbstractModel
{
    /**
     * @var string Base64编码后的文件内容
     */
    public $FileBody;

    /**
     * @var string 文件名，最大长度不超过200字符
     */
    public $FileName;

    /**
     * @param string $FileBody Base64编码后的文件内容
     * @param string $FileName 文件名，最大长度不超过200字符
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
        if (array_key_exists("FileBody",$param) and $param["FileBody"] !== null) {
            $this->FileBody = $param["FileBody"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
