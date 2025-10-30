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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上报表元数据的字段结构
 *
 * @method string getName() 获取字段名称,字符长度128内
 * @method void setName(string $Name) 设置字段名称,字符长度128内
 * @method string getType() 获取字段类型,字符长度128内
 * @method void setType(string $Type) 设置字段类型,字符长度128内
 * @method integer getPosition() 获取字段位置,1开始
 * @method void setPosition(integer $Position) 设置字段位置,1开始
 * @method string getDescription() 获取字段描述,字符长度256内
 * @method void setDescription(string $Description) 设置字段描述,字符长度256内
 * @method string getCreateTime() 获取创建时间戳,毫秒,为空默认当前时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间戳,毫秒,为空默认当前时间
 * @method string getModifiedTime() 获取修改时间戳,毫秒,为空默认当前时间
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间戳,毫秒,为空默认当前时间
 */
class ReportColumnInfo extends AbstractModel
{
    /**
     * @var string 字段名称,字符长度128内
     */
    public $Name;

    /**
     * @var string 字段类型,字符长度128内
     */
    public $Type;

    /**
     * @var integer 字段位置,1开始
     */
    public $Position;

    /**
     * @var string 字段描述,字符长度256内
     */
    public $Description;

    /**
     * @var string 创建时间戳,毫秒,为空默认当前时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间戳,毫秒,为空默认当前时间
     */
    public $ModifiedTime;

    /**
     * @param string $Name 字段名称,字符长度128内
     * @param string $Type 字段类型,字符长度128内
     * @param integer $Position 字段位置,1开始
     * @param string $Description 字段描述,字符长度256内
     * @param string $CreateTime 创建时间戳,毫秒,为空默认当前时间
     * @param string $ModifiedTime 修改时间戳,毫秒,为空默认当前时间
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

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
