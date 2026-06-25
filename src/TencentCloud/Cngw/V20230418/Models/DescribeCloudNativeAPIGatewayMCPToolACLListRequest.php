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
 * DescribeCloudNativeAPIGatewayMCPToolACLList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID</p>
 * @method string getServerId() 获取<p>MCP 服务ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP 服务ID</p>
 * @method integer getLimit() 获取<p>分页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method string getKeyword() 获取<p>搜索关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键词</p>
 */
class DescribeCloudNativeAPIGatewayMCPToolACLListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP 服务ID</p>
     */
    public $ServerId;

    /**
     * @var integer <p>分页大小</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var string <p>搜索关键词</p>
     */
    public $Keyword;

    /**
     * @param string $GatewayId <p>网关实例ID</p>
     * @param string $ServerId <p>MCP 服务ID</p>
     * @param integer $Limit <p>分页大小</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param string $Keyword <p>搜索关键词</p>
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

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
