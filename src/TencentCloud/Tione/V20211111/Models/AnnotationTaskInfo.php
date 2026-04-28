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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述标注任务详细信息
 *
 * @method string getTaskId() 获取<p>标注任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>标注任务id</p>
 * @method string getTaskName() 获取<p>标注任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>标注任务名称</p>
 * @method string getDatasetId() 获取<p>数据集id</p>
 * @method void setDatasetId(string $DatasetId) 设置<p>数据集id</p>
 * @method string getDatasetName() 获取<p>数据集名称</p>
 * @method void setDatasetName(string $DatasetName) 设置<p>数据集名称</p>
 * @method string getSceneName() 获取<p>标注场景名称</p>
 * @method void setSceneName(string $SceneName) 设置<p>标注场景名称</p>
 * @method array getLabelValueList() 获取<p>标注任务的label信息数组</p>
 * @method void setLabelValueList(array $LabelValueList) 设置<p>标注任务的label信息数组</p>
 * @method array getCamTagList() 获取<p>tag详情数组</p>
 * @method void setCamTagList(array $CamTagList) 设置<p>tag详情数组</p>
 * @method integer getStatus() 获取<p>任务状态</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p>
 * @method string getAbnormalMsg() 获取<p>创建任务失败原因说明</p>
 * @method void setAbnormalMsg(string $AbnormalMsg) 设置<p>创建任务失败原因说明</p>
 * @method boolean getIsSubmitting() 获取<p>标注任务是否正在提交</p>
 * @method void setIsSubmitting(boolean $IsSubmitting) 设置<p>标注任务是否正在提交</p>
 * @method string getTaskNote() 获取<p>任务详情描述</p>
 * @method void setTaskNote(string $TaskNote) 设置<p>任务详情描述</p>
 * @method string getDataSetVersion() 获取<p>数据集版本</p>
 * @method void setDataSetVersion(string $DataSetVersion) 设置<p>数据集版本</p>
 * @method integer getNumAnnotated() 获取<p>已经标注的图片数量</p>
 * @method void setNumAnnotated(integer $NumAnnotated) 设置<p>已经标注的图片数量</p>
 * @method integer getNumTotal() 获取<p>标注的总图片数量</p>
 * @method void setNumTotal(integer $NumTotal) 设置<p>标注的总图片数量</p>
 * @method integer getCreateTime() 获取<p>创建任务的时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建任务的时间戳</p>
 * @method integer getOcrToolType() 获取<p>Ocr Tool Type</p>
 * @method void setOcrToolType(integer $OcrToolType) 设置<p>Ocr Tool Type</p>
 * @method boolean getOcrTextAttributeAnnotateEnable() 获取<p>Ocr Text Attribute Annotate Enable</p>
 * @method void setOcrTextAttributeAnnotateEnable(boolean $OcrTextAttributeAnnotateEnable) 设置<p>Ocr Text Attribute Annotate Enable</p>
 * @method string getExportFormat() 获取<p>导出格式</p>
 * @method void setExportFormat(string $ExportFormat) 设置<p>导出格式</p>
 * @method string getSubmittingErrorMsg() 获取<p>提交错误说明</p>
 * @method void setSubmittingErrorMsg(string $SubmittingErrorMsg) 设置<p>提交错误说明</p>
 * @method integer getOcrAnnotationContentType() 获取<p>ocr任务类型：1-识别。2-智能结构化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrAnnotationContentType(integer $OcrAnnotationContentType) 设置<p>ocr任务类型：1-识别。2-智能结构化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableAuxiliaryAnnotation() 获取<p>OCR任务：是否启用辅助标注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableAuxiliaryAnnotation(boolean $EnableAuxiliaryAnnotation) 设置<p>OCR任务：是否启用辅助标注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetCreator() 获取<p>数据集创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetCreator(string $DatasetCreator) 设置<p>数据集创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>任务创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>任务创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetCreatorName() 获取<p>数据集创建者名称</p>
 * @method void setDatasetCreatorName(string $DatasetCreatorName) 设置<p>数据集创建者名称</p>
 * @method string getCreatorName() 获取<p>任务创建者名称</p>
 * @method void setCreatorName(string $CreatorName) 设置<p>任务创建者名称</p>
 * @method string getTaskStatus() 获取<p>标注任务状态枚举</p><p>枚举值：</p><ul><li>CREATING： 创建中</li><li>CREATE_SUCCESS： 创建成功，可标注</li><li>CREATE_FAILED： 创建失败</li><li>SUBMITTING： 提交中</li><li>SUBMIT_SUCCESS： 提交成功，需重启才可标注</li><li>SUBMIT_FAILED： 提交失败</li><li>ABNORMAL： 数据版本异常，需删除重建（大模型场景）</li></ul>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>标注任务状态枚举</p><p>枚举值：</p><ul><li>CREATING： 创建中</li><li>CREATE_SUCCESS： 创建成功，可标注</li><li>CREATE_FAILED： 创建失败</li><li>SUBMITTING： 提交中</li><li>SUBMIT_SUCCESS： 提交成功，需重启才可标注</li><li>SUBMIT_FAILED： 提交失败</li><li>ABNORMAL： 数据版本异常，需删除重建（大模型场景）</li></ul>
 */
