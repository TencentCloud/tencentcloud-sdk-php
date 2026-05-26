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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 品牌扫码数据
 *
 * @method string getDuration() 获取<p>日期范围</p>
 * @method void setDuration(string $Duration) 设置<p>日期范围</p>
 * @method float getRatio() 获取<p>口味王分布</p>
 * @method void setRatio(float $Ratio) 设置<p>口味王分布</p>
 */
class FlavorKingCycleBrandScanMetricsItem extends AbstractModel
{
    /**
     * @var string <p>日期范围</p>
     */
    public $Duration;

    /**
     * @var float <p>口味王分布</p>
     */
    public $Ratio;

    /**
     * @param string $Duration <p>日期范围</p>
     * @param float $Ratio <p>口味王分布</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
