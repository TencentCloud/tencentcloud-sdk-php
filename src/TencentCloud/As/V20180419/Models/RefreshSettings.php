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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例刷新设置。
 *
 * @method RollingUpdateSettings getRollingUpdateSettings() 获取滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollingUpdateSettings(RollingUpdateSettings $RollingUpdateSettings) 设置滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckInstanceTargetHealth() 获取实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<br><li>TRUE：开启检查</li><li>FALSE：不开启检查
 * @method void setCheckInstanceTargetHealth(boolean $CheckInstanceTargetHealth) 设置实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<br><li>TRUE：开启检查</li><li>FALSE：不开启检查
 */
class RefreshSettings extends AbstractModel
{
    /**
     * @var RollingUpdateSettings 滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollingUpdateSettings;

    /**
     * @var boolean 实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<br><li>TRUE：开启检查</li><li>FALSE：不开启检查
     */
    public $CheckInstanceTargetHealth;

    /**
     * @param RollingUpdateSettings $RollingUpdateSettings 滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckInstanceTargetHealth 实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<br><li>TRUE：开启检查</li><li>FALSE：不开启检查
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
        if (array_key_exists("RollingUpdateSettings",$param) and $param["RollingUpdateSettings"] !== null) {
            $this->RollingUpdateSettings = new RollingUpdateSettings();
            $this->RollingUpdateSettings->deserialize($param["RollingUpdateSettings"]);
        }

        if (array_key_exists("CheckInstanceTargetHealth",$param) and $param["CheckInstanceTargetHealth"] !== null) {
            $this->CheckInstanceTargetHealth = $param["CheckInstanceTargetHealth"];
        }
    }
}
