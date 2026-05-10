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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。</p>
 * @method array getInstanceTypes() 获取<p>实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。</p>
 * @method void setInstanceTypes(array $InstanceTypes) 设置<p>实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。</p>
 * @method array getVips() 获取<p>实例的内网 IP 地址。</p>
 * @method void setVips(array $Vips) 设置<p>实例的内网 IP 地址。</p>
 * @method array getStatus() 获取<p>实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 已隔离（可在回收站恢复开机）</p>
 * @method void setStatus(array $Status) 设置<p>实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 已隔离（可在回收站恢复开机）</p>
 * @method integer getOffset() 获取<p>偏移量，默认值为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认值为 0。</p>
 * @method integer getLimit() 获取<p>单次请求返回的数量，默认值为 20，最大值为 2000。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次请求返回的数量，默认值为 20，最大值为 2000。</p>
 * @method string getSecurityGroupId() 获取<p>安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。</p>
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置<p>安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。</p>
 * @method array getPayTypes() 获取<p>付费类型，可取值：0 - 包年包月，1 - 小时计费。</p>
 * @method void setPayTypes(array $PayTypes) 设置<p>付费类型，可取值：0 - 包年包月，1 - 小时计费。</p>
 * @method array getInstanceNames() 获取<p>实例名称。</p>
 * @method void setInstanceNames(array $InstanceNames) 设置<p>实例名称。</p>
 * @method array getTaskStatus() 获取<p>实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行<br>34 - 原地升级待执行</p>
 * @method void setTaskStatus(array $TaskStatus) 设置<p>实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行<br>34 - 原地升级待执行</p>
 * @method array getEngineVersions() 获取<p>实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。</p>
 * @method void setEngineVersions(array $EngineVersions) 设置<p>实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。</p>
 * @method array getVpcIds() 获取<p>私有网络的 ID。</p>
 * @method void setVpcIds(array $VpcIds) 设置<p>私有网络的 ID。</p>
 * @method array getZoneIds() 获取<p>可用区的 ID。</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区的 ID。</p>
 * @method array getSubnetIds() 获取<p>子网 ID。</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网 ID。</p>
 * @method array getCdbErrors() 获取<p>是否锁定标记，可选值：0 - 不锁定，1 - 锁定，默认为0。</p>
 * @method void setCdbErrors(array $CdbErrors) 设置<p>是否锁定标记，可选值：0 - 不锁定，1 - 锁定，默认为0。</p>
 * @method string getOrderBy() 获取<p>返回结果集排序的字段，目前支持：&quot;instanceId&quot;，&quot;instanceName&quot;，&quot;createTime&quot;，&quot;deadlineTime&quot;。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>返回结果集排序的字段，目前支持：&quot;instanceId&quot;，&quot;instanceName&quot;，&quot;createTime&quot;，&quot;deadlineTime&quot;。</p>
 * @method string getOrderDirection() 获取<p>返回结果集排序方式。目前支持值：&quot;ASC&quot; - 表示升序，&quot;DESC&quot; - 表示降序，默认为 &quot;DESC&quot;。</p>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>返回结果集排序方式。目前支持值：&quot;ASC&quot; - 表示升序，&quot;DESC&quot; - 表示降序，默认为 &quot;DESC&quot;。</p>
 * @method integer getWithSecurityGroup() 获取<p>是否以安全组 ID 为过滤条件。<br>说明：0表示否，1表示是。</p>
 * @method void setWithSecurityGroup(integer $WithSecurityGroup) 设置<p>是否以安全组 ID 为过滤条件。<br>说明：0表示否，1表示是。</p>
 * @method integer getWithExCluster() 获取<p>是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。</p>
 * @method void setWithExCluster(integer $WithExCluster) 设置<p>是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。</p>
 * @method string getExClusterId() 获取<p>独享集群 ID。</p>
 * @method void setExClusterId(string $ExClusterId) 设置<p>独享集群 ID。</p>
 * @method array getInstanceIds() 获取<p>实例 ID。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例 ID。</p>
 * @method integer getInitFlag() 获取<p>初始化标记，可取值：0 - 未初始化，1 - 初始化。</p>
 * @method void setInitFlag(integer $InitFlag) 设置<p>初始化标记，可取值：0 - 未初始化，1 - 初始化。</p>
 * @method integer getWithDr() 获取<p>是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。</p>
 * @method void setWithDr(integer $WithDr) 设置<p>是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。</p>
 * @method integer getWithRo() 获取<p>是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
 * @method void setWithRo(integer $WithRo) 设置<p>是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
 * @method integer getWithMaster() 获取<p>是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
 * @method void setWithMaster(integer $WithMaster) 设置<p>是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
 * @method array getDeployGroupIds() 获取<p>置放群组ID列表。</p>
 * @method void setDeployGroupIds(array $DeployGroupIds) 设置<p>置放群组ID列表。</p>
 * @method array getTagKeysForSearch() 获取<p>是否以标签键为过滤条件。</p>
 * @method void setTagKeysForSearch(array $TagKeysForSearch) 设置<p>是否以标签键为过滤条件。</p>
 * @method array getCageIds() 获取<p>金融围拢 ID 。</p>
 * @method void setCageIds(array $CageIds) 设置<p>金融围拢 ID 。</p>
 * @method array getTagValues() 获取<p>标签值</p>
 * @method void setTagValues(array $TagValues) 设置<p>标签值</p>
 * @method array getUniqueVpcIds() 获取<p>私有网络字符型vpcId</p>
 * @method void setUniqueVpcIds(array $UniqueVpcIds) 设置<p>私有网络字符型vpcId</p>
 * @method array getUniqSubnetIds() 获取<p>私有网络字符型subnetId</p>
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置<p>私有网络字符型subnetId</p>
 * @method array getTags() 获取<p>标签键值<br>请注意，创建中的实例无法查询到标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签键值<br>请注意，创建中的实例无法查询到标签。</p>
 * @method array getProxyVips() 获取<p>数据库代理 IP 。</p>
 * @method void setProxyVips(array $ProxyVips) 设置<p>数据库代理 IP 。</p>
 * @method array getProxyIds() 获取<p>数据库代理 ID 。</p>
 * @method void setProxyIds(array $ProxyIds) 设置<p>数据库代理 ID 。</p>
 * @method array getEngineTypes() 获取<p>数据库引擎类型。可选值为：InnoDB、RocksDB。</p>
 * @method void setEngineTypes(array $EngineTypes) 设置<p>数据库引擎类型。可选值为：InnoDB、RocksDB。</p>
 * @method boolean getQueryClusterInfo() 获取<p>是否获取云盘版实例节点信息，可填：true 或 false。默认为 false。</p>
 * @method void setQueryClusterInfo(boolean $QueryClusterInfo) 设置<p>是否获取云盘版实例节点信息，可填：true 或 false。默认为 false。</p>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var array <p>实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>实例的内网 IP 地址。</p>
     */
    public $Vips;

    /**
     * @var array <p>实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 已隔离（可在回收站恢复开机）</p>
     */
    public $Status;

    /**
     * @var integer <p>偏移量，默认值为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次请求返回的数量，默认值为 20，最大值为 2000。</p>
     */
    public $Limit;

    /**
     * @var string <p>安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。</p>
     */
    public $SecurityGroupId;

    /**
     * @var array <p>付费类型，可取值：0 - 包年包月，1 - 小时计费。</p>
     */
    public $PayTypes;

    /**
     * @var array <p>实例名称。</p>
     */
    public $InstanceNames;

    /**
     * @var array <p>实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行<br>34 - 原地升级待执行</p>
     */
    public $TaskStatus;

    /**
     * @var array <p>实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。</p>
     */
    public $EngineVersions;

    /**
     * @var array <p>私有网络的 ID。</p>
     */
    public $VpcIds;

    /**
     * @var array <p>可用区的 ID。</p>
     */
    public $ZoneIds;

    /**
     * @var array <p>子网 ID。</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>是否锁定标记，可选值：0 - 不锁定，1 - 锁定，默认为0。</p>
     */
    public $CdbErrors;

    /**
     * @var string <p>返回结果集排序的字段，目前支持：&quot;instanceId&quot;，&quot;instanceName&quot;，&quot;createTime&quot;，&quot;deadlineTime&quot;。</p>
     */
    public $OrderBy;

    /**
     * @var string <p>返回结果集排序方式。目前支持值：&quot;ASC&quot; - 表示升序，&quot;DESC&quot; - 表示降序，默认为 &quot;DESC&quot;。</p>
     */
    public $OrderDirection;

    /**
     * @var integer <p>是否以安全组 ID 为过滤条件。<br>说明：0表示否，1表示是。</p>
     */
    public $WithSecurityGroup;

    /**
     * @var integer <p>是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。</p>
     */
    public $WithExCluster;

    /**
     * @var string <p>独享集群 ID。</p>
     */
    public $ExClusterId;

    /**
     * @var array <p>实例 ID。</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>初始化标记，可取值：0 - 未初始化，1 - 初始化。</p>
     */
    public $InitFlag;

    /**
     * @var integer <p>是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。</p>
     */
    public $WithDr;

    /**
     * @var integer <p>是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
     */
    public $WithRo;

    /**
     * @var integer <p>是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
     */
    public $WithMaster;

    /**
     * @var array <p>置放群组ID列表。</p>
     */
    public $DeployGroupIds;

    /**
     * @var array <p>是否以标签键为过滤条件。</p>
     */
    public $TagKeysForSearch;

    /**
     * @var array <p>金融围拢 ID 。</p>
     */
    public $CageIds;

    /**
     * @var array <p>标签值</p>
     */
    public $TagValues;

    /**
     * @var array <p>私有网络字符型vpcId</p>
     */
    public $UniqueVpcIds;

    /**
     * @var array <p>私有网络字符型subnetId</p>
     */
    public $UniqSubnetIds;

    /**
     * @var array <p>标签键值<br>请注意，创建中的实例无法查询到标签。</p>
     */
    public $Tags;

    /**
     * @var array <p>数据库代理 IP 。</p>
     */
    public $ProxyVips;

    /**
     * @var array <p>数据库代理 ID 。</p>
     */
    public $ProxyIds;

    /**
     * @var array <p>数据库引擎类型。可选值为：InnoDB、RocksDB。</p>
     */
    public $EngineTypes;

    /**
     * @var boolean <p>是否获取云盘版实例节点信息，可填：true 或 false。默认为 false。</p>
     */
    public $QueryClusterInfo;

    /**
     * @param integer $ProjectId <p>项目 ID。</p>
     * @param array $InstanceTypes <p>实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。</p>
     * @param array $Vips <p>实例的内网 IP 地址。</p>
     * @param array $Status <p>实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 已隔离（可在回收站恢复开机）</p>
     * @param integer $Offset <p>偏移量，默认值为 0。</p>
     * @param integer $Limit <p>单次请求返回的数量，默认值为 20，最大值为 2000。</p>
     * @param string $SecurityGroupId <p>安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。</p>
     * @param array $PayTypes <p>付费类型，可取值：0 - 包年包月，1 - 小时计费。</p>
     * @param array $InstanceNames <p>实例名称。</p>
     * @param array $TaskStatus <p>实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行<br>34 - 原地升级待执行</p>
     * @param array $EngineVersions <p>实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。</p>
     * @param array $VpcIds <p>私有网络的 ID。</p>
     * @param array $ZoneIds <p>可用区的 ID。</p>
     * @param array $SubnetIds <p>子网 ID。</p>
     * @param array $CdbErrors <p>是否锁定标记，可选值：0 - 不锁定，1 - 锁定，默认为0。</p>
     * @param string $OrderBy <p>返回结果集排序的字段，目前支持：&quot;instanceId&quot;，&quot;instanceName&quot;，&quot;createTime&quot;，&quot;deadlineTime&quot;。</p>
     * @param string $OrderDirection <p>返回结果集排序方式。目前支持值：&quot;ASC&quot; - 表示升序，&quot;DESC&quot; - 表示降序，默认为 &quot;DESC&quot;。</p>
     * @param integer $WithSecurityGroup <p>是否以安全组 ID 为过滤条件。<br>说明：0表示否，1表示是。</p>
     * @param integer $WithExCluster <p>是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。</p>
     * @param string $ExClusterId <p>独享集群 ID。</p>
     * @param array $InstanceIds <p>实例 ID。</p>
     * @param integer $InitFlag <p>初始化标记，可取值：0 - 未初始化，1 - 初始化。</p>
     * @param integer $WithDr <p>是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。</p>
     * @param integer $WithRo <p>是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
     * @param integer $WithMaster <p>是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。</p>
     * @param array $DeployGroupIds <p>置放群组ID列表。</p>
     * @param array $TagKeysForSearch <p>是否以标签键为过滤条件。</p>
     * @param array $CageIds <p>金融围拢 ID 。</p>
     * @param array $TagValues <p>标签值</p>
     * @param array $UniqueVpcIds <p>私有网络字符型vpcId</p>
     * @param array $UniqSubnetIds <p>私有网络字符型subnetId</p>
     * @param array $Tags <p>标签键值<br>请注意，创建中的实例无法查询到标签。</p>
     * @param array $ProxyVips <p>数据库代理 IP 。</p>
     * @param array $ProxyIds <p>数据库代理 ID 。</p>
     * @param array $EngineTypes <p>数据库引擎类型。可选值为：InnoDB、RocksDB。</p>
     * @param boolean $QueryClusterInfo <p>是否获取云盘版实例节点信息，可填：true 或 false。默认为 false。</p>
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

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("PayTypes",$param) and $param["PayTypes"] !== null) {
            $this->PayTypes = $param["PayTypes"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("CdbErrors",$param) and $param["CdbErrors"] !== null) {
            $this->CdbErrors = $param["CdbErrors"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("WithSecurityGroup",$param) and $param["WithSecurityGroup"] !== null) {
            $this->WithSecurityGroup = $param["WithSecurityGroup"];
        }

        if (array_key_exists("WithExCluster",$param) and $param["WithExCluster"] !== null) {
            $this->WithExCluster = $param["WithExCluster"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("WithDr",$param) and $param["WithDr"] !== null) {
            $this->WithDr = $param["WithDr"];
        }

        if (array_key_exists("WithRo",$param) and $param["WithRo"] !== null) {
            $this->WithRo = $param["WithRo"];
        }

        if (array_key_exists("WithMaster",$param) and $param["WithMaster"] !== null) {
            $this->WithMaster = $param["WithMaster"];
        }

        if (array_key_exists("DeployGroupIds",$param) and $param["DeployGroupIds"] !== null) {
            $this->DeployGroupIds = $param["DeployGroupIds"];
        }

        if (array_key_exists("TagKeysForSearch",$param) and $param["TagKeysForSearch"] !== null) {
            $this->TagKeysForSearch = $param["TagKeysForSearch"];
        }

        if (array_key_exists("CageIds",$param) and $param["CageIds"] !== null) {
            $this->CageIds = $param["CageIds"];
        }

        if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
            $this->TagValues = $param["TagValues"];
        }

        if (array_key_exists("UniqueVpcIds",$param) and $param["UniqueVpcIds"] !== null) {
            $this->UniqueVpcIds = $param["UniqueVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProxyVips",$param) and $param["ProxyVips"] !== null) {
            $this->ProxyVips = $param["ProxyVips"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("QueryClusterInfo",$param) and $param["QueryClusterInfo"] !== null) {
            $this->QueryClusterInfo = $param["QueryClusterInfo"];
        }
    }
}
