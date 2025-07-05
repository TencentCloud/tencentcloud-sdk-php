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
 * 配置发布版本信息
 *
 * @method string getName() 获取配置发布的版本
 * @method void setName(string $Name) 设置配置发布的版本
 * @method boolean getActive() 获取是否生效
 * @method void setActive(boolean $Active) 设置是否生效
 * @method string getId() 获取配置发布的ID
 * @method void setId(string $Id) 设置配置发布的ID
 * @method string getNamespace() 获取配置发布的命名空间
 * @method void setNamespace(string $Namespace) 设置配置发布的命名空间
 * @method string getGroup() 获取配置发布的分组
 * @method void setGroup(string $Group) 设置配置发布的分组
 * @method string getFileName() 获取配置发布的文件名
 * @method void setFileName(string $FileName) 设置配置发布的文件名
 */
class ReleaseVersion extends AbstractModel
{
    /**
     * @var string 配置发布的版本
     */
    public $Name;

    /**
     * @var boolean 是否生效
     */
    public $Active;

    /**
     * @var string 配置发布的ID
     */
    public $Id;

    /**
     * @var string 配置发布的命名空间
     */
    public $Namespace;

    /**
     * @var string 配置发布的分组
     */
    public $Group;

    /**
     * @var string 配置发布的文件名
     */
    public $FileName;

    /**
     * @param string $Name 配置发布的版本
     * @param boolean $Active 是否生效
     * @param string $Id 配置发布的ID
     * @param string $Namespace 配置发布的命名空间
     * @param string $Group 配置发布的分组
     * @param string $FileName 配置发布的文件名
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

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
