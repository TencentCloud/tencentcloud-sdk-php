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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像组件信息
 *
 * @method string getName() 获取<p>组件名</p>
 * @method void setName(string $Name) 设置<p>组件名</p>
 * @method string getVersion() 获取<p>组件版本</p>
 * @method void setVersion(string $Version) 设置<p>组件版本</p>
 * @method string getPath() 获取<p>组件所在路径</p>
 * @method void setPath(string $Path) 设置<p>组件所在路径</p>
 * @method string getType() 获取<p>组件类型</p><p>枚举值：</p><ul><li>SYSTEM_COMPONENT： 系统组件</li><li>APP_COMPONENT： 应用组件</li></ul>
 * @method void setType(string $Type) 设置<p>组件类型</p><p>枚举值：</p><ul><li>SYSTEM_COMPONENT： 系统组件</li><li>APP_COMPONENT： 应用组件</li></ul>
 * @method string getImageID() 获取<p>镜像id</p>
 * @method void setImageID(string $ImageID) 设置<p>镜像id</p>
 * @method integer getVulCount() 获取<p>漏洞数</p>
 * @method void setVulCount(integer $VulCount) 设置<p>漏洞数</p>
 * @method string getId() 获取<p>镜像组件Id</p>
 * @method void setId(string $Id) 设置<p>镜像组件Id</p>
 * @method integer getComponentId() 获取<p>组件Id</p>
 * @method void setComponentId(integer $ComponentId) 设置<p>组件Id</p>
 */
class ImageComponent extends AbstractModel
{
    /**
     * @var string <p>组件名</p>
     */
    public $Name;

    /**
     * @var string <p>组件版本</p>
     */
    public $Version;

    /**
     * @var string <p>组件所在路径</p>
     */
    public $Path;

    /**
     * @var string <p>组件类型</p><p>枚举值：</p><ul><li>SYSTEM_COMPONENT： 系统组件</li><li>APP_COMPONENT： 应用组件</li></ul>
     */
    public $Type;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageID;

    /**
     * @var integer <p>漏洞数</p>
     */
    public $VulCount;

    /**
     * @var string <p>镜像组件Id</p>
     */
    public $Id;

    /**
     * @var integer <p>组件Id</p>
     */
    public $ComponentId;

    /**
     * @param string $Name <p>组件名</p>
     * @param string $Version <p>组件版本</p>
     * @param string $Path <p>组件所在路径</p>
     * @param string $Type <p>组件类型</p><p>枚举值：</p><ul><li>SYSTEM_COMPONENT： 系统组件</li><li>APP_COMPONENT： 应用组件</li></ul>
     * @param string $ImageID <p>镜像id</p>
     * @param integer $VulCount <p>漏洞数</p>
     * @param string $Id <p>镜像组件Id</p>
     * @param integer $ComponentId <p>组件Id</p>
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }
    }
}
