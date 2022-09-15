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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchClusterZone请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getOldZone() 获取当前可用区
 * @method void setOldZone(string $OldZone) 设置当前可用区
 * @method string getNewZone() 获取要切换到的可用区
 * @method void setNewZone(string $NewZone) 设置要切换到的可用区
 * @method string getIsInMaintainPeriod() 获取维护期间执行-yes,立即执行-no
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置维护期间执行-yes,立即执行-no
 */
class SwitchClusterZoneRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 当前可用区
     */
    public $OldZone;

    /**
     * @var string 要切换到的可用区
     */
    public $NewZone;

    /**
     * @var string 维护期间执行-yes,立即执行-no
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId 集群Id
     * @param string $OldZone 当前可用区
     * @param string $NewZone 要切换到的可用区
     * @param string $IsInMaintainPeriod 维护期间执行-yes,立即执行-no
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
