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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstanceUsage请求参数结构体
 *
 * @method array getInstanceIds() 获取按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
 * @method string getStartCalcDate() 获取开始时间
 * @method void setStartCalcDate(string $StartCalcDate) 设置开始时间
 * @method string getEndCalcDate() 获取结束时间
 * @method void setEndCalcDate(string $EndCalcDate) 设置结束时间
 */
class DescribePrometheusInstanceUsageRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @var string 开始时间
     */
    public $StartCalcDate;

    /**
     * @var string 结束时间
     */
    public $EndCalcDate;

    /**
     * @param array $InstanceIds 按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
     * @param string $StartCalcDate 开始时间
     * @param string $EndCalcDate 结束时间
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StartCalcDate",$param) and $param["StartCalcDate"] !== null) {
            $this->StartCalcDate = $param["StartCalcDate"];
        }

        if (array_key_exists("EndCalcDate",$param) and $param["EndCalcDate"] !== null) {
            $this->EndCalcDate = $param["EndCalcDate"];
        }
    }
}
