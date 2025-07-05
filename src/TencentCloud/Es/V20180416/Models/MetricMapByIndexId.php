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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标数据map
 *
 * @method string getIndexId() 获取实例id
 * @method void setIndexId(string $IndexId) 设置实例id
 * @method MetricAllData getMetricAllData() 获取指标数据
 * @method void setMetricAllData(MetricAllData $MetricAllData) 设置指标数据
 */
class MetricMapByIndexId extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $IndexId;

    /**
     * @var MetricAllData 指标数据
     */
    public $MetricAllData;

    /**
     * @param string $IndexId 实例id
     * @param MetricAllData $MetricAllData 指标数据
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
        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("MetricAllData",$param) and $param["MetricAllData"] !== null) {
            $this->MetricAllData = new MetricAllData();
            $this->MetricAllData->deserialize($param["MetricAllData"]);
        }
    }
}
