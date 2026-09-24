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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc IndexInfo定义
 *
 * @method string getName() 获取<p>索引名称</p>
 * @method void setName(string $Name) 设置<p>索引名称</p>
 * @method string getType() 获取<p>索引类型</p><p>枚举值：</p><ul><li>primary_key： 主键</li></ul>
 * @method void setType(string $Type) 设置<p>索引类型</p><p>枚举值：</p><ul><li>primary_key： 主键</li></ul>
 * @method array getFieldNames() 获取<p>索引字段</p>
 * @method void setFieldNames(array $FieldNames) 设置<p>索引字段</p>
 */
class IndexInfo extends AbstractModel
{
    /**
     * @var string <p>索引名称</p>
     */
    public $Name;

    /**
     * @var string <p>索引类型</p><p>枚举值：</p><ul><li>primary_key： 主键</li></ul>
     */
    public $Type;

    /**
     * @var array <p>索引字段</p>
     */
    public $FieldNames;

    /**
     * @param string $Name <p>索引名称</p>
     * @param string $Type <p>索引类型</p><p>枚举值：</p><ul><li>primary_key： 主键</li></ul>
     * @param array $FieldNames <p>索引字段</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }
    }
}
