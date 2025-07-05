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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 某服务的登录配置
 *
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getUrl() 获取服务登录url
 * @method void setUrl(string $Url) 设置服务登录url
 */
class LoginSetting extends AbstractModel
{
    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 服务登录url
     */
    public $Url;

    /**
     * @param string $ServiceName 服务名称
     * @param string $Url 服务登录url
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
