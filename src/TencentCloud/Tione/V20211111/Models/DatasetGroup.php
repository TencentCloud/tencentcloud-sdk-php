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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据集组
 *
 * @method string getDatasetId() 获取数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetId(string $DatasetId) 设置数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetName() 获取数据集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetName(string $DatasetName) 设置数据集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetVersion() 获取数据集版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetVersion(string $DatasetVersion) 设置数据集版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetType() 获取数据集类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetType(string $DatasetType) 设置数据集类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasetTags() 获取数据集标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetTags(array $DatasetTags) 设置数据集标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetAnnotationTaskName() 获取数据集标注任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetAnnotationTaskName(string $DatasetAnnotationTaskName) 设置数据集标注任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetAnnotationTaskId() 获取数据集标注任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetAnnotationTaskId(string $DatasetAnnotationTaskId) 设置数据集标注任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcess() 获取处理进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcess(integer $Process) 设置处理进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetStatus() 获取数据集状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetStatus(string $DatasetStatus) 设置数据集状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalTaskType() 获取外部关联TASKType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalTaskType(string $ExternalTaskType) 设置外部关联TASKType
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetSize() 获取数据集大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetSize(string $DatasetSize) 设置数据集大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileNum() 获取数据集数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNum(integer $FileNum) 设置数据集数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getStorageDataPath() 获取数据集源COS路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageDataPath(CosPathInfo $StorageDataPath) 设置数据集源COS路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getStorageLabelPath() 获取数据集标签存储路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLabelPath(CosPathInfo $StorageLabelPath) 设置数据集标签存储路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasetVersions() 获取数据集版本聚合详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetVersions(array $DatasetVersions) 设置数据集版本聚合详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotationStatus() 获取数据集标注状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationStatus(string $AnnotationStatus) 设置数据集标注状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotationType() 获取数据集类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationType(string $AnnotationType) 设置数据集类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotationFormat() 获取数据集标注格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationFormat(string $AnnotationFormat) 设置数据集标注格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetScope() 获取数据集范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetScope(string $DatasetScope) 设置数据集范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrScene() 获取数据集OCR子场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrScene(string $OcrScene) 设置数据集OCR子场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotationKeyStatus() 获取数据集字典修改状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationKeyStatus(string $AnnotationKeyStatus) 设置数据集字典修改状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentType() 获取文本数据集导入方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentType(string $ContentType) 设置文本数据集导入方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasetScene() 获取数据集建模类别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetScene(string $DatasetScene) 设置数据集建模类别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getCFSConfig() 获取CFS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSConfig(CFSConfig $CFSConfig) 设置CFS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSceneTags() 获取数据集标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneTags(array $SceneTags) 设置数据集标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumAnnotated() 获取已标注数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumAnnotated(integer $NumAnnotated) 设置已标注数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnnotationSpecification() 获取标注规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationSpecification(string $AnnotationSpecification) 设置标注规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAnnotationSchemaConfigured() 获取标注Schema是否配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotationSchemaConfigured(boolean $AnnotationSchemaConfigured) 设置标注Schema是否配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorNickname() 获取创建者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorNickname(string $CreatorNickname) 设置创建者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCfsUpdated() 获取cfs路径是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCfsUpdated(boolean $IsCfsUpdated) 设置cfs路径是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasetGroup extends AbstractModel
{
    /**
     * @var string 数据集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetId;

    /**
     * @var string 数据集名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetName;

    /**
     * @var string 创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 数据集版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetVersion;

    /**
     * @var string 数据集类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetType;

    /**
     * @var array 数据集标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetTags;

    /**
     * @var string 数据集标注任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetAnnotationTaskName;

    /**
     * @var string 数据集标注任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetAnnotationTaskId;

    /**
     * @var integer 处理进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Process;

    /**
     * @var string 数据集状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetStatus;

    /**
     * @var string 错误详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 外部关联TASKType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalTaskType;

    /**
     * @var string 数据集大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetSize;

    /**
     * @var integer 数据集数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNum;

    /**
     * @var CosPathInfo 数据集源COS路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageDataPath;

    /**
     * @var CosPathInfo 数据集标签存储路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLabelPath;

    /**
     * @var array 数据集版本聚合详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetVersions;

    /**
     * @var string 数据集标注状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationStatus;

    /**
     * @var string 数据集类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationType;

    /**
     * @var string 数据集标注格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationFormat;

    /**
     * @var string 数据集范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetScope;

    /**
     * @var string 数据集OCR子场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrScene;

    /**
     * @var string 数据集字典修改状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationKeyStatus;

    /**
     * @var string 文本数据集导入方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentType;

    /**
     * @var string 数据集建模类别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetScene;

    /**
     * @var CFSConfig CFS配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSConfig;

    /**
     * @var array 数据集标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneTags;

    /**
     * @var integer 已标注数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumAnnotated;

    /**
     * @var string 标注规范
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationSpecification;

    /**
     * @var boolean 标注Schema是否配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotationSchemaConfigured;

    /**
     * @var string 创建者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorNickname;

    /**
     * @var boolean cfs路径是否有修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCfsUpdated;

    /**
     * @param string $DatasetId 数据集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetName 数据集名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetVersion 数据集版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetType 数据集类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatasetTags 数据集标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetAnnotationTaskName 数据集标注任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetAnnotationTaskId 数据集标注任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Process 处理进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetStatus 数据集状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 错误详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalTaskType 外部关联TASKType
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetSize 数据集大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileNum 数据集数据量
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $StorageDataPath 数据集源COS路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $StorageLabelPath 数据集标签存储路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatasetVersions 数据集版本聚合详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnnotationStatus 数据集标注状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnnotationType 数据集类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnnotationFormat 数据集标注格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetScope 数据集范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrScene 数据集OCR子场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnnotationKeyStatus 数据集字典修改状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentType 文本数据集导入方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasetScene 数据集建模类别。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $CFSConfig CFS配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SceneTags 数据集标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumAnnotated 已标注数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnnotationSpecification 标注规范
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AnnotationSchemaConfigured 标注Schema是否配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorNickname 创建者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCfsUpdated cfs路径是否有修改
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("DatasetName",$param) and $param["DatasetName"] !== null) {
            $this->DatasetName = $param["DatasetName"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DatasetVersion",$param) and $param["DatasetVersion"] !== null) {
            $this->DatasetVersion = $param["DatasetVersion"];
        }

        if (array_key_exists("DatasetType",$param) and $param["DatasetType"] !== null) {
            $this->DatasetType = $param["DatasetType"];
        }

        if (array_key_exists("DatasetTags",$param) and $param["DatasetTags"] !== null) {
            $this->DatasetTags = [];
            foreach ($param["DatasetTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->DatasetTags, $obj);
            }
        }

        if (array_key_exists("DatasetAnnotationTaskName",$param) and $param["DatasetAnnotationTaskName"] !== null) {
            $this->DatasetAnnotationTaskName = $param["DatasetAnnotationTaskName"];
        }

        if (array_key_exists("DatasetAnnotationTaskId",$param) and $param["DatasetAnnotationTaskId"] !== null) {
            $this->DatasetAnnotationTaskId = $param["DatasetAnnotationTaskId"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("DatasetStatus",$param) and $param["DatasetStatus"] !== null) {
            $this->DatasetStatus = $param["DatasetStatus"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExternalTaskType",$param) and $param["ExternalTaskType"] !== null) {
            $this->ExternalTaskType = $param["ExternalTaskType"];
        }

        if (array_key_exists("DatasetSize",$param) and $param["DatasetSize"] !== null) {
            $this->DatasetSize = $param["DatasetSize"];
        }

        if (array_key_exists("FileNum",$param) and $param["FileNum"] !== null) {
            $this->FileNum = $param["FileNum"];
        }

        if (array_key_exists("StorageDataPath",$param) and $param["StorageDataPath"] !== null) {
            $this->StorageDataPath = new CosPathInfo();
            $this->StorageDataPath->deserialize($param["StorageDataPath"]);
        }

        if (array_key_exists("StorageLabelPath",$param) and $param["StorageLabelPath"] !== null) {
            $this->StorageLabelPath = new CosPathInfo();
            $this->StorageLabelPath->deserialize($param["StorageLabelPath"]);
        }

        if (array_key_exists("DatasetVersions",$param) and $param["DatasetVersions"] !== null) {
            $this->DatasetVersions = [];
            foreach ($param["DatasetVersions"] as $key => $value){
                $obj = new DatasetInfo();
                $obj->deserialize($value);
                array_push($this->DatasetVersions, $obj);
            }
        }

        if (array_key_exists("AnnotationStatus",$param) and $param["AnnotationStatus"] !== null) {
            $this->AnnotationStatus = $param["AnnotationStatus"];
        }

        if (array_key_exists("AnnotationType",$param) and $param["AnnotationType"] !== null) {
            $this->AnnotationType = $param["AnnotationType"];
        }

        if (array_key_exists("AnnotationFormat",$param) and $param["AnnotationFormat"] !== null) {
            $this->AnnotationFormat = $param["AnnotationFormat"];
        }

        if (array_key_exists("DatasetScope",$param) and $param["DatasetScope"] !== null) {
            $this->DatasetScope = $param["DatasetScope"];
        }

        if (array_key_exists("OcrScene",$param) and $param["OcrScene"] !== null) {
            $this->OcrScene = $param["OcrScene"];
        }

        if (array_key_exists("AnnotationKeyStatus",$param) and $param["AnnotationKeyStatus"] !== null) {
            $this->AnnotationKeyStatus = $param["AnnotationKeyStatus"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("DatasetScene",$param) and $param["DatasetScene"] !== null) {
            $this->DatasetScene = $param["DatasetScene"];
        }

        if (array_key_exists("CFSConfig",$param) and $param["CFSConfig"] !== null) {
            $this->CFSConfig = new CFSConfig();
            $this->CFSConfig->deserialize($param["CFSConfig"]);
        }

        if (array_key_exists("SceneTags",$param) and $param["SceneTags"] !== null) {
            $this->SceneTags = $param["SceneTags"];
        }

        if (array_key_exists("NumAnnotated",$param) and $param["NumAnnotated"] !== null) {
            $this->NumAnnotated = $param["NumAnnotated"];
        }

        if (array_key_exists("AnnotationSpecification",$param) and $param["AnnotationSpecification"] !== null) {
            $this->AnnotationSpecification = $param["AnnotationSpecification"];
        }

        if (array_key_exists("AnnotationSchemaConfigured",$param) and $param["AnnotationSchemaConfigured"] !== null) {
            $this->AnnotationSchemaConfigured = $param["AnnotationSchemaConfigured"];
        }

        if (array_key_exists("CreatorNickname",$param) and $param["CreatorNickname"] !== null) {
            $this->CreatorNickname = $param["CreatorNickname"];
        }

        if (array_key_exists("IsCfsUpdated",$param) and $param["IsCfsUpdated"] !== null) {
            $this->IsCfsUpdated = $param["IsCfsUpdated"];
        }
    }
}
