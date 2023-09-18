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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka连接信息
 *
 * @method string getInstanceId() 获取kakfa实例Id
 * @method void setInstanceId(string $InstanceId) 设置kakfa实例Id
 * @method DatasourceConnectionLocation getLocation() 获取kakfa数据源的网络信息
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置kakfa数据源的网络信息
 */
class KafkaInfo extends AbstractModel
{
    /**
     * @var string kakfa实例Id
     */
    public $InstanceId;

    /**
     * @var DatasourceConnectionLocation kakfa数据源的网络信息
     */
    public $Location;

    /**
     * @param string $InstanceId kakfa实例Id
     * @param DatasourceConnectionLocation $Location kakfa数据源的网络信息
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

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new DatasourceConnectionLocation();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
