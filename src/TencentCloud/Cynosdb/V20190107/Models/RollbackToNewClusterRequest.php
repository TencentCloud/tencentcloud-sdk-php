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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackToNewCluster请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getOriginalClusterId() 获取回档时，传入源集群ID，用于查找源poolId
 * @method void setOriginalClusterId(string $OriginalClusterId) 设置回档时，传入源集群ID，用于查找源poolId
 * @method string getUniqVpcId() 获取所属VPC网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置所属VPC网络ID
 * @method string getUniqSubnetId() 获取所属子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置所属子网ID
 * @method string getClusterName() 获取集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
 * @method void setClusterName(string $ClusterName) 设置集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
 * @method integer getRollbackId() 获取快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
 * @method void setRollbackId(integer $RollbackId) 设置快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
 * @method string getExpectTime() 获取时间点回档，指定时间；快照回档，快照时间
 * @method void setExpectTime(string $ExpectTime) 设置时间点回档，指定时间；快照回档，快照时间
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method array getResourceTags() 获取集群创建需要绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置集群创建需要绑定的tag数组信息
 * @method string getDbMode() 获取Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) 设置Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method float getMinCpu() 获取当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMinCpu(float $MinCpu) 设置当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method float getMaxCpu() 获取当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMaxCpu(float $MaxCpu) 设置当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method string getAutoPause() 获取当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
 * @method void setAutoPause(string $AutoPause) 设置当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
 * @method integer getAutoPauseDelay() 获取当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
 * @method array getSecurityGroupIds() 获取安全组id数组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id数组
 * @method array getAlarmPolicyIds() 获取告警策略Id数组
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) 设置告警策略Id数组
 * @method array getClusterParams() 获取参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
 * @method void setClusterParams(array $ClusterParams) 设置参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
 * @method integer getParamTemplateId() 获取参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
 * @method array getInstanceInitInfos() 获取实例初始化配置信息，主要用于购买集群时选不同规格实例
 * @method void setInstanceInitInfos(array $InstanceInitInfos) 设置实例初始化配置信息，主要用于购买集群时选不同规格实例
 * @method integer getDealMode() 获取0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置0-下单并支付 1-下单
 * @method integer getPayMode() 获取计算节点付费模式：0-按量计费，1-预付费
 * @method void setPayMode(integer $PayMode) 设置计算节点付费模式：0-按量计费，1-预付费
 * @method integer getTimeSpan() 获取时间
 * @method void setTimeSpan(integer $TimeSpan) 设置时间
 * @method string getTimeUnit() 获取单位
 * @method void setTimeUnit(string $TimeUnit) 设置单位
 * @method array getRollbackDatabases() 获取回档库信息
 * @method void setRollbackDatabases(array $RollbackDatabases) 设置回档库信息
 * @method array getRollbackTables() 获取回档表信息
 * @method void setRollbackTables(array $RollbackTables) 设置回档表信息
 * @method array getOriginalROInstanceList() 获取原ro实例信息
 * @method void setOriginalROInstanceList(array $OriginalROInstanceList) 设置原ro实例信息
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 * @method string getAutoArchive() 获取是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method void setAutoArchive(string $AutoArchive) 设置是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method boolean getFromSaveBackup() 获取是否从保存备份中恢复
 * @method void setFromSaveBackup(boolean $FromSaveBackup) 设置是否从保存备份中恢复
 */
class RollbackToNewClusterRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 回档时，传入源集群ID，用于查找源poolId
     */
    public $OriginalClusterId;

    /**
     * @var string 所属VPC网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 所属子网ID
     */
    public $UniqSubnetId;

    /**
     * @var string 集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
     */
    public $ClusterName;

    /**
     * @var integer 快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
     */
    public $RollbackId;

    /**
     * @var string 时间点回档，指定时间；快照回档，快照时间
     */
    public $ExpectTime;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var array 集群创建需要绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float 当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MinCpu;

    /**
     * @var float 当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MaxCpu;

    /**
     * @var string 当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
     */
    public $AutoPause;

    /**
     * @var integer 当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
     */
    public $AutoPauseDelay;

    /**
     * @var array 安全组id数组
     */
    public $SecurityGroupIds;

    /**
     * @var array 告警策略Id数组
     */
    public $AlarmPolicyIds;

    /**
     * @var array 参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
     */
    public $ClusterParams;

    /**
     * @var integer 参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
     */
    public $ParamTemplateId;

    /**
     * @var array 实例初始化配置信息，主要用于购买集群时选不同规格实例
     */
    public $InstanceInitInfos;

    /**
     * @var integer 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @var integer 计算节点付费模式：0-按量计费，1-预付费
     */
    public $PayMode;

    /**
     * @var integer 时间
     */
    public $TimeSpan;

    /**
     * @var string 单位
     */
    public $TimeUnit;

    /**
     * @var array 回档库信息
     */
    public $RollbackDatabases;

    /**
     * @var array 回档表信息
     */
    public $RollbackTables;

    /**
     * @var array 原ro实例信息
     */
    public $OriginalROInstanceList;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @var string 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     */
    public $AutoArchive;

    /**
     * @var boolean 是否从保存备份中恢复
     */
    public $FromSaveBackup;

    /**
     * @param string $Zone 可用区
     * @param string $OriginalClusterId 回档时，传入源集群ID，用于查找源poolId
     * @param string $UniqVpcId 所属VPC网络ID
     * @param string $UniqSubnetId 所属子网ID
     * @param string $ClusterName 集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
     * @param integer $RollbackId 快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
     * @param string $ExpectTime 时间点回档，指定时间；快照回档，快照时间
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param array $ResourceTags 集群创建需要绑定的tag数组信息
     * @param string $DbMode Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
     * @param float $MinCpu 当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param float $MaxCpu 当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param string $AutoPause 当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
     * @param integer $AutoPauseDelay 当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
     * @param array $SecurityGroupIds 安全组id数组
     * @param array $AlarmPolicyIds 告警策略Id数组
     * @param array $ClusterParams 参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
     * @param integer $ParamTemplateId 参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
     * @param array $InstanceInitInfos 实例初始化配置信息，主要用于购买集群时选不同规格实例
     * @param integer $DealMode 0-下单并支付 1-下单
     * @param integer $PayMode 计算节点付费模式：0-按量计费，1-预付费
     * @param integer $TimeSpan 时间
     * @param string $TimeUnit 单位
     * @param array $RollbackDatabases 回档库信息
     * @param array $RollbackTables 回档表信息
     * @param array $OriginalROInstanceList 原ro实例信息
     * @param integer $ProjectId 项目id
     * @param string $AutoArchive 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     * @param boolean $FromSaveBackup 是否从保存备份中恢复
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

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }

        if (array_key_exists("ClusterParams",$param) and $param["ClusterParams"] !== null) {
            $this->ClusterParams = [];
            foreach ($param["ClusterParams"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParams, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new InstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("OriginalROInstanceList",$param) and $param["OriginalROInstanceList"] !== null) {
            $this->OriginalROInstanceList = $param["OriginalROInstanceList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("FromSaveBackup",$param) and $param["FromSaveBackup"] !== null) {
            $this->FromSaveBackup = $param["FromSaveBackup"];
        }
    }
}
