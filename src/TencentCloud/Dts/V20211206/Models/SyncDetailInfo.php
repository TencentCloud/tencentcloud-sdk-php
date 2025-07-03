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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步任务的步骤信息
 *
 * @method integer getStepAll() 获取总步骤数
 * @method void setStepAll(integer $StepAll) 设置总步骤数
 * @method integer getStepNow() 获取当前步骤
 * @method void setStepNow(integer $StepNow) 设置当前步骤
 * @method integer getProgress() 获取总体进度
 * @method void setProgress(integer $Progress) 设置总体进度
 * @method integer getCurrentStepProgress() 获取当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) 设置当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度
 * @method integer getMasterSlaveDistance() 获取同步两端数据量差距
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) 设置同步两端数据量差距
 * @method integer getSecondsBehindMaster() 获取同步两端时间差距
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) 设置同步两端时间差距
 * @method string getMessage() 获取总体描述信息
 * @method void setMessage(string $Message) 设置总体描述信息
 * @method array getStepInfos() 获取详细步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfos(array $StepInfos) 设置详细步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCauseOfCompareDisable() 获取不能发起一致性校验的原因
 * @method void setCauseOfCompareDisable(string $CauseOfCompareDisable) 设置不能发起一致性校验的原因
 * @method ErrInfo getErrInfo() 获取任务的错误和解决方案信息
 * @method void setErrInfo(ErrInfo $ErrInfo) 设置任务的错误和解决方案信息
 */
class SyncDetailInfo extends AbstractModel
{
    /**
     * @var integer 总步骤数
     */
    public $StepAll;

    /**
     * @var integer 当前步骤
     */
    public $StepNow;

    /**
     * @var integer 总体进度
     */
    public $Progress;

    /**
     * @var integer 当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度
     */
    public $CurrentStepProgress;

    /**
     * @var integer 同步两端数据量差距
     */
    public $MasterSlaveDistance;

    /**
     * @var integer 同步两端时间差距
     */
    public $SecondsBehindMaster;

    /**
     * @var string 总体描述信息
     */
    public $Message;

    /**
     * @var array 详细步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfos;

    /**
     * @var string 不能发起一致性校验的原因
     */
    public $CauseOfCompareDisable;

    /**
     * @var ErrInfo 任务的错误和解决方案信息
     */
    public $ErrInfo;

    /**
     * @param integer $StepAll 总步骤数
     * @param integer $StepNow 当前步骤
     * @param integer $Progress 总体进度
     * @param integer $CurrentStepProgress 当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度
     * @param integer $MasterSlaveDistance 同步两端数据量差距
     * @param integer $SecondsBehindMaster 同步两端时间差距
     * @param string $Message 总体描述信息
     * @param array $StepInfos 详细步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CauseOfCompareDisable 不能发起一致性校验的原因
     * @param ErrInfo $ErrInfo 任务的错误和解决方案信息
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("StepInfos",$param) and $param["StepInfos"] !== null) {
            $this->StepInfos = [];
            foreach ($param["StepInfos"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfos, $obj);
            }
        }

        if (array_key_exists("CauseOfCompareDisable",$param) and $param["CauseOfCompareDisable"] !== null) {
            $this->CauseOfCompareDisable = $param["CauseOfCompareDisable"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = new ErrInfo();
            $this->ErrInfo->deserialize($param["ErrInfo"]);
        }
    }
}
