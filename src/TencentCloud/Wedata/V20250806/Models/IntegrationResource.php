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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成资源组
 *
 * @method ResourceGroupSpecification getRealTimeDataSync() 获取实时集成资源组

- i32c(实时数据同步-16C64G)
 * @method void setRealTimeDataSync(ResourceGroupSpecification $RealTimeDataSync) 设置实时集成资源组

- i32c(实时数据同步-16C64G)
 * @method ResourceGroupSpecification getOfflineDataSync() 获取离线集成资源组

- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)
 * @method void setOfflineDataSync(ResourceGroupSpecification $OfflineDataSync) 设置离线集成资源组

- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)
 */
class IntegrationResource extends AbstractModel
{
    /**
     * @var ResourceGroupSpecification 实时集成资源组

- i32c(实时数据同步-16C64G)
     */
    public $RealTimeDataSync;

    /**
     * @var ResourceGroupSpecification 离线集成资源组

- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)
     */
    public $OfflineDataSync;

    /**
     * @param ResourceGroupSpecification $RealTimeDataSync 实时集成资源组

- i32c(实时数据同步-16C64G)
     * @param ResourceGroupSpecification $OfflineDataSync 离线集成资源组

- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)
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
        if (array_key_exists("RealTimeDataSync",$param) and $param["RealTimeDataSync"] !== null) {
            $this->RealTimeDataSync = new ResourceGroupSpecification();
            $this->RealTimeDataSync->deserialize($param["RealTimeDataSync"]);
        }

        if (array_key_exists("OfflineDataSync",$param) and $param["OfflineDataSync"] !== null) {
            $this->OfflineDataSync = new ResourceGroupSpecification();
            $this->OfflineDataSync->deserialize($param["OfflineDataSync"]);
        }
    }
}
