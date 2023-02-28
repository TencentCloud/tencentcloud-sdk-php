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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInLongTkeClusterList请求参数结构体
 *
 * @method string getProjectId() 获取WeData项目ID
 * @method void setProjectId(string $ProjectId) 设置WeData项目ID
 * @method string getTkeRegion() 获取TKE集群地域
 * @method void setTkeRegion(string $TkeRegion) 设置TKE集群地域
 * @method string getClusterName() 获取集群名称。
多个名称用逗号连接。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
多个名称用逗号连接。
 * @method string getStatus() 获取TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常 Failed 异常 Deleting 删除中 Scaling 规模调整中 Upgrading 升级中 Isolated 欠费隔离中 NodeUpgrading 节点升级中 Recovering 唤醒中 Activating 激活中 MasterScaling Master扩缩容中 Waiting 等待注册 ClusterLevelUpgrading 调整规格中 ResourceIsolate 隔离中 ResourceIsolated 已隔离 ResourceReverse 冲正中 Trading 集群开通中 ResourceReversal 集群冲正 ClusterLevelTrading 集群变配交易中)
多个状态用逗号连接。
 * @method void setStatus(string $Status) 设置TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常 Failed 异常 Deleting 删除中 Scaling 规模调整中 Upgrading 升级中 Isolated 欠费隔离中 NodeUpgrading 节点升级中 Recovering 唤醒中 Activating 激活中 MasterScaling Master扩缩容中 Waiting 等待注册 ClusterLevelUpgrading 调整规格中 ResourceIsolate 隔离中 ResourceIsolated 已隔离 ResourceReverse 冲正中 Trading 集群开通中 ResourceReversal 集群冲正 ClusterLevelTrading 集群变配交易中)
多个状态用逗号连接。
 * @method boolean getHasAgent() 获取是否安装Agent，true: 是，false: 否
 * @method void setHasAgent(boolean $HasAgent) 设置是否安装Agent，true: 是，false: 否
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
多个集群用逗号连接。
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
多个集群用逗号连接。
 * @method integer getPageIndex() 获取分页页码，从1开始，默认：1
 * @method void setPageIndex(integer $PageIndex) 设置分页页码，从1开始，默认：1
 * @method integer getPageSize() 获取分页每页记录数，默认10
 * @method void setPageSize(integer $PageSize) 设置分页每页记录数，默认10
 */
class DescribeInLongTkeClusterListRequest extends AbstractModel
{
    /**
     * @var string WeData项目ID
     */
    public $ProjectId;

    /**
     * @var string TKE集群地域
     */
    public $TkeRegion;

    /**
     * @var string 集群名称。
多个名称用逗号连接。
     */
    public $ClusterName;

    /**
     * @var string TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常 Failed 异常 Deleting 删除中 Scaling 规模调整中 Upgrading 升级中 Isolated 欠费隔离中 NodeUpgrading 节点升级中 Recovering 唤醒中 Activating 激活中 MasterScaling Master扩缩容中 Waiting 等待注册 ClusterLevelUpgrading 调整规格中 ResourceIsolate 隔离中 ResourceIsolated 已隔离 ResourceReverse 冲正中 Trading 集群开通中 ResourceReversal 集群冲正 ClusterLevelTrading 集群变配交易中)
多个状态用逗号连接。
     */
    public $Status;

    /**
     * @var boolean 是否安装Agent，true: 是，false: 否
     */
    public $HasAgent;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
多个集群用逗号连接。
     */
    public $ClusterType;

    /**
     * @var integer 分页页码，从1开始，默认：1
     */
    public $PageIndex;

    /**
     * @var integer 分页每页记录数，默认10
     */
    public $PageSize;

    /**
     * @param string $ProjectId WeData项目ID
     * @param string $TkeRegion TKE集群地域
     * @param string $ClusterName 集群名称。
多个名称用逗号连接。
     * @param string $Status TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常 Failed 异常 Deleting 删除中 Scaling 规模调整中 Upgrading 升级中 Isolated 欠费隔离中 NodeUpgrading 节点升级中 Recovering 唤醒中 Activating 激活中 MasterScaling Master扩缩容中 Waiting 等待注册 ClusterLevelUpgrading 调整规格中 ResourceIsolate 隔离中 ResourceIsolated 已隔离 ResourceReverse 冲正中 Trading 集群开通中 ResourceReversal 集群冲正 ClusterLevelTrading 集群变配交易中)
多个状态用逗号连接。
     * @param boolean $HasAgent 是否安装Agent，true: 是，false: 否
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
多个集群用逗号连接。
     * @param integer $PageIndex 分页页码，从1开始，默认：1
     * @param integer $PageSize 分页每页记录数，默认10
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TkeRegion",$param) and $param["TkeRegion"] !== null) {
            $this->TkeRegion = $param["TkeRegion"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HasAgent",$param) and $param["HasAgent"] !== null) {
            $this->HasAgent = $param["HasAgent"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
