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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClickHouse的Schema
 *
 * @method string getColumnName() 获取表的列名
 * @method void setColumnName(string $ColumnName) 设置表的列名
 * @method string getJsonKey() 获取该列对应的jsonKey名
 * @method void setJsonKey(string $JsonKey) 设置该列对应的jsonKey名
 * @method string getType() 获取表列项的类型
 * @method void setType(string $Type) 设置表列项的类型
 * @method boolean getAllowNull() 获取列项是否允许为空
 * @method void setAllowNull(boolean $AllowNull) 设置列项是否允许为空
 */
class ClickHouseSchema extends AbstractModel
{
    /**
     * @var string 表的列名
     */
    public $ColumnName;

    /**
     * @var string 该列对应的jsonKey名
     */
    public $JsonKey;

    /**
     * @var string 表列项的类型
     */
    public $Type;

    /**
     * @var boolean 列项是否允许为空
     */
    public $AllowNull;

    /**
     * @param string $ColumnName 表的列名
     * @param string $JsonKey 该列对应的jsonKey名
     * @param string $Type 表列项的类型
     * @param boolean $AllowNull 列项是否允许为空
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("JsonKey",$param) and $param["JsonKey"] !== null) {
            $this->JsonKey = $param["JsonKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AllowNull",$param) and $param["AllowNull"] !== null) {
            $this->AllowNull = $param["AllowNull"];
        }
    }
}
