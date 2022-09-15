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
 * 接口调用者信息
 *
 * @method string getOpenId() 获取用户在渠道的编号，最大64位字符串
 * @method void setOpenId(string $OpenId) 设置用户在渠道的编号，最大64位字符串
 * @method string getChannel() 获取用户的来源渠道
 * @method void setChannel(string $Channel) 设置用户的来源渠道
 * @method string getCustomUserId() 获取自定义用户编号
 * @method void setCustomUserId(string $CustomUserId) 设置自定义用户编号
 * @method string getClientIp() 获取用户真实IP
 * @method void setClientIp(string $ClientIp) 设置用户真实IP
 * @method string getProxyIp() 获取用户代理IP
 * @method void setProxyIp(string $ProxyIp) 设置用户代理IP
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 用户在渠道的编号，最大64位字符串
     */
    public $OpenId;

    /**
     * @var string 用户的来源渠道
     */
    public $Channel;

    /**
     * @var string 自定义用户编号
     */
    public $CustomUserId;

    /**
     * @var string 用户真实IP
     */
    public $ClientIp;

    /**
     * @var string 用户代理IP
     */
    public $ProxyIp;

    /**
     * @param string $OpenId 用户在渠道的编号，最大64位字符串
     * @param string $Channel 用户的来源渠道
     * @param string $CustomUserId 自定义用户编号
     * @param string $ClientIp 用户真实IP
     * @param string $ProxyIp 用户代理IP
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("CustomUserId",$param) and $param["CustomUserId"] !== null) {
            $this->CustomUserId = $param["CustomUserId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ProxyIp",$param) and $param["ProxyIp"] !== null) {
            $this->ProxyIp = $param["ProxyIp"];
        }
    }
}
