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
 * 镜像响应类
 *
 * @method integer getId() 获取<p>镜像ID</p>
 * @method void setId(integer $Id) 设置<p>镜像ID</p>
 * @method string getName() 获取<p>镜像名称</p>
 * @method void setName(string $Name) 设置<p>镜像名称</p>
 * @method string getUrl() 获取<p>镜像地址</p>
 * @method void setUrl(string $Url) 设置<p>镜像地址</p>
 * @method string getDescription() 获取<p>镜像描述</p>
 * @method void setDescription(string $Description) 设置<p>镜像描述</p>
 * @method string getType() 获取<p>镜像类型（Ray/Workspace）</p>
 * @method void setType(string $Type) 设置<p>镜像类型（Ray/Workspace）</p>
 * @method string getRayVersion() 获取<p>镜像内置的 Ray 版本号</p>
 * @method void setRayVersion(string $RayVersion) 设置<p>镜像内置的 Ray 版本号</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 */
class ImageDto extends AbstractModel
{
    /**
     * @var integer <p>镜像ID</p>
     */
    public $Id;

    /**
     * @var string <p>镜像名称</p>
     */
    public $Name;

    /**
     * @var string <p>镜像地址</p>
     */
    public $Url;

    /**
     * @var string <p>镜像描述</p>
     */
    public $Description;

    /**
     * @var string <p>镜像类型（Ray/Workspace）</p>
     */
    public $Type;

    /**
     * @var string <p>镜像内置的 Ray 版本号</p>
     */
    public $RayVersion;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Id <p>镜像ID</p>
     * @param string $Name <p>镜像名称</p>
     * @param string $Url <p>镜像地址</p>
     * @param string $Description <p>镜像描述</p>
     * @param string $Type <p>镜像类型（Ray/Workspace）</p>
     * @param string $RayVersion <p>镜像内置的 Ray 版本号</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RayVersion",$param) and $param["RayVersion"] !== null) {
            $this->RayVersion = $param["RayVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
