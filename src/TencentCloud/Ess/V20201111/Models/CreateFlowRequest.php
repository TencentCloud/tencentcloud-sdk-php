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
 * @method string getFlowName() 获取签署流程名称,最大长度200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称,最大长度200个字符
 * @method array getApprovers() 获取签署流程参与者信息
 * @method void setApprovers(array $Approvers) 设置签署流程参与者信息
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 * @method boolean getUnordered() 获取发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
 * @method void setUnordered(boolean $Unordered) 设置发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
 * @method integer getDeadLine() 获取签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method void setDeadLine(integer $DeadLine) 设置签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method string getFlowType() 获取签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method string getUserData() 获取用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
 * @method void setUserData(string $UserData) 设置用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
 * @method string getFlowDescription() 获取签署流程描述,最大长度1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程描述,最大长度1000个字符
 * @method string getClientToken() 获取客户端Token，保持接口幂等性,最大长度64个字符
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性,最大长度64个字符
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method string getRelatedFlowId() 获取暂未开放
 * @method void setRelatedFlowId(string $RelatedFlowId) 设置暂未开放
 * @method string getCallbackUrl() 获取暂未开放
 * @method void setCallbackUrl(string $CallbackUrl) 设置暂未开放
 */
class CreateFlowRequest extends AbstractModel
{
    /**
     * @var string 签署流程名称,最大长度200个字符
     */
    public $FlowName;

    /**
     * @var array 签署流程参与者信息
     */
    public $Approvers;

    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @var boolean 发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
     */
    public $Unordered;

    /**
     * @var integer 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     */
    public $DeadLine;

    /**
     * @var string 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     */
    public $FlowType;

    /**
     * @var string 用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
     */
    public $UserData;

    /**
     * @var string 签署流程描述,最大长度1000个字符
     */
    public $FlowDescription;

    /**
     * @var string 客户端Token，保持接口幂等性,最大长度64个字符
     */
    public $ClientToken;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var string 暂未开放
     */
    public $RelatedFlowId;

    /**
     * @var string 暂未开放
     */
    public $CallbackUrl;

    /**
     * @param string $FlowName 签署流程名称,最大长度200个字符
     * @param array $Approvers 签署流程参与者信息
     * @param UserInfo $Operator 操作人信息
     * @param Agent $Agent 应用相关信息
     * @param boolean $Unordered 发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
     * @param integer $DeadLine 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     * @param string $FlowType 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     * @param string $UserData 用户自定义字段(需进行base64 encode),回调的时候会进行透传, 长度需要小于20480
     * @param string $FlowDescription 签署流程描述,最大长度1000个字符
     * @param string $ClientToken 客户端Token，保持接口幂等性,最大长度64个字符
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param string $RelatedFlowId 暂未开放
     * @param string $CallbackUrl 暂未开放
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("RelatedFlowId",$param) and $param["RelatedFlowId"] !== null) {
            $this->RelatedFlowId = $param["RelatedFlowId"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
