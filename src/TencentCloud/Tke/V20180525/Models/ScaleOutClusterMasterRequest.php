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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutClusterMaster请求参数结构体
 *
 * @method string getClusterId() 获取集群实例ID
 * @method void setClusterId(string $ClusterId) 设置集群实例ID
 * @method array getRunInstancesForNode() 获取新建节点参数
 * @method void setRunInstancesForNode(array $RunInstancesForNode) 设置新建节点参数
 * @method array getExistedInstancesForNode() 获取添加已有节点相关参数
 * @method void setExistedInstancesForNode(array $ExistedInstancesForNode) 设置添加已有节点相关参数
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取实例高级设置
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置实例高级设置
 * @method ClusterExtraArgs getExtraArgs() 获取集群master组件自定义参数
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) 设置集群master组件自定义参数
 */
class ScaleOutClusterMasterRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $ClusterId;

    /**
     * @var array 新建节点参数
     */
    public $RunInstancesForNode;

    /**
     * @var array 添加已有节点相关参数
     */
    public $ExistedInstancesForNode;

    /**
     * @var InstanceAdvancedSettings 实例高级设置
     */
    public $InstanceAdvancedSettings;

    /**
     * @var ClusterExtraArgs 集群master组件自定义参数
     */
    public $ExtraArgs;

    /**
     * @param string $ClusterId 集群实例ID
     * @param array $RunInstancesForNode 新建节点参数
     * @param array $ExistedInstancesForNode 添加已有节点相关参数
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 实例高级设置
     * @param ClusterExtraArgs $ExtraArgs 集群master组件自定义参数
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

        if (array_key_exists("RunInstancesForNode",$param) and $param["RunInstancesForNode"] !== null) {
            $this->RunInstancesForNode = [];
            foreach ($param["RunInstancesForNode"] as $key => $value){
                $obj = new RunInstancesForNode();
                $obj->deserialize($value);
                array_push($this->RunInstancesForNode, $obj);
            }
        }

        if (array_key_exists("ExistedInstancesForNode",$param) and $param["ExistedInstancesForNode"] !== null) {
            $this->ExistedInstancesForNode = [];
            foreach ($param["ExistedInstancesForNode"] as $key => $value){
                $obj = new ExistedInstancesForNode();
                $obj->deserialize($value);
                array_push($this->ExistedInstancesForNode, $obj);
            }
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new ClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }
    }
}
