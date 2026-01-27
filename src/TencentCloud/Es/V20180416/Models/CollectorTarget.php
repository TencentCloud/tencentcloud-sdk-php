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
 * 容器日志采集配置
 *
 * @method string getTargetName() 获取采集配置名称
 * @method void setTargetName(string $TargetName) 设置采集配置名称
 * @method Namespaces getNamespaces() 获取命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaces(Namespaces $Namespaces) 设置命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodLabels() 获取Pod标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLabels(array $PodLabels) 设置Pod标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexPrefix() 获取ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPrefix(string $IndexPrefix) 设置ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFilters() 获取日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFilters(string $LogFilters) 设置日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigContent() 获取高级配置，可自定义采集规则，最多支持2048个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigContent(string $ConfigContent) 设置高级配置，可自定义采集规则，最多支持2048个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaTopic() 获取Ckafka实例的Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaTopic(string $KafkaTopic) 设置Ckafka实例的Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexAlias() 获取ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAlias(string $IndexAlias) 设置ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取/
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置/
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputPath() 获取日志采集host路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputPath(string $InputPath) 设置日志采集host路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInputsTailFiles() 获取inputs.tail_files
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsTailFiles(boolean $InputsTailFiles) 设置inputs.tail_files
注意：此字段可能返回 null，表示取不到有效值。
 */
class CollectorTarget extends AbstractModel
{
    /**
     * @var string 采集配置名称
     */
    public $TargetName;

    /**
     * @var Namespaces 命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespaces;

    /**
     * @var array Pod标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLabels;

    /**
     * @var string 容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPrefix;

    /**
     * @var string 日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFilters;

    /**
     * @var string 高级配置，可自定义采集规则，最多支持2048个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigContent;

    /**
     * @var string Ckafka实例的Topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaTopic;

    /**
     * @var string ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAlias;

    /**
     * @var string /
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string 日志采集host路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputPath;

    /**
     * @var boolean inputs.tail_files
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsTailFiles;

    /**
     * @param string $TargetName 采集配置名称
     * @param Namespaces $Namespaces 命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodLabels Pod标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexPrefix ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFilters 日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigContent 高级配置，可自定义采集规则，最多支持2048个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaTopic Ckafka实例的Topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexAlias ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType /
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputPath 日志采集host路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InputsTailFiles inputs.tail_files
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
        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = new Namespaces();
            $this->Namespaces->deserialize($param["Namespaces"]);
        }

        if (array_key_exists("PodLabels",$param) and $param["PodLabels"] !== null) {
            $this->PodLabels = [];
            foreach ($param["PodLabels"] as $key => $value){
                $obj = new PodLabel();
                $obj->deserialize($value);
                array_push($this->PodLabels, $obj);
            }
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("IndexPrefix",$param) and $param["IndexPrefix"] !== null) {
            $this->IndexPrefix = $param["IndexPrefix"];
        }

        if (array_key_exists("LogFilters",$param) and $param["LogFilters"] !== null) {
            $this->LogFilters = $param["LogFilters"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("KafkaTopic",$param) and $param["KafkaTopic"] !== null) {
            $this->KafkaTopic = $param["KafkaTopic"];
        }

        if (array_key_exists("IndexAlias",$param) and $param["IndexAlias"] !== null) {
            $this->IndexAlias = $param["IndexAlias"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }

        if (array_key_exists("InputsTailFiles",$param) and $param["InputsTailFiles"] !== null) {
            $this->InputsTailFiles = $param["InputsTailFiles"];
        }
    }
}
