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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic请求参数结构体
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 * @method integer getPartitionCount() 获取日志主题分区个数。默认创建1个，最大支持创建10个分区。
 * @method void setPartitionCount(integer $PartitionCount) 设置日志主题分区个数。默认创建1个，最大支持创建10个分区。
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
 * @method boolean getAutoSplit() 获取是否开启自动分裂，默认值为true
 * @method void setAutoSplit(boolean $AutoSplit) 设置是否开启自动分裂，默认值为true
 * @method integer getMaxSplitPartitions() 获取开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
 * @method string getStorageType() 获取日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。
 * @method void setStorageType(string $StorageType) 设置日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。
 * @method integer getPeriod() 获取生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600天。取值为3640时代表永久保存
 * @method void setPeriod(integer $Period) 设置生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600天。取值为3640时代表永久保存
 * @method string getDescribes() 获取日志主题描述
 * @method void setDescribes(string $Describes) 设置日志主题描述
 * @method integer getHotPeriod() 获取0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
 * @method void setHotPeriod(integer $HotPeriod) 设置0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
 * @method boolean getIsWebTracking() 获取webtracking开关； false: 关闭 true： 开启
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置webtracking开关； false: 关闭 true： 开启
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @var integer 日志主题分区个数。默认创建1个，最大支持创建10个分区。
     */
    public $PartitionCount;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
     */
    public $Tags;

    /**
     * @var boolean 是否开启自动分裂，默认值为true
     */
    public $AutoSplit;

    /**
     * @var integer 开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
     */
    public $MaxSplitPartitions;

    /**
     * @var string 日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。
     */
    public $StorageType;

    /**
     * @var integer 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600天。取值为3640时代表永久保存
     */
    public $Period;

    /**
     * @var string 日志主题描述
     */
    public $Describes;

    /**
     * @var integer 0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
     */
    public $HotPeriod;

    /**
     * @var boolean webtracking开关； false: 关闭 true： 开启
     */
    public $IsWebTracking;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $TopicName 日志主题名称
     * @param integer $PartitionCount 日志主题分区个数。默认创建1个，最大支持创建10个分区。
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
     * @param boolean $AutoSplit 是否开启自动分裂，默认值为true
     * @param integer $MaxSplitPartitions 开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
     * @param string $StorageType 日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。
     * @param integer $Period 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600天。取值为3640时代表永久保存
     * @param string $Describes 日志主题描述
     * @param integer $HotPeriod 0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
     * @param boolean $IsWebTracking webtracking开关； false: 关闭 true： 开启
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoSplit",$param) and $param["AutoSplit"] !== null) {
            $this->AutoSplit = $param["AutoSplit"];
        }

        if (array_key_exists("MaxSplitPartitions",$param) and $param["MaxSplitPartitions"] !== null) {
            $this->MaxSplitPartitions = $param["MaxSplitPartitions"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Describes",$param) and $param["Describes"] !== null) {
            $this->Describes = $param["Describes"];
        }

        if (array_key_exists("HotPeriod",$param) and $param["HotPeriod"] !== null) {
            $this->HotPeriod = $param["HotPeriod"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }
    }
}
