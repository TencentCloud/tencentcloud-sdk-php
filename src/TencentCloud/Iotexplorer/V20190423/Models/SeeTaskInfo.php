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
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method integer getStatus() 获取<p>任务状态。可能取值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li><li><code>4</code>：处理中</li></ul>
 * @method void setStatus(integer $Status) 设置<p>任务状态。可能取值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li><li><code>4</code>：处理中</li></ul>
 * @method SeeTaskMetadata getMetadata() 获取<p>任务元数据</p>
 * @method void setMetadata(SeeTaskMetadata $Metadata) 设置<p>任务元数据</p>
 * @method string getServiceCategory() 获取<p>算法类目。可能取值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li></ul>
 * @method void setServiceCategory(string $ServiceCategory) 设置<p>算法类目。可能取值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li></ul>
 * @method string getServiceType() 获取<p>算法类型。可能取值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>算法类型。可能取值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul>
 * @method string getServiceTier() 获取<p>套餐规格。可能取值：</p><ul><li><code>POSTPAID</code>：后付费（适用于视频理解、图片理解）</li><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
 * @method void setServiceTier(string $ServiceTier) 设置<p>套餐规格。可能取值：</p><ul><li><code>POSTPAID</code>：后付费（适用于视频理解、图片理解）</li><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
 * @method SeeComprehensionResult getComprehensionResult() 获取<p>视觉理解结果（适用于视频理解、图片理解）</p>
 * @method void setComprehensionResult(SeeComprehensionResult $ComprehensionResult) 设置<p>视觉理解结果（适用于视频理解、图片理解）</p>
 * @method SeeCompHighlightResult getCompHighlightResult() 获取<p>视频语义浓缩结果（适用于视频语义浓缩）</p>
 * @method void setCompHighlightResult(SeeCompHighlightResult $CompHighlightResult) 设置<p>视频语义浓缩结果（适用于视频语义浓缩）</p>
 * @method SeeDetectContinuousResult getDetectContinuousResult() 获取<p>标签持续检测结果</p>
 * @method void setDetectContinuousResult(SeeDetectContinuousResult $DetectContinuousResult) 设置<p>标签持续检测结果</p>
 * @method SeeFaceRecognitionResult getFaceRecognitionResult() 获取<p>人脸检测结果</p>
 * @method void setFaceRecognitionResult(SeeFaceRecognitionResult $FaceRecognitionResult) 设置<p>人脸检测结果</p>
 * @method integer getCostBasic() 获取<p>完成该任务所消耗的基础能力额度</p>
 * @method void setCostBasic(integer $CostBasic) 设置<p>完成该任务所消耗的基础能力额度</p>
 * @method integer getCostAdvanced() 获取<p>完成该任务所消耗的高级能力额度</p>
 * @method void setCostAdvanced(integer $CostAdvanced) 设置<p>完成该任务所消耗的高级能力额度</p>
 * @method array getFiles() 获取<p>输出文件名列表</p>
 * @method void setFiles(array $Files) 设置<p>输出文件名列表</p>
 * @method array getFilesInfo() 获取<p>输出文件详情列表</p>
 * @method void setFilesInfo(array $FilesInfo) 设置<p>输出文件详情列表</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>最后更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>最后更新时间</p>
 * @method string getCOSURI() 获取<p>直传 COS 的对象 URI</p>
 * @method void setCOSURI(string $COSURI) 设置<p>直传 COS 的对象 URI</p>
 */
class SeeTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>任务状态。可能取值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li><li><code>4</code>：处理中</li></ul>
     */
    public $Status;

    /**
     * @var SeeTaskMetadata <p>任务元数据</p>
     */
    public $Metadata;

    /**
     * @var string <p>算法类目。可能取值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li></ul>
     */
    public $ServiceCategory;

    /**
     * @var string <p>算法类型。可能取值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>套餐规格。可能取值：</p><ul><li><code>POSTPAID</code>：后付费（适用于视频理解、图片理解）</li><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
     */
    public $ServiceTier;

    /**
     * @var SeeComprehensionResult <p>视觉理解结果（适用于视频理解、图片理解）</p>
     */
    public $ComprehensionResult;

    /**
     * @var SeeCompHighlightResult <p>视频语义浓缩结果（适用于视频语义浓缩）</p>
     */
    public $CompHighlightResult;

    /**
     * @var SeeDetectContinuousResult <p>标签持续检测结果</p>
     */
    public $DetectContinuousResult;

    /**
     * @var SeeFaceRecognitionResult <p>人脸检测结果</p>
     */
    public $FaceRecognitionResult;

    /**
     * @var integer <p>完成该任务所消耗的基础能力额度</p>
     */
    public $CostBasic;

    /**
     * @var integer <p>完成该任务所消耗的高级能力额度</p>
     */
    public $CostAdvanced;

    /**
     * @var array <p>输出文件名列表</p>
     */
    public $Files;

    /**
     * @var array <p>输出文件详情列表</p>
     */
    public $FilesInfo;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>最后更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>直传 COS 的对象 URI</p>
     */
    public $COSURI;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param integer $Status <p>任务状态。可能取值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li><li><code>4</code>：处理中</li></ul>
     * @param SeeTaskMetadata $Metadata <p>任务元数据</p>
     * @param string $ServiceCategory <p>算法类目。可能取值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li></ul>
     * @param string $ServiceType <p>算法类型。可能取值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul>
     * @param string $ServiceTier <p>套餐规格。可能取值：</p><ul><li><code>POSTPAID</code>：后付费（适用于视频理解、图片理解）</li><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
     * @param SeeComprehensionResult $ComprehensionResult <p>视觉理解结果（适用于视频理解、图片理解）</p>
     * @param SeeCompHighlightResult $CompHighlightResult <p>视频语义浓缩结果（适用于视频语义浓缩）</p>
     * @param SeeDetectContinuousResult $DetectContinuousResult <p>标签持续检测结果</p>
     * @param SeeFaceRecognitionResult $FaceRecognitionResult <p>人脸检测结果</p>
     * @param integer $CostBasic <p>完成该任务所消耗的基础能力额度</p>
     * @param integer $CostAdvanced <p>完成该任务所消耗的高级能力额度</p>
     * @param array $Files <p>输出文件名列表</p>
     * @param array $FilesInfo <p>输出文件详情列表</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>最后更新时间</p>
     * @param string $COSURI <p>直传 COS 的对象 URI</p>
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

        if (array_key_exists("FaceRecognitionResult",$param) and $param["FaceRecognitionResult"] !== null) {
            $this->FaceRecognitionResult = new SeeFaceRecognitionResult();
            $this->FaceRecognitionResult->deserialize($param["FaceRecognitionResult"]);
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

        if (array_key_exists("COSURI",$param) and $param["COSURI"] !== null) {
            $this->COSURI = $param["COSURI"];
        }
    }
}
