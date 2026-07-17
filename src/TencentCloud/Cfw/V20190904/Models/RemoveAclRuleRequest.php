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
 * RemoveAclRule请求参数结构体
 *
 * @method array getRuleUuid() 获取<p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
 * @method void setRuleUuid(array $RuleUuid) 设置<p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method integer getDirection() 获取<p>规则方向：1，入站；0，出站</p>
 * @method void setDirection(integer $Direction) 设置<p>规则方向：1，入站；0，出站</p>
 */
class RemoveAclRuleRequest extends AbstractModel
{
    /**
     * @var array <p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
     */
    public $RuleUuid;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer <p>规则方向：1，入站；0，出站</p>
     */
    public $Direction;

    /**
     * @param array $RuleUuid <p>规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param integer $Direction <p>规则方向：1，入站；0，出站</p>
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
        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
