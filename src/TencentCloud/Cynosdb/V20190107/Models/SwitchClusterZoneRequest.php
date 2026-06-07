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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchClusterZone请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群Id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群Id</p>
 * @method string getOldZone() 获取<p>当前可用区</p>
 * @method void setOldZone(string $OldZone) 设置<p>当前可用区</p>
 * @method string getNewZone() 获取<p>要切换到的可用区</p>
 * @method void setNewZone(string $NewZone) 设置<p>要切换到的可用区</p>
 * @method string getIsInMaintainPeriod() 获取<p>维护期间执行-yes,立即执行-no</p>
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置<p>维护期间执行-yes,立即执行-no</p>
 */
class SwitchClusterZoneRequest extends AbstractModel
{
    /**
     * @var string <p>集群Id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>当前可用区</p>
     */
    public $OldZone;

    /**
     * @var string <p>要切换到的可用区</p>
     */
    public $NewZone;

    /**
     * @var string <p>维护期间执行-yes,立即执行-no</p>
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId <p>集群Id</p>
     * @param string $OldZone <p>当前可用区</p>
     * @param string $NewZone <p>要切换到的可用区</p>
     * @param string $IsInMaintainPeriod <p>维护期间执行-yes,立即执行-no</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldZone",$param) and $param["OldZone"] !== null) {
            $this->OldZone = $param["OldZone"];
        }

        if (array_key_exists("NewZone",$param) and $param["NewZone"] !== null) {
            $this->NewZone = $param["NewZone"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
