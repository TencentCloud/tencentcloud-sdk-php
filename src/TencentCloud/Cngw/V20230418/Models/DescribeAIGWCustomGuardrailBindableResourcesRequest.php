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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIGWCustomGuardrailBindableResources请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method string getResourceType() 获取<p>资源类型：model_api、mcp_server 或 agent_api</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型：model_api、mcp_server 或 agent_api</p>
 * @method string getPolicyId() 获取<p>当前策略 ID；用于排除自身占用</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>当前策略 ID；用于排除自身占用</p>
 * @method string getKeyword() 获取<p>按资源名称或路径模糊搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>按资源名称或路径模糊搜索</p>
 * @method integer getOffset() 获取<p>分页偏移量，最小 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，最小 0</p>
 * @method integer getLimit() 获取<p>单页数量，范围 1～100，默认 20</p>
 * @method void setLimit(integer $Limit) 设置<p>单页数量，范围 1～100，默认 20</p>
 */
class DescribeAIGWCustomGuardrailBindableResourcesRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>资源类型：model_api、mcp_server 或 agent_api</p>
     */
    public $ResourceType;

    /**
     * @var string <p>当前策略 ID；用于排除自身占用</p>
     */
    public $PolicyId;

    /**
     * @var string <p>按资源名称或路径模糊搜索</p>
     */
    public $Keyword;

    /**
     * @var integer <p>分页偏移量，最小 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>单页数量，范围 1～100，默认 20</p>
     */
    public $Limit;

    /**
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param string $ResourceType <p>资源类型：model_api、mcp_server 或 agent_api</p>
     * @param string $PolicyId <p>当前策略 ID；用于排除自身占用</p>
     * @param string $Keyword <p>按资源名称或路径模糊搜索</p>
     * @param integer $Offset <p>分页偏移量，最小 0</p>
     * @param integer $Limit <p>单页数量，范围 1～100，默认 20</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
