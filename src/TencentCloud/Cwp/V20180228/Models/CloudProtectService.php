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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云护航服务详情信息
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getType() 获取类型： 这里为新购
 * @method void setType(string $Type) 设置类型： 这里为新购
 * @method string getConfig() 获取配置：购买的配置信息
 * @method void setConfig(string $Config) 设置配置：购买的配置信息
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getBeginTime() 获取购买时间
 * @method void setBeginTime(string $BeginTime) 设置购买时间
 */
class CloudProtectService extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 类型： 这里为新购
     */
    public $Type;

    /**
     * @var string 配置：购买的配置信息
     */
    public $Config;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 购买时间
     */
    public $BeginTime;

    /**
     * @param string $ResourceId 资源ID
     * @param string $Type 类型： 这里为新购
     * @param string $Config 配置：购买的配置信息
     * @param string $ServiceName 服务名称
     * @param string $BeginTime 购买时间
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }
    }
}
