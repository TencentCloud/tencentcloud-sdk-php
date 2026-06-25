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
 * AI 网关 MCP Server ACL 配置详情
 *
 * @method string getACLType() 获取<p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method void setACLType(string $ACLType) 设置<p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method array getACLConsumers() 获取<p>关联的消费者ID列表</p>
 * @method void setACLConsumers(array $ACLConsumers) 设置<p>关联的消费者ID列表</p>
 * @method array getACLConsumerGroups() 获取<p>关联的消费者组ID列表</p>
 * @method void setACLConsumerGroups(array $ACLConsumerGroups) 设置<p>关联的消费者组ID列表</p>
 * @method string getAuthType() 获取<p>认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
 * @method void setAuthType(string $AuthType) 设置<p>认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
 */
class AIGWMCPServerACLResult extends AbstractModel
{
    /**
     * @var string <p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
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
     * @var string <p>认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
     */
    public $AuthType;

    /**
     * @param string $ACLType <p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     * @param array $ACLConsumers <p>关联的消费者ID列表</p>
     * @param array $ACLConsumerGroups <p>关联的消费者组ID列表</p>
     * @param string $AuthType <p>认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
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

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }
    }
}
