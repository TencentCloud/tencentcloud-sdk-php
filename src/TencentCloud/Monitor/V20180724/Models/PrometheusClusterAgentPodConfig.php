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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关联集群时在集群内部署组件的pod额外配置
 *
 * @method boolean getHostNet() 获取是否使用HostNetWork
 * @method void setHostNet(boolean $HostNet) 设置是否使用HostNetWork
 * @method array getNodeSelector() 获取指定pod运行节点
 * @method void setNodeSelector(array $NodeSelector) 设置指定pod运行节点
 * @method array getTolerations() 获取容忍污点
 * @method void setTolerations(array $Tolerations) 设置容忍污点
 */
class PrometheusClusterAgentPodConfig extends AbstractModel
{
    /**
     * @var boolean 是否使用HostNetWork
     */
    public $HostNet;

    /**
     * @var array 指定pod运行节点
     */
    public $NodeSelector;

    /**
     * @var array 容忍污点
     */
    public $Tolerations;

    /**
     * @param boolean $HostNet 是否使用HostNetWork
     * @param array $NodeSelector 指定pod运行节点
     * @param array $Tolerations 容忍污点
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
        if (array_key_exists("HostNet",$param) and $param["HostNet"] !== null) {
            $this->HostNet = $param["HostNet"];
        }

        if (array_key_exists("NodeSelector",$param) and $param["NodeSelector"] !== null) {
            $this->NodeSelector = [];
            foreach ($param["NodeSelector"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->NodeSelector, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }
    }
}
