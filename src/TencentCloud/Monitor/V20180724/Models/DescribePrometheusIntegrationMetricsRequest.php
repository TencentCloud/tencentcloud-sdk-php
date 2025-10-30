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
 * DescribePrometheusIntegrationMetrics请求参数结构体
 *
 * @method string getIntegrationCode() 获取集成类型标识。取值参考DescribePrometheusIntegrations接口返回中IntegrationSet[i].Code参数
 * @method void setIntegrationCode(string $IntegrationCode) 设置集成类型标识。取值参考DescribePrometheusIntegrations接口返回中IntegrationSet[i].Code参数
 */
class DescribePrometheusIntegrationMetricsRequest extends AbstractModel
{
    /**
     * @var string 集成类型标识。取值参考DescribePrometheusIntegrations接口返回中IntegrationSet[i].Code参数
     */
    public $IntegrationCode;

    /**
     * @param string $IntegrationCode 集成类型标识。取值参考DescribePrometheusIntegrations接口返回中IntegrationSet[i].Code参数
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
        if (array_key_exists("IntegrationCode",$param) and $param["IntegrationCode"] !== null) {
            $this->IntegrationCode = $param["IntegrationCode"];
        }
    }
}
