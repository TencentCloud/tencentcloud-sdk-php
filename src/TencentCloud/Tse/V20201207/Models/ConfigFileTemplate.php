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
 * @method integer getId() 获取<p>配置文件模板id</p>
 * @method void setId(integer $Id) 设置<p>配置文件模板id</p>
 * @method string getName() 获取<p>配置文件模板名称</p>
 * @method void setName(string $Name) 设置<p>配置文件模板名称</p>
 * @method string getContent() 获取<p>配置文件模板内容</p>
 * @method void setContent(string $Content) 设置<p>配置文件模板内容</p>
 * @method string getFormat() 获取<p>配置文件模板格式</p>
 * @method void setFormat(string $Format) 设置<p>配置文件模板格式</p>
 * @method string getComment() 获取<p>配置文件模板注释</p>
 * @method void setComment(string $Comment) 设置<p>配置文件模板注释</p>
 * @method string getCreateTime() 获取<p>配置文件模板创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>配置文件模板创建时间</p>
 * @method string getCreateBy() 获取<p>配置文件模板创建者</p>
 * @method void setCreateBy(string $CreateBy) 设置<p>配置文件模板创建者</p>
 * @method string getModifyTime() 获取<p>配置文件模板修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>配置文件模板修改时间</p>
 * @method string getModifyBy() 获取<p>配置文件模板修改者</p>
 * @method void setModifyBy(string $ModifyBy) 设置<p>配置文件模板修改者</p>
 */
class ConfigFileTemplate extends AbstractModel
{
    /**
     * @var integer <p>配置文件模板id</p>
     */
    public $Id;

    /**
     * @var string <p>配置文件模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>配置文件模板内容</p>
     */
    public $Content;

    /**
     * @var string <p>配置文件模板格式</p>
     */
    public $Format;

    /**
     * @var string <p>配置文件模板注释</p>
     */
    public $Comment;

    /**
     * @var string <p>配置文件模板创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>配置文件模板创建者</p>
     */
    public $CreateBy;

    /**
     * @var string <p>配置文件模板修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>配置文件模板修改者</p>
     */
    public $ModifyBy;

    /**
     * @param integer $Id <p>配置文件模板id</p>
     * @param string $Name <p>配置文件模板名称</p>
     * @param string $Content <p>配置文件模板内容</p>
     * @param string $Format <p>配置文件模板格式</p>
     * @param string $Comment <p>配置文件模板注释</p>
     * @param string $CreateTime <p>配置文件模板创建时间</p>
     * @param string $CreateBy <p>配置文件模板创建者</p>
     * @param string $ModifyTime <p>配置文件模板修改时间</p>
     * @param string $ModifyBy <p>配置文件模板修改者</p>
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
