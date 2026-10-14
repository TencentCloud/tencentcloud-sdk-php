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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method string getZone() 获取<p>集群实例所属可用区，不传则默认所有可用区</p>
 * @method void setZone(string $Zone) 设置<p>集群实例所属可用区，不传则默认所有可用区</p>
 * @method array getInstanceIds() 获取<p>集群实例ID列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>集群实例ID列表</p>
 * @method array getInstanceNames() 获取<p>集群实例名称列表</p>
 * @method void setInstanceNames(array $InstanceNames) 设置<p>集群实例名称列表</p>
 * @method integer getOffset() 获取<p>分页起始值, 默认值0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始值, 默认值0</p>
 * @method integer getLimit() 获取<p>分页大小，默认值20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认值20</p>
 * @method integer getOrderByKey() 获取<p>排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderByKey未传递则按创建时间降序排序</p>
 * @method void setOrderByKey(integer $OrderByKey) 设置<p>排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderByKey未传递则按创建时间降序排序</p>
 * @method integer getOrderByType() 获取<p>排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序</p>
 * @method void setOrderByType(integer $OrderByType) 设置<p>排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序</p>
 * @method array getTagList() 获取<p>节点标签信息列表</p>
 * @method void setTagList(array $TagList) 设置<p>节点标签信息列表</p>
 * @method array getIpList() 获取<p>私有网络vip列表</p>
 * @method void setIpList(array $IpList) 设置<p>私有网络vip列表</p>
 * @method array getNodeIps() 获取<p>集群节点IP列表</p>
 * @method void setNodeIps(array $NodeIps) 设置<p>集群节点IP列表</p>
 * @method array getZoneList() 获取<p>可用区列表</p>
 * @method void setZoneList(array $ZoneList) 设置<p>可用区列表</p>
 * @method array getHealthStatus() 获取<p>健康状态筛列表:0表示绿色，1表示黄色，2表示红色,-1表示未知</p>
 * @method void setHealthStatus(array $HealthStatus) 设置<p>健康状态筛列表:0表示绿色，1表示黄色，2表示红色,-1表示未知</p>
 * @method array getVpcIds() 获取<p>Vpc列表 筛选项</p>
 * @method void setVpcIds(array $VpcIds) 设置<p>Vpc列表 筛选项</p>
 * @method string getCdcId() 获取<p>cdc集群id</p>
 * @method void setCdcId(string $CdcId) 设置<p>cdc集群id</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>集群实例所属可用区，不传则默认所有可用区</p>
     */
    public $Zone;

    /**
     * @var array <p>集群实例ID列表</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>集群实例名称列表</p>
     */
    public $InstanceNames;

    /**
     * @var integer <p>分页起始值, 默认值0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页大小，默认值20</p>
     */
    public $Limit;

    /**
     * @var integer <p>排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderByKey未传递则按创建时间降序排序</p>
     */
    public $OrderByKey;

    /**
     * @var integer <p>排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序</p>
     */
    public $OrderByType;

    /**
     * @var array <p>节点标签信息列表</p>
     */
    public $TagList;

    /**
     * @var array <p>私有网络vip列表</p>
     */
    public $IpList;

    /**
     * @var array <p>集群节点IP列表</p>
     */
    public $NodeIps;

    /**
     * @var array <p>可用区列表</p>
     */
    public $ZoneList;

    /**
     * @var array <p>健康状态筛列表:0表示绿色，1表示黄色，2表示红色,-1表示未知</p>
     */
    public $HealthStatus;

    /**
     * @var array <p>Vpc列表 筛选项</p>
     */
    public $VpcIds;

    /**
     * @var string <p>cdc集群id</p>
     */
    public $CdcId;

    /**
     * @param string $Zone <p>集群实例所属可用区，不传则默认所有可用区</p>
     * @param array $InstanceIds <p>集群实例ID列表</p>
     * @param array $InstanceNames <p>集群实例名称列表</p>
     * @param integer $Offset <p>分页起始值, 默认值0</p>
     * @param integer $Limit <p>分页大小，默认值20</p>
     * @param integer $OrderByKey <p>排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderByKey未传递则按创建时间降序排序</p>
     * @param integer $OrderByType <p>排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序</p>
     * @param array $TagList <p>节点标签信息列表</p>
     * @param array $IpList <p>私有网络vip列表</p>
     * @param array $NodeIps <p>集群节点IP列表</p>
     * @param array $ZoneList <p>可用区列表</p>
     * @param array $HealthStatus <p>健康状态筛列表:0表示绿色，1表示黄色，2表示红色,-1表示未知</p>
     * @param array $VpcIds <p>Vpc列表 筛选项</p>
     * @param string $CdcId <p>cdc集群id</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByKey",$param) and $param["OrderByKey"] !== null) {
            $this->OrderByKey = $param["OrderByKey"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("NodeIps",$param) and $param["NodeIps"] !== null) {
            $this->NodeIps = $param["NodeIps"];
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = $param["ZoneList"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
