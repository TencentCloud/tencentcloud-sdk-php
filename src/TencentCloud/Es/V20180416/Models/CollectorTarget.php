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
 * @method string getTargetName() 获取<p>采集配置名称</p>
 * @method void setTargetName(string $TargetName) 设置<p>采集配置名称</p>
 * @method Namespaces getNamespaces() 获取<p>命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaces(Namespaces $Namespaces) 设置<p>命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodLabels() 获取<p>Pod标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLabels(array $PodLabels) 设置<p>Pod标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取<p>容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexPrefix() 获取<p>ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPrefix(string $IndexPrefix) 设置<p>ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFilters() 获取<p>日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFilters(string $LogFilters) 设置<p>日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigContent() 获取<p>高级配置，可自定义采集规则，最多支持2048个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigContent(string $ConfigContent) 设置<p>高级配置，可自定义采集规则，最多支持2048个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaTopic() 获取<p>Ckafka实例的Topic</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaTopic(string $KafkaTopic) 设置<p>Ckafka实例的Topic</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexAlias() 获取<p>ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAlias(string $IndexAlias) 设置<p>ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取<p>/</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置<p>/</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputPath() 获取<p>日志采集host路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputPath(string $InputPath) 设置<p>日志采集host路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInputsTailFiles() 获取<p>inputs.tail_files</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsTailFiles(boolean $InputsTailFiles) 设置<p>inputs.tail_files</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInputsMultiLineEnabled() 获取<p>开关inputs.multitline</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsMultiLineEnabled(boolean $InputsMultiLineEnabled) 设置<p>开关inputs.multitline</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputsMultiLineType() 获取<p>inputs.multiline.type</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsMultiLineType(string $InputsMultiLineType) 设置<p>inputs.multiline.type</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputsMultiLinePattern() 获取<p>inputs.multiline.pattern</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsMultiLinePattern(string $InputsMultiLinePattern) 设置<p>inputs.multiline.pattern</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInputsMultiLineNegate() 获取<p>inputs.multiline.negate</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsMultiLineNegate(boolean $InputsMultiLineNegate) 设置<p>inputs.multiline.negate</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputsMultiLineMatch() 获取<p>inputs.multiline.match</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputsMultiLineMatch(string $InputsMultiLineMatch) 设置<p>inputs.multiline.match</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTkeCollectType() 获取<p>按空间采集时 tke 的采集类型，默认为 container，支持 container、filestream</p>
 * @method void setTkeCollectType(string $TkeCollectType) 设置<p>按空间采集时 tke 的采集类型，默认为 container，支持 container、filestream</p>
 */
class CollectorTarget extends AbstractModel
{
    /**
     * @var string <p>采集配置名称</p>
     */
    public $TargetName;

    /**
     * @var Namespaces <p>命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespaces;

    /**
     * @var array <p>Pod标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLabels;

    /**
     * @var string <p>容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string <p>ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPrefix;

    /**
     * @var string <p>日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFilters;

    /**
     * @var string <p>高级配置，可自定义采集规则，最多支持2048个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigContent;

    /**
     * @var string <p>Ckafka实例的Topic</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaTopic;

    /**
     * @var string <p>ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAlias;

    /**
     * @var string <p>/</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string <p>日志采集host路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputPath;

    /**
     * @var boolean <p>inputs.tail_files</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsTailFiles;

    /**
     * @var boolean <p>开关inputs.multitline</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsMultiLineEnabled;

    /**
     * @var string <p>inputs.multiline.type</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsMultiLineType;

    /**
     * @var string <p>inputs.multiline.pattern</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsMultiLinePattern;

    /**
     * @var boolean <p>inputs.multiline.negate</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsMultiLineNegate;

    /**
     * @var string <p>inputs.multiline.match</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputsMultiLineMatch;

    /**
     * @var string <p>按空间采集时 tke 的采集类型，默认为 container，支持 container、filestream</p>
     */
    public $TkeCollectType;

    /**
     * @param string $TargetName <p>采集配置名称</p>
     * @param Namespaces $Namespaces <p>命名空间列表，包括Include包含和Exclude不包含选项，两者都为空时等同于全部命名空间(包含当前所有的以及未来创建的)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodLabels <p>Pod标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName <p>容器名称，支持小写字母、数字、连接符-、下划线_，最多支持63个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexPrefix <p>ES索引名称前缀，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称的前缀，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFilters <p>日志内容过滤，以逗号分隔，支持大小写字母、数字、连接符-、下划线_以及逗号，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigContent <p>高级配置，可自定义采集规则，最多支持2048个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaTopic <p>Ckafka实例的Topic</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexAlias <p>ES索引名称，如果当前采集配置下的容器日志输出到ES集群，则使用该字段作为ES索引名称，支持大小写字母、数字、连接符-、下划线_，最多支持50个字符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType <p>/</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputPath <p>日志采集host路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InputsTailFiles <p>inputs.tail_files</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InputsMultiLineEnabled <p>开关inputs.multitline</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputsMultiLineType <p>inputs.multiline.type</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputsMultiLinePattern <p>inputs.multiline.pattern</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InputsMultiLineNegate <p>inputs.multiline.negate</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputsMultiLineMatch <p>inputs.multiline.match</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TkeCollectType <p>按空间采集时 tke 的采集类型，默认为 container，支持 container、filestream</p>
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

        if (array_key_exists("InputsMultiLineEnabled",$param) and $param["InputsMultiLineEnabled"] !== null) {
            $this->InputsMultiLineEnabled = $param["InputsMultiLineEnabled"];
        }

        if (array_key_exists("InputsMultiLineType",$param) and $param["InputsMultiLineType"] !== null) {
            $this->InputsMultiLineType = $param["InputsMultiLineType"];
        }

        if (array_key_exists("InputsMultiLinePattern",$param) and $param["InputsMultiLinePattern"] !== null) {
            $this->InputsMultiLinePattern = $param["InputsMultiLinePattern"];
        }

        if (array_key_exists("InputsMultiLineNegate",$param) and $param["InputsMultiLineNegate"] !== null) {
            $this->InputsMultiLineNegate = $param["InputsMultiLineNegate"];
        }

        if (array_key_exists("InputsMultiLineMatch",$param) and $param["InputsMultiLineMatch"] !== null) {
            $this->InputsMultiLineMatch = $param["InputsMultiLineMatch"];
        }

        if (array_key_exists("TkeCollectType",$param) and $param["TkeCollectType"] !== null) {
            $this->TkeCollectType = $param["TkeCollectType"];
        }
    }
}
