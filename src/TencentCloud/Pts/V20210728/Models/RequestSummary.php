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
 * 压测请求明细
 *
 * @method string getService() 获取请求URL
 * @method void setService(string $Service) 设置请求URL
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 * @method integer getCount() 获取请求次数
 * @method void setCount(integer $Count) 设置请求次数
 * @method float getAverage() 获取请求响应平均耗时，单位秒
 * @method void setAverage(float $Average) 设置请求响应平均耗时，单位秒
 * @method float getP90() 获取请求p90耗时，单位秒
 * @method void setP90(float $P90) 设置请求p90耗时，单位秒
 * @method float getP95() 获取请求p95耗时，单位秒
 * @method void setP95(float $P95) 设置请求p95耗时，单位秒
 * @method float getMin() 获取请求最小耗时，单位秒
 * @method void setMin(float $Min) 设置请求最小耗时，单位秒
 * @method float getMax() 获取请求最大耗时，单位秒
 * @method void setMax(float $Max) 设置请求最大耗时，单位秒
 * @method float getErrorPercentage() 获取请求错误率
 * @method void setErrorPercentage(float $ErrorPercentage) 设置请求错误率
 * @method float getP99() 获取请求p99耗时，单位秒
 * @method void setP99(float $P99) 设置请求p99耗时，单位秒
 * @method string getStatus() 获取响应状态码
 * @method void setStatus(string $Status) 设置响应状态码
 * @method string getResult() 获取响应详情
 * @method void setResult(string $Result) 设置响应详情
 */
class RequestSummary extends AbstractModel
{
    /**
     * @var string 请求URL
     */
    public $Service;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @var integer 请求次数
     */
    public $Count;

    /**
     * @var float 请求响应平均耗时，单位秒
     */
    public $Average;

    /**
     * @var float 请求p90耗时，单位秒
     */
    public $P90;

    /**
     * @var float 请求p95耗时，单位秒
     */
    public $P95;

    /**
     * @var float 请求最小耗时，单位秒
     */
    public $Min;

    /**
     * @var float 请求最大耗时，单位秒
     */
    public $Max;

    /**
     * @var float 请求错误率
     */
    public $ErrorPercentage;

    /**
     * @var float 请求p99耗时，单位秒
     */
    public $P99;

    /**
     * @var string 响应状态码
     */
    public $Status;

    /**
     * @var string 响应详情
     */
    public $Result;

    /**
     * @param string $Service 请求URL
     * @param string $Method 请求方法
     * @param integer $Count 请求次数
     * @param float $Average 请求响应平均耗时，单位秒
     * @param float $P90 请求p90耗时，单位秒
     * @param float $P95 请求p95耗时，单位秒
     * @param float $Min 请求最小耗时，单位秒
     * @param float $Max 请求最大耗时，单位秒
     * @param float $ErrorPercentage 请求错误率
     * @param float $P99 请求p99耗时，单位秒
     * @param string $Status 响应状态码
     * @param string $Result 响应详情
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = $param["Average"];
        }

        if (array_key_exists("P90",$param) and $param["P90"] !== null) {
            $this->P90 = $param["P90"];
        }

        if (array_key_exists("P95",$param) and $param["P95"] !== null) {
            $this->P95 = $param["P95"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("ErrorPercentage",$param) and $param["ErrorPercentage"] !== null) {
            $this->ErrorPercentage = $param["ErrorPercentage"];
        }

        if (array_key_exists("P99",$param) and $param["P99"] !== null) {
            $this->P99 = $param["P99"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
