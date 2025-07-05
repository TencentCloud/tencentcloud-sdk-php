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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标曲线数据
 *
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method string getMetricNameCN() 获取指标中文名
 * @method void setMetricNameCN(string $MetricNameCN) 设置指标中文名
 * @method array getTimeSerial() 获取时间序列
 * @method void setTimeSerial(array $TimeSerial) 设置时间序列
 * @method array getDataSerial() 获取数据序列
 * @method void setDataSerial(array $DataSerial) 设置数据序列
 * @method array getTags() 获取维度列表
 * @method void setTags(array $Tags) 设置维度列表
 * @method string getMetricUnit() 获取指标数据单位
 * @method void setMetricUnit(string $MetricUnit) 设置指标数据单位
 */
class Line extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var string 指标中文名
     */
    public $MetricNameCN;

    /**
     * @var array 时间序列
     */
    public $TimeSerial;

    /**
     * @var array 数据序列
     */
    public $DataSerial;

    /**
     * @var array 维度列表
     */
    public $Tags;

    /**
     * @var string 指标数据单位
     */
    public $MetricUnit;

    /**
     * @param string $MetricName 指标名
     * @param string $MetricNameCN 指标中文名
     * @param array $TimeSerial 时间序列
     * @param array $DataSerial 数据序列
     * @param array $Tags 维度列表
     * @param string $MetricUnit 指标数据单位
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

        if (array_key_exists("MetricNameCN",$param) and $param["MetricNameCN"] !== null) {
            $this->MetricNameCN = $param["MetricNameCN"];
        }

        if (array_key_exists("TimeSerial",$param) and $param["TimeSerial"] !== null) {
            $this->TimeSerial = $param["TimeSerial"];
        }

        if (array_key_exists("DataSerial",$param) and $param["DataSerial"] !== null) {
            $this->DataSerial = $param["DataSerial"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("MetricUnit",$param) and $param["MetricUnit"] !== null) {
            $this->MetricUnit = $param["MetricUnit"];
        }
    }
}
