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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自治用户配置详情
 *
 * @method boolean getEnabled() 获取是否开启自治。枚举值：true，false。
其中：
true - 开启
false - 关闭
 * @method void setEnabled(boolean $Enabled) 设置是否开启自治。枚举值：true，false。
其中：
true - 开启
false - 关闭
 * @method string getUin() 获取用户Uin。
 * @method void setUin(string $Uin) 设置用户Uin。
 * @method integer getMemoryUpperLimit() 获取内存上限。
 * @method void setMemoryUpperLimit(integer $MemoryUpperLimit) 设置内存上限。
 * @method MetricThreshold getThresholdRule() 获取指标阈值规则。
 * @method void setThresholdRule(MetricThreshold $ThresholdRule) 设置指标阈值规则。
 * @method array getEnabledItems() 获取自治功能类型。
 * @method void setEnabledItems(array $EnabledItems) 设置自治功能类型。
 */
class AutonomyUserProfileInfo extends AbstractModel
{
    /**
     * @var boolean 是否开启自治。枚举值：true，false。
其中：
true - 开启
false - 关闭
     */
    public $Enabled;

    /**
     * @var string 用户Uin。
     */
    public $Uin;

    /**
     * @var integer 内存上限。
     */
    public $MemoryUpperLimit;

    /**
     * @var MetricThreshold 指标阈值规则。
     */
    public $ThresholdRule;

    /**
     * @var array 自治功能类型。
     */
    public $EnabledItems;

    /**
     * @param boolean $Enabled 是否开启自治。枚举值：true，false。
其中：
true - 开启
false - 关闭
     * @param string $Uin 用户Uin。
     * @param integer $MemoryUpperLimit 内存上限。
     * @param MetricThreshold $ThresholdRule 指标阈值规则。
     * @param array $EnabledItems 自治功能类型。
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("MemoryUpperLimit",$param) and $param["MemoryUpperLimit"] !== null) {
            $this->MemoryUpperLimit = $param["MemoryUpperLimit"];
        }

        if (array_key_exists("ThresholdRule",$param) and $param["ThresholdRule"] !== null) {
            $this->ThresholdRule = new MetricThreshold();
            $this->ThresholdRule->deserialize($param["ThresholdRule"]);
        }

        if (array_key_exists("EnabledItems",$param) and $param["EnabledItems"] !== null) {
            $this->EnabledItems = $param["EnabledItems"];
        }
    }
}
