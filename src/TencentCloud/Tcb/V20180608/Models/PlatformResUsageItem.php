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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台版资源用量信息
 *
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li></ul>
 * @method integer getTotalCredits() 获取<p>资源点</p>
 * @method void setTotalCredits(integer $TotalCredits) 设置<p>资源点</p>
 * @method array getMetrics() 获取<p>指标用量信息</p>
 * @method void setMetrics(array $Metrics) 设置<p>指标用量信息</p>
 */
class PlatformResUsageItem extends AbstractModel
{
    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li></ul>
     */
    public $ResourceType;

    /**
     * @var integer <p>资源点</p>
     */
    public $TotalCredits;

    /**
     * @var array <p>指标用量信息</p>
     */
    public $Metrics;

    /**
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li></ul>
     * @param integer $TotalCredits <p>资源点</p>
     * @param array $Metrics <p>指标用量信息</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("TotalCredits",$param) and $param["TotalCredits"] !== null) {
            $this->TotalCredits = $param["TotalCredits"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new PlatformMetricUsageItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
