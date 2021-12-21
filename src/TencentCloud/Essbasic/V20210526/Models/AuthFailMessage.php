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
 * 授权出错信息
 *
 * @method string getProxyOrganizationOpenId() 获取合作企业Id
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置合作企业Id
 * @method string getMessage() 获取出错信息
 * @method void setMessage(string $Message) 设置出错信息
 */
class AuthFailMessage extends AbstractModel
{
    /**
     * @var string 合作企业Id
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var string 出错信息
     */
    public $Message;

    /**
     * @param string $ProxyOrganizationOpenId 合作企业Id
     * @param string $Message 出错信息
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
        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
