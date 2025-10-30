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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据接入tke数据源信息
 *
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTkeId() 获取tke实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTkeId(string $TkeId) 设置tke实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectorId() 获取采集器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectorId(string $CollectorId) 设置采集器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectorName() 获取采集源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectorName(string $CollectorName) 设置采集源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectorType() 获取采集器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectorType(string $CollectorType) 设置采集器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectorVersion() 获取采集器版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectorVersion(string $CollectorVersion) 设置采集器版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIncludeNamespaces() 获取tke包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeNamespaces(array $IncludeNamespaces) 设置tke包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludeNamespaces() 获取tke不包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeNamespaces(array $ExcludeNamespaces) 设置tke不包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodLabelKeys() 获取tke pod标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLabelKeys(array $PodLabelKeys) 设置tke pod标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodLabelValues() 获取tke pod标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLabelValues(array $PodLabelValues) 设置tke pod标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取tke容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置tke容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigContent() 获取tke采集器beat配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigContent(string $ConfigContent) 设置tke采集器beat配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取/
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置/
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputPath() 获取TKE 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputPath(string $InputPath) 设置TKE 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiDataSourceTke extends AbstractModel
{
    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string tke实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TkeId;

    /**
     * @var string 采集器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectorId;

    /**
     * @var string 采集源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectorName;

    /**
     * @var string 采集器类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectorType;

    /**
     * @var string 采集器版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectorVersion;

    /**
     * @var array tke包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeNamespaces;

    /**
     * @var array tke不包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeNamespaces;

    /**
     * @var array tke pod标签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLabelKeys;

    /**
     * @var array tke pod标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLabelValues;

    /**
     * @var string tke容器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string tke采集器beat配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigContent;

    /**
     * @var string /
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string TKE 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputPath;

    /**
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TkeId tke实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectorId 采集器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectorName 采集源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectorType 采集器类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectorVersion 采集器版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IncludeNamespaces tke包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludeNamespaces tke不包含的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodLabelKeys tke pod标签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodLabelValues tke pod标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName tke容器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigContent tke采集器beat配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType /
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputPath TKE 日志采集路径
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TkeId",$param) and $param["TkeId"] !== null) {
            $this->TkeId = $param["TkeId"];
        }

        if (array_key_exists("CollectorId",$param) and $param["CollectorId"] !== null) {
            $this->CollectorId = $param["CollectorId"];
        }

        if (array_key_exists("CollectorName",$param) and $param["CollectorName"] !== null) {
            $this->CollectorName = $param["CollectorName"];
        }

        if (array_key_exists("CollectorType",$param) and $param["CollectorType"] !== null) {
            $this->CollectorType = $param["CollectorType"];
        }

        if (array_key_exists("CollectorVersion",$param) and $param["CollectorVersion"] !== null) {
            $this->CollectorVersion = $param["CollectorVersion"];
        }

        if (array_key_exists("IncludeNamespaces",$param) and $param["IncludeNamespaces"] !== null) {
            $this->IncludeNamespaces = $param["IncludeNamespaces"];
        }

        if (array_key_exists("ExcludeNamespaces",$param) and $param["ExcludeNamespaces"] !== null) {
            $this->ExcludeNamespaces = $param["ExcludeNamespaces"];
        }

        if (array_key_exists("PodLabelKeys",$param) and $param["PodLabelKeys"] !== null) {
            $this->PodLabelKeys = $param["PodLabelKeys"];
        }

        if (array_key_exists("PodLabelValues",$param) and $param["PodLabelValues"] !== null) {
            $this->PodLabelValues = $param["PodLabelValues"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }
    }
}
