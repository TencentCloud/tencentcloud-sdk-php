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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字符集与排序规则联动清单
 *
 * @method string getCharsetName() 获取<p>字符集</p>
 * @method void setCharsetName(string $CharsetName) 设置<p>字符集</p>
 * @method array getCollations() 获取<p>排序规则</p>
 * @method void setCollations(array $Collations) 设置<p>排序规则</p>
 * @method string getDefaultCollation() 获取<p>默认的排序规则</p>
 * @method void setDefaultCollation(string $DefaultCollation) 设置<p>默认的排序规则</p>
 */
class CharsetCollationItem extends AbstractModel
{
    /**
     * @var string <p>字符集</p>
     */
    public $CharsetName;

    /**
     * @var array <p>排序规则</p>
     */
    public $Collations;

    /**
     * @var string <p>默认的排序规则</p>
     */
    public $DefaultCollation;

    /**
     * @param string $CharsetName <p>字符集</p>
     * @param array $Collations <p>排序规则</p>
     * @param string $DefaultCollation <p>默认的排序规则</p>
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
        if (array_key_exists("CharsetName",$param) and $param["CharsetName"] !== null) {
            $this->CharsetName = $param["CharsetName"];
        }

        if (array_key_exists("Collations",$param) and $param["Collations"] !== null) {
            $this->Collations = $param["Collations"];
        }

        if (array_key_exists("DefaultCollation",$param) and $param["DefaultCollation"] !== null) {
            $this->DefaultCollation = $param["DefaultCollation"];
        }
    }
}
