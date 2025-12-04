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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区转发亲和信息
 *
 * @method boolean getEnable() 获取是否开启可用区转发亲和。true：开启可用区转发亲和；false：开启可用区转发亲和。
 * @method void setEnable(boolean $Enable) 设置是否开启可用区转发亲和。true：开启可用区转发亲和；false：开启可用区转发亲和。
 * @method integer getExitRatio() 获取可用区转发亲和失效阈值，当可用区内后端服务健康比例小于该阈值时，负载均衡会退出可用区转发亲和，转为全可用区转发。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExitRatio(integer $ExitRatio) 设置可用区转发亲和失效阈值，当可用区内后端服务健康比例小于该阈值时，负载均衡会退出可用区转发亲和，转为全可用区转发。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReentryRatio() 获取可用区转发亲和的重新生效阈值，当处于全可用区转发，且负载均衡可用区内的后端服务健康比例大于等于该阈值时，负载均衡会重新进入可用区转发亲和。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReentryRatio(integer $ReentryRatio) 设置可用区转发亲和的重新生效阈值，当处于全可用区转发，且负载均衡可用区内的后端服务健康比例大于等于该阈值时，负载均衡会重新进入可用区转发亲和。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AvailableZoneAffinityInfo extends AbstractModel
{
    /**
     * @var boolean 是否开启可用区转发亲和。true：开启可用区转发亲和；false：开启可用区转发亲和。
     */
    public $Enable;

    /**
     * @var integer 可用区转发亲和失效阈值，当可用区内后端服务健康比例小于该阈值时，负载均衡会退出可用区转发亲和，转为全可用区转发。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExitRatio;

    /**
     * @var integer 可用区转发亲和的重新生效阈值，当处于全可用区转发，且负载均衡可用区内的后端服务健康比例大于等于该阈值时，负载均衡会重新进入可用区转发亲和。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReentryRatio;

    /**
     * @param boolean $Enable 是否开启可用区转发亲和。true：开启可用区转发亲和；false：开启可用区转发亲和。
     * @param integer $ExitRatio 可用区转发亲和失效阈值，当可用区内后端服务健康比例小于该阈值时，负载均衡会退出可用区转发亲和，转为全可用区转发。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReentryRatio 可用区转发亲和的重新生效阈值，当处于全可用区转发，且负载均衡可用区内的后端服务健康比例大于等于该阈值时，负载均衡会重新进入可用区转发亲和。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ExitRatio",$param) and $param["ExitRatio"] !== null) {
            $this->ExitRatio = $param["ExitRatio"];
        }

        if (array_key_exists("ReentryRatio",$param) and $param["ReentryRatio"] !== null) {
            $this->ReentryRatio = $param["ReentryRatio"];
        }
    }
}
