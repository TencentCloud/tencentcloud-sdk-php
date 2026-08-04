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
 * 推理模型信息
 *
 * @method string getModelId() 获取<p>Model ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置<p>Model ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelUid() 获取<p>模型业务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelUid(string $ModelUid) 设置<p>模型业务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvider() 获取<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvider(string $Provider) 设置<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportedEngines() 获取<p>支持的引擎</p>
 * @method void setSupportedEngines(array $SupportedEngines) 设置<p>支持的引擎</p>
 * @method string getParameterSize() 获取<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterSize(string $ParameterSize) 设置<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取<p>最新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置<p>最新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionCount() 获取<p>版本总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionCount(integer $VersionCount) 设置<p>版本总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceCount() 获取<p>关联的推理服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置<p>关联的推理服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasStorage() 获取<p>是否有存储（内置模型和用户上传模型均为 true）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasStorage(boolean $HasStorage) 设置<p>是否有存储（内置模型和用户上传模型均为 true）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageRegion() 获取<p>存储地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageRegion(string $StorageRegion) 设置<p>存储地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasCustomStorage() 获取<p>是否使用用户自带存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasCustomStorage(boolean $HasCustomStorage) 设置<p>是否使用用户自带存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取<p>存储后端类型（如 COS、GOOSEFS、CFSTURBO）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置<p>存储后端类型（如 COS、GOOSEFS、CFSTURBO）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBuiltIn() 获取<p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuiltIn(boolean $BuiltIn) 设置<p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>任务类型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>任务类型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>云账户的 APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>云账户的 APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>云账户的 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>云账户的 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取<p>云账户的 Sub UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>云账户的 Sub UIN</p>
 */
class InferenceModelInfo extends AbstractModel
{
    /**
     * @var string <p>Model ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string <p>模型业务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelUid;

    /**
     * @var string <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Provider;

    /**
     * @var string <p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var array <p>支持的引擎</p>
     */
    public $SupportedEngines;

    /**
     * @var string <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterSize;

    /**
     * @var array <p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>最新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var integer <p>版本总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionCount;

    /**
     * @var integer <p>关联的推理服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var boolean <p>是否有存储（内置模型和用户上传模型均为 true）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasStorage;

    /**
     * @var string <p>存储地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageRegion;

    /**
     * @var boolean <p>是否使用用户自带存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasCustomStorage;

    /**
     * @var string <p>存储后端类型（如 COS、GOOSEFS、CFSTURBO）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var boolean <p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuiltIn;

    /**
     * @var array <p>任务类型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var integer <p>云账户的 APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>云账户的 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

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
     * @var string <p>云账户的 Sub UIN</p>
     */
    public $SubAccountUin;

    /**
     * @param string $ModelId <p>Model ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelUid <p>模型业务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Provider <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportedEngines <p>支持的引擎</p>
     * @param string $ParameterSize <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion <p>最新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionCount <p>版本总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceCount <p>关联的推理服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasStorage <p>是否有存储（内置模型和用户上传模型均为 true）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageRegion <p>存储地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasCustomStorage <p>是否使用用户自带存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType <p>存储后端类型（如 COS、GOOSEFS、CFSTURBO）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BuiltIn <p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>任务类型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>云账户的 APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>云账户的 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin <p>云账户的 Sub UIN</p>
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

        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("SupportedEngines",$param) and $param["SupportedEngines"] !== null) {
            $this->SupportedEngines = $param["SupportedEngines"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("VersionCount",$param) and $param["VersionCount"] !== null) {
            $this->VersionCount = $param["VersionCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("HasStorage",$param) and $param["HasStorage"] !== null) {
            $this->HasStorage = $param["HasStorage"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("HasCustomStorage",$param) and $param["HasCustomStorage"] !== null) {
            $this->HasCustomStorage = $param["HasCustomStorage"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("BuiltIn",$param) and $param["BuiltIn"] !== null) {
            $this->BuiltIn = $param["BuiltIn"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
