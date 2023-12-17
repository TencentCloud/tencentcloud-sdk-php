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
 * DeletePrometheusAlertPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID(可通过 DescribePrometheusInstances 接口获取)
 * @method void setInstanceId(string $InstanceId) 设置实例ID(可通过 DescribePrometheusInstances 接口获取)
 * @method array getAlertIds() 获取告警策略ID列表(可通过 DescribePrometheusAlertPolicy 接口获取)
 * @method void setAlertIds(array $AlertIds) 设置告警策略ID列表(可通过 DescribePrometheusAlertPolicy 接口获取)
 * @method array getNames() 获取告警策略名称(可通过 DescribePrometheusAlertPolicy 接口获取)，名称完全相同的告警策略才会删除
 * @method void setNames(array $Names) 设置告警策略名称(可通过 DescribePrometheusAlertPolicy 接口获取)，名称完全相同的告警策略才会删除
 */
class DeletePrometheusAlertPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例ID(可通过 DescribePrometheusInstances 接口获取)
     */
    public $InstanceId;

    /**
     * @var array 告警策略ID列表(可通过 DescribePrometheusAlertPolicy 接口获取)
     */
    public $AlertIds;

    /**
     * @var array 告警策略名称(可通过 DescribePrometheusAlertPolicy 接口获取)，名称完全相同的告警策略才会删除
     */
    public $Names;

    /**
     * @param string $InstanceId 实例ID(可通过 DescribePrometheusInstances 接口获取)
     * @param array $AlertIds 告警策略ID列表(可通过 DescribePrometheusAlertPolicy 接口获取)
     * @param array $Names 告警策略名称(可通过 DescribePrometheusAlertPolicy 接口获取)，名称完全相同的告警策略才会删除
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AlertIds",$param) and $param["AlertIds"] !== null) {
            $this->AlertIds = $param["AlertIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
