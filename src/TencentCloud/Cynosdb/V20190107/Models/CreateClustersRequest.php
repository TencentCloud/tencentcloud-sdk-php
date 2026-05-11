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
 * CreateClusters请求参数结构体
 *
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getVpcId() 获取<p>所属VPC网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>所属VPC网络ID</p>
 * @method string getSubnetId() 获取<p>所属子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>所属子网ID</p>
 * @method string getDbType() 获取<p>数据库类型</p><p>枚举值：</p><ul><li>MYSQL： MYSQL</li></ul>
 * @method void setDbType(string $DbType) 设置<p>数据库类型</p><p>枚举值：</p><ul><li>MYSQL： MYSQL</li></ul>
 * @method string getDbVersion() 获取<p>数据库版本</p><p>枚举值：</p><ul><li>5.7： MySQL5.7版本</li><li>8.0： MySQL8.0版本</li></ul>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p><p>枚举值：</p><ul><li>5.7： MySQL5.7版本</li><li>8.0： MySQL8.0版本</li></ul>
 * @method integer getProjectId() 获取<p>所属项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>所属项目ID</p>
 * @method integer getCpu() 获取<p>当DbMode为NORMAL或不填时必选<br>普通实例Cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>当DbMode为NORMAL或不填时必选<br>普通实例Cpu核数</p>
 * @method integer getMemory() 获取<p>当DbMode为NORMAL或不填时必选<br>普通实例内存,单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>当DbMode为NORMAL或不填时必选<br>普通实例内存,单位GB</p>
 * @method integer getInstanceCount() 获取<p>实例数量，数量范围为(0,16]，默认值为2（即一个rw实例+一个ro实例），传递的n表示1个rw实例+n-1个ro实例（规格相同），如需要更精确的集群组成搭配，请使用InstanceInitInfos</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>实例数量，数量范围为(0,16]，默认值为2（即一个rw实例+一个ro实例），传递的n表示1个rw实例+n-1个ro实例（规格相同），如需要更精确的集群组成搭配，请使用InstanceInitInfos</p>
 * @method integer getStorage() 获取<p>该参数无实际意义，已废弃。<br>存储大小，单位GB。</p>
 * @method void setStorage(integer $Storage) 设置<p>该参数无实际意义，已废弃。<br>存储大小，单位GB。</p>
 * @method string getClusterName() 获取<p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
 * @method string getAdminPassword() 获取<p>账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/中的任意三种)</p>
 * @method void setAdminPassword(string $AdminPassword) 设置<p>账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/中的任意三种)</p>
 * @method integer getPort() 获取<p>端口，默认3306，取值范围[0, 65535)</p>
 * @method void setPort(integer $Port) 设置<p>端口，默认3306，取值范围[0, 65535)</p>
 * @method integer getPayMode() 获取<p>计费模式</p><p>枚举值：</p><ul><li>0： 表示按量计费</li><li>1： 表示包年包月</li></ul><p>默认值：0</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式</p><p>枚举值：</p><ul><li>0： 表示按量计费</li><li>1： 表示包年包月</li></ul><p>默认值：0</p>
 * @method integer getCount() 获取<p>购买集群数，可选值范围[1,50]，默认为1</p>
 * @method void setCount(integer $Count) 设置<p>购买集群数，可选值范围[1,50]，默认为1</p>
 * @method string getRollbackStrategy() 获取<p>回档类型</p><p>枚举值：</p><ul><li>noneRollback： 不回档</li><li>snapRollback： 快照回档</li><li>timeRollback： 时间点回档</li></ul>
 * @method void setRollbackStrategy(string $RollbackStrategy) 设置<p>回档类型</p><p>枚举值：</p><ul><li>noneRollback： 不回档</li><li>snapRollback： 快照回档</li><li>timeRollback： 时间点回档</li></ul>
 * @method integer getRollbackId() 获取<p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
 * @method void setRollbackId(integer $RollbackId) 设置<p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
 * @method string getOriginalClusterId() 获取<p>回档时，传入源集群ID，用于查找源poolId</p>
 * @method void setOriginalClusterId(string $OriginalClusterId) 设置<p>回档时，传入源集群ID，用于查找源poolId</p>
 * @method string getExpectTime() 获取<p>时间点回档，指定时间；快照回档，快照时间</p>
 * @method void setExpectTime(string $ExpectTime) 设置<p>时间点回档，指定时间；快照回档，快照时间</p>
 * @method integer getExpectTimeThresh() 获取<p>该参数无实际意义，已废弃。<br>时间点回档，指定时间允许范围</p>
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) 设置<p>该参数无实际意义，已废弃。<br>时间点回档，指定时间允许范围</p>
 * @method integer getStorageLimit() 获取<p>普通实例存储上限，单位GB<br>当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限</p>
 * @method void setStorageLimit(integer $StorageLimit) 设置<p>普通实例存储上限，单位GB<br>当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限</p>
 * @method integer getTimeSpan() 获取<p>包年包月购买时长</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>包年包月购买时长</p>
 * @method string getTimeUnit() 获取<p>包年包月购买时长单位，[&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>包年包月购买时长单位，[&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
 * @method integer getAutoRenewFlag() 获取<p>包年包月购买是否自动续费</p><p>枚举值：</p><ul><li>0： 默认续费方式</li><li>1： 自动续费</li><li>2： 不自动续费</li></ul><p>默认值：0</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>包年包月购买是否自动续费</p><p>枚举值：</p><ul><li>0： 默认续费方式</li><li>1： 自动续费</li><li>2： 不自动续费</li></ul><p>默认值：0</p>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券 1是 0否 默认为0</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 否</li></ul><p>默认值：0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券 1是 0否 默认为0</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 否</li></ul><p>默认值：0</p>
 * @method integer getHaCount() 获取<p>实例数量（该参数已不再使用，只做存量兼容处理）</p>
 * @method void setHaCount(integer $HaCount) 设置<p>实例数量（该参数已不再使用，只做存量兼容处理）</p>
 * @method string getOrderSource() 获取<p>订单来源</p>
 * @method void setOrderSource(string $OrderSource) 设置<p>订单来源</p>
 * @method array getResourceTags() 获取<p>集群创建需要绑定的tag数组信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>集群创建需要绑定的tag数组信息</p>
 * @method string getDbMode() 获取<p>Db类型</p><p>枚举值：</p><ul><li>NORMAL： 普通实例</li><li>SERVERLESS： serverless实例</li></ul><p>默认值：NORMAL</p><p>当DbType为MYSQL时可选(默认NORMAL)</p>
 * @method void setDbMode(string $DbMode) 设置<p>Db类型</p><p>枚举值：</p><ul><li>NORMAL： 普通实例</li><li>SERVERLESS： serverless实例</li></ul><p>默认值：NORMAL</p><p>当DbType为MYSQL时可选(默认NORMAL)</p>
 * @method float getMinCpu() 获取<p>当DbMode为SERVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>当DbMode为SERVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method float getMaxCpu() 获取<p>当DbMode为SERVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>当DbMode为SERVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method string getAutoPause() 获取<p>否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：yes</p><p>DbMode为SERVERLESS生效</p>
 * @method void setAutoPause(string $AutoPause) 设置<p>否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：yes</p><p>DbMode为SERVERLESS生效</p>
 * @method integer getAutoPauseDelay() 获取<p>当DbMode为SERVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置<p>当DbMode为SERVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
 * @method integer getStoragePayMode() 获取<p>集群存储计费模式，按量计费：0，包年包月：1。默认按量计费<br>当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费<br>回档与克隆均不支持包年包月存储</p>
 * @method void setStoragePayMode(integer $StoragePayMode) 设置<p>集群存储计费模式，按量计费：0，包年包月：1。默认按量计费<br>当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费<br>回档与克隆均不支持包年包月存储</p>
 * @method array getSecurityGroupIds() 获取<p>安全组id数组</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组id数组</p>
 * @method array getAlarmPolicyIds() 获取<p>告警策略Id数组</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) 设置<p>告警策略Id数组</p>
 * @method array getClusterParams() 获取<p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
 * @method void setClusterParams(array $ClusterParams) 设置<p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
 * @method integer getDealMode() 获取<p>交易模式</p><p>枚举值：</p><ul><li>0： 下单且支付</li><li>1： 下单</li></ul><p>默认值：0</p>
 * @method void setDealMode(integer $DealMode) 设置<p>交易模式</p><p>枚举值：</p><ul><li>0： 下单且支付</li><li>1： 下单</li></ul><p>默认值：0</p>
 * @method integer getParamTemplateId() 获取<p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置<p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
 * @method string getSlaveZone() 获取<p>多可用区地址</p>
 * @method void setSlaveZone(string $SlaveZone) 设置<p>多可用区地址</p>
 * @method array getInstanceInitInfos() 获取<p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
 * @method void setInstanceInitInfos(array $InstanceInitInfos) 设置<p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
 * @method string getGdnId() 获取<p>全球数据库唯一标识</p>
 * @method void setGdnId(string $GdnId) 设置<p>全球数据库唯一标识</p>
 * @method ProxyConfig getProxyConfig() 获取<p>数据库代理配置</p>
 * @method void setProxyConfig(ProxyConfig $ProxyConfig) 设置<p>数据库代理配置</p>
 * @method string getAutoArchive() 获取<p>是否自动归档</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：no</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
 * @method void setAutoArchive(string $AutoArchive) 设置<p>是否自动归档</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：no</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
 * @method integer getAutoArchiveDelayHours() 获取<p>暂停后的归档处理时间</p><p>单位：时</p><p>默认值：12</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) 设置<p>暂停后的归档处理时间</p><p>单位：时</p><p>默认值：12</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
 * @method string getCynosVersion() 获取<p>内核小版本号</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>内核小版本号</p>
 */
class CreateClustersRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>所属VPC网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>所属子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>数据库类型</p><p>枚举值：</p><ul><li>MYSQL： MYSQL</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>数据库版本</p><p>枚举值：</p><ul><li>5.7： MySQL5.7版本</li><li>8.0： MySQL8.0版本</li></ul>
     */
    public $DbVersion;

    /**
     * @var integer <p>所属项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>当DbMode为NORMAL或不填时必选<br>普通实例Cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>当DbMode为NORMAL或不填时必选<br>普通实例内存,单位GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例数量，数量范围为(0,16]，默认值为2（即一个rw实例+一个ro实例），传递的n表示1个rw实例+n-1个ro实例（规格相同），如需要更精确的集群组成搭配，请使用InstanceInitInfos</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>该参数无实际意义，已废弃。<br>存储大小，单位GB。</p>
     */
    public $Storage;

    /**
     * @var string <p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
     */
    public $ClusterName;

    /**
     * @var string <p>账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/中的任意三种)</p>
     */
    public $AdminPassword;

    /**
     * @var integer <p>端口，默认3306，取值范围[0, 65535)</p>
     */
    public $Port;

    /**
     * @var integer <p>计费模式</p><p>枚举值：</p><ul><li>0： 表示按量计费</li><li>1： 表示包年包月</li></ul><p>默认值：0</p>
     */
    public $PayMode;

    /**
     * @var integer <p>购买集群数，可选值范围[1,50]，默认为1</p>
     */
    public $Count;

    /**
     * @var string <p>回档类型</p><p>枚举值：</p><ul><li>noneRollback： 不回档</li><li>snapRollback： 快照回档</li><li>timeRollback： 时间点回档</li></ul>
     */
    public $RollbackStrategy;

    /**
     * @var integer <p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
     */
    public $RollbackId;

    /**
     * @var string <p>回档时，传入源集群ID，用于查找源poolId</p>
     */
    public $OriginalClusterId;

    /**
     * @var string <p>时间点回档，指定时间；快照回档，快照时间</p>
     */
    public $ExpectTime;

    /**
     * @var integer <p>该参数无实际意义，已废弃。<br>时间点回档，指定时间允许范围</p>
     */
    public $ExpectTimeThresh;

    /**
     * @var integer <p>普通实例存储上限，单位GB<br>当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>包年包月购买时长</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>包年包月购买时长单位，[&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>包年包月购买是否自动续费</p><p>枚举值：</p><ul><li>0： 默认续费方式</li><li>1： 自动续费</li><li>2： 不自动续费</li></ul><p>默认值：0</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否自动选择代金券 1是 0否 默认为0</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 否</li></ul><p>默认值：0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>实例数量（该参数已不再使用，只做存量兼容处理）</p>
     */
    public $HaCount;

    /**
     * @var string <p>订单来源</p>
     */
    public $OrderSource;

    /**
     * @var array <p>集群创建需要绑定的tag数组信息</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Db类型</p><p>枚举值：</p><ul><li>NORMAL： 普通实例</li><li>SERVERLESS： serverless实例</li></ul><p>默认值：NORMAL</p><p>当DbType为MYSQL时可选(默认NORMAL)</p>
     */
    public $DbMode;

    /**
     * @var float <p>当DbMode为SERVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MinCpu;

    /**
     * @var float <p>当DbMode为SERVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：yes</p><p>DbMode为SERVERLESS生效</p>
     */
    public $AutoPause;

    /**
     * @var integer <p>当DbMode为SERVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var integer <p>集群存储计费模式，按量计费：0，包年包月：1。默认按量计费<br>当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费<br>回档与克隆均不支持包年包月存储</p>
     */
    public $StoragePayMode;

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
     * @var integer <p>交易模式</p><p>枚举值：</p><ul><li>0： 下单且支付</li><li>1： 下单</li></ul><p>默认值：0</p>
     */
    public $DealMode;

    /**
     * @var integer <p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
     */
    public $ParamTemplateId;

    /**
     * @var string <p>多可用区地址</p>
     */
    public $SlaveZone;

    /**
     * @var array <p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
     */
    public $InstanceInitInfos;

    /**
     * @var string <p>全球数据库唯一标识</p>
     */
    public $GdnId;

    /**
     * @var ProxyConfig <p>数据库代理配置</p>
     */
    public $ProxyConfig;

    /**
     * @var string <p>是否自动归档</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：no</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
     */
    public $AutoArchive;

    /**
     * @var integer <p>暂停后的归档处理时间</p><p>单位：时</p><p>默认值：12</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string <p>内核小版本号</p>
     */
    public $CynosVersion;

    /**
     * @param string $Zone <p>可用区</p>
     * @param string $VpcId <p>所属VPC网络ID</p>
     * @param string $SubnetId <p>所属子网ID</p>
     * @param string $DbType <p>数据库类型</p><p>枚举值：</p><ul><li>MYSQL： MYSQL</li></ul>
     * @param string $DbVersion <p>数据库版本</p><p>枚举值：</p><ul><li>5.7： MySQL5.7版本</li><li>8.0： MySQL8.0版本</li></ul>
     * @param integer $ProjectId <p>所属项目ID</p>
     * @param integer $Cpu <p>当DbMode为NORMAL或不填时必选<br>普通实例Cpu核数</p>
     * @param integer $Memory <p>当DbMode为NORMAL或不填时必选<br>普通实例内存,单位GB</p>
     * @param integer $InstanceCount <p>实例数量，数量范围为(0,16]，默认值为2（即一个rw实例+一个ro实例），传递的n表示1个rw实例+n-1个ro实例（规格相同），如需要更精确的集群组成搭配，请使用InstanceInitInfos</p>
     * @param integer $Storage <p>该参数无实际意义，已废弃。<br>存储大小，单位GB。</p>
     * @param string $ClusterName <p>集群名称，长度小于64个字符，每个字符取值范围：大/小写字母，数字，特殊符号（&#39;-&#39;,&#39;_&#39;,&#39;.&#39;）</p>
     * @param string $AdminPassword <p>账号密码(8-64个字符，包含大小写英文字母、数字和符号~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/中的任意三种)</p>
     * @param integer $Port <p>端口，默认3306，取值范围[0, 65535)</p>
     * @param integer $PayMode <p>计费模式</p><p>枚举值：</p><ul><li>0： 表示按量计费</li><li>1： 表示包年包月</li></ul><p>默认值：0</p>
     * @param integer $Count <p>购买集群数，可选值范围[1,50]，默认为1</p>
     * @param string $RollbackStrategy <p>回档类型</p><p>枚举值：</p><ul><li>noneRollback： 不回档</li><li>snapRollback： 快照回档</li><li>timeRollback： 时间点回档</li></ul>
     * @param integer $RollbackId <p>快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效</p>
     * @param string $OriginalClusterId <p>回档时，传入源集群ID，用于查找源poolId</p>
     * @param string $ExpectTime <p>时间点回档，指定时间；快照回档，快照时间</p>
     * @param integer $ExpectTimeThresh <p>该参数无实际意义，已废弃。<br>时间点回档，指定时间允许范围</p>
     * @param integer $StorageLimit <p>普通实例存储上限，单位GB<br>当DbType为MYSQL，且存储计费模式为预付费时，该参数需不大于cpu与memory对应存储规格上限</p>
     * @param integer $TimeSpan <p>包年包月购买时长</p>
     * @param string $TimeUnit <p>包年包月购买时长单位，[&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
     * @param integer $AutoRenewFlag <p>包年包月购买是否自动续费</p><p>枚举值：</p><ul><li>0： 默认续费方式</li><li>1： 自动续费</li><li>2： 不自动续费</li></ul><p>默认值：0</p>
     * @param integer $AutoVoucher <p>是否自动选择代金券 1是 0否 默认为0</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 否</li></ul><p>默认值：0</p>
     * @param integer $HaCount <p>实例数量（该参数已不再使用，只做存量兼容处理）</p>
     * @param string $OrderSource <p>订单来源</p>
     * @param array $ResourceTags <p>集群创建需要绑定的tag数组信息</p>
     * @param string $DbMode <p>Db类型</p><p>枚举值：</p><ul><li>NORMAL： 普通实例</li><li>SERVERLESS： serverless实例</li></ul><p>默认值：NORMAL</p><p>当DbType为MYSQL时可选(默认NORMAL)</p>
     * @param float $MinCpu <p>当DbMode为SERVERLESS时必填<br>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param float $MaxCpu <p>当DbMode为SERVERLESS时必填：<br>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param string $AutoPause <p>否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：yes</p><p>DbMode为SERVERLESS生效</p>
     * @param integer $AutoPauseDelay <p>当DbMode为SERVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]<br>默认值:600</p>
     * @param integer $StoragePayMode <p>集群存储计费模式，按量计费：0，包年包月：1。默认按量计费<br>当DbType为MYSQL时，在集群计算计费模式为后付费（包括DbMode为SERVERLESS）时，存储计费模式仅可为按量计费<br>回档与克隆均不支持包年包月存储</p>
     * @param array $SecurityGroupIds <p>安全组id数组</p>
     * @param array $AlarmPolicyIds <p>告警策略Id数组</p>
     * @param array $ClusterParams <p>参数数组，暂时支持character_set_server （utf8｜latin1｜gbk｜utf8mb4） ，lower_case_table_names，1-大小写不敏感，0-大小写敏感</p>
     * @param integer $DealMode <p>交易模式</p><p>枚举值：</p><ul><li>0： 下单且支付</li><li>1： 下单</li></ul><p>默认值：0</p>
     * @param integer $ParamTemplateId <p>参数模板ID，可以通过查询参数模板信息DescribeParamTemplates获得参数模板ID</p>
     * @param string $SlaveZone <p>多可用区地址</p>
     * @param array $InstanceInitInfos <p>实例初始化配置信息，主要用于购买集群时选不同规格实例</p>
     * @param string $GdnId <p>全球数据库唯一标识</p>
     * @param ProxyConfig $ProxyConfig <p>数据库代理配置</p>
     * @param string $AutoArchive <p>是否自动归档</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul><p>默认值：no</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
     * @param integer $AutoArchiveDelayHours <p>暂停后的归档处理时间</p><p>单位：时</p><p>默认值：12</p><p>仅当前集群主实例为SERVERLESS时，该参数生效</p>
     * @param string $CynosVersion <p>内核小版本号</p>
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

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
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

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
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

        if (array_key_exists("HaCount",$param) and $param["HaCount"] !== null) {
            $this->HaCount = $param["HaCount"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
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
                $obj = new InstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("ProxyConfig",$param) and $param["ProxyConfig"] !== null) {
            $this->ProxyConfig = new ProxyConfig();
            $this->ProxyConfig->deserialize($param["ProxyConfig"]);
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("AutoArchiveDelayHours",$param) and $param["AutoArchiveDelayHours"] !== null) {
            $this->AutoArchiveDelayHours = $param["AutoArchiveDelayHours"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }
    }
}
