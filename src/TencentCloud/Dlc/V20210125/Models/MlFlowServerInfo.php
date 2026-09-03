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
 * MlFlow Server 业务信息
 *
 * @method string getServerId() 获取<p>MLflow 实例的 ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MLflow 实例的 ID</p>
 * @method string getServerName() 获取<p>实例名称</p>
 * @method void setServerName(string $ServerName) 设置<p>实例名称</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
 * @method string getResourcePartitionName() 获取<p>资源包名</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>资源包名</p>
 * @method string getQueue() 获取<p>资源组（逻辑队列名，可选）</p>
 * @method void setQueue(string $Queue) 设置<p>资源组（逻辑队列名，可选）</p>
 * @method string getTrackingUri() 获取<p>集群内MLflow访问地址。用于训练作业上报 metrics</p>
 * @method void setTrackingUri(string $TrackingUri) 设置<p>集群内MLflow访问地址。用于训练作业上报 metrics</p>
 * @method string getUiUrl() 获取<p>集群外访问地址（Ingress URL）</p>
 * @method void setUiUrl(string $UiUrl) 设置<p>集群外访问地址（Ingress URL）</p>
 * @method string getStatus() 获取<p>状态：CREATED / CREATING / RUNNING / FAILED / STOPPED</p><p>枚举值：</p><ul><li>CREATED： 已创建</li><li>CREATING： 创建中</li><li>RUNNING： 运行中</li><li>FAILED： 失败</li><li>STOPPED： 已停止</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态：CREATED / CREATING / RUNNING / FAILED / STOPPED</p><p>枚举值：</p><ul><li>CREATED： 已创建</li><li>CREATING： 创建中</li><li>RUNNING： 运行中</li><li>FAILED： 失败</li><li>STOPPED： 已停止</li></ul>
 * @method string getErrorMessage() 获取<p>仅失败时展示错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>仅失败时展示错误信息</p>
 * @method string getImage() 获取<p>MLflow 镜像地址</p>
 * @method void setImage(string $Image) 设置<p>MLflow 镜像地址</p>
 * @method string getStorageConfig() 获取<p>存储配置 JSON，具体结构按 storageMode 解释（cos / cfs / local）</p>
 * @method void setStorageConfig(string $StorageConfig) 设置<p>存储配置 JSON，具体结构按 storageMode 解释（cos / cfs / local）</p>
 * @method string getStorageMode() 获取<p>存储模式</p><p>枚举值：</p><ul><li>cos： cos 对象存储</li><li>cfs： cfs 文件系统存储</li></ul>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式</p><p>枚举值：</p><ul><li>cos： cos 对象存储</li><li>cfs： cfs 文件系统存储</li></ul>
 * @method integer getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用 ID</p>
 * @method string getUin() 获取<p>创建者 UIN</p>
 * @method void setUin(string $Uin) 设置<p>创建者 UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间（epoch 毫秒）</p><p>单位：毫秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（epoch 毫秒）</p><p>单位：毫秒</p>
 * @method integer getUpdateTime() 获取<p>更新时间（epoch 毫秒）</p><p>单位：毫秒</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（epoch 毫秒）</p><p>单位：毫秒</p>
 * @method string getResourceConfig() 获取<p>资源配置 JSON</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置 JSON</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MlFlowServerInfo extends AbstractModel
{
    /**
     * @var string <p>MLflow 实例的 ID</p>
     */
    public $ServerId;

    /**
     * @var string <p>实例名称</p>
     */
    public $ServerName;

    /**
     * @var string <p>资源分区 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源包名</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>资源组（逻辑队列名，可选）</p>
     */
    public $Queue;

    /**
     * @var string <p>集群内MLflow访问地址。用于训练作业上报 metrics</p>
     */
    public $TrackingUri;

    /**
     * @var string <p>集群外访问地址（Ingress URL）</p>
     */
    public $UiUrl;

    /**
     * @var string <p>状态：CREATED / CREATING / RUNNING / FAILED / STOPPED</p><p>枚举值：</p><ul><li>CREATED： 已创建</li><li>CREATING： 创建中</li><li>RUNNING： 运行中</li><li>FAILED： 失败</li><li>STOPPED： 已停止</li></ul>
     */
    public $Status;

    /**
     * @var string <p>仅失败时展示错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>MLflow 镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>存储配置 JSON，具体结构按 storageMode 解释（cos / cfs / local）</p>
     */
    public $StorageConfig;

    /**
     * @var string <p>存储模式</p><p>枚举值：</p><ul><li>cos： cos 对象存储</li><li>cfs： cfs 文件系统存储</li></ul>
     */
    public $StorageMode;

    /**
     * @var integer <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>创建者 UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>创建时间（epoch 毫秒）</p><p>单位：毫秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（epoch 毫秒）</p><p>单位：毫秒</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>资源配置 JSON</p>
     */
    public $ResourceConfig;

    /**
     * @var array <p>标签列表（TagKey-TagValue）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $ServerId <p>MLflow 实例的 ID</p>
     * @param string $ServerName <p>实例名称</p>
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
     * @param string $ResourcePartitionName <p>资源包名</p>
     * @param string $Queue <p>资源组（逻辑队列名，可选）</p>
     * @param string $TrackingUri <p>集群内MLflow访问地址。用于训练作业上报 metrics</p>
     * @param string $UiUrl <p>集群外访问地址（Ingress URL）</p>
     * @param string $Status <p>状态：CREATED / CREATING / RUNNING / FAILED / STOPPED</p><p>枚举值：</p><ul><li>CREATED： 已创建</li><li>CREATING： 创建中</li><li>RUNNING： 运行中</li><li>FAILED： 失败</li><li>STOPPED： 已停止</li></ul>
     * @param string $ErrorMessage <p>仅失败时展示错误信息</p>
     * @param string $Image <p>MLflow 镜像地址</p>
     * @param string $StorageConfig <p>存储配置 JSON，具体结构按 storageMode 解释（cos / cfs / local）</p>
     * @param string $StorageMode <p>存储模式</p><p>枚举值：</p><ul><li>cos： cos 对象存储</li><li>cfs： cfs 文件系统存储</li></ul>
     * @param integer $AppId <p>应用 ID</p>
     * @param string $Uin <p>创建者 UIN</p>
     * @param integer $CreateTime <p>创建时间（epoch 毫秒）</p><p>单位：毫秒</p>
     * @param integer $UpdateTime <p>更新时间（epoch 毫秒）</p><p>单位：毫秒</p>
     * @param string $ResourceConfig <p>资源配置 JSON</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue）</p>
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
        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("ResourcePartitionName",$param) and $param["ResourcePartitionName"] !== null) {
            $this->ResourcePartitionName = $param["ResourcePartitionName"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("TrackingUri",$param) and $param["TrackingUri"] !== null) {
            $this->TrackingUri = $param["TrackingUri"];
        }

        if (array_key_exists("UiUrl",$param) and $param["UiUrl"] !== null) {
            $this->UiUrl = $param["UiUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
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

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
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
