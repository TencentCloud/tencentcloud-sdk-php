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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMcpServers请求参数结构体
 *
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method array getStatuses() 获取状态数组：normal正常状态，disabled下线状态
 * @method void setStatuses(array $Statuses) 设置状态数组：normal正常状态，disabled下线状态
 * @method string getKeyword() 获取关键词
 * @method void setKeyword(string $Keyword) 设置关键词
 * @method array getIDs() 获取服务ID数组
 * @method void setIDs(array $IDs) 设置服务ID数组
 * @method array getModes() 获取模式：proxy代理模式； wrap封装模式；
 * @method void setModes(array $Modes) 设置模式：proxy代理模式； wrap封装模式；
 * @method string getMcpSecurityRuleID() 获取绑定的安全规则ID
 * @method void setMcpSecurityRuleID(string $McpSecurityRuleID) 设置绑定的安全规则ID
 * @method string getMcpSecurityRuleAct() 获取绑定安全规则的处置动作（填写时McpSecurityRuleID得必填）
 * @method void setMcpSecurityRuleAct(string $McpSecurityRuleAct) 设置绑定安全规则的处置动作（填写时McpSecurityRuleID得必填）
 * @method string getPluginID() 获取已绑定插件id
 * @method void setPluginID(string $PluginID) 设置已绑定插件id
 */
class DescribeMcpServersRequest extends AbstractModel
{
    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var array 状态数组：normal正常状态，disabled下线状态
     */
    public $Statuses;

    /**
     * @var string 关键词
     */
    public $Keyword;

    /**
     * @var array 服务ID数组
     */
    public $IDs;

    /**
     * @var array 模式：proxy代理模式； wrap封装模式；
     */
    public $Modes;

    /**
     * @var string 绑定的安全规则ID
     */
    public $McpSecurityRuleID;

    /**
     * @var string 绑定安全规则的处置动作（填写时McpSecurityRuleID得必填）
     */
    public $McpSecurityRuleAct;

    /**
     * @var string 已绑定插件id
     */
    public $PluginID;

    /**
     * @param integer $Limit 分页大小
     * @param integer $Offset 分页偏移量
     * @param string $InstanceID 实例ID
     * @param array $Statuses 状态数组：normal正常状态，disabled下线状态
     * @param string $Keyword 关键词
     * @param array $IDs 服务ID数组
     * @param array $Modes 模式：proxy代理模式； wrap封装模式；
     * @param string $McpSecurityRuleID 绑定的安全规则ID
     * @param string $McpSecurityRuleAct 绑定安全规则的处置动作（填写时McpSecurityRuleID得必填）
     * @param string $PluginID 已绑定插件id
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("Modes",$param) and $param["Modes"] !== null) {
            $this->Modes = $param["Modes"];
        }

        if (array_key_exists("McpSecurityRuleID",$param) and $param["McpSecurityRuleID"] !== null) {
            $this->McpSecurityRuleID = $param["McpSecurityRuleID"];
        }

        if (array_key_exists("McpSecurityRuleAct",$param) and $param["McpSecurityRuleAct"] !== null) {
            $this->McpSecurityRuleAct = $param["McpSecurityRuleAct"];
        }

        if (array_key_exists("PluginID",$param) and $param["PluginID"] !== null) {
            $this->PluginID = $param["PluginID"];
        }
    }
}
