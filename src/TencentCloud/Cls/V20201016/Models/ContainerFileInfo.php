<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自建k8s-容器文件路径信息
 *
 * @method string getNamespace() 获取namespace可以多个，用分隔号分割,例如A,B
 * @method void setNamespace(string $Namespace) 设置namespace可以多个，用分隔号分割,例如A,B
 * @method string getContainer() 获取容器名称
 * @method void setContainer(string $Container) 设置容器名称
 * @method string getLogPath() 获取日志文件夹
 * @method void setLogPath(string $LogPath) 设置日志文件夹
 * @method string getFilePattern() 获取日志名称
 * @method void setFilePattern(string $FilePattern) 设置日志名称
 * @method array getIncludeLabels() 获取pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeLabels(array $IncludeLabels) 设置pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerWorkLoadInfo getWorkLoad() 获取工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkLoad(ContainerWorkLoadInfo $WorkLoad) 设置工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExcludeNamespace() 获取需要排除的namespace可以多个，用分隔号分割,例如A,B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeNamespace(string $ExcludeNamespace) 设置需要排除的namespace可以多个，用分隔号分割,例如A,B
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludeLabels() 获取需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeLabels(array $ExcludeLabels) 设置需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerFileInfo extends AbstractModel
{
    /**
     * @var string namespace可以多个，用分隔号分割,例如A,B
     */
    public $Namespace;

    /**
     * @var string 容器名称
     */
    public $Container;

    /**
     * @var string 日志文件夹
     */
    public $LogPath;

    /**
     * @var string 日志名称
     */
    public $FilePattern;

    /**
     * @var array pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeLabels;

    /**
     * @var ContainerWorkLoadInfo 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkLoad;

    /**
     * @var string 需要排除的namespace可以多个，用分隔号分割,例如A,B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeNamespace;

    /**
     * @var array 需要排除的pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeLabels;

    /**
     * @param string $Namespace namespace可以多个，用分隔号分割,例如A,B
     * @param string $Container 容器名称
     * @param string $LogPath 日志文件夹
     * @param string $FilePattern 日志名称
     * @param array $IncludeLabels pod标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerWorkLoadInfo $WorkLoad 工作负载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExcludeNamespace 需要排除的namespace可以多个，用分隔号分割,例如A,B
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludeLabels 需要排除的pod标签信息
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("FilePattern",$param) and $param["FilePattern"] !== null) {
            $this->FilePattern = $param["FilePattern"];
        }

        if (array_key_exists("IncludeLabels",$param) and $param["IncludeLabels"] !== null) {
            $this->IncludeLabels = $param["IncludeLabels"];
        }

        if (array_key_exists("WorkLoad",$param) and $param["WorkLoad"] !== null) {
            $this->WorkLoad = new ContainerWorkLoadInfo();
            $this->WorkLoad->deserialize($param["WorkLoad"]);
        }

        if (array_key_exists("ExcludeNamespace",$param) and $param["ExcludeNamespace"] !== null) {
            $this->ExcludeNamespace = $param["ExcludeNamespace"];
        }

        if (array_key_exists("ExcludeLabels",$param) and $param["ExcludeLabels"] !== null) {
            $this->ExcludeLabels = $param["ExcludeLabels"];
        }
    }
}
