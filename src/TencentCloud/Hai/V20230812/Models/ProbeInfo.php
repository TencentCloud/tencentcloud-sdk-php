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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针信息
 *
 * @method ProbeConfig getLivenessProbe() 获取<p>存活探针</p>
 * @method void setLivenessProbe(ProbeConfig $LivenessProbe) 设置<p>存活探针</p>
 * @method ProbeConfig getReadinessProbe() 获取<p>就绪探针</p>
 * @method void setReadinessProbe(ProbeConfig $ReadinessProbe) 设置<p>就绪探针</p>
 * @method ProbeConfig getStartupProbe() 获取<p>启动探针</p>
 * @method void setStartupProbe(ProbeConfig $StartupProbe) 设置<p>启动探针</p>
 */
class ProbeInfo extends AbstractModel
{
    /**
     * @var ProbeConfig <p>存活探针</p>
     */
    public $LivenessProbe;

    /**
     * @var ProbeConfig <p>就绪探针</p>
     */
    public $ReadinessProbe;

    /**
     * @var ProbeConfig <p>启动探针</p>
     */
    public $StartupProbe;

    /**
     * @param ProbeConfig $LivenessProbe <p>存活探针</p>
     * @param ProbeConfig $ReadinessProbe <p>就绪探针</p>
     * @param ProbeConfig $StartupProbe <p>启动探针</p>
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
            $this->LivenessProbe = new ProbeConfig();
            $this->LivenessProbe->deserialize($param["LivenessProbe"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new ProbeConfig();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }

        if (array_key_exists("StartupProbe",$param) and $param["StartupProbe"] !== null) {
            $this->StartupProbe = new ProbeConfig();
            $this->StartupProbe->deserialize($param["StartupProbe"]);
        }
    }
}
