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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 的服务来源配置信息
 *
 * @method string getInstanceId() 获取<p>服务来源实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>服务来源实例id</p>
 * @method CNAPIGwAIServiceSourceAuth getAuth() 获取<p>授权信息</p>
 * @method void setAuth(CNAPIGwAIServiceSourceAuth $Auth) 设置<p>授权信息</p>
 * @method array getAddresses() 获取<p>地址列表</p>
 * @method void setAddresses(array $Addresses) 设置<p>地址列表</p>
 */
class CNAPIGwAIServiceSourceInfo extends AbstractModel
{
    /**
     * @var string <p>服务来源实例id</p>
     */
    public $InstanceId;

    /**
     * @var CNAPIGwAIServiceSourceAuth <p>授权信息</p>
     */
    public $Auth;

    /**
     * @var array <p>地址列表</p>
     */
    public $Addresses;

    /**
     * @param string $InstanceId <p>服务来源实例id</p>
     * @param CNAPIGwAIServiceSourceAuth $Auth <p>授权信息</p>
     * @param array $Addresses <p>地址列表</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Auth",$param) and $param["Auth"] !== null) {
            $this->Auth = new CNAPIGwAIServiceSourceAuth();
            $this->Auth->deserialize($param["Auth"]);
        }

        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }
    }
}
