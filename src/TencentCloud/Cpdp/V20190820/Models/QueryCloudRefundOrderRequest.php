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
 * QueryCloudRefundOrder请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId
 * @method string getUserId() 获取用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method string getRefundId() 获取退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method void setRefundId(string $RefundId) 设置退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class QueryCloudRefundOrderRequest extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 用户Id，长度不小于5位，仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string 退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     */
    public $RefundId;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId
     * @param string $UserId 用户Id，长度不小于5位，仅支持字母和数字的组合
     * @param string $RefundId 退款订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RefundId",$param) and $param["RefundId"] !== null) {
            $this->RefundId = $param["RefundId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
