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
 * ChannelCreateFlowByFiles请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method array getFileIds() 获取签署文件资源Id列表，目前仅支持单个文件
 * @method void setFileIds(array $FileIds) 设置签署文件资源Id列表，目前仅支持单个文件
 * @method string getFlowName() 获取流程名称，长度不超过200个字符
 * @method void setFlowName(string $FlowName) 设置流程名称，长度不超过200个字符
 * @method integer getDeadline() 获取流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method void setDeadline(integer $Deadline) 设置流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method string getFlowDescription() 获取流程的描述，长度不超过1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置流程的描述，长度不超过1000个字符
 * @method string getFlowType() 获取流程的类型，长度不超过255个字符
 * @method void setFlowType(string $FlowType) 设置流程的类型，长度不超过255个字符
 * @method string getCallbackUrl() 获取流程回调地址，长度不超过255个字符
 * @method void setCallbackUrl(string $CallbackUrl) 设置流程回调地址，长度不超过255个字符
 * @method array getFlowApprovers() 获取流程签约方列表，最多不超过5个参与方
 * @method void setFlowApprovers(array $FlowApprovers) 设置流程签约方列表，最多不超过5个参与方
 * @method boolean getUnordered() 获取合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method void setUnordered(boolean $Unordered) 设置合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method array getComponents() 获取签署文件中的控件，如：填写控件等
 * @method void setComponents(array $Components) 设置签署文件中的控件，如：填写控件等
 */
class ChannelCreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息
     */
    public $Agent;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @var array 签署文件资源Id列表，目前仅支持单个文件
     */
    public $FileIds;

    /**
     * @var string 流程名称，长度不超过200个字符
     */
    public $FlowName;

    /**
     * @var integer 流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     */
    public $Deadline;

    /**
     * @var string 流程的描述，长度不超过1000个字符
     */
    public $FlowDescription;

    /**
     * @var string 流程的类型，长度不超过255个字符
     */
    public $FlowType;

    /**
     * @var string 流程回调地址，长度不超过255个字符
     */
    public $CallbackUrl;

    /**
     * @var array 流程签约方列表，最多不超过5个参与方
     */
    public $FlowApprovers;

    /**
     * @var boolean 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     */
    public $Unordered;

    /**
     * @var array 签署文件中的控件，如：填写控件等
     */
    public $Components;

    /**
     * @param Agent $Agent 渠道应用相关信息
     * @param UserInfo $Operator 操作者的信息
     * @param array $FileIds 签署文件资源Id列表，目前仅支持单个文件
     * @param string $FlowName 流程名称，长度不超过200个字符
     * @param integer $Deadline 流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     * @param string $FlowDescription 流程的描述，长度不超过1000个字符
     * @param string $FlowType 流程的类型，长度不超过255个字符
     * @param string $CallbackUrl 流程回调地址，长度不超过255个字符
     * @param array $FlowApprovers 流程签约方列表，最多不超过5个参与方
     * @param boolean $Unordered 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     * @param array $Components 签署文件中的控件，如：填写控件等
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}
