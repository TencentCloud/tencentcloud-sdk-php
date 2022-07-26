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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDedicatedClusterDBInstance请求参数结构体
 *
 * @method integer getGoodsNum() 获取分配实例个数
 * @method void setGoodsNum(integer $GoodsNum) 设置分配实例个数
 * @method integer getMemory() 获取內存大小，单位GB
 * @method void setMemory(integer $Memory) 设置內存大小，单位GB
 * @method integer getStorage() 获取磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置磁盘大小，单位GB
 * @method string getClusterId() 获取独享集群集群uuid
 * @method void setClusterId(string $ClusterId) 设置独享集群集群uuid
 * @method string getZone() 获取（废弃）可用区
 * @method void setZone(string $Zone) 设置（废弃）可用区
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getPid() 获取（废弃）Pid，可通过获取独享集群售卖配置接口得到
 * @method void setPid(integer $Pid) 设置（废弃）Pid，可通过获取独享集群售卖配置接口得到
 * @method string getMachine() 获取（废弃）机型
 * @method void setMachine(string $Machine) 设置（废弃）机型
 * @method string getVpcId() 获取网络Id
 * @method void setVpcId(string $VpcId) 设置网络Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method string getDbVersionId() 获取db类型，不传默认0
 * @method void setDbVersionId(string $DbVersionId) 设置db类型，不传默认0
 * @method integer getManual() 获取（废弃）是否手动指定一组服务器分配, 运维使用
 * @method void setManual(integer $Manual) 设置（废弃）是否手动指定一组服务器分配, 运维使用
 * @method string getDeviceNo() 获取（废弃）DeviceNo参数
 * @method void setDeviceNo(string $DeviceNo) 设置（废弃）DeviceNo参数
 * @method array getSecurityGroupIds() 获取安全组ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID
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
 * @method array getInitParams() 获取参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method void setInitParams(array $InitParams) 设置参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
 * @method integer getNodeNum() 获取实例节点数
 * @method void setNodeNum(integer $NodeNum) 设置实例节点数
 * @method string getMasterHostId() 获取指定主节点uuid，不填随机分配
 * @method void setMasterHostId(string $MasterHostId) 设置指定主节点uuid，不填随机分配
 * @method array getSlaveHostIds() 获取指定从节点uuid，不填随机分配
 * @method void setSlaveHostIds(array $SlaveHostIds) 设置指定从节点uuid，不填随机分配
 * @method string getRollbackInstanceId() 获取需要回档的源实例ID
 * @method void setRollbackInstanceId(string $RollbackInstanceId) 设置需要回档的源实例ID
 * @method string getRollbackTime() 获取回档时间
 * @method void setRollbackTime(string $RollbackTime) 设置回档时间
 */
class CreateDedicatedClusterDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 分配实例个数
     */
    public $GoodsNum;

    /**
     * @var integer 內存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 磁盘大小，单位GB
     */
    public $Storage;

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
     * @var integer （废弃）Pid，可通过获取独享集群售卖配置接口得到
     */
    public $Pid;

    /**
     * @var string （废弃）机型
     */
    public $Machine;

    /**
     * @var string 网络Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var string db类型，不传默认0
     */
    public $DbVersionId;

    /**
     * @var integer （废弃）是否手动指定一组服务器分配, 运维使用
     */
    public $Manual;

    /**
     * @var string （废弃）DeviceNo参数
     */
    public $DeviceNo;

    /**
     * @var array 安全组ID
     */
    public $SecurityGroupIds;

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
     * @var array 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     */
    public $InitParams;

    /**
     * @var integer 实例节点数
     */
    public $NodeNum;

    /**
     * @var string 指定主节点uuid，不填随机分配
     */
    public $MasterHostId;

    /**
     * @var array 指定从节点uuid，不填随机分配
     */
    public $SlaveHostIds;

    /**
     * @var string 需要回档的源实例ID
     */
    public $RollbackInstanceId;

    /**
     * @var string 回档时间
     */
    public $RollbackTime;

    /**
     * @param integer $GoodsNum 分配实例个数
     * @param integer $Memory 內存大小，单位GB
     * @param integer $Storage 磁盘大小，单位GB
     * @param string $ClusterId 独享集群集群uuid
     * @param string $Zone （废弃）可用区
     * @param integer $ProjectId 项目ID
     * @param integer $Pid （废弃）Pid，可通过获取独享集群售卖配置接口得到
     * @param string $Machine （废弃）机型
     * @param string $VpcId 网络Id
     * @param string $SubnetId 子网Id
     * @param string $DbVersionId db类型，不传默认0
     * @param integer $Manual （废弃）是否手动指定一组服务器分配, 运维使用
     * @param string $DeviceNo （废弃）DeviceNo参数
     * @param array $SecurityGroupIds 安全组ID
     * @param string $DcnInstanceId DCN源实例ID
     * @param string $DcnRegion DCN源实例地域名
     * @param string $InstanceName 自定义实例名称
     * @param array $ResourceTags 标签
     * @param integer $Ipv6Flag 支持IPv6标志：1 支持， 0 不支持
     * @param array $InitParams 参数列表。本接口的可选值为：character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化。默认为强同步可退化）。
     * @param integer $NodeNum 实例节点数
     * @param string $MasterHostId 指定主节点uuid，不填随机分配
     * @param array $SlaveHostIds 指定从节点uuid，不填随机分配
     * @param string $RollbackInstanceId 需要回档的源实例ID
     * @param string $RollbackTime 回档时间
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
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

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("Manual",$param) and $param["Manual"] !== null) {
            $this->Manual = $param["Manual"];
        }

        if (array_key_exists("DeviceNo",$param) and $param["DeviceNo"] !== null) {
            $this->DeviceNo = $param["DeviceNo"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
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

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("MasterHostId",$param) and $param["MasterHostId"] !== null) {
            $this->MasterHostId = $param["MasterHostId"];
        }

        if (array_key_exists("SlaveHostIds",$param) and $param["SlaveHostIds"] !== null) {
            $this->SlaveHostIds = $param["SlaveHostIds"];
        }

        if (array_key_exists("RollbackInstanceId",$param) and $param["RollbackInstanceId"] !== null) {
            $this->RollbackInstanceId = $param["RollbackInstanceId"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }
    }
}
