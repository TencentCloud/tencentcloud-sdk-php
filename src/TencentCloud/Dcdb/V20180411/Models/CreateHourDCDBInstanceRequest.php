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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHourDCDBInstance请求参数结构体
 *
 * @method integer getShardMemory() 获取分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardMemory(integer $ShardMemory) 设置分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardStorage() 获取分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardStorage(integer $ShardStorage) 设置分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardNodeCount() 获取单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardNodeCount(integer $ShardNodeCount) 设置单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardCount() 获取实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method void setShardCount(integer $ShardCount) 设置实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method integer getCount() 获取欲购买实例的数量
 * @method void setCount(integer $Count) 设置欲购买实例的数量
 * @method integer getProjectId() 获取项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
 * @method string getVpcId() 获取虚拟私有网络 ID，不传或传空表示创建为基础网络
 * @method void setVpcId(string $VpcId) 设置虚拟私有网络 ID，不传或传空表示创建为基础网络
 * @method string getSubnetId() 获取虚拟私有网络子网 ID，VpcId不为空时必填
 * @method void setSubnetId(string $SubnetId) 设置虚拟私有网络子网 ID，VpcId不为空时必填
 * @method integer getShardCpu() 获取分片cpu大小，单位：核，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardCpu(integer $ShardCpu) 设置分片cpu大小，单位：核，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method string getDbVersionId() 获取数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
 * @method void setDbVersionId(string $DbVersionId) 设置数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
 * @method array getZones() 获取分片节点可用区分布，可填写多个可用区。
 * @method void setZones(array $Zones) 设置分片节点可用区分布，可填写多个可用区。
 * @method string getSecurityGroupId() 获取安全组id
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组id
 * @method string getInstanceName() 获取实例名称， 可以通过该字段自主的设置实例的名字
 * @method void setInstanceName(string $InstanceName) 设置实例名称， 可以通过该字段自主的设置实例的名字
 * @method integer getIpv6Flag() 获取是否支持IPv6，0:不支持，1:支持
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置是否支持IPv6，0:不支持，1:支持
 * @method array getResourceTags() 获取标签键值对数组
 * @method void setResourceTags(array $ResourceTags) 设置标签键值对数组
 * @method string getDcnRegion() 获取DCN源地域
 * @method void setDcnRegion(string $DcnRegion) 设置DCN源地域
 * @method string getDcnInstanceId() 获取DCN源实例ID
 * @method void setDcnInstanceId(string $DcnInstanceId) 设置DCN源实例ID
 * @method array getInitParams() 获取参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method void setInitParams(array $InitParams) 设置参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method string getRollbackInstanceId() 获取需要回档的源实例ID
 * @method void setRollbackInstanceId(string $RollbackInstanceId) 设置需要回档的源实例ID
 * @method string getRollbackTime() 获取回档时间，例如“2021-11-22 00:00:00”
 * @method void setRollbackTime(string $RollbackTime) 设置回档时间，例如“2021-11-22 00:00:00”
 * @method array getSecurityGroupIds() 获取安全组ids，安全组可以传数组形式，兼容之前SecurityGroupId参数
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ids，安全组可以传数组形式，兼容之前SecurityGroupId参数
 * @method integer getDcnSyncMode() 获取DCN同步模式，0：异步， 1：强同步
 * @method void setDcnSyncMode(integer $DcnSyncMode) 设置DCN同步模式，0：异步， 1：强同步
 * @method string getCpuType() 获取Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 * @method void setCpuType(string $CpuType) 设置Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 */
class CreateHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardMemory;

    /**
     * @var integer 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardStorage;

    /**
     * @var integer 单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardNodeCount;

    /**
     * @var integer 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     */
    public $ShardCount;

    /**
     * @var integer 欲购买实例的数量
     */
    public $Count;

    /**
     * @var integer 项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
     */
    public $ProjectId;

    /**
     * @var string 虚拟私有网络 ID，不传或传空表示创建为基础网络
     */
    public $VpcId;

    /**
     * @var string 虚拟私有网络子网 ID，VpcId不为空时必填
     */
    public $SubnetId;

    /**
     * @var integer 分片cpu大小，单位：核，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardCpu;

    /**
     * @var string 数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
     */
    public $DbVersionId;

    /**
     * @var array 分片节点可用区分布，可填写多个可用区。
     */
    public $Zones;

    /**
     * @var string 安全组id
     */
    public $SecurityGroupId;

    /**
     * @var string 实例名称， 可以通过该字段自主的设置实例的名字
     */
    public $InstanceName;

    /**
     * @var integer 是否支持IPv6，0:不支持，1:支持
     */
    public $Ipv6Flag;

    /**
     * @var array 标签键值对数组
     */
    public $ResourceTags;

    /**
     * @var string DCN源地域
     */
    public $DcnRegion;

    /**
     * @var string DCN源实例ID
     */
    public $DcnInstanceId;

    /**
     * @var array 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     */
    public $InitParams;

    /**
     * @var string 需要回档的源实例ID
     */
    public $RollbackInstanceId;

    /**
     * @var string 回档时间，例如“2021-11-22 00:00:00”
     */
    public $RollbackTime;

    /**
     * @var array 安全组ids，安全组可以传数组形式，兼容之前SecurityGroupId参数
     */
    public $SecurityGroupIds;

    /**
     * @var integer DCN同步模式，0：异步， 1：强同步
     */
    public $DcnSyncMode;

    /**
     * @var string Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
     */
    public $CpuType;

    /**
     * @param integer $ShardMemory 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardStorage 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardNodeCount 单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardCount 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     * @param integer $Count 欲购买实例的数量
     * @param integer $ProjectId 项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
     * @param string $VpcId 虚拟私有网络 ID，不传或传空表示创建为基础网络
     * @param string $SubnetId 虚拟私有网络子网 ID，VpcId不为空时必填
     * @param integer $ShardCpu 分片cpu大小，单位：核，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param string $DbVersionId 数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
     * @param array $Zones 分片节点可用区分布，可填写多个可用区。
     * @param string $SecurityGroupId 安全组id
     * @param string $InstanceName 实例名称， 可以通过该字段自主的设置实例的名字
     * @param integer $Ipv6Flag 是否支持IPv6，0:不支持，1:支持
     * @param array $ResourceTags 标签键值对数组
     * @param string $DcnRegion DCN源地域
     * @param string $DcnInstanceId DCN源实例ID
     * @param array $InitParams 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     * @param string $RollbackInstanceId 需要回档的源实例ID
     * @param string $RollbackTime 回档时间，例如“2021-11-22 00:00:00”
     * @param array $SecurityGroupIds 安全组ids，安全组可以传数组形式，兼容之前SecurityGroupId参数
     * @param integer $DcnSyncMode DCN同步模式，0：异步， 1：强同步
     * @param string $CpuType Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
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
        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ShardNodeCount",$param) and $param["ShardNodeCount"] !== null) {
            $this->ShardNodeCount = $param["ShardNodeCount"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ShardCpu",$param) and $param["ShardCpu"] !== null) {
            $this->ShardCpu = $param["ShardCpu"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("RollbackInstanceId",$param) and $param["RollbackInstanceId"] !== null) {
            $this->RollbackInstanceId = $param["RollbackInstanceId"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DcnSyncMode",$param) and $param["DcnSyncMode"] !== null) {
            $this->DcnSyncMode = $param["DcnSyncMode"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }
    }
}
