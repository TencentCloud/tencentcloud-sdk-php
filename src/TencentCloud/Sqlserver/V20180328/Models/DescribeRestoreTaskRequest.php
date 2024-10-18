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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRestoreTask请求参数结构体
 *
 * @method string getInstanceId() 获取源实例ID
 * @method void setInstanceId(string $InstanceId) 设置源实例ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getRestoreType() 获取回档方式，0-按照时间点回档，1-按照备份集回档
 * @method void setRestoreType(integer $RestoreType) 设置回档方式，0-按照时间点回档，1-按照备份集回档
 * @method string getTargetRegion() 获取回档的目标实例所在地域
 * @method void setTargetRegion(string $TargetRegion) 设置回档的目标实例所在地域
 * @method integer getTargetType() 获取回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
 * @method void setTargetType(integer $TargetType) 设置回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
 * @method integer getStatus() 获取回档状态，0-初始化，1-运行中，2-成功，3-失败
 * @method void setStatus(integer $Status) 设置回档状态，0-初始化，1-运行中，2-成功，3-失败
 * @method integer getOffset() 获取分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method void setOffset(integer $Offset) 设置分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method integer getLimit() 获取分页返回，页编号，默认值为第0页
 * @method void setLimit(integer $Limit) 设置分页返回，页编号，默认值为第0页
 * @method string getOrderBy() 获取排序字段，restoreTime-回档时间，startTime-任务开始时间，endTime-任务结束时间，默认按照任务开始时间降序
 * @method void setOrderBy(string $OrderBy) 设置排序字段，restoreTime-回档时间，startTime-任务开始时间，endTime-任务结束时间，默认按照任务开始时间降序
 * @method string getOrderByType() 获取排序规则（desc-降序，asc-升序），默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序规则（desc-降序，asc-升序），默认desc
 * @method integer getFlowId() 获取回档异步任务ID
 * @method void setFlowId(integer $FlowId) 设置回档异步任务ID
 */
class DescribeRestoreTaskRequest extends AbstractModel
{
    /**
     * @var string 源实例ID
     */
    public $InstanceId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 回档方式，0-按照时间点回档，1-按照备份集回档
     */
    public $RestoreType;

    /**
     * @var string 回档的目标实例所在地域
     */
    public $TargetRegion;

    /**
     * @var integer 回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
     */
    public $TargetType;

    /**
     * @var integer 回档状态，0-初始化，1-运行中，2-成功，3-失败
     */
    public $Status;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为20
     */
    public $Offset;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Limit;

    /**
     * @var string 排序字段，restoreTime-回档时间，startTime-任务开始时间，endTime-任务结束时间，默认按照任务开始时间降序
     */
    public $OrderBy;

    /**
     * @var string 排序规则（desc-降序，asc-升序），默认desc
     */
    public $OrderByType;

    /**
     * @var integer 回档异步任务ID
     */
    public $FlowId;

    /**
     * @param string $InstanceId 源实例ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $RestoreType 回档方式，0-按照时间点回档，1-按照备份集回档
     * @param string $TargetRegion 回档的目标实例所在地域
     * @param integer $TargetType 回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
     * @param integer $Status 回档状态，0-初始化，1-运行中，2-成功，3-失败
     * @param integer $Offset 分页返回，每页返回的数目，取值为1-100，默认值为20
     * @param integer $Limit 分页返回，页编号，默认值为第0页
     * @param string $OrderBy 排序字段，restoreTime-回档时间，startTime-任务开始时间，endTime-任务结束时间，默认按照任务开始时间降序
     * @param string $OrderByType 排序规则（desc-降序，asc-升序），默认desc
     * @param integer $FlowId 回档异步任务ID
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
