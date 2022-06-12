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
 * CancelMultiFlowSignQRCode请求参数结构体
 *
 * @method UserInfo getOperator() 获取用户信息
 * @method void setOperator(UserInfo $Operator) 设置用户信息
 * @method string getQrCodeId() 获取二维码id
 * @method void setQrCodeId(string $QrCodeId) 设置二维码id
 * @method Agent getAgent() 获取应用信息
 * @method void setAgent(Agent $Agent) 设置应用信息
 */
class CancelMultiFlowSignQRCodeRequest extends AbstractModel
{
    /**
     * @var UserInfo 用户信息
     */
    public $Operator;

    /**
     * @var string 二维码id
     */
    public $QrCodeId;

    /**
     * @var Agent 应用信息
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 用户信息
     * @param string $QrCodeId 二维码id
     * @param Agent $Agent 应用信息
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

        if (array_key_exists("QrCodeId",$param) and $param["QrCodeId"] !== null) {
            $this->QrCodeId = $param["QrCodeId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
