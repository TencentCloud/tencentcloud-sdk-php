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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitApplicationVisualization返回参数结构体
 *
 * @method ApplicationBasicInfo getBasicInfo() 获取基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicInfo(ApplicationBasicInfo $BasicInfo) 设置基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ApplicationBasicConfig getBasicConfig() 获取基本配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicConfig(ApplicationBasicConfig $BasicConfig) 设置基本配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumes() 获取卷配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumes(array $Volumes) 设置卷配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInitContainers() 获取初始化容器配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitContainers(array $InitContainers) 设置初始化容器配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContainers() 获取容器配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainers(array $Containers) 设置容器配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Service getService() 获取服务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(Service $Service) 设置服务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Job getJob() 获取Job配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(Job $Job) 设置Job配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method CronJob getCronJob() 获取CronJob配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronJob(CronJob $CronJob) 设置CronJob配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestartPolicy() 获取重启策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartPolicy(string $RestartPolicy) 设置重启策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() 获取HPA
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) 设置HPA
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImagePullSecrets() 获取镜像拉取Secret
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImagePullSecrets(array $ImagePullSecrets) 设置镜像拉取Secret
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeUnitApplicationVisualizationResponse extends AbstractModel
{
    /**
     * @var ApplicationBasicInfo 基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicInfo;

    /**
     * @var ApplicationBasicConfig 基本配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicConfig;

    /**
     * @var array 卷配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Volumes;

    /**
     * @var array 初始化容器配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitContainers;

    /**
     * @var array 容器配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Containers;

    /**
     * @var Service 服务配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var Job Job配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var CronJob CronJob配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronJob;

    /**
     * @var string 重启策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartPolicy;

    /**
     * @var HorizontalPodAutoscaler HPA
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var array 镜像拉取Secret
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImagePullSecrets;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ApplicationBasicInfo $BasicInfo 基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ApplicationBasicConfig $BasicConfig 基本配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Volumes 卷配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InitContainers 初始化容器配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Containers 容器配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Service $Service 服务配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Job $Job Job配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param CronJob $CronJob CronJob配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestartPolicy 重启策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler HPA
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImagePullSecrets 镜像拉取Secret
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new ApplicationBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("BasicConfig",$param) and $param["BasicConfig"] !== null) {
            $this->BasicConfig = new ApplicationBasicConfig();
            $this->BasicConfig->deserialize($param["BasicConfig"]);
        }

        if (array_key_exists("Volumes",$param) and $param["Volumes"] !== null) {
            $this->Volumes = [];
            foreach ($param["Volumes"] as $key => $value){
                $obj = new Volume();
                $obj->deserialize($value);
                array_push($this->Volumes, $obj);
            }
        }

        if (array_key_exists("InitContainers",$param) and $param["InitContainers"] !== null) {
            $this->InitContainers = [];
            foreach ($param["InitContainers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->InitContainers, $obj);
            }
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new Service();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new Job();
            $this->Job->deserialize($param["Job"]);
        }

        if (array_key_exists("CronJob",$param) and $param["CronJob"] !== null) {
            $this->CronJob = new CronJob();
            $this->CronJob->deserialize($param["CronJob"]);
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("HorizontalPodAutoscaler",$param) and $param["HorizontalPodAutoscaler"] !== null) {
            $this->HorizontalPodAutoscaler = new HorizontalPodAutoscaler();
            $this->HorizontalPodAutoscaler->deserialize($param["HorizontalPodAutoscaler"]);
        }

        if (array_key_exists("ImagePullSecrets",$param) and $param["ImagePullSecrets"] !== null) {
            $this->ImagePullSecrets = $param["ImagePullSecrets"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
