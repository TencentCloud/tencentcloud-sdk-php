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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic请求参数结构体
 *
 * @method string getTopicName() 获取<p>日志主题的名称。</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题的名称。</p>
 * @method integer getPartitionCount() 获取<p>主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。</p>
 * @method string getTopicType() 获取<p>日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。</p>
 * @method void setTopicType(string $TopicType) 设置<p>日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。</p>
 * @method integer getPeriod() 获取<p>存储时间，单位天，默认为 30。</p><ul><li>日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li></ul>
 * @method void setPeriod(integer $Period) 设置<p>存储时间，单位天，默认为 30。</p><ul><li>日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li></ul>
 * @method string getStorageType() 获取<p>日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。</p>
 * @method void setStorageType(string $StorageType) 设置<p>日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。</p>
 * @method array getTags() 获取<p>标签</p><p>最多支持一次传入20个</p>
 * @method void setTags(array $Tags) 设置<p>标签</p><p>最多支持一次传入20个</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题的名称。</p>
     */
    public $TopicName;

    /**
     * @var integer <p>主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。</p>
     */
    public $PartitionCount;

    /**
     * @var string <p>日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。</p>
     */
    public $TopicType;

    /**
     * @var integer <p>存储时间，单位天，默认为 30。</p><ul><li>日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li></ul>
     */
    public $Period;

    /**
     * @var string <p>日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。</p>
     */
    public $StorageType;

    /**
     * @var array <p>标签</p><p>最多支持一次传入20个</p>
     */
    public $Tags;

    /**
     * @param string $TopicName <p>日志主题的名称。</p>
     * @param integer $PartitionCount <p>主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。</p>
     * @param string $TopicType <p>日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。</p>
     * @param integer $Period <p>存储时间，单位天，默认为 30。</p><ul><li>日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li></ul>
     * @param string $StorageType <p>日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。</p>
     * @param array $Tags <p>标签</p><p>最多支持一次传入20个</p>
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
