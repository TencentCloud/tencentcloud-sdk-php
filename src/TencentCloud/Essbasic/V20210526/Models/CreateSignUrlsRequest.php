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
 * CreateSignUrls请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息
 * @method array getFlowIds() 获取所签署合同ID数组
 * @method void setFlowIds(array $FlowIds) 设置所签署合同ID数组
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method string getEndpoint() 获取签署链接类型，默认：“WEIXINAPP”-直接跳小程序; “CHANNEL”-跳转H5页面; “APP”-第三方APP或小程序跳转电子签小程序;
 * @method void setEndpoint(string $Endpoint) 设置签署链接类型，默认：“WEIXINAPP”-直接跳小程序; “CHANNEL”-跳转H5页面; “APP”-第三方APP或小程序跳转电子签小程序;
 * @method string getJumpUrl() 获取签署完成后H5引导页跳转URL
 * @method void setJumpUrl(string $JumpUrl) 设置签署完成后H5引导页跳转URL
 */
class CreateSignUrlsRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息
     */
    public $Agent;

    /**
     * @var array 所签署合同ID数组
     */
    public $FlowIds;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @var string 签署链接类型，默认：“WEIXINAPP”-直接跳小程序; “CHANNEL”-跳转H5页面; “APP”-第三方APP或小程序跳转电子签小程序;
     */
    public $Endpoint;

    /**
     * @var string 签署完成后H5引导页跳转URL
     */
    public $JumpUrl;

    /**
     * @param Agent $Agent 渠道应用相关信息
     * @param array $FlowIds 所签署合同ID数组
     * @param UserInfo $Operator 操作者的信息
     * @param string $Endpoint 签署链接类型，默认：“WEIXINAPP”-直接跳小程序; “CHANNEL”-跳转H5页面; “APP”-第三方APP或小程序跳转电子签小程序;
     * @param string $JumpUrl 签署完成后H5引导页跳转URL
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
