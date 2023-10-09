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
 * ChannelCreateFlowApprovers请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息
 * @method string getFlowId() 获取合同唯一编号
 * @method void setFlowId(string $FlowId) 设置合同唯一编号
 * @method array getApprovers() 获取补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
 * @method void setApprovers(array $Approvers) 设置补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method integer getFillApproverType() 获取签署人信息补充方式

<ul><li>**0**: 补充或签人，支持补充多个企业经办签署人（默认）注: `不可补充个人签署人`</li>
<li>**1**: 补充动态签署人，可补充企业和个人签署人。注: `每个签署方节点签署人是唯一的，一个节点只支持传入一个签署人信息`</li></ul>
 * @method void setFillApproverType(integer $FillApproverType) 设置签署人信息补充方式

<ul><li>**0**: 补充或签人，支持补充多个企业经办签署人（默认）注: `不可补充个人签署人`</li>
<li>**1**: 补充动态签署人，可补充企业和个人签署人。注: `每个签署方节点签署人是唯一的，一个节点只支持传入一个签署人信息`</li></ul>
 */
class ChannelCreateFlowApproversRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息
     */
    public $Agent;

    /**
     * @var string 合同唯一编号
     */
    public $FlowId;

    /**
     * @var array 补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
     */
    public $Approvers;

    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var integer 签署人信息补充方式

<ul><li>**0**: 补充或签人，支持补充多个企业经办签署人（默认）注: `不可补充个人签署人`</li>
<li>**1**: 补充动态签署人，可补充企业和个人签署人。注: `每个签署方节点签署人是唯一的，一个节点只支持传入一个签署人信息`</li></ul>
     */
    public $FillApproverType;

    /**
     * @param Agent $Agent 渠道应用相关信息
     * @param string $FlowId 合同唯一编号
     * @param array $Approvers 补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
     * @param UserInfo $Operator 操作人信息
     * @param integer $FillApproverType 签署人信息补充方式

<ul><li>**0**: 补充或签人，支持补充多个企业经办签署人（默认）注: `不可补充个人签署人`</li>
<li>**1**: 补充动态签署人，可补充企业和个人签署人。注: `每个签署方节点签署人是唯一的，一个节点只支持传入一个签署人信息`</li></ul>
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FillApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FillApproverType",$param) and $param["FillApproverType"] !== null) {
            $this->FillApproverType = $param["FillApproverType"];
        }
    }
}
