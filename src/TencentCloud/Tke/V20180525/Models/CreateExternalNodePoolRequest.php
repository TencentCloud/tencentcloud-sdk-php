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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExternalNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method string getContainerRuntime() 获取运行时
 * @method void setContainerRuntime(string $ContainerRuntime) 设置运行时
 * @method string getRuntimeVersion() 获取运行时版本
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本
 * @method array getLabels() 获取注册节点标签
 * @method void setLabels(array $Labels) 设置注册节点标签
 * @method array getTaints() 获取注册节点污点
 * @method void setTaints(array $Taints) 设置注册节点污点
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取注册节点高级设置
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置注册节点高级设置
 * @method boolean getDeletionProtection() 获取删除保护开关
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关
 * @method string getNodeType() 获取节点类型，支持 CPU、GPU
 * @method void setNodeType(string $NodeType) 设置节点类型，支持 CPU、GPU
 */
class CreateExternalNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var string 运行时
     */
    public $ContainerRuntime;

    /**
     * @var string 运行时版本
     */
    public $RuntimeVersion;

    /**
     * @var array 注册节点标签
     */
    public $Labels;

    /**
     * @var array 注册节点污点
     */
    public $Taints;

    /**
     * @var InstanceAdvancedSettings 注册节点高级设置
     */
    public $InstanceAdvancedSettings;

    /**
     * @var boolean 删除保护开关
     */
    public $DeletionProtection;

    /**
     * @var string 节点类型，支持 CPU、GPU
     */
    public $NodeType;

    /**
     * @param string $ClusterId 集群Id
     * @param string $Name 节点池名称
     * @param string $ContainerRuntime 运行时
     * @param string $RuntimeVersion 运行时版本
     * @param array $Labels 注册节点标签
     * @param array $Taints 注册节点污点
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 注册节点高级设置
     * @param boolean $DeletionProtection 删除保护开关
     * @param string $NodeType 节点类型，支持 CPU、GPU
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
