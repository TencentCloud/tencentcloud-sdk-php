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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备机可用区信息
 *
 * @method string getDrInstanceId() 获取备机资源ID
 * @method void setDrInstanceId(string $DrInstanceId) 设置备机资源ID
 * @method string getZone() 获取备机可用区
 * @method void setZone(string $Zone) 设置备机可用区
 */
class DrZoneInfo extends AbstractModel
{
    /**
     * @var string 备机资源ID
     */
    public $DrInstanceId;

    /**
     * @var string 备机可用区
     */
    public $Zone;

    /**
     * @param string $DrInstanceId 备机资源ID
     * @param string $Zone 备机可用区
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
        if (array_key_exists("DrInstanceId",$param) and $param["DrInstanceId"] !== null) {
            $this->DrInstanceId = $param["DrInstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
