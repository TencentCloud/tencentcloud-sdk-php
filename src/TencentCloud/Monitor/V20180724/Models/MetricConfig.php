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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标配置
 *
 * @method array getOperator() 获取<p>允许使用的运算符</p>
 * @method void setOperator(array $Operator) 设置<p>允许使用的运算符</p>
 * @method array getPeriod() 获取<p>允许配置的数据周期，以秒为单位</p>
 * @method void setPeriod(array $Period) 设置<p>允许配置的数据周期，以秒为单位</p>
 * @method array getContinuePeriod() 获取<p>允许配置的持续周期个数</p>
 * @method void setContinuePeriod(array $ContinuePeriod) 设置<p>允许配置的持续周期个数</p>
 */
class MetricConfig extends AbstractModel
{
    /**
     * @var array <p>允许使用的运算符</p>
     */
    public $Operator;

    /**
     * @var array <p>允许配置的数据周期，以秒为单位</p>
     */
    public $Period;

    /**
     * @var array <p>允许配置的持续周期个数</p>
     */
    public $ContinuePeriod;

    /**
     * @param array $Operator <p>允许使用的运算符</p>
     * @param array $Period <p>允许配置的数据周期，以秒为单位</p>
     * @param array $ContinuePeriod <p>允许配置的持续周期个数</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }
    }
}
