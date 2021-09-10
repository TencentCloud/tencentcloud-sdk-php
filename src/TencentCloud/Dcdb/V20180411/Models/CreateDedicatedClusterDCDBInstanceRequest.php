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
 * CreateDedicatedClusterDCDBInstance请求参数结构体
 *
 * @method integer getGoodsNum() 获取分配实例个数
 * @method void setGoodsNum(integer $GoodsNum) 设置分配实例个数
 * @method integer getShardNum() 获取分片数量
 * @method void setShardNum(integer $ShardNum) 设置分片数量
 * @method integer getShardMemory() 获取分片內存大小, 单位GB
 * @method void setShardMemory(integer $ShardMemory) 设置分片內存大小, 单位GB
 * @method integer getShardStorage() 获取分片磁盘大小, 单位GB
 * @method void setShardStorage(integer $ShardStorage) 设置分片磁盘大小, 单位GB
 * @method string getClusterId() 获取独享集群集群uuid
 * @method void setClusterId(string $ClusterId) 设置独享集群集群uuid
 * @method string getZone() 获取（废弃）可用区
 * @method void setZone(string $Zone) 设置（废弃）可用区
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getCpu() 获取（废弃）cpu大小，单位：核
 * @method void setCpu(integer $Cpu) 设置（废弃）cpu大小，单位：核
 * @method string getVpcId() 获取网络ID
 * @method void setVpcId(string $VpcId) 设置网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getShardMachine() 获取（废弃）分片机型
 * @method void setShardMachine(string $ShardMachine) 设置（废弃）分片机型
 * @method integer getShardNodeNum() 获取分片的节点个数
 * @method void setShardNodeNum(integer $ShardNodeNum) 设置分片的节点个数
 * @method integer getShardNodeCpu() 获取（废弃）节点cpu核数，单位：1/100核
 * @method void setShardNodeCpu(integer $ShardNodeCpu) 设置（废弃）节点cpu核数，单位：1/100核
 * @method integer getShardNodeMemory() 获取（废弃）节点內存大小，单位：GB
 * @method void setShardNodeMemory(integer $ShardNodeMemory) 设置（废弃）节点內存大小，单位：GB
 * @method integer getShardNodeStorage() 获取（废弃）节点磁盘大小，单位：GB
 * @method void setShardNodeStorage(integer $ShardNodeStorage) 设置（废弃）节点磁盘大小，单位：GB
 * @method string getDbVersionId() 获取db版本
 * @method void setDbVersionId(string $DbVersionId) 设置db版本
 * @method string getSecurityGroupId() 获取安全组ID
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID
 * @method string getDcnInstanceId() 获取DCN源实例ID
 * @method void setDcnInstanceId(string $DcnInstanceId) 设置DCN源实例ID
 * @method string getDcnRegion() 获取DCN源实例地域名
 * @method void setDcnRegion(string $DcnRegion) 设置DCN源实例地域名
 * @method string getInstanceName() 获取自定义实例名称
 * @method void setInstanceName(string $InstanceName) 设置自定义实例名称
 * @method array getResourceTags() 获取标签
 * @method void setResourceTags(array $ResourceTags) 设置标签
 * @method integer getIpv6Flag() 获取支持IPv6标志：1 支持， 0 不支持
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置支持IPv6标志：1 支持， 0 不支持
 * @method integer getPid() 获取（废弃）Pid，可通过获取独享集群售卖配置接口得到
 * @method void setPid(integer $Pid) 设置（废弃）Pid，可通过获取独享集群售卖配置接口得到
 * @method DBParamValue getInitParams() 获取参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method void setInitParams(DBParamValue $InitParams) 设置参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method string getMasterHostId() 获取指定主节点uuid，不填随机分配
 * @method void setMasterHostId(string $MasterHostId) 设置指定主节点uuid，不填随机分配
 * @method array getSlaveHostIds() 获取指定从节点uuid，不填随机分配
 * @method void setSlaveHostIds(array $SlaveHostIds) 设置指定从节点uuid，不填随机分配
 */
class CreateDedicatedClusterDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 分配实例个数
     */
    public $GoodsNum;

    /**
     * @var integer 分片数量
     */
    public $ShardNum;

    /**
     * @var integer 分片內存大小, 单位GB
     */
    public $ShardMemory;

    /**
     * @var integer 分片磁盘大小, 单位GB
     */
    public $ShardStorage;

    /**
     * @var string 独享集群集群uuid
     */
    public $ClusterId;

    /**
     * @var string （废弃）可用区
     */
    public $Zone;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer （废弃）cpu大小，单位：核
     */
    public $Cpu;

    /**
     * @var string 网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string （废弃）分片机型
     */
    public $ShardMachine;

    /**
     * @var integer 分片的节点个数
     */
    public $ShardNodeNum;

    /**
     * @var integer （废弃）节点cpu核数，单位：1/100核
     */
    public $ShardNodeCpu;

    /**
     * @var integer （废弃）节点內存大小，单位：GB
     */
    public $ShardNodeMemory;

    /**
     * @var integer （废弃）节点磁盘大小，单位：GB
     */
    public $ShardNodeStorage;

    /**
     * @var string db版本
     */
    public $DbVersionId;

    /**
     * @var string 安全组ID
     */
    public $SecurityGroupId;

    /**
     * @var string DCN源实例ID
     */
    public $DcnInstanceId;

    /**
     * @var string DCN源实例地域名
     */
    public $DcnRegion;

    /**
     * @var string 自定义实例名称
     */
    public $InstanceName;

    /**
     * @var array 标签
     */
    public $ResourceTags;

    /**
     * @var integer 支持IPv6标志：1 支持， 0 不支持
     */
    public $Ipv6Flag;

    /**
     * @var integer （废弃）Pid，可通过获取独享集群售卖配置接口得到
     */
    public $Pid;

    /**
     * @var DBParamValue 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     */
    public $InitParams;

    /**
     * @var string 指定主节点uuid，不填随机分配
     */
    public $MasterHostId;

    /**
     * @var array 指定从节点uuid，不填随机分配
     */
    public $SlaveHostIds;

    /**
     * @param integer $GoodsNum 分配实例个数
     * @param integer $ShardNum 分片数量
     * @param integer $ShardMemory 分片內存大小, 单位GB
     * @param integer $ShardStorage 分片磁盘大小, 单位GB
     * @param string $ClusterId 独享集群集群uuid
     * @param string $Zone （废弃）可用区
     * @param integer $ProjectId 项目ID
     * @param integer $Cpu （废弃）cpu大小，单位：核
     * @param string $VpcId 网络ID
     * @param string $SubnetId 子网ID
     * @param string $ShardMachine （废弃）分片机型
     * @param integer $ShardNodeNum 分片的节点个数
     * @param integer $ShardNodeCpu （废弃）节点cpu核数，单位：1/100核
     * @param integer $ShardNodeMemory （废弃）节点內存大小，单位：GB
     * @param integer $ShardNodeStorage （废弃）节点磁盘大小，单位：GB
     * @param string $DbVersionId db版本
     * @param string $SecurityGroupId 安全组ID
     * @param string $DcnInstanceId DCN源实例ID
     * @param string $DcnRegion DCN源实例地域名
     * @param string $InstanceName 自定义实例名称
     * @param array $ResourceTags 标签
     * @param integer $Ipv6Flag 支持IPv6标志：1 支持， 0 不支持
     * @param integer $Pid （废弃）Pid，可通过获取独享集群售卖配置接口得到
     * @param DBParamValue $InitParams 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     * @param string $MasterHostId 指定主节点uuid，不填随机分配
     * @param array $SlaveHostIds 指定从节点uuid，不填随机分配
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ShardMachine",$param) and $param["ShardMachine"] !== null) {
            $this->ShardMachine = $param["ShardMachine"];
        }

        if (array_key_exists("ShardNodeNum",$param) and $param["ShardNodeNum"] !== null) {
            $this->ShardNodeNum = $param["ShardNodeNum"];
        }

        if (array_key_exists("ShardNodeCpu",$param) and $param["ShardNodeCpu"] !== null) {
            $this->ShardNodeCpu = $param["ShardNodeCpu"];
        }

        if (array_key_exists("ShardNodeMemory",$param) and $param["ShardNodeMemory"] !== null) {
            $this->ShardNodeMemory = $param["ShardNodeMemory"];
        }

        if (array_key_exists("ShardNodeStorage",$param) and $param["ShardNodeStorage"] !== null) {
            $this->ShardNodeStorage = $param["ShardNodeStorage"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = new DBParamValue();
            $this->InitParams->deserialize($param["InitParams"]);
        }

        if (array_key_exists("MasterHostId",$param) and $param["MasterHostId"] !== null) {
            $this->MasterHostId = $param["MasterHostId"];
        }

        if (array_key_exists("SlaveHostIds",$param) and $param["SlaveHostIds"] !== null) {
            $this->SlaveHostIds = $param["SlaveHostIds"];
        }
    }
}
