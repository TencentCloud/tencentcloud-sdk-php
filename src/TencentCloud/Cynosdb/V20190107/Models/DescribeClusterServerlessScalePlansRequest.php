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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterServerlessScalePlans请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIds() 获取实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例列表
 * @method string getPolicyType() 获取策略类型. PolicyTypePeriodScale - 周期弹性
 * @method void setPolicyType(string $PolicyType) 设置策略类型. PolicyTypePeriodScale - 周期弹性
 * @method integer getPlanId() 获取计划ID
 * @method void setPlanId(integer $PlanId) 设置计划ID
 * @method integer getLimit() 获取分页数量限制，默认10
 * @method void setLimit(integer $Limit) 设置分页数量限制，默认10
 * @method integer getOffset() 获取查询偏移，默认0
 * @method void setOffset(integer $Offset) 设置查询偏移，默认0
 * @method string getExpectedStartTime() 获取按计划预期执行时间为条件查询的开始时间点，包含当前时间
 * @method void setExpectedStartTime(string $ExpectedStartTime) 设置按计划预期执行时间为条件查询的开始时间点，包含当前时间
 * @method string getExpectedEndTime() 获取按计划预期执行时间为条件查询的结束时间点，包含当前时间
 * @method void setExpectedEndTime(string $ExpectedEndTime) 设置按计划预期执行时间为条件查询的结束时间点，包含当前时间
 */
class DescribeClusterServerlessScalePlansRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 实例列表
     */
    public $InstanceIds;

    /**
     * @var string 策略类型. PolicyTypePeriodScale - 周期弹性
     */
    public $PolicyType;

    /**
     * @var integer 计划ID
     */
    public $PlanId;

    /**
     * @var integer 分页数量限制，默认10
     */
    public $Limit;

    /**
     * @var integer 查询偏移，默认0
     */
    public $Offset;

    /**
     * @var string 按计划预期执行时间为条件查询的开始时间点，包含当前时间
     */
    public $ExpectedStartTime;

    /**
     * @var string 按计划预期执行时间为条件查询的结束时间点，包含当前时间
     */
    public $ExpectedEndTime;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIds 实例列表
     * @param string $PolicyType 策略类型. PolicyTypePeriodScale - 周期弹性
     * @param integer $PlanId 计划ID
     * @param integer $Limit 分页数量限制，默认10
     * @param integer $Offset 查询偏移，默认0
     * @param string $ExpectedStartTime 按计划预期执行时间为条件查询的开始时间点，包含当前时间
     * @param string $ExpectedEndTime 按计划预期执行时间为条件查询的结束时间点，包含当前时间
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ExpectedStartTime",$param) and $param["ExpectedStartTime"] !== null) {
            $this->ExpectedStartTime = $param["ExpectedStartTime"];
        }

        if (array_key_exists("ExpectedEndTime",$param) and $param["ExpectedEndTime"] !== null) {
            $this->ExpectedEndTime = $param["ExpectedEndTime"];
        }
    }
}
