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
 * AI 网关 Tool ACL 单条记录（DescribeMCPToolACLList 数组元素）
 *
 * @method string getToolId() 获取<p>MCP工具ID</p>
 * @method void setToolId(string $ToolId) 设置<p>MCP工具ID</p>
 * @method string getToolName() 获取<p>MCP工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>MCP工具名称</p>
 * @method string getACLType() 获取<p>MCP工具鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method void setACLType(string $ACLType) 设置<p>MCP工具鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method array getACLConsumers() 获取<p>关联的消费者ID列表</p>
 * @method void setACLConsumers(array $ACLConsumers) 设置<p>关联的消费者ID列表</p>
 * @method array getACLConsumerGroups() 获取<p>关联的消费者组ID列表</p>
 * @method void setACLConsumerGroups(array $ACLConsumerGroups) 设置<p>关联的消费者组ID列表</p>
 */
class AIGWMCPToolACLItem extends AbstractModel
{
    /**
     * @var string <p>MCP工具ID</p>
     */
    public $ToolId;

    /**
     * @var string <p>MCP工具名称</p>
     */
    public $ToolName;

    /**
     * @var string <p>MCP工具鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     */
    public $ACLType;

    /**
     * @var array <p>关联的消费者ID列表</p>
     */
    public $ACLConsumers;

    /**
     * @var array <p>关联的消费者组ID列表</p>
     */
    public $ACLConsumerGroups;

    /**
     * @param string $ToolId <p>MCP工具ID</p>
     * @param string $ToolName <p>MCP工具名称</p>
     * @param string $ACLType <p>MCP工具鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     * @param array $ACLConsumers <p>关联的消费者ID列表</p>
     * @param array $ACLConsumerGroups <p>关联的消费者组ID列表</p>
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
        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ACLType",$param) and $param["ACLType"] !== null) {
            $this->ACLType = $param["ACLType"];
        }

        if (array_key_exists("ACLConsumers",$param) and $param["ACLConsumers"] !== null) {
            $this->ACLConsumers = [];
            foreach ($param["ACLConsumers"] as $key => $value){
                $obj = new AIGWACLSubject();
                $obj->deserialize($value);
                array_push($this->ACLConsumers, $obj);
            }
        }

        if (array_key_exists("ACLConsumerGroups",$param) and $param["ACLConsumerGroups"] !== null) {
            $this->ACLConsumerGroups = [];
            foreach ($param["ACLConsumerGroups"] as $key => $value){
                $obj = new AIGWACLSubject();
                $obj->deserialize($value);
                array_push($this->ACLConsumerGroups, $obj);
            }
        }
    }
}
