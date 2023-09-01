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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产扫描结构细节
 *
 * @method string getAppID() 获取用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(string $AppID) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVEId() 获取CVE编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVEId(string $CVEId) 设置CVE编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsScan() 获取是扫描，0默认未扫描，1正在扫描，2扫描完成，3扫描出错
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsScan(integer $IsScan) 设置是扫描，0默认未扫描，1正在扫描，2扫描完成，3扫描出错
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInfluenceAsset() 获取影响资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfluenceAsset(integer $InfluenceAsset) 设置影响资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotRepairAsset() 获取未修复资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotRepairAsset(integer $NotRepairAsset) 设置未修复资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotProtectAsset() 获取未防护资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotProtectAsset(integer $NotProtectAsset) 设置未防护资产数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskPercent() 获取任务百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskPercent(integer $TaskPercent) 设置任务百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTime() 获取任务时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTime(integer $TaskTime) 设置任务时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTime(string $ScanTime) 设置扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetInfoDetail extends AbstractModel
{
    /**
     * @var string 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string CVE编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVEId;

    /**
     * @var integer 是扫描，0默认未扫描，1正在扫描，2扫描完成，3扫描出错
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsScan;

    /**
     * @var integer 影响资产数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfluenceAsset;

    /**
     * @var integer 未修复资产数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotRepairAsset;

    /**
     * @var integer 未防护资产数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotProtectAsset;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 任务百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskPercent;

    /**
     * @var integer 任务时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTime;

    /**
     * @var string 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTime;

    /**
     * @param string $AppID 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVEId CVE编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsScan 是扫描，0默认未扫描，1正在扫描，2扫描完成，3扫描出错
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InfluenceAsset 影响资产数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NotRepairAsset 未修复资产数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NotProtectAsset 未防护资产数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskPercent 任务百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTime 任务时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 扫描时间
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("IsScan",$param) and $param["IsScan"] !== null) {
            $this->IsScan = $param["IsScan"];
        }

        if (array_key_exists("InfluenceAsset",$param) and $param["InfluenceAsset"] !== null) {
            $this->InfluenceAsset = $param["InfluenceAsset"];
        }

        if (array_key_exists("NotRepairAsset",$param) and $param["NotRepairAsset"] !== null) {
            $this->NotRepairAsset = $param["NotRepairAsset"];
        }

        if (array_key_exists("NotProtectAsset",$param) and $param["NotProtectAsset"] !== null) {
            $this->NotProtectAsset = $param["NotProtectAsset"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskPercent",$param) and $param["TaskPercent"] !== null) {
            $this->TaskPercent = $param["TaskPercent"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
