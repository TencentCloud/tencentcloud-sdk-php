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
 * InstallSandboxPlugin请求参数结构体
 *
 * @method string getBelongAssetType() 获取归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method void setBelongAssetType(string $BelongAssetType) 设置归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method TrafficSandboxEffectScope getEffectScope() 获取安装目标范围
入参限制：EffectType=INCLUDE 时 EffectAssets 必须非空；EffectType=EXCLUDE 时 EffectAssets 可为空数组（表示对全部 AI Agent 资产下发）
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置安装目标范围
入参限制：EffectType=INCLUDE 时 EffectAssets 必须非空；EffectType=EXCLUDE 时 EffectAssets 可为空数组（表示对全部 AI Agent 资产下发）
 */
class InstallSandboxPluginRequest extends AbstractModel
{
    /**
     * @var string 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope 安装目标范围
入参限制：EffectType=INCLUDE 时 EffectAssets 必须非空；EffectType=EXCLUDE 时 EffectAssets 可为空数组（表示对全部 AI Agent 资产下发）
     */
    public $EffectScope;

    /**
     * @param string $BelongAssetType 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     * @param TrafficSandboxEffectScope $EffectScope 安装目标范围
入参限制：EffectType=INCLUDE 时 EffectAssets 必须非空；EffectType=EXCLUDE 时 EffectAssets 可为空数组（表示对全部 AI Agent 资产下发）
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
        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }
    }
}
