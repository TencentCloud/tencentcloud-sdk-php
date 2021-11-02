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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTopicAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getNote() 获取主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
 * @method void setNote(string $Note) 设置主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
 * @method integer getEnableWhiteList() 获取IP 白名单开关，1：打开；0：关闭。
 * @method void setEnableWhiteList(integer $EnableWhiteList) 设置IP 白名单开关，1：打开；0：关闭。
 * @method integer getMinInsyncReplicas() 获取默认为1。
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置默认为1。
 * @method integer getUncleanLeaderElectionEnable() 获取默认为 0，0：false；1：true。
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置默认为 0，0：false；1：true。
 * @method integer getRetentionMs() 获取消息保留时间，单位：ms，当前最小值为60000ms。
 * @method void setRetentionMs(integer $RetentionMs) 设置消息保留时间，单位：ms，当前最小值为60000ms。
 * @method integer getSegmentMs() 获取Segment 分片滚动的时长，单位：ms，当前最小为86400000ms。
 * @method void setSegmentMs(integer $SegmentMs) 设置Segment 分片滚动的时长，单位：ms，当前最小为86400000ms。
 * @method integer getMaxMessageBytes() 获取主题消息最大值，单位为 Byte，最大值为8388608Byte（即8MB）。
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) 设置主题消息最大值，单位为 Byte，最大值为8388608Byte（即8MB）。
 * @method string getCleanUpPolicy() 获取消息删除策略，可以选择delete 或者compact
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置消息删除策略，可以选择delete 或者compact
 * @method array getIpWhiteList() 获取Ip白名单列表，配额限制，enableWhileList=1时必选
 * @method void setIpWhiteList(array $IpWhiteList) 设置Ip白名单列表，配额限制，enableWhileList=1时必选
 * @method integer getEnableAclRule() 获取预设ACL规则, 1:打开  0:关闭，默认不打开
 * @method void setEnableAclRule(integer $EnableAclRule) 设置预设ACL规则, 1:打开  0:关闭，默认不打开
 * @method string getAclRuleName() 获取预设ACL规则的名称
 * @method void setAclRuleName(string $AclRuleName) 设置预设ACL规则的名称
 * @method integer getRetentionBytes() 获取可选, 保留文件大小. 默认为-1,单位bytes, 当前最小值为1048576B
 * @method void setRetentionBytes(integer $RetentionBytes) 设置可选, 保留文件大小. 默认为-1,单位bytes, 当前最小值为1048576B
 */
class ModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string 主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
     */
    public $Note;

    /**
     * @var integer IP 白名单开关，1：打开；0：关闭。
     */
    public $EnableWhiteList;

    /**
     * @var integer 默认为1。
     */
    public $MinInsyncReplicas;

    /**
     * @var integer 默认为 0，0：false；1：true。
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer 消息保留时间，单位：ms，当前最小值为60000ms。
     */
    public $RetentionMs;

    /**
     * @var integer Segment 分片滚动的时长，单位：ms，当前最小为86400000ms。
     */
    public $SegmentMs;

    /**
     * @var integer 主题消息最大值，单位为 Byte，最大值为8388608Byte（即8MB）。
     */
    public $MaxMessageBytes;

    /**
     * @var string 消息删除策略，可以选择delete 或者compact
     */
    public $CleanUpPolicy;

    /**
     * @var array Ip白名单列表，配额限制，enableWhileList=1时必选
     */
    public $IpWhiteList;

    /**
     * @var integer 预设ACL规则, 1:打开  0:关闭，默认不打开
     */
    public $EnableAclRule;

    /**
     * @var string 预设ACL规则的名称
     */
    public $AclRuleName;

    /**
     * @var integer 可选, 保留文件大小. 默认为-1,单位bytes, 当前最小值为1048576B
     */
    public $RetentionBytes;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $TopicName 主题名称。
     * @param string $Note 主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
     * @param integer $EnableWhiteList IP 白名单开关，1：打开；0：关闭。
     * @param integer $MinInsyncReplicas 默认为1。
     * @param integer $UncleanLeaderElectionEnable 默认为 0，0：false；1：true。
     * @param integer $RetentionMs 消息保留时间，单位：ms，当前最小值为60000ms。
     * @param integer $SegmentMs Segment 分片滚动的时长，单位：ms，当前最小为86400000ms。
     * @param integer $MaxMessageBytes 主题消息最大值，单位为 Byte，最大值为8388608Byte（即8MB）。
     * @param string $CleanUpPolicy 消息删除策略，可以选择delete 或者compact
     * @param array $IpWhiteList Ip白名单列表，配额限制，enableWhileList=1时必选
     * @param integer $EnableAclRule 预设ACL规则, 1:打开  0:关闭，默认不打开
     * @param string $AclRuleName 预设ACL规则的名称
     * @param integer $RetentionBytes 可选, 保留文件大小. 默认为-1,单位bytes, 当前最小值为1048576B
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

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
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
    }
}
