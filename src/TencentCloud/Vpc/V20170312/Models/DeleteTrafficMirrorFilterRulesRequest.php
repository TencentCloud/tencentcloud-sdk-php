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
 * DeleteTrafficMirrorFilterRules请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例唯一ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例唯一ID。
 * @method array getIngressFilterRuleIds() 获取流量镜像入站过滤唯一ID列表。
 * @method void setIngressFilterRuleIds(array $IngressFilterRuleIds) 设置流量镜像入站过滤唯一ID列表。
 * @method array getEgressFilterRuleIds() 获取流量镜像出站过滤唯一ID列表。
 * @method void setEgressFilterRuleIds(array $EgressFilterRuleIds) 设置流量镜像出站过滤唯一ID列表。
 */
class DeleteTrafficMirrorFilterRulesRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例唯一ID。
     */
    public $TrafficMirrorId;

    /**
     * @var array 流量镜像入站过滤唯一ID列表。
     */
    public $IngressFilterRuleIds;

    /**
     * @var array 流量镜像出站过滤唯一ID列表。
     */
    public $EgressFilterRuleIds;

    /**
     * @param string $TrafficMirrorId 流量镜像实例唯一ID。
     * @param array $IngressFilterRuleIds 流量镜像入站过滤唯一ID列表。
     * @param array $EgressFilterRuleIds 流量镜像出站过滤唯一ID列表。
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

        if (array_key_exists("IngressFilterRuleIds",$param) and $param["IngressFilterRuleIds"] !== null) {
            $this->IngressFilterRuleIds = $param["IngressFilterRuleIds"];
        }

        if (array_key_exists("EgressFilterRuleIds",$param) and $param["EgressFilterRuleIds"] !== null) {
            $this->EgressFilterRuleIds = $param["EgressFilterRuleIds"];
        }
    }
}
