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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryMonitorOverview请求参数结构体
 *
 * @method array getChartTypes() 获取<p>图表类型列表（批量查询多个指标的当前值）</p>
 * @method void setChartTypes(array $ChartTypes) 设置<p>图表类型列表（批量查询多个指标的当前值）</p>
 * @method string getServiceId() 获取<p>推理服务 ID（业务唯一标识）</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务 ID（业务唯一标识）</p>
 */
class QueryMonitorOverviewRequest extends AbstractModel
{
    /**
     * @var array <p>图表类型列表（批量查询多个指标的当前值）</p>
     */
    public $ChartTypes;

    /**
     * @var string <p>推理服务 ID（业务唯一标识）</p>
     */
    public $ServiceId;

    /**
     * @param array $ChartTypes <p>图表类型列表（批量查询多个指标的当前值）</p>
     * @param string $ServiceId <p>推理服务 ID（业务唯一标识）</p>
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
        if (array_key_exists("ChartTypes",$param) and $param["ChartTypes"] !== null) {
            $this->ChartTypes = $param["ChartTypes"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
