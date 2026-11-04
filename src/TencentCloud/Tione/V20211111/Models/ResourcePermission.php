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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源级权限记录
 *
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method string getId() 获取<p>资源ID</p>
 * @method void setId(string $Id) 设置<p>资源ID</p>
 * @method string getPermission() 获取<p>权限值</p>
 * @method void setPermission(string $Permission) 设置<p>权限值</p>
 * @method string getName() 获取<p>资源名称</p>
 * @method void setName(string $Name) 设置<p>资源名称</p>
 * @method string getSubUin() 获取<p>创建者子账号</p>
 * @method void setSubUin(string $SubUin) 设置<p>创建者子账号</p>
 * @method string getSubUinName() 获取<p>创建者昵称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>创建者昵称</p>
 * @method DataSourceBrief getDataSourceBrief() 获取<p>数据源简要信息</p>
 * @method void setDataSourceBrief(DataSourceBrief $DataSourceBrief) 设置<p>数据源简要信息</p>
 */
class ResourcePermission extends AbstractModel
{
    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>资源ID</p>
     */
    public $Id;

    /**
     * @var string <p>权限值</p>
     */
    public $Permission;

    /**
     * @var string <p>资源名称</p>
     */
    public $Name;

    /**
     * @var string <p>创建者子账号</p>
     */
    public $SubUin;

    /**
     * @var string <p>创建者昵称</p>
     */
    public $SubUinName;

    /**
     * @var DataSourceBrief <p>数据源简要信息</p>
     */
    public $DataSourceBrief;

    /**
     * @param string $ResourceType <p>资源类型</p>
     * @param string $Id <p>资源ID</p>
     * @param string $Permission <p>权限值</p>
     * @param string $Name <p>资源名称</p>
     * @param string $SubUin <p>创建者子账号</p>
     * @param string $SubUinName <p>创建者昵称</p>
     * @param DataSourceBrief $DataSourceBrief <p>数据源简要信息</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("DataSourceBrief",$param) and $param["DataSourceBrief"] !== null) {
            $this->DataSourceBrief = new DataSourceBrief();
            $this->DataSourceBrief->deserialize($param["DataSourceBrief"]);
        }
    }
}
