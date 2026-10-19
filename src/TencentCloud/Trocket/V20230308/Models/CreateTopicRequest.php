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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getTopic() 获取主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method void setTopic(string $Topic) 设置主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method string getTopicType() 获取<p>主题类型</p><p>枚举值：</p><ul><li>NORMAL： 普通消息</li><li>FIFO： 顺序消息</li><li>DELAY： 延迟消息</li><li>TRANSACTION： 事务消息</li><li>LITE： 轻量消息</li><li>PRIORITY： 优先级消息</li></ul>
 * @method void setTopicType(string $TopicType) 设置<p>主题类型</p><p>枚举值：</p><ul><li>NORMAL： 普通消息</li><li>FIFO： 顺序消息</li><li>DELAY： 延迟消息</li><li>TRANSACTION： 事务消息</li><li>LITE： 轻量消息</li><li>PRIORITY： 优先级消息</li></ul>
 * @method integer getQueueNum() 获取<p>队列数量，取值范围3～16</p>
 * @method void setQueueNum(integer $QueueNum) 设置<p>队列数量，取值范围3～16</p>
 * @method string getRemark() 获取<p>备注信息，最多 128 个字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息，最多 128 个字符</p>
 * @method integer getMsgTTL() 获取<p>消息保留时长（单位：小时）</p>
 * @method void setMsgTTL(integer $MsgTTL) 设置<p>消息保留时长（单位：小时）</p>
 * @method array getTagList() 获取<p>标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>标签列表</p>
 * @method boolean getAutoExpireDelete() 获取<p>是否过期自动删除（仅针对轻量主题类型）</p>
 * @method void setAutoExpireDelete(boolean $AutoExpireDelete) 设置<p>是否过期自动删除（仅针对轻量主题类型）</p>
 * @method integer getAutoExpireTime() 获取<p>过期时间，单位：秒（仅针对轻量主题类型）</p>
 * @method void setAutoExpireTime(integer $AutoExpireTime) 设置<p>过期时间，单位：秒（仅针对轻量主题类型）</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     */
    public $Topic;

    /**
     * @var string <p>主题类型</p><p>枚举值：</p><ul><li>NORMAL： 普通消息</li><li>FIFO： 顺序消息</li><li>DELAY： 延迟消息</li><li>TRANSACTION： 事务消息</li><li>LITE： 轻量消息</li><li>PRIORITY： 优先级消息</li></ul>
     */
    public $TopicType;

    /**
     * @var integer <p>队列数量，取值范围3～16</p>
     */
    public $QueueNum;

    /**
     * @var string <p>备注信息，最多 128 个字符</p>
     */
    public $Remark;

    /**
     * @var integer <p>消息保留时长（单位：小时）</p>
     */
    public $MsgTTL;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagList;

    /**
     * @var boolean <p>是否过期自动删除（仅针对轻量主题类型）</p>
     */
    public $AutoExpireDelete;

    /**
     * @var integer <p>过期时间，单位：秒（仅针对轻量主题类型）</p>
     */
    public $AutoExpireTime;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Topic 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     * @param string $TopicType <p>主题类型</p><p>枚举值：</p><ul><li>NORMAL： 普通消息</li><li>FIFO： 顺序消息</li><li>DELAY： 延迟消息</li><li>TRANSACTION： 事务消息</li><li>LITE： 轻量消息</li><li>PRIORITY： 优先级消息</li></ul>
     * @param integer $QueueNum <p>队列数量，取值范围3～16</p>
     * @param string $Remark <p>备注信息，最多 128 个字符</p>
     * @param integer $MsgTTL <p>消息保留时长（单位：小时）</p>
     * @param array $TagList <p>标签列表</p>
     * @param boolean $AutoExpireDelete <p>是否过期自动删除（仅针对轻量主题类型）</p>
     * @param integer $AutoExpireTime <p>过期时间，单位：秒（仅针对轻量主题类型）</p>
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("AutoExpireDelete",$param) and $param["AutoExpireDelete"] !== null) {
            $this->AutoExpireDelete = $param["AutoExpireDelete"];
        }

        if (array_key_exists("AutoExpireTime",$param) and $param["AutoExpireTime"] !== null) {
            $this->AutoExpireTime = $param["AutoExpireTime"];
        }
    }
}
