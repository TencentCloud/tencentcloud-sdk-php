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
 * 机构信息
 *
 * @method string getOrganizationOpenId() 获取用户在渠道的机构编号
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置用户在渠道的机构编号
 * @method string getClientIp() 获取用户真实的IP
 * @method void setClientIp(string $ClientIp) 设置用户真实的IP
 * @method string getProxyIp() 获取机构的代理IP
 * @method void setProxyIp(string $ProxyIp) 设置机构的代理IP
 * @method string getOrganizationId() 获取机构在平台的编号
 * @method void setOrganizationId(string $OrganizationId) 设置机构在平台的编号
 * @method string getChannel() 获取用户渠道
 * @method void setChannel(string $Channel) 设置用户渠道
 */
class OrganizationInfo extends AbstractModel
{
    /**
     * @var string 用户在渠道的机构编号
     */
    public $OrganizationOpenId;

    /**
     * @var string 用户真实的IP
     */
    public $ClientIp;

    /**
     * @var string 机构的代理IP
     */
    public $ProxyIp;

    /**
     * @var string 机构在平台的编号
     */
    public $OrganizationId;

    /**
     * @var string 用户渠道
     */
    public $Channel;

    /**
     * @param string $OrganizationOpenId 用户在渠道的机构编号
     * @param string $ClientIp 用户真实的IP
     * @param string $ProxyIp 机构的代理IP
     * @param string $OrganizationId 机构在平台的编号
     * @param string $Channel 用户渠道
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
        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ProxyIp",$param) and $param["ProxyIp"] !== null) {
            $this->ProxyIp = $param["ProxyIp"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
