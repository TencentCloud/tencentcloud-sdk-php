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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群概览信息。
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method string getClusterStatus() 获取集群状态。取值范围：<br><li>PENDING：创建中<br><li>INITING：初始化中<br><li>INIT_FAILED：初始化失败<br><li>RUNNING：运行中<br><li>TERMINATING：销毁中
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态。取值范围：<br><li>PENDING：创建中<br><li>INITING：初始化中<br><li>INIT_FAILED：初始化失败<br><li>RUNNING：运行中<br><li>TERMINATING：销毁中
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 * @method Placement getPlacement() 获取集群位置信息。
 * @method void setPlacement(Placement $Placement) 设置集群位置信息。
 * @method string getCreateTime() 获取集群创建时间。
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间。
 * @method string getSchedulerType() 获取集群调度器。
 * @method void setSchedulerType(string $SchedulerType) 设置集群调度器。
 * @method integer getComputeNodeCount() 获取计算节点数量。
 * @method void setComputeNodeCount(integer $ComputeNodeCount) 设置计算节点数量。
 * @method array getComputeNodeSet() 获取计算节点概览。
 * @method void setComputeNodeSet(array $ComputeNodeSet) 设置计算节点概览。
 * @method integer getManagerNodeCount() 获取管控节点数量。
 * @method void setManagerNodeCount(integer $ManagerNodeCount) 设置管控节点数量。
 * @method array getManagerNodeSet() 获取管控节点概览。
 * @method void setManagerNodeSet(array $ManagerNodeSet) 设置管控节点概览。
 * @method array getLoginNodeSet() 获取登录节点概览。
 * @method void setLoginNodeSet(array $LoginNodeSet) 设置登录节点概览。
 * @method integer getLoginNodeCount() 获取登录节点数量。
 * @method void setLoginNodeCount(integer $LoginNodeCount) 设置登录节点数量。
 * @method string getVpcId() 获取集群所属私有网络ID。
 * @method void setVpcId(string $VpcId) 设置集群所属私有网络ID。
 */
class ClusterOverview extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var string 集群状态。取值范围：<br><li>PENDING：创建中<br><li>INITING：初始化中<br><li>INIT_FAILED：初始化失败<br><li>RUNNING：运行中<br><li>TERMINATING：销毁中
     */
    public $ClusterStatus;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @var Placement 集群位置信息。
     */
    public $Placement;

    /**
     * @var string 集群创建时间。
     */
    public $CreateTime;

    /**
     * @var string 集群调度器。
     */
    public $SchedulerType;

    /**
     * @var integer 计算节点数量。
     */
    public $ComputeNodeCount;

    /**
     * @var array 计算节点概览。
     */
    public $ComputeNodeSet;

    /**
     * @var integer 管控节点数量。
     */
    public $ManagerNodeCount;

    /**
     * @var array 管控节点概览。
     */
    public $ManagerNodeSet;

    /**
     * @var array 登录节点概览。
     */
    public $LoginNodeSet;

    /**
     * @var integer 登录节点数量。
     */
    public $LoginNodeCount;

    /**
     * @var string 集群所属私有网络ID。
     */
    public $VpcId;

    /**
     * @param string $ClusterId 集群ID。
     * @param string $ClusterStatus 集群状态。取值范围：<br><li>PENDING：创建中<br><li>INITING：初始化中<br><li>INIT_FAILED：初始化失败<br><li>RUNNING：运行中<br><li>TERMINATING：销毁中
     * @param string $ClusterName 集群名称。
     * @param Placement $Placement 集群位置信息。
     * @param string $CreateTime 集群创建时间。
     * @param string $SchedulerType 集群调度器。
     * @param integer $ComputeNodeCount 计算节点数量。
     * @param array $ComputeNodeSet 计算节点概览。
     * @param integer $ManagerNodeCount 管控节点数量。
     * @param array $ManagerNodeSet 管控节点概览。
     * @param array $LoginNodeSet 登录节点概览。
     * @param integer $LoginNodeCount 登录节点数量。
     * @param string $VpcId 集群所属私有网络ID。
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

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SchedulerType",$param) and $param["SchedulerType"] !== null) {
            $this->SchedulerType = $param["SchedulerType"];
        }

        if (array_key_exists("ComputeNodeCount",$param) and $param["ComputeNodeCount"] !== null) {
            $this->ComputeNodeCount = $param["ComputeNodeCount"];
        }

        if (array_key_exists("ComputeNodeSet",$param) and $param["ComputeNodeSet"] !== null) {
            $this->ComputeNodeSet = [];
            foreach ($param["ComputeNodeSet"] as $key => $value){
                $obj = new ComputeNodeOverview();
                $obj->deserialize($value);
                array_push($this->ComputeNodeSet, $obj);
            }
        }

        if (array_key_exists("ManagerNodeCount",$param) and $param["ManagerNodeCount"] !== null) {
            $this->ManagerNodeCount = $param["ManagerNodeCount"];
        }

        if (array_key_exists("ManagerNodeSet",$param) and $param["ManagerNodeSet"] !== null) {
            $this->ManagerNodeSet = [];
            foreach ($param["ManagerNodeSet"] as $key => $value){
                $obj = new ManagerNodeOverview();
                $obj->deserialize($value);
                array_push($this->ManagerNodeSet, $obj);
            }
        }

        if (array_key_exists("LoginNodeSet",$param) and $param["LoginNodeSet"] !== null) {
            $this->LoginNodeSet = [];
            foreach ($param["LoginNodeSet"] as $key => $value){
                $obj = new LoginNodeOverview();
                $obj->deserialize($value);
                array_push($this->LoginNodeSet, $obj);
            }
        }

        if (array_key_exists("LoginNodeCount",$param) and $param["LoginNodeCount"] !== null) {
            $this->LoginNodeCount = $param["LoginNodeCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
