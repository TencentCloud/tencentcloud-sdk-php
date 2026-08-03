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
 * Agent 的插件信息
 *
 * @method AgentPluginConfig getConfig() 获取<p>插件基本配置</p>
 * @method void setConfig(AgentPluginConfig $Config) 设置<p>插件基本配置</p>
 * @method string getName() 获取<p>插件名称</p>
 * @method void setName(string $Name) 设置<p>插件名称</p>
 * @method string getIconUrl() 获取<p>插件图标url</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>插件图标url</p>
 * @method string getDescription() 获取<p>插件描述</p>
 * @method void setDescription(string $Description) 设置<p>插件描述</p>
 * @method integer getPluginClass() 获取<p>插件产品分类</p><p>枚举值：</p><ul><li>0： 普通插件</li><li>1： 连接器类插件</li></ul>
 * @method void setPluginClass(integer $PluginClass) 设置<p>插件产品分类</p><p>枚举值：</p><ul><li>0： 普通插件</li><li>1： 连接器类插件</li></ul>
 * @method integer getStatus() 获取<p>插件状态</p><p>枚举值：</p><ul><li>0： 未知</li><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>插件状态</p><p>枚举值：</p><ul><li>0： 未知</li><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method integer getAuthConfigStatus() 获取<p>插件鉴权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
 * @method void setAuthConfigStatus(integer $AuthConfigStatus) 设置<p>插件鉴权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
 */
class AgentPlugin extends AbstractModel
{
    /**
     * @var AgentPluginConfig <p>插件基本配置</p>
     */
    public $Config;

    /**
     * @var string <p>插件名称</p>
     */
    public $Name;

    /**
     * @var string <p>插件图标url</p>
     */
    public $IconUrl;

    /**
     * @var string <p>插件描述</p>
     */
    public $Description;

    /**
     * @var integer <p>插件产品分类</p><p>枚举值：</p><ul><li>0： 普通插件</li><li>1： 连接器类插件</li></ul>
     */
    public $PluginClass;

    /**
     * @var integer <p>插件状态</p><p>枚举值：</p><ul><li>0： 未知</li><li>1： 可用</li><li>2： 不可用</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>插件鉴权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
     */
    public $AuthConfigStatus;

    /**
     * @param AgentPluginConfig $Config <p>插件基本配置</p>
     * @param string $Name <p>插件名称</p>
     * @param string $IconUrl <p>插件图标url</p>
     * @param string $Description <p>插件描述</p>
     * @param integer $PluginClass <p>插件产品分类</p><p>枚举值：</p><ul><li>0： 普通插件</li><li>1： 连接器类插件</li></ul>
     * @param integer $Status <p>插件状态</p><p>枚举值：</p><ul><li>0： 未知</li><li>1： 可用</li><li>2： 不可用</li></ul>
     * @param integer $AuthConfigStatus <p>插件鉴权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AgentPluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginClass",$param) and $param["PluginClass"] !== null) {
            $this->PluginClass = $param["PluginClass"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthConfigStatus",$param) and $param["AuthConfigStatus"] !== null) {
            $this->AuthConfigStatus = $param["AuthConfigStatus"];
        }
    }
}
