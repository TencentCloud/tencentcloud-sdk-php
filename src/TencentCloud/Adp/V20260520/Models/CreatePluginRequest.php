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
 * CreatePlugin请求参数结构体
 *
 * @method PluginProfile getProfile() 获取<p>插件基础资料</p>
 * @method void setProfile(PluginProfile $Profile) 设置<p>插件基础资料</p>
 * @method PluginConfig getConfig() 获取<p>插件类型配置</p>
 * @method void setConfig(PluginConfig $Config) 设置<p>插件类型配置</p>
 * @method string getSpaceId() 获取<p>当前空间id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>当前空间id</p>
 * @method array getToolList() 获取<p>插件的工具列表</p>
 * @method void setToolList(array $ToolList) 设置<p>插件的工具列表</p>
 * @method string getLoginUin() 获取<p>登录用户主账号(集成商模式必填)</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>登录用户主账号(集成商模式必填)</p>
 * @method string getLoginSubAccountUin() 获取<p>登录用户子账号(集成商模式必填)</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>登录用户子账号(集成商模式必填)</p>
 */
class CreatePluginRequest extends AbstractModel
{
    /**
     * @var PluginProfile <p>插件基础资料</p>
     */
    public $Profile;

    /**
     * @var PluginConfig <p>插件类型配置</p>
     */
    public $Config;

    /**
     * @var string <p>当前空间id</p>
     */
    public $SpaceId;

    /**
     * @var array <p>插件的工具列表</p>
     */
    public $ToolList;

    /**
     * @var string <p>登录用户主账号(集成商模式必填)</p>
     */
    public $LoginUin;

    /**
     * @var string <p>登录用户子账号(集成商模式必填)</p>
     */
    public $LoginSubAccountUin;

    /**
     * @param PluginProfile $Profile <p>插件基础资料</p>
     * @param PluginConfig $Config <p>插件类型配置</p>
     * @param string $SpaceId <p>当前空间id</p>
     * @param array $ToolList <p>插件的工具列表</p>
     * @param string $LoginUin <p>登录用户主账号(集成商模式必填)</p>
     * @param string $LoginSubAccountUin <p>登录用户子账号(集成商模式必填)</p>
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
        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new PluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
