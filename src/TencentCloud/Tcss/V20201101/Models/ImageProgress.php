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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基本镜像信息
 *
 * @method string getImageId() 获取镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryType() 获取仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryType(string $RegistryType) 设置仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageRepoAddress() 获取镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageTag() 获取镜像tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTag(string $ImageTag) 设置镜像tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanStatus() 获取镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(string $ScanStatus) 设置镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCveProgress() 获取镜像cve扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCveProgress(integer $CveProgress) 设置镜像cve扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskProgress() 获取镜像敏感扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskProgress(integer $RiskProgress) 设置镜像敏感扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVirusProgress() 获取镜像木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusProgress(integer $VirusProgress) 设置镜像木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageProgress extends AbstractModel
{
    /**
     * @var string 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryType;

    /**
     * @var string 镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageRepoAddress;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string 镜像tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageTag;

    /**
     * @var string 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @var integer 镜像cve扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CveProgress;

    /**
     * @var integer 镜像敏感扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskProgress;

    /**
     * @var integer 镜像木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusProgress;

    /**
     * @param string $ImageId 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryType 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageRepoAddress 镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageTag 镜像tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanStatus 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CveProgress 镜像cve扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskProgress 镜像敏感扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VirusProgress 镜像木马扫描进度
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("CveProgress",$param) and $param["CveProgress"] !== null) {
            $this->CveProgress = $param["CveProgress"];
        }

        if (array_key_exists("RiskProgress",$param) and $param["RiskProgress"] !== null) {
            $this->RiskProgress = $param["RiskProgress"];
        }

        if (array_key_exists("VirusProgress",$param) and $param["VirusProgress"] !== null) {
            $this->VirusProgress = $param["VirusProgress"];
        }
    }
}
