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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级计划
 *
 * @method integer getID() 获取升级计划ID
 * @method void setID(integer $ID) 设置升级计划ID
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取集群地域
 * @method void setRegion(string $Region) 设置集群地域
 * @method string getPlanedStartAt() 获取预计开始时间
 * @method void setPlanedStartAt(string $PlanedStartAt) 设置预计开始时间
 * @method string getUpgradeStartAt() 获取升级开始时间
 * @method void setUpgradeStartAt(string $UpgradeStartAt) 设置升级开始时间
 * @method string getUpgradeEndAt() 获取升级结束时间
 * @method void setUpgradeEndAt(string $UpgradeEndAt) 设置升级结束时间
 * @method string getStatus() 获取升级状态
 * @method void setStatus(string $Status) 设置升级状态
 * @method string getReason() 获取原因
 * @method void setReason(string $Reason) 设置原因
 */
class UpgradePlan extends AbstractModel
{
    /**
     * @var integer 升级计划ID
     */
    public $ID;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群地域
     */
    public $Region;

    /**
     * @var string 预计开始时间
     */
    public $PlanedStartAt;

    /**
     * @var string 升级开始时间
     */
    public $UpgradeStartAt;

    /**
     * @var string 升级结束时间
     */
    public $UpgradeEndAt;

    /**
     * @var string 升级状态
     */
    public $Status;

    /**
     * @var string 原因
     */
    public $Reason;

    /**
     * @param integer $ID 升级计划ID
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 集群地域
     * @param string $PlanedStartAt 预计开始时间
     * @param string $UpgradeStartAt 升级开始时间
     * @param string $UpgradeEndAt 升级结束时间
     * @param string $Status 升级状态
     * @param string $Reason 原因
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PlanedStartAt",$param) and $param["PlanedStartAt"] !== null) {
            $this->PlanedStartAt = $param["PlanedStartAt"];
        }

        if (array_key_exists("UpgradeStartAt",$param) and $param["UpgradeStartAt"] !== null) {
            $this->UpgradeStartAt = $param["UpgradeStartAt"];
        }

        if (array_key_exists("UpgradeEndAt",$param) and $param["UpgradeEndAt"] !== null) {
            $this->UpgradeEndAt = $param["UpgradeEndAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
