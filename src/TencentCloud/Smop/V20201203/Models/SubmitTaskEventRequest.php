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
namespace TencentCloud\Smop\V20201203\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTaskEvent请求参数结构体
 *
 * @method string getAccountId() 获取用户ID
 * @method void setAccountId(string $AccountId) 设置用户ID
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getCode() 获取任务事件Code
 * @method void setCode(string $Code) 设置任务事件Code
 * @method integer getAsync() 获取同步异步方式：0为同步、1位异步
 * @method void setAsync(integer $Async) 设置同步异步方式：0为同步、1位异步
 * @method integer getProductId() 获取产品ID
 * @method void setProductId(integer $ProductId) 设置产品ID
 * @method string getNotifyURL() 获取回调地址
 * @method void setNotifyURL(string $NotifyURL) 设置回调地址
 */
class SubmitTaskEventRequest extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $AccountId;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 任务事件Code
     */
    public $Code;

    /**
     * @var integer 同步异步方式：0为同步、1位异步
     */
    public $Async;

    /**
     * @var integer 产品ID
     */
    public $ProductId;

    /**
     * @var string 回调地址
     */
    public $NotifyURL;

    /**
     * @param string $AccountId 用户ID
     * @param string $DeviceId 设备ID
     * @param string $OrderId 订单ID
     * @param string $Code 任务事件Code
     * @param integer $Async 同步异步方式：0为同步、1位异步
     * @param integer $ProductId 产品ID
     * @param string $NotifyURL 回调地址
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Async",$param) and $param["Async"] !== null) {
            $this->Async = $param["Async"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("NotifyURL",$param) and $param["NotifyURL"] !== null) {
            $this->NotifyURL = $param["NotifyURL"];
        }
    }
}
