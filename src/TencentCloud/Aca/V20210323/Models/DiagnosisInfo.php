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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诊断、辅助内容
 *
 * @method integer getIntentType() 获取默认0，0:初诊-常规诊疗 1:复诊 2:检验检查/取药/咨询/疫苗 3:信息缺失 4:信息错误
 * @method void setIntentType(integer $IntentType) 设置默认0，0:初诊-常规诊疗 1:复诊 2:检验检查/取药/咨询/疫苗 3:信息缺失 4:信息错误
 * @method string getRiskInfo() 获取诊断风险
 * @method void setRiskInfo(string $RiskInfo) 设置诊断风险
 * @method array getSuspectedDiagnosis() 获取疑似诊断列表
 * @method void setSuspectedDiagnosis(array $SuspectedDiagnosis) 设置疑似诊断列表
 * @method ReferralInfo getReferralInfo() 获取转诊提醒
 * @method void setReferralInfo(ReferralInfo $ReferralInfo) 设置转诊提醒
 * @method array getCriticalInfo() 获取危急重症
 * @method void setCriticalInfo(array $CriticalInfo) 设置危急重症
 * @method VitalSignsInfo getVitalSignsInfo() 获取生命体征风险
 * @method void setVitalSignsInfo(VitalSignsInfo $VitalSignsInfo) 设置生命体征风险
 * @method array getDifferDiagnosis() 获取鉴别诊断
 * @method void setDifferDiagnosis(array $DifferDiagnosis) 设置鉴别诊断
 * @method RecordQuality getRecordQuality() 获取病历质控
 * @method void setRecordQuality(RecordQuality $RecordQuality) 设置病历质控
 * @method array getCurrentDiagnosis() 获取当前诊断
 * @method void setCurrentDiagnosis(array $CurrentDiagnosis) 设置当前诊断
 * @method array getTreatmentGuide() 获取治疗方案
 * @method void setTreatmentGuide(array $TreatmentGuide) 设置治疗方案
 * @method EmrQuality getEmrQuality() 获取病历质控
 * @method void setEmrQuality(EmrQuality $EmrQuality) 设置病历质控
 * @method array getHealthPrescriptions() 获取健康处方
 * @method void setHealthPrescriptions(array $HealthPrescriptions) 设置健康处方
 */
class DiagnosisInfo extends AbstractModel
{
    /**
     * @var integer 默认0，0:初诊-常规诊疗 1:复诊 2:检验检查/取药/咨询/疫苗 3:信息缺失 4:信息错误
     */
    public $IntentType;

    /**
     * @var string 诊断风险
     */
    public $RiskInfo;

    /**
     * @var array 疑似诊断列表
     */
    public $SuspectedDiagnosis;

    /**
     * @var ReferralInfo 转诊提醒
     */
    public $ReferralInfo;

    /**
     * @var array 危急重症
     */
    public $CriticalInfo;

    /**
     * @var VitalSignsInfo 生命体征风险
     */
    public $VitalSignsInfo;

    /**
     * @var array 鉴别诊断
     */
    public $DifferDiagnosis;

    /**
     * @var RecordQuality 病历质控
     */
    public $RecordQuality;

    /**
     * @var array 当前诊断
     */
    public $CurrentDiagnosis;

    /**
     * @var array 治疗方案
     */
    public $TreatmentGuide;

    /**
     * @var EmrQuality 病历质控
     */
    public $EmrQuality;

    /**
     * @var array 健康处方
     */
    public $HealthPrescriptions;

