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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic请求参数结构体
 *
 * @method string getTopicName() 获取日志主题的名称。
 * @method void setTopicName(string $TopicName) 设置日志主题的名称。
 * @method integer getPartitionCount() 获取主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。
 * @method void setPartitionCount(integer $PartitionCount) 设置主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。
 * @method string getTopicType() 获取日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
 * @method void setTopicType(string $TopicType) 设置日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
 * @method integer getPeriod() 获取日志集的保存周期，单位：天，默认30天。
 * @method void setPeriod(integer $Period) 设置日志集的保存周期，单位：天，默认30天。
 * @method string getStorageType() 获取日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。
 * @method void setStorageType(string $StorageType) 设置日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 日志主题的名称。
     */
    public $TopicName;

    /**
     * @var integer 主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。
     */
    public $PartitionCount;

    /**
     * @var string 日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
     */
    public $TopicType;

    /**
     * @var integer 日志集的保存周期，单位：天，默认30天。
     */
    public $Period;

    /**
     * @var string 日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。
     */
    public $StorageType;

    /**
     * @param string $TopicName 日志主题的名称。
     * @param integer $PartitionCount 主题分区Partition的数量，不传参默认创建1个，最大创建允许10个，分裂/合并操作会改变分区数量，整体上限50个。
     * @param string $TopicType 日志类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
     * @param integer $Period 日志集的保存周期，单位：天，默认30天。
     * @param string $StorageType 日志主题的存储类型，可选值 HOT（标准存储），COLD（低频存储）；默认为HOT。
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
    }
}
