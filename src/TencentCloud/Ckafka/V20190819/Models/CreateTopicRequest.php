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
 * CreateTopic请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getTopicName() 获取<p>只能包含字母、数字、下划线、“-”、“.”</p>
 * @method void setTopicName(string $TopicName) 设置<p>只能包含字母、数字、下划线、“-”、“.”</p>
 * @method integer getPartitionNum() 获取<p>Partition个数，大于0</p>
 * @method void setPartitionNum(integer $PartitionNum) 设置<p>Partition个数，大于0</p>
 * @method integer getReplicaNum() 获取<p>副本个数，不能多于 broker 数，最大为3</p>
 * @method void setReplicaNum(integer $ReplicaNum) 设置<p>副本个数，不能多于 broker 数，最大为3</p>
 * @method integer getEnableWhiteList() 获取<p>ip白名单开关, 1:打开  0:关闭，默认不打开</p>
 * @method void setEnableWhiteList(integer $EnableWhiteList) 设置<p>ip白名单开关, 1:打开  0:关闭，默认不打开</p>
 * @method array getIpWhiteList() 获取<p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
 * @method string getCleanUpPolicy() 获取<p>清理日志策略，日志清理模式，默认为&quot;delete&quot;。&quot;delete&quot;：日志按保存时间删除，&quot;compact&quot;：日志按 key 压缩，&quot;compact, delete&quot;：日志按 key 压缩且会按保存时间删除。</p>
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置<p>清理日志策略，日志清理模式，默认为&quot;delete&quot;。&quot;delete&quot;：日志按保存时间删除，&quot;compact&quot;：日志按 key 压缩，&quot;compact, delete&quot;：日志按 key 压缩且会按保存时间删除。</p>
 * @method string getNote() 获取<p>主题备注</p><p>入参限制：不超过 64 个字符</p>
 * @method void setNote(string $Note) 设置<p>主题备注</p><p>入参限制：不超过 64 个字符</p>
 * @method integer getMinInsyncReplicas() 获取<p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置<p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
 * @method integer getUncleanLeaderElectionEnable() 获取<p>是否允许未同步的副本选为leader，0:不允许，1:允许，默认不允许</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置<p>是否允许未同步的副本选为leader，0:不允许，1:允许，默认不允许</p>
 * @method integer getRetentionMs() 获取<p>可选参数，消息保留时间</p><p>取值范围：[60000, 7776000000]</p><p>单位：毫秒</p><p>默认值：7200000</p>
 * @method void setRetentionMs(integer $RetentionMs) 设置<p>可选参数，消息保留时间</p><p>取值范围：[60000, 7776000000]</p><p>单位：毫秒</p><p>默认值：7200000</p>
 * @method integer getSegmentMs() 获取<p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
 * @method void setSegmentMs(integer $SegmentMs) 设置<p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
 * @method integer getMaxMessageBytes() 获取<p>主题消息最大值，单位为 Byte，最小值1024Bytes(即1KB)，最大值为12582912Bytes（即12MB）</p>
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) 设置<p>主题消息最大值，单位为 Byte，最小值1024Bytes(即1KB)，最大值为12582912Bytes（即12MB）</p>
 * @method integer getEnableAclRule() 获取<p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
 * @method void setEnableAclRule(integer $EnableAclRule) 设置<p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
 * @method string getAclRuleName() 获取<p>预设ACL规则的名称</p>
 * @method void setAclRuleName(string $AclRuleName) 设置<p>预设ACL规则的名称</p>
 * @method integer getRetentionBytes() 获取<p>可选, 保留文件大小. 默认为-1,单位Byte, 当前最小值为1073741824。</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：字节</p><p>特殊值：-1表示无限制</p>
 * @method void setRetentionBytes(integer $RetentionBytes) 设置<p>可选, 保留文件大小. 默认为-1,单位Byte, 当前最小值为1073741824。</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：字节</p><p>特殊值：-1表示无限制</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getLogMsgTimestampType() 获取<p>消息保存的时间类型:CreateTime/LogAppendTime</p>
 * @method void setLogMsgTimestampType(string $LogMsgTimestampType) 设置<p>消息保存的时间类型:CreateTime/LogAppendTime</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>只能包含字母、数字、下划线、“-”、“.”</p>
     */
    public $TopicName;

    /**
     * @var integer <p>Partition个数，大于0</p>
     */
    public $PartitionNum;

    /**
     * @var integer <p>副本个数，不能多于 broker 数，最大为3</p>
     */
    public $ReplicaNum;

    /**
     * @var integer <p>ip白名单开关, 1:打开  0:关闭，默认不打开</p>
     */
    public $EnableWhiteList;

    /**
     * @var array <p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
     */
    public $IpWhiteList;

    /**
     * @var string <p>清理日志策略，日志清理模式，默认为&quot;delete&quot;。&quot;delete&quot;：日志按保存时间删除，&quot;compact&quot;：日志按 key 压缩，&quot;compact, delete&quot;：日志按 key 压缩且会按保存时间删除。</p>
     */
    public $CleanUpPolicy;

    /**
     * @var string <p>主题备注</p><p>入参限制：不超过 64 个字符</p>
     */
    public $Note;

    /**
     * @var integer <p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
     */
    public $MinInsyncReplicas;

    /**
     * @var integer <p>是否允许未同步的副本选为leader，0:不允许，1:允许，默认不允许</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>可选参数，消息保留时间</p><p>取值范围：[60000, 7776000000]</p><p>单位：毫秒</p><p>默认值：7200000</p>
     */
    public $RetentionMs;

    /**
     * @var integer <p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
     */
    public $SegmentMs;

    /**
     * @var integer <p>主题消息最大值，单位为 Byte，最小值1024Bytes(即1KB)，最大值为12582912Bytes（即12MB）</p>
     */
    public $MaxMessageBytes;

    /**
     * @var integer <p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
     */
    public $EnableAclRule;

    /**
     * @var string <p>预设ACL规则的名称</p>
     */
    public $AclRuleName;

    /**
     * @var integer <p>可选, 保留文件大小. 默认为-1,单位Byte, 当前最小值为1073741824。</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：字节</p><p>特殊值：-1表示无限制</p>
     */
    public $RetentionBytes;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>消息保存的时间类型:CreateTime/LogAppendTime</p>
     */
    public $LogMsgTimestampType;

    /**
     * @param string $InstanceId <p>实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $TopicName <p>只能包含字母、数字、下划线、“-”、“.”</p>
     * @param integer $PartitionNum <p>Partition个数，大于0</p>
     * @param integer $ReplicaNum <p>副本个数，不能多于 broker 数，最大为3</p>
     * @param integer $EnableWhiteList <p>ip白名单开关, 1:打开  0:关闭，默认不打开</p>
     * @param array $IpWhiteList <p>Ip白名单列表，配额限制，enableWhileList=1时必选</p>
     * @param string $CleanUpPolicy <p>清理日志策略，日志清理模式，默认为&quot;delete&quot;。&quot;delete&quot;：日志按保存时间删除，&quot;compact&quot;：日志按 key 压缩，&quot;compact, delete&quot;：日志按 key 压缩且会按保存时间删除。</p>
     * @param string $Note <p>主题备注</p><p>入参限制：不超过 64 个字符</p>
     * @param integer $MinInsyncReplicas <p>最小同步副本数</p><p>默认值：1</p><p>最小值为1</p>
     * @param integer $UncleanLeaderElectionEnable <p>是否允许未同步的副本选为leader，0:不允许，1:允许，默认不允许</p>
     * @param integer $RetentionMs <p>可选参数，消息保留时间</p><p>取值范围：[60000, 7776000000]</p><p>单位：毫秒</p><p>默认值：7200000</p>
     * @param integer $SegmentMs <p>Segment分片滚动的时长</p><p>单位：毫秒</p><p>默认值：86400000</p><p>最小值为86400000ms（1天）</p>
     * @param integer $MaxMessageBytes <p>主题消息最大值，单位为 Byte，最小值1024Bytes(即1KB)，最大值为12582912Bytes（即12MB）</p>
     * @param integer $EnableAclRule <p>预设ACL规则, 1:打开  0:关闭，默认不打开</p>
     * @param string $AclRuleName <p>预设ACL规则的名称</p>
     * @param integer $RetentionBytes <p>可选, 保留文件大小. 默认为-1,单位Byte, 当前最小值为1073741824。</p><p>取值范围：[1073741824, 1099511627776]</p><p>单位：字节</p><p>特殊值：-1表示无限制</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $LogMsgTimestampType <p>消息保存的时间类型:CreateTime/LogAppendTime</p>
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

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
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

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
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

        if (array_key_exists("LogMsgTimestampType",$param) and $param["LogMsgTimestampType"] !== null) {
            $this->LogMsgTimestampType = $param["LogMsgTimestampType"];
        }
    }
}
