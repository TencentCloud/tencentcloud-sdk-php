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
 * CreateIntegrateCluster请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcId() 获取所属VPC网络ID
 * @method void setVpcId(string $VpcId) 设置所属VPC网络ID
 * @method string getSubnetId() 获取所属子网ID
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID
 * @method string getDbVersion() 获取数据库版本，取值范围: 
<li> MYSQL可选值：5.7，8.0 </li>
 * @method void setDbVersion(string $DbVersion) 设置数据库版本，取值范围: 
<li> MYSQL可选值：5.7，8.0 </li>
 * @method integer getProjectId() 获取所属项目ID
 * @method void setProjectId(integer $ProjectId) 设置所属项目ID
 * @method string getClusterName() 获取集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
 * @method void setClusterName(string $ClusterName) 设置集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
 * @method string getAdminPassword() 获取账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种)
 * @method void setAdminPassword(string $AdminPassword) 设置账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种)
 * @method integer getPort() 获取端口，默认3306，取值范围[0, 65535)
 * @method void setPort(integer $Port) 设置端口，默认3306，取值范围[0, 65535)
 * @method integer getPayMode() 获取计费模式，按量计费：0，包年包月：1。默认按量计费。
 * @method void setPayMode(integer $PayMode) 设置计费模式，按量计费：0，包年包月：1。默认按量计费。
 * @method integer getCount() 获取购买集群数，可选值范围[1,3]，默认为1
 * @method void setCount(integer $Count) 设置购买集群数，可选值范围[1,3]，默认为1
 * @method integer getStorageLimit() 获取普通实例存储上限，单位GB
当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限
 * @method void setStorageLimit(integer $StorageLimit) 设置普通实例存储上限，单位GB
当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限
 * @method integer getTimeSpan() 获取包年包月购买时长
 * @method void setTimeSpan(integer $TimeSpan) 设置包年包月购买时长
 * @method string getTimeUnit() 获取包年包月购买时长单位，['s','d','m','y']
 * @method void setTimeUnit(string $TimeUnit) 设置包年包月购买时长单位，['s','d','m','y']
 * @method integer getAutoRenewFlag() 获取包年包月购买是否自动续费，默认为0。
0标识默认续费方式，1表示自动续费，2表示不自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置包年包月购买是否自动续费，默认为0。
0标识默认续费方式，1表示自动续费，2表示不自动续费。
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method array getResourceTags() 获取集群创建需要绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置集群创建需要绑定的tag数组信息
 * @method integer getStoragePayMode() 获取集群存储计费模式，按量计费：0，包年包月：1。默认按量计费
当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费
回档与克隆均不支持包年包月存储
 * @method void setStoragePayMode(integer $StoragePayMode) 设置集群存储计费模式，按量计费：0，包年包月：1。默认按量计费
当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费
回档与克隆均不支持包年包月存储
 * @method array getSecurityGroupIds() 获取安全组id数组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id数组
 * @method array getAlarmPolicyIds() 获取告警策略Id数组
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) 设置告警策略Id数组
 * @method array getClusterParams() 获取参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
 * @method void setClusterParams(array $ClusterParams) 设置参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
 * @method integer getDealMode() 获取交易模式，0-下单且支付，1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式，0-下单且支付，1-下单
 * @method integer getParamTemplateId() 获取参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
 * @method string getSlaveZone() 获取多可用区地址
 * @method void setSlaveZone(string $SlaveZone) 设置多可用区地址
 * @method array getInstanceInitInfos() 获取实例初始化配置信息，主要用于购买集群时选不同规格实例
 * @method void setInstanceInitInfos(array $InstanceInitInfos) 设置实例初始化配置信息，主要用于购买集群时选不同规格实例
 * @method string getGdnId() 获取全球数据库唯一标识
 * @method void setGdnId(string $GdnId) 设置全球数据库唯一标识
 * @method ProxyConfigInfo getProxyConfig() 获取数据库代理配置
 * @method void setProxyConfig(ProxyConfigInfo $ProxyConfig) 设置数据库代理配置
 * @method string getAutoArchive() 获取是否自动归档
 * @method void setAutoArchive(string $AutoArchive) 设置是否自动归档
 * @method integer getAutoArchiveDelayHours() 获取暂停后的归档处理时间
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) 设置暂停后的归档处理时间
 * @method string getEncryptMethod() 获取加密方法（由加密算法和密钥对版本组成）
 * @method void setEncryptMethod(string $EncryptMethod) 设置加密方法（由加密算法和密钥对版本组成）
 * @method IntegrateCreateClusterConfig getIntegrateCreateClusterConfig() 获取集成集群配置信息
 * @method void setIntegrateCreateClusterConfig(IntegrateCreateClusterConfig $IntegrateCreateClusterConfig) 设置集成集群配置信息
 * @method string getStorageVersion() 获取存储架构类型。 枚举值：1.0/2.0 默认值：1.0
 * @method void setStorageVersion(string $StorageVersion) 设置存储架构类型。 枚举值：1.0/2.0 默认值：1.0
 */
class CreateIntegrateClusterRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 所属VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 所属子网ID
     */
    public $SubnetId;

    /**
     * @var string 数据库版本，取值范围: 
<li> MYSQL可选值：5.7，8.0 </li>
     */
    public $DbVersion;

    /**
     * @var integer 所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
     */
    public $ClusterName;

    /**
     * @var string 账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种)
     */
    public $AdminPassword;

    /**
     * @var integer 端口，默认3306，取值范围[0, 65535)
     */
    public $Port;

    /**
     * @var integer 计费模式，按量计费：0，包年包月：1。默认按量计费。
     */
    public $PayMode;

    /**
     * @var integer 购买集群数，可选值范围[1,3]，默认为1
     */
    public $Count;

    /**
     * @var integer 普通实例存储上限，单位GB
当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限
     */
    public $StorageLimit;

    /**
     * @var integer 包年包月购买时长
     */
    public $TimeSpan;

    /**
     * @var string 包年包月购买时长单位，['s','d','m','y']
     */
    public $TimeUnit;

    /**
     * @var integer 包年包月购买是否自动续费，默认为0。
0标识默认续费方式，1表示自动续费，2表示不自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var array 集群创建需要绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var integer 集群存储计费模式，按量计费：0，包年包月：1。默认按量计费
当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费
回档与克隆均不支持包年包月存储
     */
    public $StoragePayMode;

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
     * @var integer 交易模式，0-下单且支付，1-下单
     */
    public $DealMode;

    /**
     * @var integer 参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
     */
    public $ParamTemplateId;

    /**
     * @var string 多可用区地址
     */
    public $SlaveZone;

    /**
     * @var array 实例初始化配置信息，主要用于购买集群时选不同规格实例
     */
    public $InstanceInitInfos;

    /**
     * @var string 全球数据库唯一标识
     */
    public $GdnId;

    /**
     * @var ProxyConfigInfo 数据库代理配置
     */
    public $ProxyConfig;

    /**
     * @var string 是否自动归档
     */
    public $AutoArchive;

    /**
     * @var integer 暂停后的归档处理时间
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string 加密方法（由加密算法和密钥对版本组成）
     */
    public $EncryptMethod;

    /**
     * @var IntegrateCreateClusterConfig 集成集群配置信息
     */
    public $IntegrateCreateClusterConfig;

    /**
     * @var string 存储架构类型。 枚举值：1.0/2.0 默认值：1.0
     */
    public $StorageVersion;

    /**
     * @param string $Zone 可用区
     * @param string $VpcId 所属VPC网络ID
     * @param string $SubnetId 所属子网ID
     * @param string $DbVersion 数据库版本，取值范围: 
<li> MYSQL可选值：5.7，8.0 </li>
     * @param integer $ProjectId 所属项目ID
     * @param string $ClusterName 集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（'-','_','.'）
     * @param string $AdminPassword 账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种)
     * @param integer $Port 端口，默认3306，取值范围[0, 65535)
     * @param integer $PayMode 计费模式，按量计费：0，包年包月：1。默认按量计费。
     * @param integer $Count 购买集群数，可选值范围[1,3]，默认为1
     * @param integer $StorageLimit 普通实例存储上限，单位GB
当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限
     * @param integer $TimeSpan 包年包月购买时长
     * @param string $TimeUnit 包年包月购买时长单位，['s','d','m','y']
     * @param integer $AutoRenewFlag 包年包月购买是否自动续费，默认为0。
0标识默认续费方式，1表示自动续费，2表示不自动续费。
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param array $ResourceTags 集群创建需要绑定的tag数组信息
     * @param integer $StoragePayMode 集群存储计费模式，按量计费：0，包年包月：1。默认按量计费
当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费
回档与克隆均不支持包年包月存储
     * @param array $SecurityGroupIds 安全组id数组
     * @param array $AlarmPolicyIds 告警策略Id数组
     * @param array $ClusterParams 参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感
     * @param integer $DealMode 交易模式，0-下单且支付，1-下单
     * @param integer $ParamTemplateId 参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID
     * @param string $SlaveZone 多可用区地址
     * @param array $InstanceInitInfos 实例初始化配置信息，主要用于购买集群时选不同规格实例
     * @param string $GdnId 全球数据库唯一标识
     * @param ProxyConfigInfo $ProxyConfig 数据库代理配置
     * @param string $AutoArchive 是否自动归档
     * @param integer $AutoArchiveDelayHours 暂停后的归档处理时间
     * @param string $EncryptMethod 加密方法（由加密算法和密钥对版本组成）
     * @param IntegrateCreateClusterConfig $IntegrateCreateClusterConfig 集成集群配置信息
     * @param string $StorageVersion 存储架构类型。 枚举值：1.0/2.0 默认值：1.0
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
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

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new IntegrateInstanceInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("ProxyConfig",$param) and $param["ProxyConfig"] !== null) {
            $this->ProxyConfig = new ProxyConfigInfo();
            $this->ProxyConfig->deserialize($param["ProxyConfig"]);
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("AutoArchiveDelayHours",$param) and $param["AutoArchiveDelayHours"] !== null) {
            $this->AutoArchiveDelayHours = $param["AutoArchiveDelayHours"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("IntegrateCreateClusterConfig",$param) and $param["IntegrateCreateClusterConfig"] !== null) {
            $this->IntegrateCreateClusterConfig = new IntegrateCreateClusterConfig();
            $this->IntegrateCreateClusterConfig->deserialize($param["IntegrateCreateClusterConfig"]);
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }
    }
}
