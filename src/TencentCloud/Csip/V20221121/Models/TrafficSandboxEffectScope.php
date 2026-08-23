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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量沙箱规则的生效范围
 *
 * @method string getEffectType() 获取生效模式
枚举值：
INCLUDE：指定资产生效
EXCLUDE：剔除指定资产（默认全部生效）
 * @method void setEffectType(string $EffectType) 设置生效模式
枚举值：
INCLUDE：指定资产生效
EXCLUDE：剔除指定资产（默认全部生效）
 * @method array getEffectAssets() 获取生效资产列表
入参限制：EffectType=INCLUDE 时必填且非空；EffectType=EXCLUDE 时可传空数组
 * @method void setEffectAssets(array $EffectAssets) 设置生效资产列表
入参限制：EffectType=INCLUDE 时必填且非空；EffectType=EXCLUDE 时可传空数组
 */
class TrafficSandboxEffectScope extends AbstractModel
{
    /**
     * @var string 生效模式
枚举值：
INCLUDE：指定资产生效
EXCLUDE：剔除指定资产（默认全部生效）
     */
    public $EffectType;

    /**
     * @var array 生效资产列表
入参限制：EffectType=INCLUDE 时必填且非空；EffectType=EXCLUDE 时可传空数组
     */
    public $EffectAssets;

    /**
     * @param string $EffectType 生效模式
枚举值：
INCLUDE：指定资产生效
EXCLUDE：剔除指定资产（默认全部生效）
     * @param array $EffectAssets 生效资产列表
入参限制：EffectType=INCLUDE 时必填且非空；EffectType=EXCLUDE 时可传空数组
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
        if (array_key_exists("EffectType",$param) and $param["EffectType"] !== null) {
            $this->EffectType = $param["EffectType"];
        }

        if (array_key_exists("EffectAssets",$param) and $param["EffectAssets"] !== null) {
            $this->EffectAssets = [];
            foreach ($param["EffectAssets"] as $key => $value){
                $obj = new TrafficSandboxAssetScope();
                $obj->deserialize($value);
                array_push($this->EffectAssets, $obj);
            }
        }
    }
}
