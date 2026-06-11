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
 * 集群Serveless弹性计划
 *
 * @method integer getPlanId() 获取<p>计划ID</p>
 * @method void setPlanId(integer $PlanId) 设置<p>计划ID</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getObjectInstance() 获取<p>实例对象。具体是实例id或者类型。比如ro-即集群下的所有只读实例。</p>
 * @method void setObjectInstance(string $ObjectInstance) 设置<p>实例对象。具体是实例id或者类型。比如ro-即集群下的所有只读实例。</p>
 * @method string getPolicyId() 获取<p>策略ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略ID</p>
 * @method string getPolicyType() 获取<p>策略类型</p>
 * @method void setPolicyType(string $PolicyType) 设置<p>策略类型</p>
 * @method float getSourceMinCpu() 获取<p>原规格下限</p>
 * @method void setSourceMinCpu(float $SourceMinCpu) 设置<p>原规格下限</p>
 * @method float getSourceMaxCpu() 获取<p>原规格上限</p>
 * @method void setSourceMaxCpu(float $SourceMaxCpu) 设置<p>原规格上限</p>
 * @method float getTargetMinCpu() 获取<p>原规格下限</p>
 * @method void setTargetMinCpu(float $TargetMinCpu) 设置<p>原规格下限</p>
 * @method float getTargetMaxCpu() 获取<p>原规格上限</p>
 * @method void setTargetMaxCpu(float $TargetMaxCpu) 设置<p>原规格上限</p>
 * @method string getStatus() 获取<p>计划状态</p>
 * @method void setStatus(string $Status) 设置<p>计划状态</p>
 * @method integer getScaleTaskId() 获取<p>弹性任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleTaskId(integer $ScaleTaskId) 设置<p>弹性任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpectedStartTime() 获取<p>计划预期开始执行时间</p>
 * @method void setExpectedStartTime(string $ExpectedStartTime) 设置<p>计划预期开始执行时间</p>
 * @method string getExpectedEndTime() 获取<p>计划预期结束时间</p>
 * @method void setExpectedEndTime(string $ExpectedEndTime) 设置<p>计划预期结束时间</p>
 * @method integer getResetTaskId() 获取<p>恢复自动弹性任务</p>
 * @method void setResetTaskId(integer $ResetTaskId) 设置<p>恢复自动弹性任务</p>
 * @method string getResetType() 获取<p>恢复自动弹性任务执行方式</p>
 * @method void setResetType(string $ResetType) 设置<p>恢复自动弹性任务执行方式</p>
 * @method string getResetTime() 获取<p>恢复自动弹性任务执行时间</p>
 * @method void setResetTime(string $ResetTime) 设置<p>恢复自动弹性任务执行时间</p>
 */
class ClusterServerlessScalePlan extends AbstractModel
{
    /**
     * @var integer <p>计划ID</p>
     */
    public $PlanId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>实例对象。具体是实例id或者类型。比如ro-即集群下的所有只读实例。</p>
     */
    public $ObjectInstance;

    /**
     * @var string <p>策略ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略类型</p>
     */
    public $PolicyType;

    /**
     * @var float <p>原规格下限</p>
     */
    public $SourceMinCpu;

    /**
     * @var float <p>原规格上限</p>
     */
    public $SourceMaxCpu;

    /**
     * @var float <p>原规格下限</p>
     */
    public $TargetMinCpu;

    /**
     * @var float <p>原规格上限</p>
     */
    public $TargetMaxCpu;

    /**
     * @var string <p>计划状态</p>
     */
    public $Status;

    /**
     * @var integer <p>弹性任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleTaskId;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string <p>计划预期开始执行时间</p>
     */
    public $ExpectedStartTime;

    /**
     * @var string <p>计划预期结束时间</p>
     */
    public $ExpectedEndTime;

    /**
     * @var integer <p>恢复自动弹性任务</p>
     */
    public $ResetTaskId;

    /**
     * @var string <p>恢复自动弹性任务执行方式</p>
     */
    public $ResetType;

    /**
     * @var string <p>恢复自动弹性任务执行时间</p>
     */
    public $ResetTime;

    /**
     * @param integer $PlanId <p>计划ID</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ObjectInstance <p>实例对象。具体是实例id或者类型。比如ro-即集群下的所有只读实例。</p>
     * @param string $PolicyId <p>策略ID</p>
     * @param string $PolicyType <p>策略类型</p>
     * @param float $SourceMinCpu <p>原规格下限</p>
     * @param float $SourceMaxCpu <p>原规格上限</p>
     * @param float $TargetMinCpu <p>原规格下限</p>
     * @param float $TargetMaxCpu <p>原规格上限</p>
     * @param string $Status <p>计划状态</p>
     * @param integer $ScaleTaskId <p>弹性任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpectedStartTime <p>计划预期开始执行时间</p>
     * @param string $ExpectedEndTime <p>计划预期结束时间</p>
     * @param integer $ResetTaskId <p>恢复自动弹性任务</p>
     * @param string $ResetType <p>恢复自动弹性任务执行方式</p>
     * @param string $ResetTime <p>恢复自动弹性任务执行时间</p>
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ObjectInstance",$param) and $param["ObjectInstance"] !== null) {
            $this->ObjectInstance = $param["ObjectInstance"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("SourceMinCpu",$param) and $param["SourceMinCpu"] !== null) {
            $this->SourceMinCpu = $param["SourceMinCpu"];
        }

        if (array_key_exists("SourceMaxCpu",$param) and $param["SourceMaxCpu"] !== null) {
            $this->SourceMaxCpu = $param["SourceMaxCpu"];
        }

        if (array_key_exists("TargetMinCpu",$param) and $param["TargetMinCpu"] !== null) {
            $this->TargetMinCpu = $param["TargetMinCpu"];
        }

        if (array_key_exists("TargetMaxCpu",$param) and $param["TargetMaxCpu"] !== null) {
            $this->TargetMaxCpu = $param["TargetMaxCpu"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScaleTaskId",$param) and $param["ScaleTaskId"] !== null) {
            $this->ScaleTaskId = $param["ScaleTaskId"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("ExpectedStartTime",$param) and $param["ExpectedStartTime"] !== null) {
            $this->ExpectedStartTime = $param["ExpectedStartTime"];
        }

        if (array_key_exists("ExpectedEndTime",$param) and $param["ExpectedEndTime"] !== null) {
            $this->ExpectedEndTime = $param["ExpectedEndTime"];
        }

        if (array_key_exists("ResetTaskId",$param) and $param["ResetTaskId"] !== null) {
            $this->ResetTaskId = $param["ResetTaskId"];
        }

        if (array_key_exists("ResetType",$param) and $param["ResetType"] !== null) {
            $this->ResetType = $param["ResetType"];
        }

        if (array_key_exists("ResetTime",$param) and $param["ResetTime"] !== null) {
            $this->ResetTime = $param["ResetTime"];
        }
    }
}
