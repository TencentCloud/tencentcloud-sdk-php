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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachPlugin请求参数结构体
 *
 * @method string getPluginId() 获取绑定的API网关插件ID。
 * @method void setPluginId(string $PluginId) 设置绑定的API网关插件ID。
 * @method string getServiceId() 获取要操作的服务ID。
 * @method void setServiceId(string $ServiceId) 设置要操作的服务ID。
 * @method string getEnvironmentName() 获取要操作API的环境。
 * @method void setEnvironmentName(string $EnvironmentName) 设置要操作API的环境。
 * @method array getApiIds() 获取要绑定的API列表。
 * @method void setApiIds(array $ApiIds) 设置要绑定的API列表。
 */
class AttachPluginRequest extends AbstractModel
{
    /**
     * @var string 绑定的API网关插件ID。
     */
    public $PluginId;

    /**
     * @var string 要操作的服务ID。
     */
    public $ServiceId;

    /**
     * @var string 要操作API的环境。
     */
    public $EnvironmentName;

    /**
     * @var array 要绑定的API列表。
     */
    public $ApiIds;

    /**
     * @param string $PluginId 绑定的API网关插件ID。
     * @param string $ServiceId 要操作的服务ID。
     * @param string $EnvironmentName 要操作API的环境。
     * @param array $ApiIds 要绑定的API列表。
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
