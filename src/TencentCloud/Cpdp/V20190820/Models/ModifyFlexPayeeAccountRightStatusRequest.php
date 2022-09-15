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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFlexPayeeAccountRightStatus请求参数结构体
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getAccountRightType() 获取账户权益类型
SETTLEMENT:结算权益
PAYMENT:付款权益
 * @method void setAccountRightType(string $AccountRightType) 设置账户权益类型
SETTLEMENT:结算权益
PAYMENT:付款权益
 * @method string getAccountRightStatus() 获取账户权益状态
ENABLE:启用
DISABLE:停用
 * @method void setAccountRightStatus(string $AccountRightStatus) 设置账户权益状态
ENABLE:启用
DISABLE:停用
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class ModifyFlexPayeeAccountRightStatusRequest extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 账户权益类型
SETTLEMENT:结算权益
PAYMENT:付款权益
     */
    public $AccountRightType;

    /**
     * @var string 账户权益状态
ENABLE:启用
DISABLE:停用
     */
    public $AccountRightStatus;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $AccountRightType 账户权益类型
SETTLEMENT:结算权益
PAYMENT:付款权益
     * @param string $AccountRightStatus 账户权益状态
ENABLE:启用
DISABLE:停用
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("AccountRightType",$param) and $param["AccountRightType"] !== null) {
            $this->AccountRightType = $param["AccountRightType"];
        }

        if (array_key_exists("AccountRightStatus",$param) and $param["AccountRightStatus"] !== null) {
            $this->AccountRightStatus = $param["AccountRightStatus"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
