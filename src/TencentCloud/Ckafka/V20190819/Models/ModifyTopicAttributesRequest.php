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
 * ModifyTopicAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getTopicName() 获取<p>主题名</p>
 * @method void setTopicName(string $TopicName) 设置<p>主题名</p>
 * @method string getNote() 获取<p>主题备注</p><p>入参限制：不超过64个字符</p><p>默认值：&quot;&quot;</p>
 * @method void setNote(string $Note) 设置<p>主题备注</p><p>入参限制：不超过64个字符</p><p>默认值：&quot;&quot;</p>
 * @method integer getEnableWhiteList() 获取<p>IP 白名单开关，1：打开；0：关闭。</p>
 * @method void setEnableWhiteList(integer $EnableWhiteList) 设置<p>IP 白名单开关，1：打开；0：关闭。</p>
 * @method integer getMinInsyncReplicas() 获取<p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置<p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
 * @method integer getUncleanLeaderElectionEnable() 获取<p>是否允许未同步的副本选为leader</p><p>枚举值：</p><ul><li>0： 不允许</li><li>1： 允许</li></ul><p>默认值：0</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置<p>是否允许未同步的副本选为leader</p><p>枚举值：</p><ul><li>0： 不允许</li><li>1： 允许</li></ul><p>默认值：0</p>
 * @method integer getRetentionMs() 获取<p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
 * @method void setRetentionMs(integer $RetentionMs) 设置<p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
 * @method integer getMaxMessageBytes() 获取<p>主题消息最大值</p><p>取值范围：[1024, 12582912]</p><p>单位：Bytes</p>
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) 设置<p>主题消息最大值</p><p>取值范围：[1024, 12582912]</p><p>单位：Bytes</p>
 * @method integer getSegmentMs() 获取<p>Segment 分片滚动的时长</p><p>单位：毫秒</p><p>最小值为86400000ms（1天）</p>
 * @method void setSegmentMs(integer $SegmentMs) 设置<p>Segment 分片滚动的时长</p><p>单位：毫秒</p><p>最小值为86400000ms（1天）</p>
 * @method string getCleanUpPolicy() 获取<p>消息删除策略，可以选择delete 或者compact</p>
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置<p>消息删除策略，可以选择delete 或者compact</p>
 * @method array getIpWhiteList() 获取<p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
 * @method integer getEnableAclRule() 获取<p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
 * @method void setEnableAclRule(integer $EnableAclRule) 设置<p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
 * @method string getAclRuleName() 获取<p>ACL规则名</p>
 * @method void setAclRuleName(string $AclRuleName) 设置<p>ACL规则名</p>
 * @method integer getRetentionBytes() 获取<p>可选, 保留文件大小</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：Bytes</p><p>默认值：-1</p><p>特殊值：-1表示无限制</p>
 * @method void setRetentionBytes(integer $RetentionBytes) 设置<p>可选, 保留文件大小</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：Bytes</p><p>默认值：-1</p><p>特殊值：-1表示无限制</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method integer getQuotaProducerByteRate() 获取<p>生产限流，单位 MB/s；设置为-1，则生产不限流</p>
 * @method void setQuotaProducerByteRate(integer $QuotaProducerByteRate) 设置<p>生产限流，单位 MB/s；设置为-1，则生产不限流</p>
 * @method integer getQuotaConsumerByteRate() 获取<p>消费限流，单位 MB/s；设置为-1，则消费不限流</p>
 * @method void setQuotaConsumerByteRate(integer $QuotaConsumerByteRate) 设置<p>消费限流，单位 MB/s；设置为-1，则消费不限流</p>
 * @method integer getReplicaNum() 获取<p>topic副本数  最小值 1,最大值 3</p>
 * @method void setReplicaNum(integer $ReplicaNum) 设置<p>topic副本数  最小值 1,最大值 3</p>
 * @method string getLogMsgTimestampType() 获取<p>消息保存的时间类型：CreateTime/LogAppendTime</p>
 * @method void setLogMsgTimestampType(string $LogMsgTimestampType) 设置<p>消息保存的时间类型：CreateTime/LogAppendTime</p>
 */
class ModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名</p>
     */
    public $TopicName;

    /**
     * @var string <p>主题备注</p><p>入参限制：不超过64个字符</p><p>默认值：&quot;&quot;</p>
     */
    public $Note;

    /**
     * @var integer <p>IP 白名单开关，1：打开；0：关闭。</p>
     */
    public $EnableWhiteList;

    /**
     * @var integer <p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
     */
    public $MinInsyncReplicas;

    /**
     * @var integer <p>是否允许未同步的副本选为leader</p><p>枚举值：</p><ul><li>0： 不允许</li><li>1： 允许</li></ul><p>默认值：0</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
     */
    public $RetentionMs;

    /**
     * @var integer <p>主题消息最大值</p><p>取值范围：[1024, 12582912]</p><p>单位：Bytes</p>
     */
    public $MaxMessageBytes;

    /**
     * @var integer <p>Segment 分片滚动的时长</p><p>单位：毫秒</p><p>最小值为86400000ms（1天）</p>
     */
    public $SegmentMs;

    /**
     * @var string <p>消息删除策略，可以选择delete 或者compact</p>
     */
    public $CleanUpPolicy;

    /**
     * @var array <p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
     */
    public $IpWhiteList;

    /**
     * @var integer <p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
     */
    public $EnableAclRule;

    /**
     * @var string <p>ACL规则名</p>
     */
    public $AclRuleName;

    /**
     * @var integer <p>可选, 保留文件大小</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：Bytes</p><p>默认值：-1</p><p>特殊值：-1表示无限制</p>
     */
    public $RetentionBytes;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var integer <p>生产限流，单位 MB/s；设置为-1，则生产不限流</p>
     */
    public $QuotaProducerByteRate;

    /**
     * @var integer <p>消费限流，单位 MB/s；设置为-1，则消费不限流</p>
     */
    public $QuotaConsumerByteRate;

    /**
     * @var integer <p>topic副本数  最小值 1,最大值 3</p>
     */
    public $ReplicaNum;

    /**
     * @var string <p>消息保存的时间类型：CreateTime/LogAppendTime</p>
     */
    public $LogMsgTimestampType;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $TopicName <p>主题名</p>
     * @param string $Note <p>主题备注</p><p>入参限制：不超过64个字符</p><p>默认值：&quot;&quot;</p>
     * @param integer $EnableWhiteList <p>IP 白名单开关，1：打开；0：关闭。</p>
     * @param integer $MinInsyncReplicas <p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
     * @param integer $UncleanLeaderElectionEnable <p>是否允许未同步的副本选为leader</p><p>枚举值：</p><ul><li>0： 不允许</li><li>1： 允许</li></ul><p>默认值：0</p>
     * @param integer $RetentionMs <p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
     * @param integer $MaxMessageBytes <p>主题消息最大值</p><p>取值范围：[1024, 12582912]</p><p>单位：Bytes</p>
     * @param integer $SegmentMs <p>Segment 分片滚动的时长</p><p>单位：毫秒</p><p>最小值为86400000ms（1天）</p>
     * @param string $CleanUpPolicy <p>消息删除策略，可以选择delete 或者compact</p>
     * @param array $IpWhiteList <p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
     * @param integer $EnableAclRule <p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
     * @param string $AclRuleName <p>ACL规则名</p>
     * @param integer $RetentionBytes <p>可选, 保留文件大小</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：Bytes</p><p>默认值：-1</p><p>特殊值：-1表示无限制</p>
     * @param array $Tags <p>标签列表</p>
     * @param integer $QuotaProducerByteRate <p>生产限流，单位 MB/s；设置为-1，则生产不限流</p>
     * @param integer $QuotaConsumerByteRate <p>消费限流，单位 MB/s；设置为-1，则消费不限流</p>
     * @param integer $ReplicaNum <p>topic副本数  最小值 1,最大值 3</p>
     * @param string $LogMsgTimestampType <p>消息保存的时间类型：CreateTime/LogAppendTime</p>
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("EnableAclRule",$param) and $param["EnableAclRule"] !== null) {
            $this->EnableAclRule = $param["EnableAclRule"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("QuotaProducerByteRate",$param) and $param["QuotaProducerByteRate"] !== null) {
            $this->QuotaProducerByteRate = $param["QuotaProducerByteRate"];
        }

        if (array_key_exists("QuotaConsumerByteRate",$param) and $param["QuotaConsumerByteRate"] !== null) {
            $this->QuotaConsumerByteRate = $param["QuotaConsumerByteRate"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("LogMsgTimestampType",$param) and $param["LogMsgTimestampType"] !== null) {
            $this->LogMsgTimestampType = $param["LogMsgTimestampType"];
        }
    }
}
