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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getFlowName() 获取流程的名字, 长度不能超过200，中文字母数字下划线
 * @method void setFlowName(string $FlowName) 设置流程的名字, 长度不能超过200，中文字母数字下划线
 * @method array getApprovers() 获取参与者信息
 * @method void setApprovers(array $Approvers) 设置参与者信息
 * @method string getFlowDescription() 获取流程的描述, 长度不能超过1000
 * @method void setFlowDescription(string $FlowDescription) 设置流程的描述, 长度不能超过1000
 * @method boolean getUnordered() 获取发送类型(true为无序签,false为顺序签)
 * @method void setUnordered(boolean $Unordered) 设置发送类型(true为无序签,false为顺序签)
 * @method string getFlowType() 获取流程的种类(如销售合同/入职合同等)
 * @method void setFlowType(string $FlowType) 设置流程的种类(如销售合同/入职合同等)
 * @method integer getDeadLine() 获取过期时间戳,如果是0则为不过期
 * @method void setDeadLine(integer $DeadLine) 设置过期时间戳,如果是0则为不过期
 * @method string getCallbackUrl() 获取执行结果的回调URL(需要以http://或者https://)开头
 * @method void setCallbackUrl(string $CallbackUrl) 设置执行结果的回调URL(需要以http://或者https://)开头
 * @method string getUserData() 获取用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
 * @method void setUserData(string $UserData) 设置用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 * @method string getClientToken() 获取客户端Token，保持接口幂等性
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性
 */
class CreateFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 流程的名字, 长度不能超过200，中文字母数字下划线
     */
    public $FlowName;

    /**
     * @var array 参与者信息
     */
    public $Approvers;

    /**
     * @var string 流程的描述, 长度不能超过1000
     */
    public $FlowDescription;

    /**
     * @var boolean 发送类型(true为无序签,false为顺序签)
     */
    public $Unordered;

    /**
     * @var string 流程的种类(如销售合同/入职合同等)
     */
    public $FlowType;

    /**
     * @var integer 过期时间戳,如果是0则为不过期
     */
    public $DeadLine;

    /**
     * @var string 执行结果的回调URL(需要以http://或者https://)开头
     */
    public $CallbackUrl;

    /**
     * @var string 用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
     */
    public $UserData;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @var string 客户端Token，保持接口幂等性
     */
    public $ClientToken;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param string $FlowName 流程的名字, 长度不能超过200，中文字母数字下划线
     * @param array $Approvers 参与者信息
     * @param string $FlowDescription 流程的描述, 长度不能超过1000
     * @param boolean $Unordered 发送类型(true为无序签,false为顺序签)
     * @param string $FlowType 流程的种类(如销售合同/入职合同等)
     * @param integer $DeadLine 过期时间戳,如果是0则为不过期
     * @param string $CallbackUrl 执行结果的回调URL(需要以http://或者https://)开头
     * @param string $UserData 用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
     * @param Agent $Agent 应用相关信息
     * @param string $ClientToken 客户端Token，保持接口幂等性
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
