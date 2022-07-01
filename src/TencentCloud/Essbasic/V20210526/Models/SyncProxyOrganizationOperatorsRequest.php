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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncProxyOrganizationOperators请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.AppId 和 Agent.ProxyOrganizationOpenId必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.AppId 和 Agent.ProxyOrganizationOpenId必填。
 * @method string getOperatorType() 获取操作类型，新增:"CREATE"，修改:"UPDATE"，离职:"RESIGN"
 * @method void setOperatorType(string $OperatorType) 设置操作类型，新增:"CREATE"，修改:"UPDATE"，离职:"RESIGN"
 * @method array getProxyOrganizationOperators() 获取经办人信息列表，最大长度200
 * @method void setProxyOrganizationOperators(array $ProxyOrganizationOperators) 设置经办人信息列表，最大长度200
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 */
class SyncProxyOrganizationOperatorsRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.AppId 和 Agent.ProxyOrganizationOpenId必填。
     */
    public $Agent;

    /**
     * @var string 操作类型，新增:"CREATE"，修改:"UPDATE"，离职:"RESIGN"
     */
    public $OperatorType;

    /**
     * @var array 经办人信息列表，最大长度200
     */
    public $ProxyOrganizationOperators;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.AppId 和 Agent.ProxyOrganizationOpenId必填。
     * @param string $OperatorType 操作类型，新增:"CREATE"，修改:"UPDATE"，离职:"RESIGN"
     * @param array $ProxyOrganizationOperators 经办人信息列表，最大长度200
     * @param UserInfo $Operator 操作者的信息
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }

        if (array_key_exists("ProxyOrganizationOperators",$param) and $param["ProxyOrganizationOperators"] !== null) {
            $this->ProxyOrganizationOperators = [];
            foreach ($param["ProxyOrganizationOperators"] as $key => $value){
                $obj = new ProxyOrganizationOperator();
                $obj->deserialize($value);
                array_push($this->ProxyOrganizationOperators, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
