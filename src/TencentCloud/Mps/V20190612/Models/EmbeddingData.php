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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * embedding 接口的输入:
Type   数据类型,现在只支持text
Data  数据内容，当前只支持为文本
 *
 * @method string getType() 获取<p>数据类型</p><p>枚举值：</p><ul><li>text： 文本</li></ul>
 * @method void setType(string $Type) 设置<p>数据类型</p><p>枚举值：</p><ul><li>text： 文本</li></ul>
 * @method string getData() 获取<p>数据内容，当Type 为text时，为文本字符串</p>
 * @method void setData(string $Data) 设置<p>数据内容，当Type 为text时，为文本字符串</p>
 */
class EmbeddingData extends AbstractModel
{
    /**
     * @var string <p>数据类型</p><p>枚举值：</p><ul><li>text： 文本</li></ul>
     */
    public $Type;

    /**
     * @var string <p>数据内容，当Type 为text时，为文本字符串</p>
     */
    public $Data;

    /**
     * @param string $Type <p>数据类型</p><p>枚举值：</p><ul><li>text： 文本</li></ul>
     * @param string $Data <p>数据内容，当Type 为text时，为文本字符串</p>
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
