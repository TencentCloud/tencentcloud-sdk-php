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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预热配置
 *
 * @method boolean getEnabled() 获取是否开启预热
 * @method void setEnabled(boolean $Enabled) 设置是否开启预热
 * @method integer getWarmupTime() 获取预热时间
 * @method void setWarmupTime(integer $WarmupTime) 设置预热时间
 * @method integer getCurvature() 获取预热曲率，取值 1~5
 * @method void setCurvature(integer $Curvature) 设置预热曲率，取值 1~5
 * @method boolean getEnabledProtection() 获取是否开启预热保护，在开启保护的情况下，超过 50% 的节点处于预热中，则会中止预热
 * @method void setEnabledProtection(boolean $EnabledProtection) 设置是否开启预热保护，在开启保护的情况下，超过 50% 的节点处于预热中，则会中止预热
 */
class WarmupSetting extends AbstractModel
{
    /**
     * @var boolean 是否开启预热
     */
    public $Enabled;

    /**
     * @var integer 预热时间
     */
    public $WarmupTime;

    /**
     * @var integer 预热曲率，取值 1~5
     */
    public $Curvature;

    /**
     * @var boolean 是否开启预热保护，在开启保护的情况下，超过 50% 的节点处于预热中，则会中止预热
     */
    public $EnabledProtection;

    /**
     * @param boolean $Enabled 是否开启预热
     * @param integer $WarmupTime 预热时间
     * @param integer $Curvature 预热曲率，取值 1~5
     * @param boolean $EnabledProtection 是否开启预热保护，在开启保护的情况下，超过 50% 的节点处于预热中，则会中止预热
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("WarmupTime",$param) and $param["WarmupTime"] !== null) {
            $this->WarmupTime = $param["WarmupTime"];
        }

        if (array_key_exists("Curvature",$param) and $param["Curvature"] !== null) {
            $this->Curvature = $param["Curvature"];
        }

        if (array_key_exists("EnabledProtection",$param) and $param["EnabledProtection"] !== null) {
            $this->EnabledProtection = $param["EnabledProtection"];
        }
    }
}
