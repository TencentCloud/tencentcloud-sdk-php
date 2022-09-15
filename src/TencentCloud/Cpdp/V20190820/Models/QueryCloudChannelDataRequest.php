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
 * QueryCloudChannelData请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId
 * @method string getOutOrderNo() 获取业务订单号，外部订单号
 * @method void setOutOrderNo(string $OutOrderNo) 设置业务订单号，外部订单号
 * @method string getExternalChannelDataType() 获取数据类型
PAYMENT:支付
 * @method void setExternalChannelDataType(string $ExternalChannelDataType) 设置数据类型
PAYMENT:支付
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method string getSubAppId() 获取子应用ID
 * @method void setSubAppId(string $SubAppId) 设置子应用ID
 * @method string getChannelOrderId() 获取渠道订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置渠道订单号
 * @method string getChannel() 获取渠道名称，指定渠道查询
wechat:微信支付
 * @method void setChannel(string $Channel) 设置渠道名称，指定渠道查询
wechat:微信支付
 */
class QueryCloudChannelDataRequest extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 业务订单号，外部订单号
     */
    public $OutOrderNo;

    /**
     * @var string 数据类型
PAYMENT:支付
     */
    public $ExternalChannelDataType;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @var string 子应用ID
     */
    public $SubAppId;

    /**
     * @var string 渠道订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 渠道名称，指定渠道查询
wechat:微信支付
     */
    public $Channel;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId
     * @param string $OutOrderNo 业务订单号，外部订单号
     * @param string $ExternalChannelDataType 数据类型
PAYMENT:支付
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param string $SubAppId 子应用ID
     * @param string $ChannelOrderId 渠道订单号
     * @param string $Channel 渠道名称，指定渠道查询
wechat:微信支付
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

        if (array_key_exists("OutOrderNo",$param) and $param["OutOrderNo"] !== null) {
            $this->OutOrderNo = $param["OutOrderNo"];
        }

        if (array_key_exists("ExternalChannelDataType",$param) and $param["ExternalChannelDataType"] !== null) {
            $this->ExternalChannelDataType = $param["ExternalChannelDataType"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
