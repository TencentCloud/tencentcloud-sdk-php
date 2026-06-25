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
 * DescribeCloudNativeAPIGatewayMCPToolList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 id</p>
 * @method string getServerId() 获取<p>MCP服务 id</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP服务 id</p>
 * @method integer getLimit() 获取<p>条数</p><p>取值范围：[1, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>条数</p><p>取值范围：[1, 100]</p>
 * @method integer getOffset() 获取<p>开始位置</p><p>取值范围：[1, 100000]</p>
 * @method void setOffset(integer $Offset) 设置<p>开始位置</p><p>取值范围：[1, 100000]</p>
 */
class DescribeCloudNativeAPIGatewayMCPToolListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP服务 id</p>
     */
    public $ServerId;

    /**
     * @var integer <p>条数</p><p>取值范围：[1, 100]</p>
     */
    public $Limit;

    /**
     * @var integer <p>开始位置</p><p>取值范围：[1, 100000]</p>
     */
    public $Offset;

    /**
     * @param string $GatewayId <p>实例 id</p>
     * @param string $ServerId <p>MCP服务 id</p>
     * @param integer $Limit <p>条数</p><p>取值范围：[1, 100]</p>
     * @param integer $Offset <p>开始位置</p><p>取值范围：[1, 100000]</p>
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
    }
}
