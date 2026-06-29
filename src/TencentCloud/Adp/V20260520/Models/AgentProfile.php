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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 基本配置
 *
 * @method string getName() 获取<p>Agent名称</p>
 * @method void setName(string $Name) 设置<p>Agent名称</p>
 * @method string getIconUrl() 获取<p>图标URL</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>图标URL</p>
 * @method integer getRole() 获取<p>Agent 角色：0=主 / 1=子</p>
 * @method void setRole(integer $Role) 设置<p>Agent 角色：0=主 / 1=子</p>
 * @method string getDescription() 获取<p>Agent 描述</p>
 * @method void setDescription(string $Description) 设置<p>Agent 描述</p>
 * @method string getAppName() 获取<p>应用名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用名称</p>
 * @method string getDeveloper() 获取<p>开发者</p>
 * @method void setDeveloper(string $Developer) 设置<p>开发者</p>
 * @method string getParentAgentId() 获取<p>主AgentId，只读，不可通过修改接口进行变更</p>
 * @method void setParentAgentId(string $ParentAgentId) 设置<p>主AgentId，只读，不可通过修改接口进行变更</p>
 */
class AgentProfile extends AbstractModel
{
    /**
     * @var string <p>Agent名称</p>
     */
    public $Name;

    /**
     * @var string <p>图标URL</p>
     */
    public $IconUrl;

    /**
     * @var integer <p>Agent 角色：0=主 / 1=子</p>
     */
    public $Role;

    /**
     * @var string <p>Agent 描述</p>
     */
    public $Description;

    /**
     * @var string <p>应用名称</p>
     */
    public $AppName;

    /**
     * @var string <p>开发者</p>
     */
    public $Developer;

    /**
     * @var string <p>主AgentId，只读，不可通过修改接口进行变更</p>
     */
    public $ParentAgentId;

    /**
     * @param string $Name <p>Agent名称</p>
     * @param string $IconUrl <p>图标URL</p>
     * @param integer $Role <p>Agent 角色：0=主 / 1=子</p>
     * @param string $Description <p>Agent 描述</p>
     * @param string $AppName <p>应用名称</p>
     * @param string $Developer <p>开发者</p>
     * @param string $ParentAgentId <p>主AgentId，只读，不可通过修改接口进行变更</p>
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

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Developer",$param) and $param["Developer"] !== null) {
            $this->Developer = $param["Developer"];
        }

        if (array_key_exists("ParentAgentId",$param) and $param["ParentAgentId"] !== null) {
            $this->ParentAgentId = $param["ParentAgentId"];
        }
    }
}
