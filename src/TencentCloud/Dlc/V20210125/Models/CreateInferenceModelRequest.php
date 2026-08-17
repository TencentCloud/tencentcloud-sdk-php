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
 * CreateInferenceModel请求参数结构体
 *
 * @method string getName() 获取<p>模型名称（最长 256）</p>
 * @method void setName(string $Name) 设置<p>模型名称（最长 256）</p>
 * @method string getModelType() 获取<p>模型类型（如 LLM、Embedding、Reranker、ASR、TTS 等）</p>
 * @method void setModelType(string $ModelType) 设置<p>模型类型（如 LLM、Embedding、Reranker、ASR、TTS 等）</p>
 * @method string getInitialVersion() 获取<p>初始版本号（必填，如 v1、v1.5）</p>
 * @method void setInitialVersion(string $InitialVersion) 设置<p>初始版本号（必填，如 v1、v1.5）</p>
 * @method string getProvider() 获取<p>模型提供方</p>
 * @method void setProvider(string $Provider) 设置<p>模型提供方</p>
 * @method string getDescription() 获取<p>模型描述</p>
 * @method void setDescription(string $Description) 设置<p>模型描述</p>
 * @method string getParameterSize() 获取<p>模型参数量（如 7B、1.5B）</p>
 * @method void setParameterSize(string $ParameterSize) 设置<p>模型参数量（如 7B、1.5B）</p>
 * @method array getTags() 获取<p>模型标签列表</p>
 * @method void setTags(array $Tags) 设置<p>模型标签列表</p>
 * @method string getStorageUri() 获取<p>模型存储 URI（可选，如 cos://bucket-name/models/name/）</p>
 * @method void setStorageUri(string $StorageUri) 设置<p>模型存储 URI（可选，如 cos://bucket-name/models/name/）</p>
 * @method boolean getUseCustomStorage() 获取<p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
 * @method void setUseCustomStorage(boolean $UseCustomStorage) 设置<p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
 * @method array getTasks() 获取<p>任务类型列表（如 [&quot;Text Generation&quot;, &quot;Embedding&quot;]）</p>
 * @method void setTasks(array $Tasks) 设置<p>任务类型列表（如 [&quot;Text Generation&quot;, &quot;Embedding&quot;]）</p>
 * @method string getModelUid() 获取<p>模型 UID（可选，前端预先生成的 UID，不传则后端自动生成）</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型 UID（可选，前端预先生成的 UID，不传则后端自动生成）</p>
 * @method array getResourceTags() 获取<p>系统标签列表（TagKey-TagValue）</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>系统标签列表（TagKey-TagValue）</p>
 * @method GooseFSConfig getGooseFSConfig() 获取<p>模型文件来源于goosefs</p>
 * @method void setGooseFSConfig(GooseFSConfig $GooseFSConfig) 设置<p>模型文件来源于goosefs</p>
 * @method string getStorageType() 获取<p>模型上传来源类型</p><p>枚举值：</p><ul><li>Local： 本地上传</li><li>COS： COS上传</li><li>CFS： CFS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul>
 * @method void setStorageType(string $StorageType) 设置<p>模型上传来源类型</p><p>枚举值：</p><ul><li>Local： 本地上传</li><li>COS： COS上传</li><li>CFS： CFS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul>
 */
class CreateInferenceModelRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称（最长 256）</p>
     */
    public $Name;

    /**
     * @var string <p>模型类型（如 LLM、Embedding、Reranker、ASR、TTS 等）</p>
     */
    public $ModelType;

    /**
     * @var string <p>初始版本号（必填，如 v1、v1.5）</p>
     */
    public $InitialVersion;

    /**
     * @var string <p>模型提供方</p>
     */
    public $Provider;

    /**
     * @var string <p>模型描述</p>
     */
    public $Description;

    /**
     * @var string <p>模型参数量（如 7B、1.5B）</p>
     */
    public $ParameterSize;

    /**
     * @var array <p>模型标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>模型存储 URI（可选，如 cos://bucket-name/models/name/）</p>
     */
    public $StorageUri;

    /**
     * @var boolean <p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
     */
    public $UseCustomStorage;

    /**
     * @var array <p>任务类型列表（如 [&quot;Text Generation&quot;, &quot;Embedding&quot;]）</p>
     */
    public $Tasks;

    /**
     * @var string <p>模型 UID（可选，前端预先生成的 UID，不传则后端自动生成）</p>
     */
    public $ModelUid;

    /**
     * @var array <p>系统标签列表（TagKey-TagValue）</p>
     */
    public $ResourceTags;

    /**
     * @var GooseFSConfig <p>模型文件来源于goosefs</p>
     */
    public $GooseFSConfig;

    /**
     * @var string <p>模型上传来源类型</p><p>枚举值：</p><ul><li>Local： 本地上传</li><li>COS： COS上传</li><li>CFS： CFS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul>
     */
    public $StorageType;

    /**
     * @param string $Name <p>模型名称（最长 256）</p>
     * @param string $ModelType <p>模型类型（如 LLM、Embedding、Reranker、ASR、TTS 等）</p>
     * @param string $InitialVersion <p>初始版本号（必填，如 v1、v1.5）</p>
     * @param string $Provider <p>模型提供方</p>
     * @param string $Description <p>模型描述</p>
     * @param string $ParameterSize <p>模型参数量（如 7B、1.5B）</p>
     * @param array $Tags <p>模型标签列表</p>
     * @param string $StorageUri <p>模型存储 URI（可选，如 cos://bucket-name/models/name/）</p>
     * @param boolean $UseCustomStorage <p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
     * @param array $Tasks <p>任务类型列表（如 [&quot;Text Generation&quot;, &quot;Embedding&quot;]）</p>
     * @param string $ModelUid <p>模型 UID（可选，前端预先生成的 UID，不传则后端自动生成）</p>
     * @param array $ResourceTags <p>系统标签列表（TagKey-TagValue）</p>
     * @param GooseFSConfig $GooseFSConfig <p>模型文件来源于goosefs</p>
     * @param string $StorageType <p>模型上传来源类型</p><p>枚举值：</p><ul><li>Local： 本地上传</li><li>COS： COS上传</li><li>CFS： CFS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("InitialVersion",$param) and $param["InitialVersion"] !== null) {
            $this->InitialVersion = $param["InitialVersion"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("StorageUri",$param) and $param["StorageUri"] !== null) {
            $this->StorageUri = $param["StorageUri"];
        }

        if (array_key_exists("UseCustomStorage",$param) and $param["UseCustomStorage"] !== null) {
            $this->UseCustomStorage = $param["UseCustomStorage"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }

        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("GooseFSConfig",$param) and $param["GooseFSConfig"] !== null) {
            $this->GooseFSConfig = new GooseFSConfig();
            $this->GooseFSConfig->deserialize($param["GooseFSConfig"]);
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
