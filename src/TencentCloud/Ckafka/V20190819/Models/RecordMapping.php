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
 * record 与数据库表的映射关系
 *
 * @method string getJsonKey() 获取消息的 key 名称
 * @method void setJsonKey(string $JsonKey) 设置消息的 key 名称
 * @method string getType() 获取消息类型
 * @method void setType(string $Type) 设置消息类型
 * @method boolean getAllowNull() 获取消息是否允许为空
 * @method void setAllowNull(boolean $AllowNull) 设置消息是否允许为空
 * @method string getColumnName() 获取对应映射列名称
 * @method void setColumnName(string $ColumnName) 设置对应映射列名称
 * @method string getExtraInfo() 获取数据库表额外字段
 * @method void setExtraInfo(string $ExtraInfo) 设置数据库表额外字段
 * @method string getColumnSize() 获取当前列大小
 * @method void setColumnSize(string $ColumnSize) 设置当前列大小
 * @method string getDecimalDigits() 获取当前列精度
 * @method void setDecimalDigits(string $DecimalDigits) 设置当前列精度
 * @method boolean getAutoIncrement() 获取是否为自增列
 * @method void setAutoIncrement(boolean $AutoIncrement) 设置是否为自增列
 * @method string getDefaultValue() 获取数据库表默认参数
 * @method void setDefaultValue(string $DefaultValue) 设置数据库表默认参数
 */
class RecordMapping extends AbstractModel
{
    /**
     * @var string 消息的 key 名称
     */
    public $JsonKey;

    /**
     * @var string 消息类型
     */
    public $Type;

    /**
     * @var boolean 消息是否允许为空
     */
    public $AllowNull;

    /**
     * @var string 对应映射列名称
     */
    public $ColumnName;

    /**
     * @var string 数据库表额外字段
     */
    public $ExtraInfo;

    /**
     * @var string 当前列大小
     */
    public $ColumnSize;

    /**
     * @var string 当前列精度
     */
    public $DecimalDigits;

    /**
     * @var boolean 是否为自增列
     */
    public $AutoIncrement;

    /**
     * @var string 数据库表默认参数
     */
    public $DefaultValue;

    /**
     * @param string $JsonKey 消息的 key 名称
     * @param string $Type 消息类型
     * @param boolean $AllowNull 消息是否允许为空
     * @param string $ColumnName 对应映射列名称
     * @param string $ExtraInfo 数据库表额外字段
     * @param string $ColumnSize 当前列大小
     * @param string $DecimalDigits 当前列精度
     * @param boolean $AutoIncrement 是否为自增列
     * @param string $DefaultValue 数据库表默认参数
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
        if (array_key_exists("JsonKey",$param) and $param["JsonKey"] !== null) {
            $this->JsonKey = $param["JsonKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AllowNull",$param) and $param["AllowNull"] !== null) {
            $this->AllowNull = $param["AllowNull"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ColumnSize",$param) and $param["ColumnSize"] !== null) {
            $this->ColumnSize = $param["ColumnSize"];
        }

        if (array_key_exists("DecimalDigits",$param) and $param["DecimalDigits"] !== null) {
            $this->DecimalDigits = $param["DecimalDigits"];
        }

        if (array_key_exists("AutoIncrement",$param) and $param["AutoIncrement"] !== null) {
            $this->AutoIncrement = $param["AutoIncrement"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }
    }
}
