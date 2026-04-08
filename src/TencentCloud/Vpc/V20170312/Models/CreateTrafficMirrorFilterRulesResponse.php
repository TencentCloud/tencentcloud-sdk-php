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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrafficMirrorFilterRules返回参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例唯一ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例唯一ID。
 * @method array getIngressFilterRules() 获取流量镜像入站过滤规则。
 * @method void setIngressFilterRules(array $IngressFilterRules) 设置流量镜像入站过滤规则。
 * @method array getEgressFilterRules() 获取流量镜像出站过滤规则。
 * @method void setEgressFilterRules(array $EgressFilterRules) 设置流量镜像出站过滤规则。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateTrafficMirrorFilterRulesResponse extends AbstractModel
{
    /**
     * @var string 流量镜像实例唯一ID。
     */
    public $TrafficMirrorId;

    /**
     * @var array 流量镜像入站过滤规则。
     */
    public $IngressFilterRules;

    /**
     * @var array 流量镜像出站过滤规则。
     */
    public $EgressFilterRules;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TrafficMirrorId 流量镜像实例唯一ID。
     * @param array $IngressFilterRules 流量镜像入站过滤规则。
     * @param array $EgressFilterRules 流量镜像出站过滤规则。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("IngressFilterRules",$param) and $param["IngressFilterRules"] !== null) {
            $this->IngressFilterRules = [];
            foreach ($param["IngressFilterRules"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->IngressFilterRules, $obj);
            }
        }

        if (array_key_exists("EgressFilterRules",$param) and $param["EgressFilterRules"] !== null) {
            $this->EgressFilterRules = [];
            foreach ($param["EgressFilterRules"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->EgressFilterRules, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
