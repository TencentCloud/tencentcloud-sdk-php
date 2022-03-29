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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeVersionToMultiAvailabilityZones请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method boolean getUpgradeProxyAndRedisServer() 获取是否升级proxy和redis内核版本，升级后可支持就近接入
 * @method void setUpgradeProxyAndRedisServer(boolean $UpgradeProxyAndRedisServer) 设置是否升级proxy和redis内核版本，升级后可支持就近接入
 */
class UpgradeVersionToMultiAvailabilityZonesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var boolean 是否升级proxy和redis内核版本，升级后可支持就近接入
     */
    public $UpgradeProxyAndRedisServer;

    /**
     * @param string $InstanceId 实例ID
     * @param boolean $UpgradeProxyAndRedisServer 是否升级proxy和redis内核版本，升级后可支持就近接入
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

        if (array_key_exists("UpgradeProxyAndRedisServer",$param) and $param["UpgradeProxyAndRedisServer"] !== null) {
            $this->UpgradeProxyAndRedisServer = $param["UpgradeProxyAndRedisServer"];
        }
    }
}