class AnnotationTaskInfo extends AbstractModel
{
    /**
     * @var string <p>标注任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>标注任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>数据集id</p>
     */
    public $DatasetId;

    /**
     * @var string <p>数据集名称</p>
     */
    public $DatasetName;

    /**
     * @var string <p>标注场景名称</p>
     */
    public $SceneName;

    /**
     * @var array <p>标注任务的label信息数组</p>
     */
    public $LabelValueList;

    /**
     * @var array <p>tag详情数组</p>
     */
    public $CamTagList;

    /**
     * @var integer <p>任务状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建任务失败原因说明</p>
     */
    public $AbnormalMsg;

    /**
     * @var boolean <p>标注任务是否正在提交</p>
     */
    public $IsSubmitting;

    /**
     * @var string <p>任务详情描述</p>
     */
    public $TaskNote;

    /**
     * @var string <p>数据集版本</p>
     */
    public $DataSetVersion;

    /**
     * @var integer <p>已经标注的图片数量</p>
     */
    public $NumAnnotated;

    /**
     * @var integer <p>标注的总图片数量</p>
     */
    public $NumTotal;

    /**
     * @var integer <p>创建任务的时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Ocr Tool Type</p>
     */
    public $OcrToolType;

    /**
     * @var boolean <p>Ocr Text Attribute Annotate Enable</p>
     */
    public $OcrTextAttributeAnnotateEnable;

    /**
     * @var string <p>导出格式</p>
     */
    public $ExportFormat;

    /**
     * @var string <p>提交错误说明</p>
     */
    public $SubmittingErrorMsg;

    /**
     * @var integer <p>ocr任务类型：1-识别。2-智能结构化</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrAnnotationContentType;

    /**
     * @var boolean <p>OCR任务：是否启用辅助标注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableAuxiliaryAnnotation;

    /**
     * @var string <p>数据集创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetCreator;

    /**
     * @var string <p>任务创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>数据集创建者名称</p>
     */
    public $DatasetCreatorName;

    /**
     * @var string <p>任务创建者名称</p>
     */
    public $CreatorName;

    /**
     * @var string <p>标注任务状态枚举</p><p>枚举值：</p><ul><li>CREATING： 创建中</li><li>CREATE_SUCCESS： 创建成功，可标注</li><li>CREATE_FAILED： 创建失败</li><li>SUBMITTING： 提交中</li><li>SUBMIT_SUCCESS： 提交成功，需重启才可标注</li><li>SUBMIT_FAILED： 提交失败</li><li>ABNORMAL： 数据版本异常，需删除重建（大模型场景）</li></ul>
     */
    public $TaskStatus;

