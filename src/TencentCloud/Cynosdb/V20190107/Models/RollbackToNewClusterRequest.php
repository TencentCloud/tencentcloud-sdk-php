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
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getOriginalClusterId() 获取<p>回档时，传入源集群ID，用于查找源poolId</p>
 * @method void setOriginalClusterId(string $OriginalClusterId) 设置<p>回档时，传入源集群ID，用于查找源poolId</p>
 * @method string getUniqVpcId() 获取<p>所属VPC网络ID</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>所属VPC网络ID</p>
 * @method string getUniqSubnetId() 获取<p>所属子网ID</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>所属子网ID</p>
 * @method string getClusterName() 获取<p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
 * @method integer getRollbackId() 获取<p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
 * @method void setRollbackId(integer $RollbackId) 设置<p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
 * @method string getExpectTime() 获取<p>时间点回档，指定时间；快照回档，快照时间</p>
 * @method void setExpectTime(string $ExpectTime) 设置<p>时间点回档，指定时间；快照回档，快照时间</p>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method array getResourceTags() 获取<p>集群创建需要绑定的tag数组信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>集群创建需要绑定的tag数组信息</p>
 * @method string getDbMode() 获取<p>Db类型<br>当DbType为MYSQL时可选(默认NORMAL)：</p><li>NORMAL</li><li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) 设置<p>Db类型<br>当DbType为MYSQL时可选(默认NORMAL)：</p><li>NORMAL</li><li>SERVERLESS</li>
 * @method float getMinCpu() 获取<p>当DbMode为SEVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>当DbMode为SEVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method float getMaxCpu() 获取<p>当DbMode为SEVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>当DbMode为SEVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method string getAutoPause() 获取<p>当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>默认值:yes
 * @method void setAutoPause(string $AutoPause) 设置<p>当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>默认值:yes
 * @method integer getAutoPauseDelay() 获取<p>当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置<p>当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
 * @method array getSecurityGroupIds() 获取<p>安全组id数组</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组id数组</p>
 * @method array getAlarmPolicyIds() 获取<p>告警策略Id数组</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) 设置<p>告警策略Id数组</p>
 * @method array getClusterParams() 获取<p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
 * @method void setClusterParams(array $ClusterParams) 设置<p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
 * @method integer getParamTemplateId() 获取<p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置<p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
 * @method array getInstanceInitInfos() 获取<p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
 * @method void setInstanceInitInfos(array $InstanceInitInfos) 设置<p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
 * @method integer getDealMode() 获取<p>0-下单并支付 1-下单</p>
 * @method void setDealMode(integer $DealMode) 设置<p>0-下单并支付 1-下单</p>
 * @method integer getPayMode() 获取<p>计算节点付费模式：0-按量计费，1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计算节点付费模式：0-按量计费，1-预付费</p>
 * @method integer getTimeSpan() 获取<p>时间</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>时间</p>
 * @method string getTimeUnit() 获取<p>单位</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>单位</p>
 * @method array getRollbackDatabases() 获取<p>回档库信息</p>
 * @method void setRollbackDatabases(array $RollbackDatabases) 设置<p>回档库信息</p>
 * @method array getRollbackTables() 获取<p>回档表信息</p>
 * @method void setRollbackTables(array $RollbackTables) 设置<p>回档表信息</p>
 * @method array getOriginalROInstanceList() 获取<p>原ro实例信息</p>
 * @method void setOriginalROInstanceList(array $OriginalROInstanceList) 设置<p>原ro实例信息</p>
 * @method integer getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id</p>
 * @method string getAutoArchive() 获取<p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
 * @method void setAutoArchive(string $AutoArchive) 设置<p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
 * @method boolean getFromSaveBackup() 获取<p>是否从保存备份中恢复</p>
 * @method void setFromSaveBackup(boolean $FromSaveBackup) 设置<p>是否从保存备份中恢复</p>
 */
class RollbackToNewClusterRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>回档时，传入源集群ID，用于查找源poolId</p>
     */
    public $OriginalClusterId;

    /**
     * @var string <p>所属VPC网络ID</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>所属子网ID</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
     */
    public $RollbackId;

    /**
     * @var string <p>时间点回档，指定时间；快照回档，快照时间</p>
     */
    public $ExpectTime;

    /**
     * @var integer <p>是否自动选择代金券 1是 0否 默认为0</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>集群创建需要绑定的tag数组信息</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Db类型<br>当DbType为MYSQL时可选(默认NORMAL)：</p><li>NORMAL</li><li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float <p>当DbMode为SEVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MinCpu;

    /**
     * @var float <p>当DbMode为SEVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>默认值:yes
     */
    public $AutoPause;

    /**
     * @var integer <p>当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var array <p>安全组id数组</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>告警策略Id数组</p>
     */
    public $AlarmPolicyIds;

    /**
     * @var array <p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
     */
    public $ClusterParams;

    /**
     * @var integer <p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
     */
    public $InstanceInitInfos;

    /**
     * @var integer <p>0-下单并支付 1-下单</p>
     */
    public $DealMode;

    /**
     * @var integer <p>计算节点付费模式：0-按量计费，1-预付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>时间</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>单位</p>
     */
    public $TimeUnit;

    /**
     * @var array <p>回档库信息</p>
     */
    public $RollbackDatabases;

    /**
     * @var array <p>回档表信息</p>
     */
    public $RollbackTables;

    /**
     * @var array <p>原ro实例信息</p>
     */
    public $OriginalROInstanceList;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
     */
    public $AutoArchive;

    /**
     * @var boolean <p>是否从保存备份中恢复</p>
     */
    public $FromSaveBackup;

    /**
     * @param string $Zone <p>可用区</p>
     * @param string $OriginalClusterId <p>回档时，传入源集群ID，用于查找源poolId</p>
     * @param string $UniqVpcId <p>所属VPC网络ID</p>
     * @param string $UniqSubnetId <p>所属子网ID</p>
     * @param string $ClusterName <p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
     * @param integer $RollbackId <p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
     * @param string $ExpectTime <p>时间点回档，指定时间；快照回档，快照时间</p>
     * @param integer $AutoVoucher <p>是否自动选择代金券 1是 0否 默认为0</p>
     * @param array $ResourceTags <p>集群创建需要绑定的tag数组信息</p>
     * @param string $DbMode <p>Db类型<br>当DbType为MYSQL时可选(默认NORMAL)：</p><li>NORMAL</li><li>SERVERLESS</li>
     * @param float $MinCpu <p>当DbMode为SEVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param float $MaxCpu <p>当DbMode为SEVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param string $AutoPause <p>当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>默认值:yes
     * @param integer $AutoPauseDelay <p>当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
     * @param array $SecurityGroupIds <p>安全组id数组</p>
     * @param array $AlarmPolicyIds <p>告警策略Id数组</p>
     * @param array $ClusterParams <p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
     * @param integer $ParamTemplateId <p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
     * @param array $InstanceInitInfos <p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
     * @param integer $DealMode <p>0-下单并支付 1-下单</p>
     * @param integer $PayMode <p>计算节点付费模式：0-按量计费，1-预付费</p>
     * @param integer $TimeSpan <p>时间</p>
     * @param string $TimeUnit <p>单位</p>
     * @param array $RollbackDatabases <p>回档库信息</p>
     * @param array $RollbackTables <p>回档表信息</p>
     * @param array $OriginalROInstanceList <p>原ro实例信息</p>
     * @param integer $ProjectId <p>项目id</p>
     * @param string $AutoArchive <p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
     * @param boolean $FromSaveBackup <p>是否从保存备份中恢复</p>
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
