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
 * ModifyEnterpriseSecurityGroupRule请求参数结构体
 *
 * @method integer getRuleUuid() 获取<p>规则的uuid，可通过查询规则列表获取</p>
 * @method void setRuleUuid(integer $RuleUuid) 设置<p>规则的uuid，可通过查询规则列表获取</p>
 * @method integer getModifyType() 获取<p>修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态</p>
 * @method void setModifyType(integer $ModifyType) 设置<p>修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method SecurityGroupRule getData() 获取<p>编辑后的企业安全组规则数据；修改规则状态不用填该字段</p>
 * @method void setData(SecurityGroupRule $Data) 设置<p>编辑后的企业安全组规则数据；修改规则状态不用填该字段</p>
 * @method integer getEnable() 获取<p>0是关闭,1是开启</p>
 * @method void setEnable(integer $Enable) 设置<p>0是关闭,1是开启</p>
 */
class ModifyEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>规则的uuid，可通过查询规则列表获取</p>
     */
    public $RuleUuid;

    /**
     * @var integer <p>修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态</p>
     */
    public $ModifyType;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var SecurityGroupRule <p>编辑后的企业安全组规则数据；修改规则状态不用填该字段</p>
     */
    public $Data;

    /**
     * @var integer <p>0是关闭,1是开启</p>
     */
    public $Enable;

    /**
     * @param integer $RuleUuid <p>规则的uuid，可通过查询规则列表获取</p>
     * @param integer $ModifyType <p>修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param SecurityGroupRule $Data <p>编辑后的企业安全组规则数据；修改规则状态不用填该字段</p>
     * @param integer $Enable <p>0是关闭,1是开启</p>
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

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new SecurityGroupRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
