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
 * 用户信息
 *
 * @method string getUserId() 获取用户在平台的编号
 * @method void setUserId(string $UserId) 设置用户在平台的编号
 * @method string getChannel() 获取用户的来源渠道，一般不用传，特定场景根据接口说明传值
 * @method void setChannel(string $Channel) 设置用户的来源渠道，一般不用传，特定场景根据接口说明传值
 * @method string getOpenId() 获取用户在渠道的编号，一般不用传，特定场景根据接口说明传值
 * @method void setOpenId(string $OpenId) 设置用户在渠道的编号，一般不用传，特定场景根据接口说明传值
 * @method string getClientIp() 获取用户真实IP，内部字段，暂未开放
 * @method void setClientIp(string $ClientIp) 设置用户真实IP，内部字段，暂未开放
 * @method string getProxyIp() 获取用户代理IP，内部字段，暂未开放
 * @method void setProxyIp(string $ProxyIp) 设置用户代理IP，内部字段，暂未开放
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 用户在平台的编号
     */
    public $UserId;

    /**
     * @var string 用户的来源渠道，一般不用传，特定场景根据接口说明传值
     */
    public $Channel;

    /**
     * @var string 用户在渠道的编号，一般不用传，特定场景根据接口说明传值
     */
    public $OpenId;

    /**
     * @var string 用户真实IP，内部字段，暂未开放
     */
    public $ClientIp;

    /**
     * @var string 用户代理IP，内部字段，暂未开放
     */
    public $ProxyIp;

    /**
     * @param string $UserId 用户在平台的编号
     * @param string $Channel 用户的来源渠道，一般不用传，特定场景根据接口说明传值
     * @param string $OpenId 用户在渠道的编号，一般不用传，特定场景根据接口说明传值
     * @param string $ClientIp 用户真实IP，内部字段，暂未开放
     * @param string $ProxyIp 用户代理IP，内部字段，暂未开放
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ProxyIp",$param) and $param["ProxyIp"] !== null) {
            $this->ProxyIp = $param["ProxyIp"];
        }
    }
}
