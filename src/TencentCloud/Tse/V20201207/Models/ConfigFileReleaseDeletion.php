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
 * 配置发布删除
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroup() 获取配置分组
 * @method void setGroup(string $Group) 设置配置分组
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getReleaseVersion() 获取发布版本
 * @method void setReleaseVersion(string $ReleaseVersion) 设置发布版本
 * @method integer getId() 获取配置发布ID
 * @method void setId(integer $Id) 设置配置发布ID
 */
class ConfigFileReleaseDeletion extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 配置分组
     */
    public $Group;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 发布版本
     */
    public $ReleaseVersion;

    /**
     * @var integer 配置发布ID
     */
    public $Id;

    /**
     * @param string $Namespace 命名空间
     * @param string $Group 配置分组
     * @param string $FileName 文件名称
     * @param string $ReleaseVersion 发布版本
     * @param integer $Id 配置发布ID
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = $param["ReleaseVersion"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
