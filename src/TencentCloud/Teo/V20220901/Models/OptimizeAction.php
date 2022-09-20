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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点拨测优化建议
 *
 * @method string getName() 获取站点性能优化配置项，取值有：
<li>Http2；</li>
<li>Http3；</li>
<li>Brotli。</li>
 * @method void setName(string $Name) 设置站点性能优化配置项，取值有：
<li>Http2；</li>
<li>Http3；</li>
<li>Brotli。</li>
 * @method string getConnectivity() 获取网络环境。
 * @method void setConnectivity(string $Connectivity) 设置网络环境。
 * @method integer getValue() 获取开启配置项后，预估性能优化效果，单位ms。
 * @method void setValue(integer $Value) 设置开启配置项后，预估性能优化效果，单位ms。
 * @method integer getRatio() 获取开启配置项后，预估性能提升比例，单位%。
 * @method void setRatio(integer $Ratio) 设置开启配置项后，预估性能提升比例，单位%。
 */
class OptimizeAction extends AbstractModel
{
    /**
     * @var string 站点性能优化配置项，取值有：
<li>Http2；</li>
<li>Http3；</li>
<li>Brotli。</li>
     */
    public $Name;

    /**
     * @var string 网络环境。
     */
    public $Connectivity;

    /**
     * @var integer 开启配置项后，预估性能优化效果，单位ms。
     */
    public $Value;

    /**
     * @var integer 开启配置项后，预估性能提升比例，单位%。
     */
    public $Ratio;

    /**
     * @param string $Name 站点性能优化配置项，取值有：
<li>Http2；</li>
<li>Http3；</li>
<li>Brotli。</li>
     * @param string $Connectivity 网络环境。
     * @param integer $Value 开启配置项后，预估性能优化效果，单位ms。
     * @param integer $Ratio 开启配置项后，预估性能提升比例，单位%。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
