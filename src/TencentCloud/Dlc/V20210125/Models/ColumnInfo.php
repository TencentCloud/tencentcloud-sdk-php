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
 * tcc table列定义
 *
 * @method string getName() 获取<p>字段名</p>
 * @method void setName(string $Name) 设置<p>字段名</p>
 * @method string getType() 获取<p>字段类型</p><p>枚举值：</p><ul><li>integer： 数值类型</li></ul>
 * @method void setType(string $Type) 设置<p>字段类型</p><p>枚举值：</p><ul><li>integer： 数值类型</li></ul>
 * @method string getComment() 获取<p>字段描述</p>
 * @method void setComment(string $Comment) 设置<p>字段描述</p>
 * @method string getFieldSetting() 获取<p>字段设置（已废弃）</p>
 * @method void setFieldSetting(string $FieldSetting) 设置<p>字段设置（已废弃）</p>
 * @method boolean getIsPrimaryKey() 获取<p>是否为主键（已废弃）</p><p>枚举值：</p><ul><li>true： 是主键</li></ul>
 * @method void setIsPrimaryKey(boolean $IsPrimaryKey) 设置<p>是否为主键（已废弃）</p><p>枚举值：</p><ul><li>true： 是主键</li></ul>
 * @method string getTypeText() 获取<p>字段类型 sqlType 格式</p>
 * @method void setTypeText(string $TypeText) 设置<p>字段类型 sqlType 格式</p>
 */
class ColumnInfo extends AbstractModel
{
    /**
     * @var string <p>字段名</p>
     */
    public $Name;

    /**
     * @var string <p>字段类型</p><p>枚举值：</p><ul><li>integer： 数值类型</li></ul>
     */
    public $Type;

    /**
     * @var string <p>字段描述</p>
     */
    public $Comment;

    /**
     * @var string <p>字段设置（已废弃）</p>
     */
    public $FieldSetting;

    /**
     * @var boolean <p>是否为主键（已废弃）</p><p>枚举值：</p><ul><li>true： 是主键</li></ul>
     */
    public $IsPrimaryKey;

    /**
     * @var string <p>字段类型 sqlType 格式</p>
     */
    public $TypeText;

    /**
     * @param string $Name <p>字段名</p>
     * @param string $Type <p>字段类型</p><p>枚举值：</p><ul><li>integer： 数值类型</li></ul>
     * @param string $Comment <p>字段描述</p>
     * @param string $FieldSetting <p>字段设置（已废弃）</p>
     * @param boolean $IsPrimaryKey <p>是否为主键（已废弃）</p><p>枚举值：</p><ul><li>true： 是主键</li></ul>
     * @param string $TypeText <p>字段类型 sqlType 格式</p>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FieldSetting",$param) and $param["FieldSetting"] !== null) {
            $this->FieldSetting = $param["FieldSetting"];
        }

        if (array_key_exists("IsPrimaryKey",$param) and $param["IsPrimaryKey"] !== null) {
            $this->IsPrimaryKey = $param["IsPrimaryKey"];
        }

        if (array_key_exists("TypeText",$param) and $param["TypeText"] !== null) {
            $this->TypeText = $param["TypeText"];
        }
    }
}
