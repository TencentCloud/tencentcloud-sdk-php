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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置文件模板
 *
 * @method integer getId() 获取配置文件模板id
 * @method void setId(integer $Id) 设置配置文件模板id
 * @method string getName() 获取配置文件模板名称
 * @method void setName(string $Name) 设置配置文件模板名称
 * @method string getContent() 获取配置文件模板内容
 * @method void setContent(string $Content) 设置配置文件模板内容
 * @method string getFormat() 获取配置文件模板格式
 * @method void setFormat(string $Format) 设置配置文件模板格式
 * @method string getComment() 获取配置文件模板注释
 * @method void setComment(string $Comment) 设置配置文件模板注释
 * @method string getCreateTime() 获取配置文件模板创建时间
 * @method void setCreateTime(string $CreateTime) 设置配置文件模板创建时间
 * @method string getCreateBy() 获取配置文件模板创建者
 * @method void setCreateBy(string $CreateBy) 设置配置文件模板创建者
 * @method string getModifyTime() 获取配置文件模板修改时间
 * @method void setModifyTime(string $ModifyTime) 设置配置文件模板修改时间
 * @method string getModifyBy() 获取配置文件模板修改者
 * @method void setModifyBy(string $ModifyBy) 设置配置文件模板修改者
 */
class ConfigFileTemplate extends AbstractModel
{
    /**
     * @var integer 配置文件模板id
     */
    public $Id;

    /**
     * @var string 配置文件模板名称
     */
    public $Name;

    /**
     * @var string 配置文件模板内容
     */
    public $Content;

    /**
     * @var string 配置文件模板格式
     */
    public $Format;

    /**
     * @var string 配置文件模板注释
     */
    public $Comment;

    /**
     * @var string 配置文件模板创建时间
     */
    public $CreateTime;

    /**
     * @var string 配置文件模板创建者
     */
    public $CreateBy;

    /**
     * @var string 配置文件模板修改时间
     */
    public $ModifyTime;

    /**
     * @var string 配置文件模板修改者
     */
    public $ModifyBy;

    /**
     * @param integer $Id 配置文件模板id
     * @param string $Name 配置文件模板名称
     * @param string $Content 配置文件模板内容
     * @param string $Format 配置文件模板格式
     * @param string $Comment 配置文件模板注释
     * @param string $CreateTime 配置文件模板创建时间
     * @param string $CreateBy 配置文件模板创建者
     * @param string $ModifyTime 配置文件模板修改时间
     * @param string $ModifyBy 配置文件模板修改者
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyBy",$param) and $param["ModifyBy"] !== null) {
            $this->ModifyBy = $param["ModifyBy"];
        }
    }
}
