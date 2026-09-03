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
 * CreateMlflowServer请求参数结构体
 *
 * @method string getServerName() 获取<p>MlFlow Server 名称</p>
 * @method void setServerName(string $ServerName) 设置<p>MlFlow Server 名称</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
 * @method string getQueue() 获取<p>资源组（逻辑队列名，可选）</p>
 * @method void setQueue(string $Queue) 设置<p>资源组（逻辑队列名，可选）</p>
 * @method string getImage() 获取<p>MlFlow 镜像</p>
 * @method void setImage(string $Image) 设置<p>MlFlow 镜像</p>
 * @method string getStorageConfig() 获取<p>存储配置 JSON，按 StorageMode 解释：cos={bucket,region,path}，cfs={fileSystemId,path}（cos/cfs 必填，local 为空）</p>
 * @method void setStorageConfig(string $StorageConfig) 设置<p>存储配置 JSON，按 StorageMode 解释：cos={bucket,region,path}，cfs={fileSystemId,path}（cos/cfs 必填，local 为空）</p>
 * @method string getStorageMode() 获取<p>存储模式: cos / cfs / local</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式: cos / cfs / local</p>
 * @method MlFlowResourceConfig getResourceConfig() 获取<p>MlFlow的资源配置</p>
 * @method void setResourceConfig(MlFlowResourceConfig $ResourceConfig) 设置<p>MlFlow的资源配置</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将 MLflow Server 与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将 MLflow Server 与腾讯云标签系统中的标签绑定</p>
 */
class CreateMlflowServerRequest extends AbstractModel
{
    /**
     * @var string <p>MlFlow Server 名称</p>
     */
    public $ServerName;

    /**
     * @var string <p>资源分区 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源组（逻辑队列名，可选）</p>
     */
    public $Queue;

    /**
     * @var string <p>MlFlow 镜像</p>
     */
    public $Image;

    /**
     * @var string <p>存储配置 JSON，按 StorageMode 解释：cos={bucket,region,path}，cfs={fileSystemId,path}（cos/cfs 必填，local 为空）</p>
     */
    public $StorageConfig;

    /**
     * @var string <p>存储模式: cos / cfs / local</p>
     */
    public $StorageMode;

    /**
     * @var MlFlowResourceConfig <p>MlFlow的资源配置</p>
     */
    public $ResourceConfig;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将 MLflow Server 与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @param string $ServerName <p>MlFlow Server 名称</p>
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
     * @param string $Queue <p>资源组（逻辑队列名，可选）</p>
     * @param string $Image <p>MlFlow 镜像</p>
     * @param string $StorageConfig <p>存储配置 JSON，按 StorageMode 解释：cos={bucket,region,path}，cfs={fileSystemId,path}（cos/cfs 必填，local 为空）</p>
     * @param string $StorageMode <p>存储模式: cos / cfs / local</p>
     * @param MlFlowResourceConfig $ResourceConfig <p>MlFlow的资源配置</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将 MLflow Server 与腾讯云标签系统中的标签绑定</p>
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
        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("StorageConfig",$param) and $param["StorageConfig"] !== null) {
            $this->StorageConfig = $param["StorageConfig"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new MlFlowResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
