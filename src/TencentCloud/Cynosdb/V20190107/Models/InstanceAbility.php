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
 * 实例允许的操作列表
 *
 * @method string getIsSupportForceRestart() 获取实例是否支持强制重启，可选值：yes：支持，no：不支持
 * @method void setIsSupportForceRestart(string $IsSupportForceRestart) 设置实例是否支持强制重启，可选值：yes：支持，no：不支持
 * @method string getNonsupportForceRestartReason() 获取不支持强制重启的原因
 * @method void setNonsupportForceRestartReason(string $NonsupportForceRestartReason) 设置不支持强制重启的原因
 */
class InstanceAbility extends AbstractModel
{
    /**
     * @var string 实例是否支持强制重启，可选值：yes：支持，no：不支持
     */
    public $IsSupportForceRestart;

    /**
     * @var string 不支持强制重启的原因
     */
    public $NonsupportForceRestartReason;

    /**
     * @param string $IsSupportForceRestart 实例是否支持强制重启，可选值：yes：支持，no：不支持
     * @param string $NonsupportForceRestartReason 不支持强制重启的原因
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
        if (array_key_exists("IsSupportForceRestart",$param) and $param["IsSupportForceRestart"] !== null) {
            $this->IsSupportForceRestart = $param["IsSupportForceRestart"];
        }

        if (array_key_exists("NonsupportForceRestartReason",$param) and $param["NonsupportForceRestartReason"] !== null) {
            $this->NonsupportForceRestartReason = $param["NonsupportForceRestartReason"];
        }
    }
}
