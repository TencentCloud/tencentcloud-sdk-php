<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getAccountId() 获取用户唯一标识，最大长度为64
 * @method void setAccountId(string $AccountId) 设置用户唯一标识，最大长度为64
 * @method string getDeviceId() 获取用户设备ID，最大长度为64
 * @method void setDeviceId(string $DeviceId) 设置用户设备ID，最大长度为64
 * @method string getOrderId() 获取任务的唯一订单号，只能是数字、大小写字母，且在同一个产品ID下唯一，最大长度为64
 * @method void setOrderId(string $OrderId) 设置任务的唯一订单号，只能是数字、大小写字母，且在同一个产品ID下唯一，最大长度为64
 * @method string getCode() 获取任务事件Code，在腾讯安心用户运营平台下的任务事件列表中设置并获取
 * @method void setCode(string $Code) 设置任务事件Code，在腾讯安心用户运营平台下的任务事件列表中设置并获取
 * @method integer getAsync() 获取任务结果是否异步通知。0表示任务结果在返回信息中同步返回；1表示任务结果通过回调结果异步通知。
 * @method void setAsync(integer $Async) 设置任务结果是否异步通知。0表示任务结果在返回信息中同步返回；1表示任务结果通过回调结果异步通知。
 * @method integer getProductId() 获取产品ID，可在腾讯安心用户运营平台的企业管理中获取
 * @method void setProductId(integer $ProductId) 设置产品ID，可在腾讯安心用户运营平台的企业管理中获取
 * @method string getNotifyURL() 获取异步接收任务结果通知的回调地址。在Async为1的时候，会将任务结果通过该回调地址进行通知。
 * @method void setNotifyURL(string $NotifyURL) 设置异步接收任务结果通知的回调地址。在Async为1的时候，会将任务结果通过该回调地址进行通知。
 */
class SubmitTaskEventRequest extends AbstractModel
{
    /**
     * @var string 用户唯一标识，最大长度为64
     */
    public $AccountId;

    /**
     * @var string 用户设备ID，最大长度为64
     */
    public $DeviceId;

    /**
     * @var string 任务的唯一订单号，只能是数字、大小写字母，且在同一个产品ID下唯一，最大长度为64
     */
    public $OrderId;

    /**
     * @var string 任务事件Code，在腾讯安心用户运营平台下的任务事件列表中设置并获取
     */
    public $Code;

    /**
     * @var integer 任务结果是否异步通知。0表示任务结果在返回信息中同步返回；1表示任务结果通过回调结果异步通知。
     */
    public $Async;

    /**
     * @var integer 产品ID，可在腾讯安心用户运营平台的企业管理中获取
     */
    public $ProductId;

    /**
     * @var string 异步接收任务结果通知的回调地址。在Async为1的时候，会将任务结果通过该回调地址进行通知。
     */
    public $NotifyURL;

    /**
     * @param string $AccountId 用户唯一标识，最大长度为64
     * @param string $DeviceId 用户设备ID，最大长度为64
     * @param string $OrderId 任务的唯一订单号，只能是数字、大小写字母，且在同一个产品ID下唯一，最大长度为64
     * @param string $Code 任务事件Code，在腾讯安心用户运营平台下的任务事件列表中设置并获取
     * @param integer $Async 任务结果是否异步通知。0表示任务结果在返回信息中同步返回；1表示任务结果通过回调结果异步通知。
     * @param integer $ProductId 产品ID，可在腾讯安心用户运营平台的企业管理中获取
     * @param string $NotifyURL 异步接收任务结果通知的回调地址。在Async为1的时候，会将任务结果通过该回调地址进行通知。
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
