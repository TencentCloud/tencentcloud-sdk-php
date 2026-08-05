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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型版本信息
 *
 * @method string getVersionId() 获取<p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取<p>关联的模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置<p>关联的模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>版本号（如 v1, v2）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>版本号（如 v1, v2）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageUri() 获取<p>该版本的存储 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageUri(string $StorageUri) 设置<p>该版本的存储 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>版本说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>版本说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinkedServices() 获取<p>关联的推理服务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkedServices(array $LinkedServices) 设置<p>关联的推理服务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseCustomStorage() 获取<p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
 * @method void setUseCustomStorage(boolean $UseCustomStorage) 设置<p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
 */
class ModelVersionInfo extends AbstractModel
{
    /**
     * @var string <p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string <p>关联的模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string <p>版本号（如 v1, v2）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>该版本的存储 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageUri;

    /**
     * @var string <p>版本说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array <p>关联的推理服务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkedServices;

    /**
     * @var boolean <p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
     */
    public $UseCustomStorage;

    /**
     * @param string $VersionId <p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId <p>关联的模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>版本号（如 v1, v2）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageUri <p>该版本的存储 URI</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>版本说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LinkedServices <p>关联的推理服务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseCustomStorage <p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("StorageUri",$param) and $param["StorageUri"] !== null) {
            $this->StorageUri = $param["StorageUri"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LinkedServices",$param) and $param["LinkedServices"] !== null) {
            $this->LinkedServices = [];
            foreach ($param["LinkedServices"] as $key => $value){
                $obj = new LinkedServiceInfo();
                $obj->deserialize($value);
                array_push($this->LinkedServices, $obj);
            }
        }

        if (array_key_exists("UseCustomStorage",$param) and $param["UseCustomStorage"] !== null) {
            $this->UseCustomStorage = $param["UseCustomStorage"];
        }
    }
}
