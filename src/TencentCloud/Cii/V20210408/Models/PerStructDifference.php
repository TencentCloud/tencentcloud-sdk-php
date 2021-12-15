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
 * 复核差异接口的每一份报告的差异结果
 *
 * @method string getSubTaskId() 获取子任务ID
 * @method void setSubTaskId(string $SubTaskId) 设置子任务ID
 * @method string getTaskType() 获取任务类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
 * @method void setTaskType(string $TaskType) 设置任务类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
 * @method array getModifyItems() 获取修改的项
 * @method void setModifyItems(array $ModifyItems) 设置修改的项
 * @method array getNewItems() 获取新增的项
 * @method void setNewItems(array $NewItems) 设置新增的项
 * @method array getRemoveItems() 获取删除的项
 * @method void setRemoveItems(array $RemoveItems) 设置删除的项
 */
class PerStructDifference extends AbstractModel
{
    /**
     * @var string 子任务ID
     */
    public $SubTaskId;

    /**
     * @var string 任务类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
     */
    public $TaskType;

    /**
     * @var array 修改的项
     */
    public $ModifyItems;

    /**
     * @var array 新增的项
     */
    public $NewItems;

    /**
     * @var array 删除的项
     */
    public $RemoveItems;

    /**
     * @param string $SubTaskId 子任务ID
     * @param string $TaskType 任务类型:HealthReport(体检报告); BUltraReport(B超报告);MedCheckReport(检查报告);LaboratoryReport(检验报告); PathologyReport(病理报告);AdmissionReport(入院记录);DischargeReport(出院记录); DischargeSummary(出院小结);DiagnosisReport(诊断证明); MedicalRecordFront(病案首页);OperationReport(手术记录);OutpatientMedicalRecord(门诊病历)
     * @param array $ModifyItems 修改的项
     * @param array $NewItems 新增的项
     * @param array $RemoveItems 删除的项
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
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ModifyItems",$param) and $param["ModifyItems"] !== null) {
            $this->ModifyItems = [];
            foreach ($param["ModifyItems"] as $key => $value){
                $obj = new StructureModifyItem();
                $obj->deserialize($value);
                array_push($this->ModifyItems, $obj);
            }
        }

        if (array_key_exists("NewItems",$param) and $param["NewItems"] !== null) {
            $this->NewItems = [];
            foreach ($param["NewItems"] as $key => $value){
                $obj = new StructureOneItem();
                $obj->deserialize($value);
                array_push($this->NewItems, $obj);
            }
        }

        if (array_key_exists("RemoveItems",$param) and $param["RemoveItems"] !== null) {
            $this->RemoveItems = [];
            foreach ($param["RemoveItems"] as $key => $value){
                $obj = new StructureOneItem();
                $obj->deserialize($value);
                array_push($this->RemoveItems, $obj);
            }
        }
    }
}
