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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PTS提供的指标名，指标对应的labels及values
 *
 * @method string getMetricName() 获取metric 名字
 * @method void setMetricName(string $MetricName) 设置metric 名字
 * @method array getLabelValuesSet() 获取label及values 数组
 * @method void setLabelValuesSet(array $LabelValuesSet) 设置label及values 数组
 */
class MetricLabelWithValues extends AbstractModel
{
    /**
     * @var string metric 名字
     */
    public $MetricName;

    /**
     * @var array label及values 数组
     */
    public $LabelValuesSet;

    /**
     * @param string $MetricName metric 名字
     * @param array $LabelValuesSet label及values 数组
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("LabelValuesSet",$param) and $param["LabelValuesSet"] !== null) {
            $this->LabelValuesSet = [];
            foreach ($param["LabelValuesSet"] as $key => $value){
                $obj = new LabelWithValues();
                $obj->deserialize($value);
                array_push($this->LabelValuesSet, $obj);
            }
        }
    }
}
