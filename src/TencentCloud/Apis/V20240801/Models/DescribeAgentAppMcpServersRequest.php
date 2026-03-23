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
 * DescribeAgentAppMcpServers请求参数结构体
 *
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method array getAgentAppIDs() 获取应用ID
 * @method void setAgentAppIDs(array $AgentAppIDs) 设置应用ID
 * @method array getMcpServerIDs() 获取关联的mcp
 * @method void setMcpServerIDs(array $McpServerIDs) 设置关联的mcp
 * @method array getAgentCredentialIDs() 获取凭据ID
 * @method void setAgentCredentialIDs(array $AgentCredentialIDs) 设置凭据ID
 * @method string getKeyword() 获取关键词
 * @method void setKeyword(string $Keyword) 设置关键词
 */
class DescribeAgentAppMcpServersRequest extends AbstractModel
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
     * @var array 应用ID
     */
    public $AgentAppIDs;

    /**
     * @var array 关联的mcp
     */
    public $McpServerIDs;

    /**
     * @var array 凭据ID
     */
    public $AgentCredentialIDs;

    /**
     * @var string 关键词
     */
    public $Keyword;

    /**
     * @param integer $Limit 分页大小
     * @param integer $Offset 分页偏移量
     * @param string $InstanceID 实例ID
     * @param array $AgentAppIDs 应用ID
     * @param array $McpServerIDs 关联的mcp
     * @param array $AgentCredentialIDs 凭据ID
     * @param string $Keyword 关键词
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

        if (array_key_exists("AgentAppIDs",$param) and $param["AgentAppIDs"] !== null) {
            $this->AgentAppIDs = $param["AgentAppIDs"];
        }

        if (array_key_exists("McpServerIDs",$param) and $param["McpServerIDs"] !== null) {
            $this->McpServerIDs = $param["McpServerIDs"];
        }

        if (array_key_exists("AgentCredentialIDs",$param) and $param["AgentCredentialIDs"] !== null) {
            $this->AgentCredentialIDs = $param["AgentCredentialIDs"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
