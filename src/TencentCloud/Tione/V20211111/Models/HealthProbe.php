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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康探针
 *
 * @method Probe getLivenessProbe() 获取存活探针
 * @method void setLivenessProbe(Probe $LivenessProbe) 设置存活探针
 * @method Probe getReadinessProbe() 获取就绪探针
 * @method void setReadinessProbe(Probe $ReadinessProbe) 设置就绪探针
 * @method Probe getStartupProbe() 获取启动探针
 * @method void setStartupProbe(Probe $StartupProbe) 设置启动探针
 */
class HealthProbe extends AbstractModel
{
    /**
     * @var Probe 存活探针
     */
    public $LivenessProbe;

    /**
     * @var Probe 就绪探针
     */
    public $ReadinessProbe;

    /**
     * @var Probe 启动探针
     */
    public $StartupProbe;

    /**
     * @param Probe $LivenessProbe 存活探针
     * @param Probe $ReadinessProbe 就绪探针
     * @param Probe $StartupProbe 启动探针
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
        if (array_key_exists("LivenessProbe",$param) and $param["LivenessProbe"] !== null) {
            $this->LivenessProbe = new Probe();
            $this->LivenessProbe->deserialize($param["LivenessProbe"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new Probe();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }

        if (array_key_exists("StartupProbe",$param) and $param["StartupProbe"] !== null) {
            $this->StartupProbe = new Probe();
            $this->StartupProbe->deserialize($param["StartupProbe"]);
        }
    }
}
