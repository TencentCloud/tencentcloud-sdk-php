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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型对话趋势维度序列
 *
 * @method string getDimensionValue() 获取<p>维度取值。空值保留为空字符串。</p>
 * @method void setDimensionValue(string $DimensionValue) 设置<p>维度取值。空值保留为空字符串。</p>
 * @method array getPoints() 获取<p>该取值在各个时间桶上的点。</p>
 * @method void setPoints(array $Points) 设置<p>该取值在各个时间桶上的点。</p>
 */
class TDEMSSETrendSeries extends AbstractModel
{
    /**
     * @var string <p>维度取值。空值保留为空字符串。</p>
     */
    public $DimensionValue;

    /**
     * @var array <p>该取值在各个时间桶上的点。</p>
     */
    public $Points;

    /**
     * @param string $DimensionValue <p>维度取值。空值保留为空字符串。</p>
     * @param array $Points <p>该取值在各个时间桶上的点。</p>
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
        if (array_key_exists("DimensionValue",$param) and $param["DimensionValue"] !== null) {
            $this->DimensionValue = $param["DimensionValue"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new TDEMSSETrendPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}
