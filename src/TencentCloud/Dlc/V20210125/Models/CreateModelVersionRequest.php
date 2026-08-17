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
 * CreateModelVersion请求参数结构体
 *
 * @method string getModelUid() 获取<p>模型UID</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型UID</p>
 * @method string getModelVersion() 获取<p>模型版本号</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本号</p>
 * @method string getDescription() 获取<p>版本说明</p>
 * @method void setDescription(string $Description) 设置<p>版本说明</p>
 * @method string getStorageUri() 获取<p>该版本的存储 URI（可选，如 cos://bucket-name/models/name/v2/）</p>
 * @method void setStorageUri(string $StorageUri) 设置<p>该版本的存储 URI（可选，如 cos://bucket-name/models/name/v2/）</p>
 * @method boolean getUseCustomStorage() 获取<p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
 * @method void setUseCustomStorage(boolean $UseCustomStorage) 设置<p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
 * @method GooseFSConfig getGooseFSConfig() 获取<p>创建模型时，模型从goosfe里面选取，则需要传递该参数</p>
 * @method void setGooseFSConfig(GooseFSConfig $GooseFSConfig) 设置<p>创建模型时，模型从goosfe里面选取，则需要传递该参数</p>
 * @method string getStorageType() 获取<p>模型上传路径类型</p><p>枚举值：</p><ul><li>LOCAL： 本地上传</li><li>CFS： CFS上传</li><li>COS： COS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul><p>选择cos、cfs、cfstrubo则必须要传storageuri，选择local时不能传递goosefsconfig</p>
 * @method void setStorageType(string $StorageType) 设置<p>模型上传路径类型</p><p>枚举值：</p><ul><li>LOCAL： 本地上传</li><li>CFS： CFS上传</li><li>COS： COS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul><p>选择cos、cfs、cfstrubo则必须要传storageuri，选择local时不能传递goosefsconfig</p>
 */
class CreateModelVersionRequest extends AbstractModel
{
    /**
     * @var string <p>模型UID</p>
     */
    public $ModelUid;

    /**
     * @var string <p>模型版本号</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>版本说明</p>
     */
    public $Description;

    /**
     * @var string <p>该版本的存储 URI（可选，如 cos://bucket-name/models/name/v2/）</p>
     */
    public $StorageUri;

    /**
     * @var boolean <p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
     */
    public $UseCustomStorage;

    /**
     * @var GooseFSConfig <p>创建模型时，模型从goosfe里面选取，则需要传递该参数</p>
     */
    public $GooseFSConfig;

    /**
     * @var string <p>模型上传路径类型</p><p>枚举值：</p><ul><li>LOCAL： 本地上传</li><li>CFS： CFS上传</li><li>COS： COS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul><p>选择cos、cfs、cfstrubo则必须要传storageuri，选择local时不能传递goosefsconfig</p>
     */
    public $StorageType;

    /**
     * @param string $ModelUid <p>模型UID</p>
     * @param string $ModelVersion <p>模型版本号</p>
     * @param string $Description <p>版本说明</p>
     * @param string $StorageUri <p>该版本的存储 URI（可选，如 cos://bucket-name/models/name/v2/）</p>
     * @param boolean $UseCustomStorage <p>是否使用用户自带存储桶（默认 false 表示平台托管）</p>
     * @param GooseFSConfig $GooseFSConfig <p>创建模型时，模型从goosfe里面选取，则需要传递该参数</p>
     * @param string $StorageType <p>模型上传路径类型</p><p>枚举值：</p><ul><li>LOCAL： 本地上传</li><li>CFS： CFS上传</li><li>COS： COS上传</li><li>CFSTurbo： CFSTurbo上传</li><li>GooseFS： GooseFS上传</li></ul><p>选择cos、cfs、cfstrubo则必须要传storageuri，选择local时不能传递goosefsconfig</p>
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
        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StorageUri",$param) and $param["StorageUri"] !== null) {
            $this->StorageUri = $param["StorageUri"];
        }

        if (array_key_exists("UseCustomStorage",$param) and $param["UseCustomStorage"] !== null) {
            $this->UseCustomStorage = $param["UseCustomStorage"];
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
