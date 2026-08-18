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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAsrKeyWordLib请求参数结构体
 *
 * @method string getName() 获取<p>词表名称，长度在1-20之间<br>仅限中英文数字-_</p>
 * @method void setName(string $Name) 设置<p>词表名称，长度在1-20之间<br>仅限中英文数字-_</p>
 * @method string getKeyWordFile() 获取<p>词文件（纯文本文件）的二进制base64编码，以行分隔<br>格式要求：TXT<br>每行只有一个词，不满足格式则报错无法上传<br>每个词限制<strong>5个汉字，15个字符</strong>，单个词库最多不超过100个词<br>注意不要有空行，尤其是最后一行</p>
 * @method void setKeyWordFile(string $KeyWordFile) 设置<p>词文件（纯文本文件）的二进制base64编码，以行分隔<br>格式要求：TXT<br>每行只有一个词，不满足格式则报错无法上传<br>每个词限制<strong>5个汉字，15个字符</strong>，单个词库最多不超过100个词<br>注意不要有空行，尤其是最后一行</p>
 */
class CreateAsrKeyWordLibRequest extends AbstractModel
{
    /**
     * @var string <p>词表名称，长度在1-20之间<br>仅限中英文数字-_</p>
     */
    public $Name;

    /**
     * @var string <p>词文件（纯文本文件）的二进制base64编码，以行分隔<br>格式要求：TXT<br>每行只有一个词，不满足格式则报错无法上传<br>每个词限制<strong>5个汉字，15个字符</strong>，单个词库最多不超过100个词<br>注意不要有空行，尤其是最后一行</p>
     */
    public $KeyWordFile;

    /**
     * @param string $Name <p>词表名称，长度在1-20之间<br>仅限中英文数字-_</p>
     * @param string $KeyWordFile <p>词文件（纯文本文件）的二进制base64编码，以行分隔<br>格式要求：TXT<br>每行只有一个词，不满足格式则报错无法上传<br>每个词限制<strong>5个汉字，15个字符</strong>，单个词库最多不超过100个词<br>注意不要有空行，尤其是最后一行</p>
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

        if (array_key_exists("KeyWordFile",$param) and $param["KeyWordFile"] !== null) {
            $this->KeyWordFile = $param["KeyWordFile"];
        }
    }
}
