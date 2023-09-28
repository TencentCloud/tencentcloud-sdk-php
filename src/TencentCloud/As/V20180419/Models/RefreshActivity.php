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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例刷新活动。
 *
 * @method string getAutoScalingGroupId() 获取伸缩组 ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组 ID。
 * @method string getRefreshActivityId() 获取刷新活动 ID。
 * @method void setRefreshActivityId(string $RefreshActivityId) 设置刷新活动 ID。
 * @method string getOriginRefreshActivityId() 获取原始刷新活动ID，仅在回滚刷新活动中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginRefreshActivityId(string $OriginRefreshActivityId) 设置原始刷新活动ID，仅在回滚刷新活动中存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRefreshBatchSet() 获取刷新批次信息列表。
 * @method void setRefreshBatchSet(array $RefreshBatchSet) 设置刷新批次信息列表。
 * @method string getRefreshMode() 获取刷新模式。
 * @method void setRefreshMode(string $RefreshMode) 设置刷新模式。
 * @method RefreshSettings getRefreshSettings() 获取实例更新设置参数。
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) 设置实例更新设置参数。
 * @method string getActivityType() 获取刷新活动类型。取值如下：<br><li>NORMAL：正常刷新活动</li><li>ROLLBACK：回滚刷新活动
 * @method void setActivityType(string $ActivityType) 设置刷新活动类型。取值如下：<br><li>NORMAL：正常刷新活动</li><li>ROLLBACK：回滚刷新活动
 * @method string getStatus() 获取刷新活动状态。取值如下：<br><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>FAILED_PAUSE：因刷新批次失败暂停</li><li>AUTO_PAUSE：因暂停策略自动暂停</li><li>MANUAL_PAUSE：手动暂停</li><li>CANCELLED：活动取消</li><li>FAILED：活动失败
 * @method void setStatus(string $Status) 设置刷新活动状态。取值如下：<br><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>FAILED_PAUSE：因刷新批次失败暂停</li><li>AUTO_PAUSE：因暂停策略自动暂停</li><li>MANUAL_PAUSE：手动暂停</li><li>CANCELLED：活动取消</li><li>FAILED：活动失败
 * @method integer getCurrentRefreshBatchNum() 获取当前刷新批次序号。例如，2 表示当前活动正在刷新第二批次的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentRefreshBatchNum(integer $CurrentRefreshBatchNum) 设置当前刷新批次序号。例如，2 表示当前活动正在刷新第二批次的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取刷新活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置刷新活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取刷新活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置刷新活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取刷新活动创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置刷新活动创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefreshActivity extends AbstractModel
{
    /**
     * @var string 伸缩组 ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 刷新活动 ID。
     */
    public $RefreshActivityId;

    /**
     * @var string 原始刷新活动ID，仅在回滚刷新活动中存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginRefreshActivityId;

    /**
     * @var array 刷新批次信息列表。
     */
    public $RefreshBatchSet;

    /**
     * @var string 刷新模式。
     */
    public $RefreshMode;

    /**
     * @var RefreshSettings 实例更新设置参数。
     */
    public $RefreshSettings;

    /**
     * @var string 刷新活动类型。取值如下：<br><li>NORMAL：正常刷新活动</li><li>ROLLBACK：回滚刷新活动
     */
    public $ActivityType;

    /**
     * @var string 刷新活动状态。取值如下：<br><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>FAILED_PAUSE：因刷新批次失败暂停</li><li>AUTO_PAUSE：因暂停策略自动暂停</li><li>MANUAL_PAUSE：手动暂停</li><li>CANCELLED：活动取消</li><li>FAILED：活动失败
     */
    public $Status;

    /**
     * @var integer 当前刷新批次序号。例如，2 表示当前活动正在刷新第二批次的实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentRefreshBatchNum;

    /**
     * @var string 刷新活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 刷新活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 刷新活动创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @param string $AutoScalingGroupId 伸缩组 ID。
     * @param string $RefreshActivityId 刷新活动 ID。
     * @param string $OriginRefreshActivityId 原始刷新活动ID，仅在回滚刷新活动中存在。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RefreshBatchSet 刷新批次信息列表。
     * @param string $RefreshMode 刷新模式。
     * @param RefreshSettings $RefreshSettings 实例更新设置参数。
     * @param string $ActivityType 刷新活动类型。取值如下：<br><li>NORMAL：正常刷新活动</li><li>ROLLBACK：回滚刷新活动
     * @param string $Status 刷新活动状态。取值如下：<br><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>FAILED_PAUSE：因刷新批次失败暂停</li><li>AUTO_PAUSE：因暂停策略自动暂停</li><li>MANUAL_PAUSE：手动暂停</li><li>CANCELLED：活动取消</li><li>FAILED：活动失败
     * @param integer $CurrentRefreshBatchNum 当前刷新批次序号。例如，2 表示当前活动正在刷新第二批次的实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 刷新活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 刷新活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 刷新活动创建时间。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("RefreshActivityId",$param) and $param["RefreshActivityId"] !== null) {
            $this->RefreshActivityId = $param["RefreshActivityId"];
        }

        if (array_key_exists("OriginRefreshActivityId",$param) and $param["OriginRefreshActivityId"] !== null) {
            $this->OriginRefreshActivityId = $param["OriginRefreshActivityId"];
        }

        if (array_key_exists("RefreshBatchSet",$param) and $param["RefreshBatchSet"] !== null) {
            $this->RefreshBatchSet = [];
            foreach ($param["RefreshBatchSet"] as $key => $value){
                $obj = new RefreshBatch();
                $obj->deserialize($value);
                array_push($this->RefreshBatchSet, $obj);
            }
        }

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }

        if (array_key_exists("RefreshSettings",$param) and $param["RefreshSettings"] !== null) {
            $this->RefreshSettings = new RefreshSettings();
            $this->RefreshSettings->deserialize($param["RefreshSettings"]);
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentRefreshBatchNum",$param) and $param["CurrentRefreshBatchNum"] !== null) {
            $this->CurrentRefreshBatchNum = $param["CurrentRefreshBatchNum"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
