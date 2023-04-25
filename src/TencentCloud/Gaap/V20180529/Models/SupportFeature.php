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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速区域支持的能力，包括支持的网络类型等等。
 *
 * @method array getNetworkType() 获取接入区域支持的网络类型列表，normal表示支持常规BGP，cn2表示精品BGP，triple表示三网，secure_eip表示定制安全eip。
 * @method void setNetworkType(array $NetworkType) 设置接入区域支持的网络类型列表，normal表示支持常规BGP，cn2表示精品BGP，triple表示三网，secure_eip表示定制安全eip。
 */
class SupportFeature extends AbstractModel
{
    /**
     * @var array 接入区域支持的网络类型列表，normal表示支持常规BGP，cn2表示精品BGP，triple表示三网，secure_eip表示定制安全eip。
     */
    public $NetworkType;

    /**
     * @param array $NetworkType 接入区域支持的网络类型列表，normal表示支持常规BGP，cn2表示精品BGP，triple表示三网，secure_eip表示定制安全eip。
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
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }
    }
}
