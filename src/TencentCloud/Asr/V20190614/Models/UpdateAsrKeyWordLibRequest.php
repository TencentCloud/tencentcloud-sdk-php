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
 * UpdateAsrKeyWordLib请求参数结构体
 *
 * @method string getKeyWordLibId() 获取关键词表ID
 * @method void setKeyWordLibId(string $KeyWordLibId) 设置关键词表ID
 * @method string getName() 获取词表名称，长度在1-20之间
仅限中英文数字-_
 * @method void setName(string $Name) 设置词表名称，长度在1-20之间
仅限中英文数字-_
 * @method string getKeyWordFile() 获取- 词文件（纯文本文件）以行分隔 ，进行二进制base64编码
- 格式要求：TXT 每行只有一个词，不满足格式则报错无法上传 
- 每个词最多5个汉字或15个字符，单个词库最多不超过100个词
- 此参数为空则只更新词表名称
 * @method void setKeyWordFile(string $KeyWordFile) 设置- 词文件（纯文本文件）以行分隔 ，进行二进制base64编码
- 格式要求：TXT 每行只有一个词，不满足格式则报错无法上传 
- 每个词最多5个汉字或15个字符，单个词库最多不超过100个词
- 此参数为空则只更新词表名称
 */
class UpdateAsrKeyWordLibRequest extends AbstractModel
{
    /**
     * @var string 关键词表ID
     */
    public $KeyWordLibId;

    /**
     * @var string 词表名称，长度在1-20之间
仅限中英文数字-_
     */
    public $Name;

    /**
     * @var string - 词文件（纯文本文件）以行分隔 ，进行二进制base64编码
- 格式要求：TXT 每行只有一个词，不满足格式则报错无法上传 
- 每个词最多5个汉字或15个字符，单个词库最多不超过100个词
- 此参数为空则只更新词表名称
     */
    public $KeyWordFile;

    /**
     * @param string $KeyWordLibId 关键词表ID
     * @param string $Name 词表名称，长度在1-20之间
仅限中英文数字-_
     * @param string $KeyWordFile - 词文件（纯文本文件）以行分隔 ，进行二进制base64编码
- 格式要求：TXT 每行只有一个词，不满足格式则报错无法上传 
- 每个词最多5个汉字或15个字符，单个词库最多不超过100个词
- 此参数为空则只更新词表名称
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
        if (array_key_exists("KeyWordLibId",$param) and $param["KeyWordLibId"] !== null) {
            $this->KeyWordLibId = $param["KeyWordLibId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KeyWordFile",$param) and $param["KeyWordFile"] !== null) {
            $this->KeyWordFile = $param["KeyWordFile"];
        }
    }
}
