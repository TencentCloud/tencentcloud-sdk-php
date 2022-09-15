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
 * QueryCloudOrder请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId
 * @method string getUserId() 获取用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户Id，长度不小于5位，仅支持字母和数字的组合
 * @method string getType() 获取查询类型
by_order:根据订单号查订单
 * @method void setType(string $Type) 设置查询类型
by_order:根据订单号查订单
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method string getOutTradeNo() 获取开发者的主订单号
 * @method void setOutTradeNo(string $OutTradeNo) 设置开发者的主订单号
 */
class QueryCloudOrderRequest extends AbstractModel
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
     * @var string 查询类型
by_order:根据订单号查订单
     */
    public $Type;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @var string 开发者的主订单号
     */
    public $OutTradeNo;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId
     * @param string $UserId 用户Id，长度不小于5位，仅支持字母和数字的组合
     * @param string $Type 查询类型
by_order:根据订单号查订单
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param string $OutTradeNo 开发者的主订单号
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }
    }
}
