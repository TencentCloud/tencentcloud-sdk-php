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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作负载的状态
 *
 * @method integer getReplicas() 获取当前实例数
 * @method void setReplicas(integer $Replicas) 设置当前实例数
 * @method integer getUpdatedReplicas() 获取更新的实例数
 * @method void setUpdatedReplicas(integer $UpdatedReplicas) 设置更新的实例数
 * @method integer getReadyReplicas() 获取就绪的实例数
 * @method void setReadyReplicas(integer $ReadyReplicas) 设置就绪的实例数
 * @method integer getAvailableReplicas() 获取可用的实例数
 * @method void setAvailableReplicas(integer $AvailableReplicas) 设置可用的实例数
 * @method integer getUnavailableReplicas() 获取不可用的实例数
 * @method void setUnavailableReplicas(integer $UnavailableReplicas) 设置不可用的实例数
 * @method string getStatus() 获取Normal	正常运行中
Abnormal	服务异常，例如容器启动失败等
Waiting	服务等待中，例如容器下载镜像过程等
Stopped   已停止 
Pending 启动中
Stopping 停止中
 * @method void setStatus(string $Status) 设置Normal	正常运行中
Abnormal	服务异常，例如容器启动失败等
Waiting	服务等待中，例如容器下载镜像过程等
Stopped   已停止 
Pending 启动中
Stopping 停止中
 * @method array getStatefulSetCondition() 获取工作负载的状况信息
 * @method void setStatefulSetCondition(array $StatefulSetCondition) 设置工作负载的状况信息
 * @method array getConditions() 获取工作负载历史的状况信息
 * @method void setConditions(array $Conditions) 设置工作负载历史的状况信息
 */
class WorkloadStatus extends AbstractModel
{
    /**
     * @var integer 当前实例数
     */
    public $Replicas;

    /**
     * @var integer 更新的实例数
     */
    public $UpdatedReplicas;

    /**
     * @var integer 就绪的实例数
     */
    public $ReadyReplicas;

    /**
     * @var integer 可用的实例数
     */
    public $AvailableReplicas;

    /**
     * @var integer 不可用的实例数
     */
    public $UnavailableReplicas;

    /**
     * @var string Normal	正常运行中
Abnormal	服务异常，例如容器启动失败等
Waiting	服务等待中，例如容器下载镜像过程等
Stopped   已停止 
Pending 启动中
Stopping 停止中
     */
    public $Status;

    /**
     * @var array 工作负载的状况信息
     */
    public $StatefulSetCondition;

    /**
     * @var array 工作负载历史的状况信息
     */
    public $Conditions;

    /**
     * @param integer $Replicas 当前实例数
     * @param integer $UpdatedReplicas 更新的实例数
     * @param integer $ReadyReplicas 就绪的实例数
     * @param integer $AvailableReplicas 可用的实例数
     * @param integer $UnavailableReplicas 不可用的实例数
     * @param string $Status Normal	正常运行中
Abnormal	服务异常，例如容器启动失败等
Waiting	服务等待中，例如容器下载镜像过程等
Stopped   已停止 
Pending 启动中
Stopping 停止中
     * @param array $StatefulSetCondition 工作负载的状况信息
     * @param array $Conditions 工作负载历史的状况信息
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

        if (array_key_exists("UpdatedReplicas",$param) and $param["UpdatedReplicas"] !== null) {
            $this->UpdatedReplicas = $param["UpdatedReplicas"];
        }

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }

        if (array_key_exists("UnavailableReplicas",$param) and $param["UnavailableReplicas"] !== null) {
            $this->UnavailableReplicas = $param["UnavailableReplicas"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatefulSetCondition",$param) and $param["StatefulSetCondition"] !== null) {
            $this->StatefulSetCondition = [];
            foreach ($param["StatefulSetCondition"] as $key => $value){
                $obj = new StatefulSetCondition();
                $obj->deserialize($value);
                array_push($this->StatefulSetCondition, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new StatefulSetCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
