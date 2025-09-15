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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Server模板
 *
 * @method string getName() 获取MCP Server名称
 * @method void setName(string $Name) 设置MCP Server名称
 * @method string getCommand() 获取Base64编码之后的MCP Server启动命令。
 * @method void setCommand(string $Command) 设置Base64编码之后的MCP Server启动命令。
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getIconUrl() 获取MCP Server图标地址
 * @method void setIconUrl(string $IconUrl) 设置MCP Server图标地址
 * @method string getCommunityUrl() 获取MCP Server社区地址
 * @method void setCommunityUrl(string $CommunityUrl) 设置MCP Server社区地址
 * @method string getPlatformUrl() 获取MCP Server关联的开发平台地址或开放平台地址
 * @method void setPlatformUrl(string $PlatformUrl) 设置MCP Server关联的开发平台地址或开放平台地址
 * @method array getEnvSet() 获取MCP Server环境变量
 * @method void setEnvSet(array $EnvSet) 设置MCP Server环境变量
 */
class McpServerTemplate extends AbstractModel
{
    /**
     * @var string MCP Server名称
     */
    public $Name;

    /**
     * @var string Base64编码之后的MCP Server启动命令。
     */
    public $Command;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string MCP Server图标地址
     */
    public $IconUrl;

    /**
     * @var string MCP Server社区地址
     */
    public $CommunityUrl;

    /**
     * @var string MCP Server关联的开发平台地址或开放平台地址
     */
    public $PlatformUrl;

    /**
     * @var array MCP Server环境变量
     */
    public $EnvSet;

    /**
     * @param string $Name MCP Server名称
     * @param string $Command Base64编码之后的MCP Server启动命令。
     * @param string $Description 描述
     * @param string $IconUrl MCP Server图标地址
     * @param string $CommunityUrl MCP Server社区地址
     * @param string $PlatformUrl MCP Server关联的开发平台地址或开放平台地址
     * @param array $EnvSet MCP Server环境变量
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

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("CommunityUrl",$param) and $param["CommunityUrl"] !== null) {
            $this->CommunityUrl = $param["CommunityUrl"];
        }

        if (array_key_exists("PlatformUrl",$param) and $param["PlatformUrl"] !== null) {
            $this->PlatformUrl = $param["PlatformUrl"];
        }

        if (array_key_exists("EnvSet",$param) and $param["EnvSet"] !== null) {
            $this->EnvSet = [];
            foreach ($param["EnvSet"] as $key => $value){
                $obj = new McpServerTemplateEnv();
                $obj->deserialize($value);
                array_push($this->EnvSet, $obj);
            }
        }
    }
}
