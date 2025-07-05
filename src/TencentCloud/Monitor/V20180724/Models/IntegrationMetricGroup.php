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
 * prometheus集成分组指标
 *
 * @method string getGroup() 获取分组标识
 * @method void setGroup(string $Group) 设置分组标识
 * @method array getMetrics() 获取指标详情
 * @method void setMetrics(array $Metrics) 设置指标详情
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 */
class IntegrationMetricGroup extends AbstractModel
{
    /**
     * @var string 分组标识
     */
    public $Group;

    /**
     * @var array 指标详情
     */
    public $Metrics;

    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @param string $Group 分组标识
     * @param array $Metrics 指标详情
     * @param string $GroupName 分组名称
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new IntegrationMetric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
