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
 * CreateInferenceModel返回参数结构体
 *
 * @method string getModelId() 获取<p>模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置<p>模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelUid() 获取<p>模型UID</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型UID</p>
 * @method string getName() 获取<p>模型名称</p>
 * @method void setName(string $Name) 设置<p>模型名称</p>
 * @method string getProvider() 获取<p>模型提供方</p>
 * @method void setProvider(string $Provider) 设置<p>模型提供方</p>
 * @method string getDescription() 获取<p>模型描述</p>
 * @method void setDescription(string $Description) 设置<p>模型描述</p>
 * @method string getModelType() 获取<p>模型类型</p>
 * @method void setModelType(string $ModelType) 设置<p>模型类型</p>
 * @method string getParameterSize() 获取<p>参数大小</p>
 * @method void setParameterSize(string $ParameterSize) 设置<p>参数大小</p>
 * @method array getTags() 获取<p>模型标签</p>
 * @method void setTags(array $Tags) 设置<p>模型标签</p>
 * @method string getLatestVersion() 获取<p>最新版本</p>
 * @method void setLatestVersion(string $LatestVersion) 设置<p>最新版本</p>
 * @method integer getVersionCount() 获取<p>版本总数</p>
 * @method void setVersionCount(integer $VersionCount) 设置<p>版本总数</p>
 * @method integer getServiceCount() 获取<p>关联的推理服务数量</p>
 * @method void setServiceCount(integer $ServiceCount) 设置<p>关联的推理服务数量</p>
 * @method boolean getHasStorage() 获取<p>是否有存储</p>
 * @method void setHasStorage(boolean $HasStorage) 设置<p>是否有存储</p>
 * @method boolean getHasCustomStorage() 获取<p>是否使用用户自带存储桶</p>
 * @method void setHasCustomStorage(boolean $HasCustomStorage) 设置<p>是否使用用户自带存储桶</p>
 * @method string getStorageType() 获取<p>存储后端类型</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储后端类型</p>
 * @method boolean getBuiltIn() 获取<p>是否内置模型</p>
 * @method void setBuiltIn(boolean $BuiltIn) 设置<p>是否内置模型</p>
 * @method array getTasks() 获取<p>任务类型列表</p>
 * @method void setTasks(array $Tasks) 设置<p>任务类型列表</p>
 * @method integer getAppId() 获取<p>APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>APPID</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method string getSubAccountUin() 获取<p>Sub UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>Sub UIN</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateInferenceModelResponse extends AbstractModel
{
    /**
     * @var string <p>模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string <p>模型UID</p>
     */
    public $ModelUid;

    /**
     * @var string <p>模型名称</p>
     */
    public $Name;

    /**
     * @var string <p>模型提供方</p>
     */
    public $Provider;

    /**
     * @var string <p>模型描述</p>
     */
    public $Description;

    /**
     * @var string <p>模型类型</p>
     */
    public $ModelType;

    /**
     * @var string <p>参数大小</p>
     */
    public $ParameterSize;

    /**
     * @var array <p>模型标签</p>
     */
    public $Tags;

    /**
     * @var string <p>最新版本</p>
     */
    public $LatestVersion;

    /**
     * @var integer <p>版本总数</p>
     */
    public $VersionCount;

    /**
     * @var integer <p>关联的推理服务数量</p>
     */
    public $ServiceCount;

    /**
     * @var boolean <p>是否有存储</p>
     */
    public $HasStorage;

    /**
     * @var boolean <p>是否使用用户自带存储桶</p>
     */
    public $HasCustomStorage;

    /**
     * @var string <p>存储后端类型</p>
     */
    public $StorageType;

    /**
     * @var boolean <p>是否内置模型</p>
     */
    public $BuiltIn;

    /**
     * @var array <p>任务类型列表</p>
     */
    public $Tasks;

    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Sub UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModelId <p>模型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelUid <p>模型UID</p>
     * @param string $Name <p>模型名称</p>
     * @param string $Provider <p>模型提供方</p>
     * @param string $Description <p>模型描述</p>
     * @param string $ModelType <p>模型类型</p>
     * @param string $ParameterSize <p>参数大小</p>
     * @param array $Tags <p>模型标签</p>
     * @param string $LatestVersion <p>最新版本</p>
     * @param integer $VersionCount <p>版本总数</p>
     * @param integer $ServiceCount <p>关联的推理服务数量</p>
     * @param boolean $HasStorage <p>是否有存储</p>
     * @param boolean $HasCustomStorage <p>是否使用用户自带存储桶</p>
     * @param string $StorageType <p>存储后端类型</p>
     * @param boolean $BuiltIn <p>是否内置模型</p>
     * @param array $Tasks <p>任务类型列表</p>
     * @param integer $AppId <p>APPID</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param string $SubAccountUin <p>Sub UIN</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
