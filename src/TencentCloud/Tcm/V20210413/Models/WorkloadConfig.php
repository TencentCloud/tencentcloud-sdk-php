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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作负载配置
 *
 * @method integer getReplicas() 获取工作副本数
 * @method void setReplicas(integer $Replicas) 设置工作副本数
 * @method ResourceRequirements getResources() 获取资源限制
 * @method void setResources(ResourceRequirements $Resources) 设置资源限制
 * @method HorizontalPodAutoscalerSpec getHorizontalPodAutoscaler() 获取HPA策略
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscalerSpec $HorizontalPodAutoscaler) 设置HPA策略
 * @method array getSelectedNodeList() 获取部署到指定节点
 * @method void setSelectedNodeList(array $SelectedNodeList) 设置部署到指定节点
 */
class WorkloadConfig extends AbstractModel
{
    /**
     * @var integer 工作副本数
     */
    public $Replicas;

    /**
     * @var ResourceRequirements 资源限制
     */
    public $Resources;

    /**
     * @var HorizontalPodAutoscalerSpec HPA策略
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var array 部署到指定节点
     */
    public $SelectedNodeList;

    /**
     * @param integer $Replicas 工作副本数
     * @param ResourceRequirements $Resources 资源限制
     * @param HorizontalPodAutoscalerSpec $HorizontalPodAutoscaler HPA策略
     * @param array $SelectedNodeList 部署到指定节点
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new ResourceRequirements();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("HorizontalPodAutoscaler",$param) and $param["HorizontalPodAutoscaler"] !== null) {
            $this->HorizontalPodAutoscaler = new HorizontalPodAutoscalerSpec();
            $this->HorizontalPodAutoscaler->deserialize($param["HorizontalPodAutoscaler"]);
        }

        if (array_key_exists("SelectedNodeList",$param) and $param["SelectedNodeList"] !== null) {
            $this->SelectedNodeList = $param["SelectedNodeList"];
        }
    }
}
