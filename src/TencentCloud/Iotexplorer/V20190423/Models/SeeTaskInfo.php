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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 任务详情
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method integer getStatus() 获取任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
 * @method void setStatus(integer $Status) 设置任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
 * @method SeeTaskMetadata getMetadata() 获取任务元数据
 * @method void setMetadata(SeeTaskMetadata $Metadata) 设置任务元数据
 * @method string getServiceCategory() 获取算法类目。可能取值：

- `COMPREHENSION`：视觉理解
- `HIGHLIGHT`：视频浓缩
 * @method void setServiceCategory(string $ServiceCategory) 设置算法类目。可能取值：

- `COMPREHENSION`：视觉理解
- `HIGHLIGHT`：视频浓缩
 * @method string getServiceType() 获取算法类型。可能取值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
- `COMP_HIGHLIGHT`：视频浓缩
 * @method void setServiceType(string $ServiceType) 设置算法类型。可能取值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
- `COMP_HIGHLIGHT`：视频浓缩
 * @method string getServiceTier() 获取套餐规格。可能取值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
 * @method void setServiceTier(string $ServiceTier) 设置套餐规格。可能取值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
 * @method SeeComprehensionResult getComprehensionResult() 获取视觉理解结果（适用于视频理解、图片理解）
 * @method void setComprehensionResult(SeeComprehensionResult $ComprehensionResult) 设置视觉理解结果（适用于视频理解、图片理解）
 * @method SeeCompHighlightResult getCompHighlightResult() 获取视频语义浓缩结果（适用于视频语义浓缩）
 * @method void setCompHighlightResult(SeeCompHighlightResult $CompHighlightResult) 设置视频语义浓缩结果（适用于视频语义浓缩）
 * @method SeeDetectContinuousResult getDetectContinuousResult() 获取标签持续检测结果
 * @method void setDetectContinuousResult(SeeDetectContinuousResult $DetectContinuousResult) 设置标签持续检测结果
 * @method integer getCostBasic() 获取完成该任务所消耗的基础能力额度
 * @method void setCostBasic(integer $CostBasic) 设置完成该任务所消耗的基础能力额度
 * @method integer getCostAdvanced() 获取完成该任务所消耗的高级能力额度
 * @method void setCostAdvanced(integer $CostAdvanced) 设置完成该任务所消耗的高级能力额度
 * @method array getFiles() 获取输出文件名列表
 * @method void setFiles(array $Files) 设置输出文件名列表
 * @method array getFilesInfo() 获取输出文件详情列表
 * @method void setFilesInfo(array $FilesInfo) 设置输出文件详情列表
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置最后更新时间
 */
class SeeTaskInfo extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var integer 任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
     */
    public $Status;

    /**
     * @var SeeTaskMetadata 任务元数据
     */
    public $Metadata;

    /**
     * @var string 算法类目。可能取值：

- `COMPREHENSION`：视觉理解
- `HIGHLIGHT`：视频浓缩
     */
    public $ServiceCategory;

    /**
     * @var string 算法类型。可能取值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
- `COMP_HIGHLIGHT`：视频浓缩
     */
    public $ServiceType;

    /**
     * @var string 套餐规格。可能取值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
     */
    public $ServiceTier;

    /**
     * @var SeeComprehensionResult 视觉理解结果（适用于视频理解、图片理解）
     */
    public $ComprehensionResult;

    /**
     * @var SeeCompHighlightResult 视频语义浓缩结果（适用于视频语义浓缩）
     */
    public $CompHighlightResult;

    /**
     * @var SeeDetectContinuousResult 标签持续检测结果
     */
    public $DetectContinuousResult;

    /**
     * @var integer 完成该任务所消耗的基础能力额度
     */
    public $CostBasic;

    /**
     * @var integer 完成该任务所消耗的高级能力额度
     */
    public $CostAdvanced;

    /**
     * @var array 输出文件名列表
     */
    public $Files;

    /**
     * @var array 输出文件详情列表
     */
    public $FilesInfo;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 最后更新时间
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 任务 ID
     * @param integer $Status 任务状态。可能取值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
- `4`：处理中
     * @param SeeTaskMetadata $Metadata 任务元数据
     * @param string $ServiceCategory 算法类目。可能取值：

- `COMPREHENSION`：视觉理解
- `HIGHLIGHT`：视频浓缩
     * @param string $ServiceType 算法类型。可能取值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
- `COMP_HIGHLIGHT`：视频浓缩
     * @param string $ServiceTier 套餐规格。可能取值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
     * @param SeeComprehensionResult $ComprehensionResult 视觉理解结果（适用于视频理解、图片理解）
     * @param SeeCompHighlightResult $CompHighlightResult 视频语义浓缩结果（适用于视频语义浓缩）
     * @param SeeDetectContinuousResult $DetectContinuousResult 标签持续检测结果
     * @param integer $CostBasic 完成该任务所消耗的基础能力额度
     * @param integer $CostAdvanced 完成该任务所消耗的高级能力额度
     * @param array $Files 输出文件名列表
     * @param array $FilesInfo 输出文件详情列表
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 最后更新时间
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new SeeTaskMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTier",$param) and $param["ServiceTier"] !== null) {
            $this->ServiceTier = $param["ServiceTier"];
        }

        if (array_key_exists("ComprehensionResult",$param) and $param["ComprehensionResult"] !== null) {
            $this->ComprehensionResult = new SeeComprehensionResult();
            $this->ComprehensionResult->deserialize($param["ComprehensionResult"]);
        }

        if (array_key_exists("CompHighlightResult",$param) and $param["CompHighlightResult"] !== null) {
            $this->CompHighlightResult = new SeeCompHighlightResult();
            $this->CompHighlightResult->deserialize($param["CompHighlightResult"]);
        }

        if (array_key_exists("DetectContinuousResult",$param) and $param["DetectContinuousResult"] !== null) {
            $this->DetectContinuousResult = new SeeDetectContinuousResult();
            $this->DetectContinuousResult->deserialize($param["DetectContinuousResult"]);
        }

        if (array_key_exists("CostBasic",$param) and $param["CostBasic"] !== null) {
            $this->CostBasic = $param["CostBasic"];
        }

        if (array_key_exists("CostAdvanced",$param) and $param["CostAdvanced"] !== null) {
            $this->CostAdvanced = $param["CostAdvanced"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = $param["Files"];
        }

        if (array_key_exists("FilesInfo",$param) and $param["FilesInfo"] !== null) {
            $this->FilesInfo = [];
            foreach ($param["FilesInfo"] as $key => $value){
                $obj = new CloudStorageAIServiceTaskFileInfo();
                $obj->deserialize($value);
                array_push($this->FilesInfo, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
