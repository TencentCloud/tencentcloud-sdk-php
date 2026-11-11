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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值索引自动配置，启用后自动将日志内的字段添加到键值索引中，包括日志中后续新增的字段。
 *
 * @method boolean getStatus() 获取<p>键值索引自动配置开关</p>
 * @method void setStatus(boolean $Status) 设置<p>键值索引自动配置开关</p>
 * @method string getTokenizer() 获取<p>索引的分词符，其中的每个字符代表一个分词符；<br>仅支持英文符号、\n\t\r及转义符\；<br>注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义</p>
 * @method void setTokenizer(string $Tokenizer) 设置<p>索引的分词符，其中的每个字符代表一个分词符；<br>仅支持英文符号、\n\t\r及转义符\；<br>注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义</p>
 */
class DynamicIndex extends AbstractModel
{
    /**
     * @var boolean <p>键值索引自动配置开关</p>
     */
    public $Status;

    /**
     * @var string <p>索引的分词符，其中的每个字符代表一个分词符；<br>仅支持英文符号、\n\t\r及转义符\；<br>注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义</p>
     */
    public $Tokenizer;

    /**
     * @param boolean $Status <p>键值索引自动配置开关</p>
     * @param string $Tokenizer <p>索引的分词符，其中的每个字符代表一个分词符；<br>仅支持英文符号、\n\t\r及转义符\；<br>注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }
    }
}
