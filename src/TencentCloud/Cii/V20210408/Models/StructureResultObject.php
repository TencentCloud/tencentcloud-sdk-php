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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化结果
 *
 * @method integer getCode() 获取0表示正常返回；1代表结果未生成；2代表任务执行失败
 * @method void setCode(integer $Code) 设置0表示正常返回；1代表结果未生成；2代表任务执行失败
 * @method string getTaskType() 获取报告类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
 * @method void setTaskType(string $TaskType) 设置报告类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
 * @method string getStructureResult() 获取结构化结果
 * @method void setStructureResult(string $StructureResult) 设置结构化结果
 * @method string getSubTaskId() 获取子任务ID
 * @method void setSubTaskId(string $SubTaskId) 设置子任务ID
 * @method array getTaskFiles() 获取任务文件列表
 * @method void setTaskFiles(array $TaskFiles) 设置任务文件列表
 * @method array getResultFields() 获取结构化字段结果数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultFields(array $ResultFields) 设置结构化字段结果数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class StructureResultObject extends AbstractModel
{
    /**
     * @var integer 0表示正常返回；1代表结果未生成；2代表任务执行失败
     */
    public $Code;

    /**
     * @var string 报告类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
     */
    public $TaskType;

    /**
     * @var string 结构化结果
     */
    public $StructureResult;

    /**
     * @var string 子任务ID
     */
    public $SubTaskId;

    /**
     * @var array 任务文件列表
     */
    public $TaskFiles;

    /**
     * @var array 结构化字段结果数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultFields;

    /**
     * @param integer $Code 0表示正常返回；1代表结果未生成；2代表任务执行失败
     * @param string $TaskType 报告类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
     * @param string $StructureResult 结构化结果
     * @param string $SubTaskId 子任务ID
     * @param array $TaskFiles 任务文件列表
     * @param array $ResultFields 结构化字段结果数组
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StructureResult",$param) and $param["StructureResult"] !== null) {
            $this->StructureResult = $param["StructureResult"];
        }

        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("TaskFiles",$param) and $param["TaskFiles"] !== null) {
            $this->TaskFiles = $param["TaskFiles"];
        }

        if (array_key_exists("ResultFields",$param) and $param["ResultFields"] !== null) {
            $this->ResultFields = [];
            foreach ($param["ResultFields"] as $key => $value){
                $obj = new OcrRecognise();
                $obj->deserialize($value);
                array_push($this->ResultFields, $obj);
            }
        }
    }
}
