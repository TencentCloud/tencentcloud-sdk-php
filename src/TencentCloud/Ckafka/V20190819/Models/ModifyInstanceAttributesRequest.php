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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method integer getMsgRetentionTime() 获取<p>实例日志的最长保留时间，单位分钟，最大90天，最小为1min</p>
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置<p>实例日志的最长保留时间，单位分钟，最大90天，最小为1min</p>
 * @method string getInstanceName() 获取<p>ckafka集群实例Name</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ckafka集群实例Name</p>
 * @method ModifyInstanceAttributesConfig getConfig() 获取<p>实例配置</p>
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) 设置<p>实例配置</p>
 * @method DynamicRetentionTime getDynamicRetentionConfig() 获取<p>动态消息保留策略配置</p>
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) 设置<p>动态消息保留策略配置</p>
 * @method integer getRebalanceTime() 获取<p>用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒</p>
 * @method void setRebalanceTime(integer $RebalanceTime) 设置<p>用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒</p>
 * @method integer getPublicNetwork() 获取<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
 * @method void setPublicNetwork(integer $PublicNetwork) 设置<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
 * @method DynamicDiskConfig getDynamicDiskConfig() 获取<p>动态硬盘扩容策略配置</p>
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) 设置<p>动态硬盘扩容策略配置</p>
 * @method integer getMaxMessageByte() 获取<p>实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)</p>
 * @method void setMaxMessageByte(integer $MaxMessageByte) 设置<p>实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)</p>
 * @method integer getUncleanLeaderElectionEnable() 获取<p>是否允许未同步的副本选为 leader: 1 开启  0 关闭</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置<p>是否允许未同步的副本选为 leader: 1 开启  0 关闭</p>
 * @method integer getDeleteProtectionEnable() 获取<p>实例删除保护开关: 1 开启  0 关闭</p>
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) 设置<p>实例删除保护开关: 1 开启  0 关闭</p>
 * @method integer getRetentionBytes() 获取<p>实例级别消息保留大小</p>单位：byte<br>默认值：-1<br><p>实例级别消息保留大小</p>
 * @method void setRetentionBytes(integer $RetentionBytes) 设置<p>实例级别消息保留大小</p>单位：byte<br>默认值：-1<br><p>实例级别消息保留大小</p>
 * @method boolean getAdminSecurity() 获取<p>是否封禁高风险admin接口; true则封禁高风险adminApi; 关闭后不支持打开,仅专业版支持; 默认是false 对高风险admin接口不做处理</p>
 * @method void setAdminSecurity(boolean $AdminSecurity) 设置<p>是否封禁高风险admin接口; true则封禁高风险adminApi; 关闭后不支持打开,仅专业版支持; 默认是false 对高风险admin接口不做处理</p>
 * @method integer getTransactionalIdExpirationMs() 获取<p>事务ID最大空闲时间，超时未提交的事务将被标记为过期</p>取值范围：[3600000, 604800000]<br>单位：ms
 * @method void setTransactionalIdExpirationMs(integer $TransactionalIdExpirationMs) 设置<p>事务ID最大空闲时间，超时未提交的事务将被标记为过期</p>取值范围：[3600000, 604800000]<br>单位：ms
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例日志的最长保留时间，单位分钟，最大90天，最小为1min</p>
     */
    public $MsgRetentionTime;

    /**
     * @var string <p>ckafka集群实例Name</p>
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig <p>实例配置</p>
     */
    public $Config;

    /**
     * @var DynamicRetentionTime <p>动态消息保留策略配置</p>
     */
    public $DynamicRetentionConfig;

    /**
     * @var integer <p>用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒</p>
     */
    public $RebalanceTime;

    /**
     * @var integer <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
     */
    public $PublicNetwork;

    /**
     * @var DynamicDiskConfig <p>动态硬盘扩容策略配置</p>
     * @deprecated
     */
    public $DynamicDiskConfig;

    /**
     * @var integer <p>实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)</p>
     */
    public $MaxMessageByte;

    /**
     * @var integer <p>是否允许未同步的副本选为 leader: 1 开启  0 关闭</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>实例删除保护开关: 1 开启  0 关闭</p>
     */
    public $DeleteProtectionEnable;

    /**
     * @var integer <p>实例级别消息保留大小</p>单位：byte<br>默认值：-1<br><p>实例级别消息保留大小</p>
     */
    public $RetentionBytes;

    /**
     * @var boolean <p>是否封禁高风险admin接口; true则封禁高风险adminApi; 关闭后不支持打开,仅专业版支持; 默认是false 对高风险admin接口不做处理</p>
     */
    public $AdminSecurity;

    /**
     * @var integer <p>事务ID最大空闲时间，超时未提交的事务将被标记为过期</p>取值范围：[3600000, 604800000]<br>单位：ms
     */
    public $TransactionalIdExpirationMs;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param integer $MsgRetentionTime <p>实例日志的最长保留时间，单位分钟，最大90天，最小为1min</p>
     * @param string $InstanceName <p>ckafka集群实例Name</p>
     * @param ModifyInstanceAttributesConfig $Config <p>实例配置</p>
     * @param DynamicRetentionTime $DynamicRetentionConfig <p>动态消息保留策略配置</p>
     * @param integer $RebalanceTime <p>用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒</p>
     * @param integer $PublicNetwork <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
     * @param DynamicDiskConfig $DynamicDiskConfig <p>动态硬盘扩容策略配置</p>
     * @param integer $MaxMessageByte <p>实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)</p>
     * @param integer $UncleanLeaderElectionEnable <p>是否允许未同步的副本选为 leader: 1 开启  0 关闭</p>
     * @param integer $DeleteProtectionEnable <p>实例删除保护开关: 1 开启  0 关闭</p>
     * @param integer $RetentionBytes <p>实例级别消息保留大小</p>单位：byte<br>默认值：-1<br><p>实例级别消息保留大小</p>
     * @param boolean $AdminSecurity <p>是否封禁高风险admin接口; true则封禁高风险adminApi; 关闭后不支持打开,仅专业版支持; 默认是false 对高风险admin接口不做处理</p>
     * @param integer $TransactionalIdExpirationMs <p>事务ID最大空闲时间，超时未提交的事务将被标记为过期</p>取值范围：[3600000, 604800000]<br>单位：ms
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ModifyInstanceAttributesConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("DynamicRetentionConfig",$param) and $param["DynamicRetentionConfig"] !== null) {
            $this->DynamicRetentionConfig = new DynamicRetentionTime();
            $this->DynamicRetentionConfig->deserialize($param["DynamicRetentionConfig"]);
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("DynamicDiskConfig",$param) and $param["DynamicDiskConfig"] !== null) {
            $this->DynamicDiskConfig = new DynamicDiskConfig();
            $this->DynamicDiskConfig->deserialize($param["DynamicDiskConfig"]);
        }

        if (array_key_exists("MaxMessageByte",$param) and $param["MaxMessageByte"] !== null) {
            $this->MaxMessageByte = $param["MaxMessageByte"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("DeleteProtectionEnable",$param) and $param["DeleteProtectionEnable"] !== null) {
            $this->DeleteProtectionEnable = $param["DeleteProtectionEnable"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("AdminSecurity",$param) and $param["AdminSecurity"] !== null) {
            $this->AdminSecurity = $param["AdminSecurity"];
        }

        if (array_key_exists("TransactionalIdExpirationMs",$param) and $param["TransactionalIdExpirationMs"] !== null) {
            $this->TransactionalIdExpirationMs = $param["TransactionalIdExpirationMs"];
        }
    }
}