    /**
     * @param integer $IntentType 默认0，0:初诊-常规诊疗 1:复诊 2:检验检查/取药/咨询/疫苗 3:信息缺失 4:信息错误
     * @param string $RiskInfo 诊断风险
     * @param array $SuspectedDiagnosis 疑似诊断列表
     * @param ReferralInfo $ReferralInfo 转诊提醒
     * @param array $CriticalInfo 危急重症
     * @param VitalSignsInfo $VitalSignsInfo 生命体征风险
     * @param array $DifferDiagnosis 鉴别诊断
     * @param RecordQuality $RecordQuality 病历质控
     * @param array $CurrentDiagnosis 当前诊断
     * @param array $TreatmentGuide 治疗方案
     * @param EmrQuality $EmrQuality 病历质控
     * @param array $HealthPrescriptions 健康处方
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
        if (array_key_exists("IntentType",$param) and $param["IntentType"] !== null) {
            $this->IntentType = $param["IntentType"];
        }

        if (array_key_exists("RiskInfo",$param) and $param["RiskInfo"] !== null) {
            $this->RiskInfo = $param["RiskInfo"];
        }

        if (array_key_exists("SuspectedDiagnosis",$param) and $param["SuspectedDiagnosis"] !== null) {
            $this->SuspectedDiagnosis = [];
            foreach ($param["SuspectedDiagnosis"] as $key => $value){
                $obj = new SuspectedDiagnosis();
                $obj->deserialize($value);
                array_push($this->SuspectedDiagnosis, $obj);
            }
        }

        if (array_key_exists("ReferralInfo",$param) and $param["ReferralInfo"] !== null) {
            $this->ReferralInfo = new ReferralInfo();
            $this->ReferralInfo->deserialize($param["ReferralInfo"]);
        }

        if (array_key_exists("CriticalInfo",$param) and $param["CriticalInfo"] !== null) {
            $this->CriticalInfo = [];
            foreach ($param["CriticalInfo"] as $key => $value){
                $obj = new CriticalInfo();
                $obj->deserialize($value);
                array_push($this->CriticalInfo, $obj);
            }
        }

        if (array_key_exists("VitalSignsInfo",$param) and $param["VitalSignsInfo"] !== null) {
            $this->VitalSignsInfo = new VitalSignsInfo();
            $this->VitalSignsInfo->deserialize($param["VitalSignsInfo"]);
        }

        if (array_key_exists("DifferDiagnosis",$param) and $param["DifferDiagnosis"] !== null) {
            $this->DifferDiagnosis = [];
            foreach ($param["DifferDiagnosis"] as $key => $value){
                $obj = new DifferDiagnosis();
                $obj->deserialize($value);
                array_push($this->DifferDiagnosis, $obj);
            }
        }

        if (array_key_exists("RecordQuality",$param) and $param["RecordQuality"] !== null) {
            $this->RecordQuality = new RecordQuality();
            $this->RecordQuality->deserialize($param["RecordQuality"]);
        }

        if (array_key_exists("CurrentDiagnosis",$param) and $param["CurrentDiagnosis"] !== null) {
            $this->CurrentDiagnosis = [];
            foreach ($param["CurrentDiagnosis"] as $key => $value){
                $obj = new CurrentDiagnosis();
                $obj->deserialize($value);
                array_push($this->CurrentDiagnosis, $obj);
            }
        }

        if (array_key_exists("TreatmentGuide",$param) and $param["TreatmentGuide"] !== null) {
            $this->TreatmentGuide = [];
            foreach ($param["TreatmentGuide"] as $key => $value){
                $obj = new TreatmentGuide();
                $obj->deserialize($value);
                array_push($this->TreatmentGuide, $obj);
            }
        }

        if (array_key_exists("EmrQuality",$param) and $param["EmrQuality"] !== null) {
            $this->EmrQuality = new EmrQuality();
            $this->EmrQuality->deserialize($param["EmrQuality"]);
        }

        if (array_key_exists("HealthPrescriptions",$param) and $param["HealthPrescriptions"] !== null) {
            $this->HealthPrescriptions = [];
            foreach ($param["HealthPrescriptions"] as $key => $value){
                $obj = new HealthPrescriptions();
                $obj->deserialize($value);
                array_push($this->HealthPrescriptions, $obj);
            }
        }
    }
}
