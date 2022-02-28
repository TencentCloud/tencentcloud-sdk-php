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
 * CreateSchemeUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，参考通用结构
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，参考通用结构
 * @method Agent getAgent() 获取调用方渠道信息，参考通用结构
 * @method void setAgent(Agent $Agent) 设置调用方渠道信息，参考通用结构
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getMobile() 获取手机号
 * @method void setMobile(string $Mobile) 设置手机号
 * @method integer getPathType() 获取跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
 * @method void setPathType(integer $PathType) 设置跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
 * @method string getFlowId() 获取合同详情 id (PathType=1时必传)
 * @method void setFlowId(string $FlowId) 设置合同详情 id (PathType=1时必传)
 */
class CreateSchemeUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，参考通用结构
     */
    public $Operator;

    /**
     * @var Agent 调用方渠道信息，参考通用结构
     */
    public $Agent;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 手机号
     */
    public $Mobile;

    /**
     * @var integer 跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
     */
    public $PathType;

    /**
     * @var string 合同详情 id (PathType=1时必传)
     */
    public $FlowId;

    /**
     * @param UserInfo $Operator 调用方用户信息，参考通用结构
     * @param Agent $Agent 调用方渠道信息，参考通用结构
     * @param string $Name 姓名
     * @param string $Mobile 手机号
     * @param integer $PathType 跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
     * @param string $FlowId 合同详情 id (PathType=1时必传)
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("PathType",$param) and $param["PathType"] !== null) {
            $this->PathType = $param["PathType"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