    /**
     * @param string $TaskId <p>标注任务id</p>
     * @param string $TaskName <p>标注任务名称</p>
     * @param string $DatasetId <p>数据集id</p>
     * @param string $DatasetName <p>数据集名称</p>
     * @param string $SceneName <p>标注场景名称</p>
     * @param array $LabelValueList <p>标注任务的label信息数组</p>
     * @param array $CamTagList <p>tag详情数组</p>
     * @param integer $Status <p>任务状态</p>
     * @param string $AbnormalMsg <p>创建任务失败原因说明</p>
     * @param boolean $IsSubmitting <p>标注任务是否正在提交</p>
     * @param string $TaskNote <p>任务详情描述</p>
     * @param string $DataSetVersion <p>数据集版本</p>
     * @param integer $NumAnnotated <p>已经标注的图片数量</p>
     * @param integer $NumTotal <p>标注的总图片数量</p>
     * @param integer $CreateTime <p>创建任务的时间戳</p>
     * @param integer $OcrToolType <p>Ocr Tool Type</p>
     * @param boolean $OcrTextAttributeAnnotateEnable <p>Ocr Text Attribute Annotate Enable</p>
     * @param string $ExportFormat <p>导出格式</p>
     * @param string $SubmittingErrorMsg <p>提交错误说明</p>
     * @param integer $OcrAnnotationContentType <p>ocr任务类型：1-识别。2-智能结构化</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableAuxiliaryAnnotation <p>OCR任务：是否启用辅助标注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetCreator <p>数据集创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>任务创建者UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetCreatorName <p>数据集创建者名称</p>
     * @param string $CreatorName <p>任务创建者名称</p>
     * @param string $TaskStatus <p>标注任务状态枚举</p><p>枚举值：</p><ul><li>CREATING： 创建中</li><li>CREATE_SUCCESS： 创建成功，可标注</li><li>CREATE_FAILED： 创建失败</li><li>SUBMITTING： 提交中</li><li>SUBMIT_SUCCESS： 提交成功，需重启才可标注</li><li>SUBMIT_FAILED： 提交失败</li><li>ABNORMAL： 数据版本异常，需删除重建（大模型场景）</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("DatasetName",$param) and $param["DatasetName"] !== null) {
            $this->DatasetName = $param["DatasetName"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("LabelValueList",$param) and $param["LabelValueList"] !== null) {
            $this->LabelValueList = [];
            foreach ($param["LabelValueList"] as $key => $value){
                $obj = new LabelValue();
                $obj->deserialize($value);
                array_push($this->LabelValueList, $obj);
            }
        }

        if (array_key_exists("CamTagList",$param) and $param["CamTagList"] !== null) {
            $this->CamTagList = [];
            foreach ($param["CamTagList"] as $key => $value){
                $obj = new CamTag();
                $obj->deserialize($value);
                array_push($this->CamTagList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AbnormalMsg",$param) and $param["AbnormalMsg"] !== null) {
            $this->AbnormalMsg = $param["AbnormalMsg"];
        }

        if (array_key_exists("IsSubmitting",$param) and $param["IsSubmitting"] !== null) {
            $this->IsSubmitting = $param["IsSubmitting"];
        }

        if (array_key_exists("TaskNote",$param) and $param["TaskNote"] !== null) {
            $this->TaskNote = $param["TaskNote"];
        }

        if (array_key_exists("DataSetVersion",$param) and $param["DataSetVersion"] !== null) {
            $this->DataSetVersion = $param["DataSetVersion"];
        }

        if (array_key_exists("NumAnnotated",$param) and $param["NumAnnotated"] !== null) {
            $this->NumAnnotated = $param["NumAnnotated"];
        }

        if (array_key_exists("NumTotal",$param) and $param["NumTotal"] !== null) {
            $this->NumTotal = $param["NumTotal"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("OcrToolType",$param) and $param["OcrToolType"] !== null) {
            $this->OcrToolType = $param["OcrToolType"];
        }

        if (array_key_exists("OcrTextAttributeAnnotateEnable",$param) and $param["OcrTextAttributeAnnotateEnable"] !== null) {
            $this->OcrTextAttributeAnnotateEnable = $param["OcrTextAttributeAnnotateEnable"];
        }

        if (array_key_exists("ExportFormat",$param) and $param["ExportFormat"] !== null) {
            $this->ExportFormat = $param["ExportFormat"];
        }

        if (array_key_exists("SubmittingErrorMsg",$param) and $param["SubmittingErrorMsg"] !== null) {
            $this->SubmittingErrorMsg = $param["SubmittingErrorMsg"];
        }

        if (array_key_exists("OcrAnnotationContentType",$param) and $param["OcrAnnotationContentType"] !== null) {
            $this->OcrAnnotationContentType = $param["OcrAnnotationContentType"];
        }

        if (array_key_exists("EnableAuxiliaryAnnotation",$param) and $param["EnableAuxiliaryAnnotation"] !== null) {
            $this->EnableAuxiliaryAnnotation = $param["EnableAuxiliaryAnnotation"];
        }

        if (array_key_exists("DatasetCreator",$param) and $param["DatasetCreator"] !== null) {
            $this->DatasetCreator = $param["DatasetCreator"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DatasetCreatorName",$param) and $param["DatasetCreatorName"] !== null) {
            $this->DatasetCreatorName = $param["DatasetCreatorName"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
