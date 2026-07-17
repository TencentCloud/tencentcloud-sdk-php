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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveVpcAcRule请求参数结构体
 *
 * @method array getRuleUuids() 获取<p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
 * @method void setRuleUuids(array $RuleUuids) 设置<p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method integer getIpVersion() 获取<p>仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则</p>
 */
class RemoveVpcAcRuleRequest extends AbstractModel
{
    /**
     * @var array <p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
     */
    public $RuleUuids;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer <p>仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则</p>
     */
    public $IpVersion;

    /**
     * @param array $RuleUuids <p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param integer $IpVersion <p>仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则</p>
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
        if (array_key_exists("RuleUuids",$param) and $param["RuleUuids"] !== null) {
            $this->RuleUuids = $param["RuleUuids"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
