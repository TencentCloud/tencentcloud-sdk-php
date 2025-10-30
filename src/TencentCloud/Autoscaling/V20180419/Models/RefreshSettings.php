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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例刷新设置。
 *
 * @method RollingUpdateSettings getRollingUpdateSettings() 获取滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
 * @method void setRollingUpdateSettings(RollingUpdateSettings $RollingUpdateSettings) 设置滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
 * @method boolean getCheckInstanceTargetHealth() 获取实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<li>TRUE：开启检查</li><li>FALSE：不开启检查</li>
 * @method void setCheckInstanceTargetHealth(boolean $CheckInstanceTargetHealth) 设置实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<li>TRUE：开启检查</li><li>FALSE：不开启检查</li>
 * @method integer getCheckInstanceTargetHealthTimeout() 获取实例后端服务健康状态检查的超时时间，单位为秒，取值范围[60,7200]，默认时间1800秒。仅在CheckInstanceTargetHealth参数开启后生效，若实例健康检查超时，则标记为刷新失败。
 * @method void setCheckInstanceTargetHealthTimeout(integer $CheckInstanceTargetHealthTimeout) 设置实例后端服务健康状态检查的超时时间，单位为秒，取值范围[60,7200]，默认时间1800秒。仅在CheckInstanceTargetHealth参数开启后生效，若实例健康检查超时，则标记为刷新失败。
 */
class RefreshSettings extends AbstractModel
{
    /**
     * @var RollingUpdateSettings 滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
     */
    public $RollingUpdateSettings;

    /**
     * @var boolean 实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<li>TRUE：开启检查</li><li>FALSE：不开启检查</li>
     */
    public $CheckInstanceTargetHealth;

    /**
     * @var integer 实例后端服务健康状态检查的超时时间，单位为秒，取值范围[60,7200]，默认时间1800秒。仅在CheckInstanceTargetHealth参数开启后生效，若实例健康检查超时，则标记为刷新失败。
     */
    public $CheckInstanceTargetHealthTimeout;

    /**
     * @param RollingUpdateSettings $RollingUpdateSettings 滚动更新设置参数。RefreshMode 为滚动更新该参数必须填写。
     * @param boolean $CheckInstanceTargetHealth 实例后端服务健康状态检查，默认为 FALSE。仅针对绑定应用型负载均衡器的伸缩组生效，开启该检查后，如刷新后实例未通过检查，负载均衡器端口权重始终为 0，且标记为刷新失败。取值范围如下：<li>TRUE：开启检查</li><li>FALSE：不开启检查</li>
     * @param integer $CheckInstanceTargetHealthTimeout 实例后端服务健康状态检查的超时时间，单位为秒，取值范围[60,7200]，默认时间1800秒。仅在CheckInstanceTargetHealth参数开启后生效，若实例健康检查超时，则标记为刷新失败。
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

        if (array_key_exists("CheckInstanceTargetHealthTimeout",$param) and $param["CheckInstanceTargetHealthTimeout"] !== null) {
            $this->CheckInstanceTargetHealthTimeout = $param["CheckInstanceTargetHealthTimeout"];
        }
    }
}
