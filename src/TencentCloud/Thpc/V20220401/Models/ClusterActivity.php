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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 符合条件的集群活动信息。
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method string getActivityId() 获取集群活动ID。
 * @method void setActivityId(string $ActivityId) 设置集群活动ID。
 * @method string getActivityType() 获取集群活动类型。
 * @method void setActivityType(string $ActivityType) 设置集群活动类型。
 * @method string getActivityStatus() 获取集群活动状态。取值范围：<br><li>PENDING：等待运行<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>PARTIALLY_SUCCESSFUL：活动部分成功<br><li>FAILED：活动失败
 * @method void setActivityStatus(string $ActivityStatus) 设置集群活动状态。取值范围：<br><li>PENDING：等待运行<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>PARTIALLY_SUCCESSFUL：活动部分成功<br><li>FAILED：活动失败
 * @method string getActivityStatusCode() 获取集群活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityStatusCode(string $ActivityStatusCode) 设置集群活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultDetail() 获取集群活动结果详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultDetail(string $ResultDetail) 设置集群活动结果详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCause() 获取集群活动起因。
 * @method void setCause(string $Cause) 设置集群活动起因。
 * @method string getDescription() 获取集群活动描述。
 * @method void setDescription(string $Description) 设置集群活动描述。
 * @method array getRelatedNodeActivitySet() 获取集群活动相关节点活动集合。
 * @method void setRelatedNodeActivitySet(array $RelatedNodeActivitySet) 设置集群活动相关节点活动集合。
 * @method string getStartTime() 获取集群活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置集群活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取集群活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置集群活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterActivity extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var string 集群活动ID。
     */
    public $ActivityId;

    /**
     * @var string 集群活动类型。
     */
    public $ActivityType;

    /**
     * @var string 集群活动状态。取值范围：<br><li>PENDING：等待运行<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>PARTIALLY_SUCCESSFUL：活动部分成功<br><li>FAILED：活动失败
     */
    public $ActivityStatus;

    /**
     * @var string 集群活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityStatusCode;

    /**
     * @var string 集群活动结果详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultDetail;

    /**
     * @var string 集群活动起因。
     */
    public $Cause;

    /**
     * @var string 集群活动描述。
     */
    public $Description;

    /**
     * @var array 集群活动相关节点活动集合。
     */
    public $RelatedNodeActivitySet;

    /**
     * @var string 集群活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 集群活动结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $ClusterId 集群ID。
     * @param string $ActivityId 集群活动ID。
     * @param string $ActivityType 集群活动类型。
     * @param string $ActivityStatus 集群活动状态。取值范围：<br><li>PENDING：等待运行<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>PARTIALLY_SUCCESSFUL：活动部分成功<br><li>FAILED：活动失败
     * @param string $ActivityStatusCode 集群活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultDetail 集群活动结果详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cause 集群活动起因。
     * @param string $Description 集群活动描述。
     * @param array $RelatedNodeActivitySet 集群活动相关节点活动集合。
     * @param string $StartTime 集群活动开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 集群活动结束时间。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("ActivityStatus",$param) and $param["ActivityStatus"] !== null) {
            $this->ActivityStatus = $param["ActivityStatus"];
        }

        if (array_key_exists("ActivityStatusCode",$param) and $param["ActivityStatusCode"] !== null) {
            $this->ActivityStatusCode = $param["ActivityStatusCode"];
        }

        if (array_key_exists("ResultDetail",$param) and $param["ResultDetail"] !== null) {
            $this->ResultDetail = $param["ResultDetail"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RelatedNodeActivitySet",$param) and $param["RelatedNodeActivitySet"] !== null) {
            $this->RelatedNodeActivitySet = [];
            foreach ($param["RelatedNodeActivitySet"] as $key => $value){
                $obj = new NodeActivity();
                $obj->deserialize($value);
                array_push($this->RelatedNodeActivitySet, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
