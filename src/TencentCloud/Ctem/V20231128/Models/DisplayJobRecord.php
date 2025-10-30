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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务详情
 *
 * @method integer getId() 获取任务Id
 * @method void setId(integer $Id) 设置任务Id
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getCustomerName() 获取企业名称
 * @method void setCustomerName(string $CustomerName) 设置企业名称
 * @method string getCrontab() 获取周期任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontab(string $Crontab) 设置周期任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态：2-错误/已停止，3-进行中，1-已完成, 4-停止
 * @method void setStatus(integer $Status) 设置状态：2-错误/已停止，3-进行中，1-已完成, 4-停止
 * @method integer getNewCount() 获取新增数据
 * @method void setNewCount(integer $NewCount) 设置新增数据
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method string getUpdateAt() 获取更新时间
 * @method void setUpdateAt(string $UpdateAt) 设置更新时间
 * @method JobRecordProgress getProgress() 获取子任务进度
 * @method void setProgress(JobRecordProgress $Progress) 设置子任务进度
 * @method integer getQps() 获取并发设置
 * @method void setQps(integer $Qps) 设置并发设置
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取客户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置客户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取客户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置客户appid
注意：此字段可能返回 null，表示取不到有效值。
 */
class DisplayJobRecord extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $Id;

    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 企业名称
     */
    public $CustomerName;

    /**
     * @var string 周期任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Crontab;

    /**
     * @var integer 状态：2-错误/已停止，3-进行中，1-已完成, 4-停止
     */
    public $Status;

    /**
     * @var integer 新增数据
     */
    public $NewCount;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var string 更新时间
     */
    public $UpdateAt;

    /**
     * @var JobRecordProgress 子任务进度
     */
    public $Progress;

    /**
     * @var integer 并发设置
     */
    public $Qps;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 客户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 客户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param integer $Id 任务Id
     * @param integer $CustomerId 企业ID
     * @param string $CustomerName 企业名称
     * @param string $Crontab 周期任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态：2-错误/已停止，3-进行中，1-已完成, 4-停止
     * @param integer $NewCount 新增数据
     * @param string $CreateAt 创建时间
     * @param string $UpdateAt 更新时间
     * @param JobRecordProgress $Progress 子任务进度
     * @param integer $Qps 并发设置
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 客户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 客户appid
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NewCount",$param) and $param["NewCount"] !== null) {
            $this->NewCount = $param["NewCount"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = new JobRecordProgress();
            $this->Progress->deserialize($param["Progress"]);
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
