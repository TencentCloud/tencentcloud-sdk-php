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
 * CreateModelVersion返回参数结构体
 *
 * @method string getVersionId() 获取<p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取<p>关联的模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置<p>关联的模型ID</p>
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
 * @method string getVersion() 获取<p>模型版本号</p>
 * @method void setVersion(string $Version) 设置<p>模型版本号</p>
 * @method boolean getUseCustomStorage() 获取<p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
 * @method void setUseCustomStorage(boolean $UseCustomStorage) 设置<p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
 * @method RegisterMeta getRegisterMeta() 获取<p>注册元信息（仅注册语义创建的版本有值，与创建请求 RegisterMeta 结构一致）</p>
 * @method void setRegisterMeta(RegisterMeta $RegisterMeta) 设置<p>注册元信息（仅注册语义创建的版本有值，与创建请求 RegisterMeta 结构一致）</p>
 * @method string getVersionUid() 获取<p>版本业务唯一标识；LoRA 模型版本挂载到部署时以此引用</p>
 * @method void setVersionUid(string $VersionUid) 设置<p>版本业务唯一标识；LoRA 模型版本挂载到部署时以此引用</p>
 * @method LoraVersionMeta getLoraMeta() 获取<p>LoRA Adapter 元信息（仅 LoRA 模型版本有值，解析自 adapter_config.json）</p>
 * @method void setLoraMeta(LoraVersionMeta $LoraMeta) 设置<p>LoRA Adapter 元信息（仅 LoRA 模型版本有值，解析自 adapter_config.json）</p>
 * @method string getPoolImportStatus() 获取<p>LoRA pool 异步导入状态（Importing/Ready/Failed；NULL=就绪），未就绪不能挂载</p>
 * @method void setPoolImportStatus(string $PoolImportStatus) 设置<p>LoRA pool 异步导入状态（Importing/Ready/Failed；NULL=就绪），未就绪不能挂载</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateModelVersionResponse extends AbstractModel
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
     * @var string <p>模型版本号</p>
     */
    public $Version;

    /**
     * @var boolean <p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
     */
    public $UseCustomStorage;

    /**
     * @var RegisterMeta <p>注册元信息（仅注册语义创建的版本有值，与创建请求 RegisterMeta 结构一致）</p>
     */
    public $RegisterMeta;

    /**
     * @var string <p>版本业务唯一标识；LoRA 模型版本挂载到部署时以此引用</p>
     */
    public $VersionUid;

    /**
     * @var LoraVersionMeta <p>LoRA Adapter 元信息（仅 LoRA 模型版本有值，解析自 adapter_config.json）</p>
     */
    public $LoraMeta;

    /**
     * @var string <p>LoRA pool 异步导入状态（Importing/Ready/Failed；NULL=就绪），未就绪不能挂载</p>
     */
    public $PoolImportStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VersionId <p>版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId <p>关联的模型ID</p>
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
     * @param string $Version <p>模型版本号</p>
     * @param boolean $UseCustomStorage <p>是否使用用户自带存储桶（true=用户自带桶，false=平台托管）</p>
     * @param RegisterMeta $RegisterMeta <p>注册元信息（仅注册语义创建的版本有值，与创建请求 RegisterMeta 结构一致）</p>
     * @param string $VersionUid <p>版本业务唯一标识；LoRA 模型版本挂载到部署时以此引用</p>
     * @param LoraVersionMeta $LoraMeta <p>LoRA Adapter 元信息（仅 LoRA 模型版本有值，解析自 adapter_config.json）</p>
     * @param string $PoolImportStatus <p>LoRA pool 异步导入状态（Importing/Ready/Failed；NULL=就绪），未就绪不能挂载</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UseCustomStorage",$param) and $param["UseCustomStorage"] !== null) {
            $this->UseCustomStorage = $param["UseCustomStorage"];
        }

        if (array_key_exists("RegisterMeta",$param) and $param["RegisterMeta"] !== null) {
            $this->RegisterMeta = new RegisterMeta();
            $this->RegisterMeta->deserialize($param["RegisterMeta"]);
        }

        if (array_key_exists("VersionUid",$param) and $param["VersionUid"] !== null) {
            $this->VersionUid = $param["VersionUid"];
        }

        if (array_key_exists("LoraMeta",$param) and $param["LoraMeta"] !== null) {
            $this->LoraMeta = new LoraVersionMeta();
            $this->LoraMeta->deserialize($param["LoraMeta"]);
        }

        if (array_key_exists("PoolImportStatus",$param) and $param["PoolImportStatus"] !== null) {
            $this->PoolImportStatus = $param["PoolImportStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
