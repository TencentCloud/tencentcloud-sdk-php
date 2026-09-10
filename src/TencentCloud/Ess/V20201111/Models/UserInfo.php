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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getUserId() 获取<p>用户在平台中的编号（UserId）</p><p>UserId 获取方式：<a href="https://qcloudimg.tencent-cloud.cn/raw/6b054d6161b04c24855de15cb243f6bf.png" target="_blank">点击查看</a></p>
 * @method void setUserId(string $UserId) 设置<p>用户在平台中的编号（UserId）</p><p>UserId 获取方式：<a href="https://qcloudimg.tencent-cloud.cn/raw/6b054d6161b04c24855de15cb243f6bf.png" target="_blank">点击查看</a></p>
 * @method string getChannel() 获取<p>用户的来源渠道，一般不用传，特定场景根据接口说明传值</p>
 * @method void setChannel(string $Channel) 设置<p>用户的来源渠道，一般不用传，特定场景根据接口说明传值</p>
 * @method string getOpenId() 获取<p>用户在渠道的编号，一般不用传，特定场景根据接口说明传值</p>
 * @method void setOpenId(string $OpenId) 设置<p>用户在渠道的编号，一般不用传，特定场景根据接口说明传值</p>
 * @method string getClientIp() 获取<p>用户真实IP，内部字段，暂未开放</p>
 * @method void setClientIp(string $ClientIp) 设置<p>用户真实IP，内部字段，暂未开放</p>
 * @method string getProxyIp() 获取<p>用户代理IP，内部字段，暂未开放</p>
 * @method void setProxyIp(string $ProxyIp) 设置<p>用户代理IP，内部字段，暂未开放</p>
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string <p>用户在平台中的编号（UserId）</p><p>UserId 获取方式：<a href="https://qcloudimg.tencent-cloud.cn/raw/6b054d6161b04c24855de15cb243f6bf.png" target="_blank">点击查看</a></p>
     */
    public $UserId;

    /**
     * @var string <p>用户的来源渠道，一般不用传，特定场景根据接口说明传值</p>
     * @deprecated
     */
    public $Channel;

    /**
     * @var string <p>用户在渠道的编号，一般不用传，特定场景根据接口说明传值</p>
     * @deprecated
     */
    public $OpenId;

    /**
     * @var string <p>用户真实IP，内部字段，暂未开放</p>
     * @deprecated
     */
    public $ClientIp;

    /**
     * @var string <p>用户代理IP，内部字段，暂未开放</p>
     * @deprecated
     */
    public $ProxyIp;

    /**
     * @param string $UserId <p>用户在平台中的编号（UserId）</p><p>UserId 获取方式：<a href="https://qcloudimg.tencent-cloud.cn/raw/6b054d6161b04c24855de15cb243f6bf.png" target="_blank">点击查看</a></p>
     * @param string $Channel <p>用户的来源渠道，一般不用传，特定场景根据接口说明传值</p>
     * @param string $OpenId <p>用户在渠道的编号，一般不用传，特定场景根据接口说明传值</p>
     * @param string $ClientIp <p>用户真实IP，内部字段，暂未开放</p>
     * @param string $ProxyIp <p>用户代理IP，内部字段，暂未开放</p>
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
