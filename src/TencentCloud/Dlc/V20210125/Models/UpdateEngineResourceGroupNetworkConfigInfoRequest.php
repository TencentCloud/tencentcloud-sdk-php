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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEngineResourceGroupNetworkConfigInfo请求参数结构体
 *
 * @method string getEngineResourceGroupId() 获取引擎资源组ID
 * @method void setEngineResourceGroupId(string $EngineResourceGroupId) 设置引擎资源组ID
 * @method integer getIsEffectiveNow() 获取是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 * @method void setIsEffectiveNow(integer $IsEffectiveNow) 设置是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 * @method array getNetworkConfigNames() 获取资源组绑定的网络配置名称集合
 * @method void setNetworkConfigNames(array $NetworkConfigNames) 设置资源组绑定的网络配置名称集合
 */
class UpdateEngineResourceGroupNetworkConfigInfoRequest extends AbstractModel
{
    /**
     * @var string 引擎资源组ID
     */
    public $EngineResourceGroupId;

    /**
     * @var integer 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
     */
    public $IsEffectiveNow;

    /**
     * @var array 资源组绑定的网络配置名称集合
     */
    public $NetworkConfigNames;

    /**
     * @param string $EngineResourceGroupId 引擎资源组ID
     * @param integer $IsEffectiveNow 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
     * @param array $NetworkConfigNames 资源组绑定的网络配置名称集合
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
        if (array_key_exists("EngineResourceGroupId",$param) and $param["EngineResourceGroupId"] !== null) {
            $this->EngineResourceGroupId = $param["EngineResourceGroupId"];
        }

        if (array_key_exists("IsEffectiveNow",$param) and $param["IsEffectiveNow"] !== null) {
            $this->IsEffectiveNow = $param["IsEffectiveNow"];
        }

        if (array_key_exists("NetworkConfigNames",$param) and $param["NetworkConfigNames"] !== null) {
            $this->NetworkConfigNames = $param["NetworkConfigNames"];
        }
    }
}
