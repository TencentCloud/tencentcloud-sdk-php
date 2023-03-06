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
 * @method string getOpenId() 获取第三方应用平台自定义，对应第三方平台子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
 * @method void setOpenId(string $OpenId) 设置第三方应用平台自定义，对应第三方平台子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
 * @method string getChannel() 获取内部参数，暂未开放使用
 * @method void setChannel(string $Channel) 设置内部参数，暂未开放使用
 * @method string getCustomUserId() 获取内部参数，暂未开放使用
 * @method void setCustomUserId(string $CustomUserId) 设置内部参数，暂未开放使用
 * @method string getClientIp() 获取内部参数，暂未开放使用
 * @method void setClientIp(string $ClientIp) 设置内部参数，暂未开放使用
 * @method string getProxyIp() 获取内部参数，暂未开放使用
 * @method void setProxyIp(string $ProxyIp) 设置内部参数，暂未开放使用
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 第三方应用平台自定义，对应第三方平台子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
     */
    public $OpenId;

    /**
     * @var string 内部参数，暂未开放使用
     */
    public $Channel;

    /**
     * @var string 内部参数，暂未开放使用
     */
    public $CustomUserId;

    /**
     * @var string 内部参数，暂未开放使用
     */
    public $ClientIp;

    /**
     * @var string 内部参数，暂未开放使用
     */
    public $ProxyIp;

    /**
     * @param string $OpenId 第三方应用平台自定义，对应第三方平台子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
     * @param string $Channel 内部参数，暂未开放使用
     * @param string $CustomUserId 内部参数，暂未开放使用
     * @param string $ClientIp 内部参数，暂未开放使用
     * @param string $ProxyIp 内部参数，暂未开放使用
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
