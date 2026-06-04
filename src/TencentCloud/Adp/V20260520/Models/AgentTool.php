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
 * Agent 工具详情
 *
 * @method AgentToolBasicConfig getConfig() 获取<p>工具配置字段</p>
 * @method void setConfig(AgentToolBasicConfig $Config) 设置<p>工具配置字段</p>
 * @method string getName() 获取<p>工具名称</p>
 * @method void setName(string $Name) 设置<p>工具名称</p>
 * @method integer getStatus() 获取<p>工具状态</p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li><li>3： 已失效</li></ul>
 * @method void setStatus(integer $Status) 设置<p>工具状态</p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li><li>3： 已失效</li></ul>
 * @method integer getStreamMode() 获取<p>调用方式</p><p>枚举值：</p><ul><li>0： 非流式</li><li>1： 流式</li></ul>
 * @method void setStreamMode(integer $StreamMode) 设置<p>调用方式</p><p>枚举值：</p><ul><li>0： 非流式</li><li>1： 流式</li></ul>
 * @method integer getToolAccessMode() 获取<p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 只读</li><li>2： 写/删除</li></ul>
 * @method void setToolAccessMode(integer $ToolAccessMode) 设置<p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 只读</li><li>2： 写/删除</li></ul>
 */
class AgentTool extends AbstractModel
{
    /**
     * @var AgentToolBasicConfig <p>工具配置字段</p>
     */
    public $Config;

    /**
     * @var string <p>工具名称</p>
     */
    public $Name;

    /**
     * @var integer <p>工具状态</p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li><li>3： 已失效</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>调用方式</p><p>枚举值：</p><ul><li>0： 非流式</li><li>1： 流式</li></ul>
     */
    public $StreamMode;

    /**
     * @var integer <p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 只读</li><li>2： 写/删除</li></ul>
     */
    public $ToolAccessMode;

    /**
     * @param AgentToolBasicConfig $Config <p>工具配置字段</p>
     * @param string $Name <p>工具名称</p>
     * @param integer $Status <p>工具状态</p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li><li>3： 已失效</li></ul>
     * @param integer $StreamMode <p>调用方式</p><p>枚举值：</p><ul><li>0： 非流式</li><li>1： 流式</li></ul>
     * @param integer $ToolAccessMode <p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 只读</li><li>2： 写/删除</li></ul>
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
            $this->Config = new AgentToolBasicConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StreamMode",$param) and $param["StreamMode"] !== null) {
            $this->StreamMode = $param["StreamMode"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }
    }
}
