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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步任务的步骤信息
 *
 * @method integer getStepAll() 获取<p>总步骤数</p>
 * @method void setStepAll(integer $StepAll) 设置<p>总步骤数</p>
 * @method integer getStepNow() 获取<p>当前步骤</p>
 * @method void setStepNow(integer $StepNow) 设置<p>当前步骤</p>
 * @method integer getProgress() 获取<p>总体进度</p>
 * @method void setProgress(integer $Progress) 设置<p>总体进度</p>
 * @method integer getCurrentStepProgress() 获取<p>当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度</p>
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) 设置<p>当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度</p>
 * @method integer getMasterSlaveDistance() 获取<p>同步两端数据量差距</p>
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) 设置<p>同步两端数据量差距</p>
 * @method integer getSecondsBehindMaster() 获取<p>同步两端时间差距</p>
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) 设置<p>同步两端时间差距</p>
 * @method string getMessage() 获取<p>总体描述信息</p>
 * @method void setMessage(string $Message) 设置<p>总体描述信息</p>
 * @method array getStepInfos() 获取<p>详细步骤信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfos(array $StepInfos) 设置<p>详细步骤信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCauseOfCompareDisable() 获取<p>不能发起内置校验的原因</p>
 * @method void setCauseOfCompareDisable(string $CauseOfCompareDisable) 设置<p>不能发起内置校验的原因</p>
 * @method ErrInfo getErrInfo() 获取<p>任务的错误和解决方案信息</p>
 * @method void setErrInfo(ErrInfo $ErrInfo) 设置<p>任务的错误和解决方案信息</p>
 */
class SyncDetailInfo extends AbstractModel
{
    /**
     * @var integer <p>总步骤数</p>
     */
    public $StepAll;

    /**
     * @var integer <p>当前步骤</p>
     */
    public $StepNow;

    /**
     * @var integer <p>总体进度</p>
     */
    public $Progress;

    /**
     * @var integer <p>当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度</p>
     */
    public $CurrentStepProgress;

    /**
     * @var integer <p>同步两端数据量差距</p>
     */
    public $MasterSlaveDistance;

    /**
     * @var integer <p>同步两端时间差距</p>
     */
    public $SecondsBehindMaster;

    /**
     * @var string <p>总体描述信息</p>
     */
    public $Message;

    /**
     * @var array <p>详细步骤信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfos;

    /**
     * @var string <p>不能发起内置校验的原因</p>
     */
    public $CauseOfCompareDisable;

    /**
     * @var ErrInfo <p>任务的错误和解决方案信息</p>
     */
    public $ErrInfo;

    /**
     * @param integer $StepAll <p>总步骤数</p>
     * @param integer $StepNow <p>当前步骤</p>
     * @param integer $Progress <p>总体进度</p>
     * @param integer $CurrentStepProgress <p>当前步骤进度，范围为[0-100]，若为-1表示当前步骤不支持查看进度</p>
     * @param integer $MasterSlaveDistance <p>同步两端数据量差距</p>
     * @param integer $SecondsBehindMaster <p>同步两端时间差距</p>
     * @param string $Message <p>总体描述信息</p>
     * @param array $StepInfos <p>详细步骤信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CauseOfCompareDisable <p>不能发起内置校验的原因</p>
     * @param ErrInfo $ErrInfo <p>任务的错误和解决方案信息</p>
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
