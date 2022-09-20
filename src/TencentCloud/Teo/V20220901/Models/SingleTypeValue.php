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
 * 单值指标数据
 *
 * @method string getMetricName() 获取指标名。
 * @method void setMetricName(string $MetricName) 设置指标名。
 * @method integer getDetailData() 获取指标值。
 * @method void setDetailData(integer $DetailData) 设置指标值。
 */
class SingleTypeValue extends AbstractModel
{
    /**
     * @var string 指标名。
     */
    public $MetricName;

    /**
     * @var integer 指标值。
     */
    public $DetailData;

    /**
     * @param string $MetricName 指标名。
     * @param integer $DetailData 指标值。
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

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = $param["DetailData"];
        }
    }
}
