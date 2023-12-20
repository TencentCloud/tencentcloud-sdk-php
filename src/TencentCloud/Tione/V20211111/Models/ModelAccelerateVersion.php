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
 * 优化模型版本列表
 *
 * @method string getModelId() 获取模型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置模型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersionId() 获取优化模型版本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersionId(string $ModelVersionId) 设置优化模型版本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelJobId() 获取优化任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelJobId(string $ModelJobId) 设置优化任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelJobName() 获取优化任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelJobName(string $ModelJobName) 设置优化任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersion() 获取优化后模型版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersion(string $ModelVersion) 设置优化后模型版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpeedUp() 获取加速比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeedUp(string $SpeedUp) 设置加速比
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelSource getModelSource() 获取模型来源/任务名称/任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelSource(ModelSource $ModelSource) 设置模型来源/任务名称/任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCosPathInfo() 获取模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) 设置模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelFormat() 获取模型规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelFormat(string $ModelFormat) 设置模型规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGPUType() 获取GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUType(string $GPUType) 设置GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getModelCosPath() 获取模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelCosPath(CosPathInfo $ModelCosPath) 设置模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelAccelerateVersion extends AbstractModel
{
    /**
     * @var string 模型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string 优化模型版本id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersionId;

    /**
     * @var string 优化任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelJobId;

    /**
     * @var string 优化任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelJobName;

    /**
     * @var string 优化后模型版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersion;

    /**
     * @var string 加速比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeedUp;

    /**
     * @var ModelSource 模型来源/任务名称/任务版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelSource;

    /**
     * @var CosPathInfo 模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPathInfo;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 模型规范
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelFormat;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUType;

    /**
     * @var CosPathInfo 模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelCosPath;

    /**
     * @param string $ModelId 模型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersionId 优化模型版本id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelJobId 优化任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelJobName 优化任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersion 优化后模型版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpeedUp 加速比
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelSource $ModelSource 模型来源/任务名称/任务版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $CosPathInfo 模型cos路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelFormat 模型规范
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GPUType GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $ModelCosPath 模型cos路径
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            $this->ModelVersionId = $param["ModelVersionId"];
        }

        if (array_key_exists("ModelJobId",$param) and $param["ModelJobId"] !== null) {
            $this->ModelJobId = $param["ModelJobId"];
        }

        if (array_key_exists("ModelJobName",$param) and $param["ModelJobName"] !== null) {
            $this->ModelJobName = $param["ModelJobName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("SpeedUp",$param) and $param["SpeedUp"] !== null) {
            $this->SpeedUp = $param["SpeedUp"];
        }

        if (array_key_exists("ModelSource",$param) and $param["ModelSource"] !== null) {
            $this->ModelSource = new ModelSource();
            $this->ModelSource->deserialize($param["ModelSource"]);
        }

        if (array_key_exists("CosPathInfo",$param) and $param["CosPathInfo"] !== null) {
            $this->CosPathInfo = new CosPathInfo();
            $this->CosPathInfo->deserialize($param["CosPathInfo"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }

        if (array_key_exists("ModelCosPath",$param) and $param["ModelCosPath"] !== null) {
            $this->ModelCosPath = new CosPathInfo();
            $this->ModelCosPath->deserialize($param["ModelCosPath"]);
        }
    }
}
