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
 * 表字段描述信息
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getType() 获取字段类型
 * @method void setType(string $Type) 设置字段类型
 * @method string getComment() 获取字段描述
 * @method void setComment(string $Comment) 设置字段描述
 * @method string getDefault() 获取字段默认值
 * @method void setDefault(string $Default) 设置字段默认值
 * @method boolean getNotNull() 获取字段是否是非空
 * @method void setNotNull(boolean $NotNull) 设置字段是否是非空
 * @method integer getPrecision() 获取表示整个 numeric 的长度,取值1-38
 * @method void setPrecision(integer $Precision) 设置表示整个 numeric 的长度,取值1-38
 * @method integer getScale() 获取表示小数部分的长度
Scale小于Precision
 * @method void setScale(integer $Scale) 设置表示小数部分的长度
Scale小于Precision
 * @method integer getPosition() 获取字段位置，小的在前
 * @method void setPosition(integer $Position) 设置字段位置，小的在前
 * @method boolean getIsPartition() 获取是否为分区字段
 * @method void setIsPartition(boolean $IsPartition) 设置是否为分区字段
 */
class TColumn extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段类型
     */
    public $Type;

    /**
     * @var string 字段描述
     */
    public $Comment;

    /**
     * @var string 字段默认值
     */
    public $Default;

    /**
     * @var boolean 字段是否是非空
     */
    public $NotNull;

    /**
     * @var integer 表示整个 numeric 的长度,取值1-38
     */
    public $Precision;

    /**
     * @var integer 表示小数部分的长度
Scale小于Precision
     */
    public $Scale;

    /**
     * @var integer 字段位置，小的在前
     */
    public $Position;

    /**
     * @var boolean 是否为分区字段
     */
    public $IsPartition;

    /**
     * @param string $Name 字段名称
     * @param string $Type 字段类型
     * @param string $Comment 字段描述
     * @param string $Default 字段默认值
     * @param boolean $NotNull 字段是否是非空
     * @param integer $Precision 表示整个 numeric 的长度,取值1-38
     * @param integer $Scale 表示小数部分的长度
Scale小于Precision
     * @param integer $Position 字段位置，小的在前
     * @param boolean $IsPartition 是否为分区字段
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

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("NotNull",$param) and $param["NotNull"] !== null) {
            $this->NotNull = $param["NotNull"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
