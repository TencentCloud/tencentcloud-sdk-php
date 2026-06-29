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
 * 日志全文索引信息
 *
 * @method boolean getCaseSensitive() 获取<p>大小写敏感</p>
 * @method void setCaseSensitive(boolean $CaseSensitive) 设置<p>大小写敏感</p>
 * @method string getTokenizer() 获取<p>token</p>
 * @method void setTokenizer(string $Tokenizer) 设置<p>token</p>
 * @method boolean getContainZH() 获取<p>包含中文</p>
 * @method void setContainZH(boolean $ContainZH) 设置<p>包含中文</p>
 */
class LogFullTextInfo extends AbstractModel
{
    /**
     * @var boolean <p>大小写敏感</p>
     */
    public $CaseSensitive;

    /**
     * @var string <p>token</p>
     */
    public $Tokenizer;

    /**
     * @var boolean <p>包含中文</p>
     */
    public $ContainZH;

    /**
     * @param boolean $CaseSensitive <p>大小写敏感</p>
     * @param string $Tokenizer <p>token</p>
     * @param boolean $ContainZH <p>包含中文</p>
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
