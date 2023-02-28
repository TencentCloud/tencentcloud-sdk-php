<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getRuleUuid() 获取规则的uuid，可通过查询规则列表获取
 * @method void setRuleUuid(integer $RuleUuid) 设置规则的uuid，可通过查询规则列表获取
 * @method integer getModifyType() 获取修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态
 * @method void setModifyType(integer $ModifyType) 设置修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态
 * @method SecurityGroupRule getData() 获取编辑后的企业安全组规则数据；修改规则状态不用填该字段
 * @method void setData(SecurityGroupRule $Data) 设置编辑后的企业安全组规则数据；修改规则状态不用填该字段
 * @method integer getEnable() 获取0是关闭,1是开启
 * @method void setEnable(integer $Enable) 设置0是关闭,1是开启
 */
class ModifyEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则的uuid，可通过查询规则列表获取
     */
    public $RuleUuid;

    /**
     * @var integer 修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态
     */
    public $ModifyType;

    /**
     * @var SecurityGroupRule 编辑后的企业安全组规则数据；修改规则状态不用填该字段
     */
    public $Data;

    /**
     * @var integer 0是关闭,1是开启
     */
    public $Enable;

    /**
     * @param integer $RuleUuid 规则的uuid，可通过查询规则列表获取
     * @param integer $ModifyType 修改类型，0：修改规则内容；1：修改单条规则开关状态；2：修改所有规则开关状态
     * @param SecurityGroupRule $Data 编辑后的企业安全组规则数据；修改规则状态不用填该字段
     * @param integer $Enable 0是关闭,1是开启
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new SecurityGroupRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
