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
 * 日志索引值描述信息
 *
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method string getTokenizer() 获取<p>标签</p>
 * @method void setTokenizer(string $Tokenizer) 设置<p>标签</p>
 * @method boolean getSqlFlag() 获取<p>sql标签</p>
 * @method void setSqlFlag(boolean $SqlFlag) 设置<p>sql标签</p>
 * @method boolean getContainZH() 获取<p>包含中文</p>
 * @method void setContainZH(boolean $ContainZH) 设置<p>包含中文</p>
 * @method string getAlias() 获取<p>别名</p>
 * @method void setAlias(string $Alias) 设置<p>别名</p>
 */
class LogValueInfo extends AbstractModel
{
    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var string <p>标签</p>
     */
    public $Tokenizer;

    /**
     * @var boolean <p>sql标签</p>
     */
    public $SqlFlag;

    /**
     * @var boolean <p>包含中文</p>
     */
    public $ContainZH;

    /**
     * @var string <p>别名</p>
     */
    public $Alias;

    /**
     * @param string $Type <p>类型</p>
     * @param string $Tokenizer <p>标签</p>
     * @param boolean $SqlFlag <p>sql标签</p>
     * @param boolean $ContainZH <p>包含中文</p>
     * @param string $Alias <p>别名</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
