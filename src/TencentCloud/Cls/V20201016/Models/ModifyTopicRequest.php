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
 * ModifyTopic请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method boolean getStatus() 获取该日志主题是否开始采集
 * @method void setStatus(boolean $Status) 设置该日志主题是否开始采集
 * @method boolean getAutoSplit() 获取是否开启自动分裂
 * @method void setAutoSplit(boolean $AutoSplit) 设置是否开启自动分裂
 * @method integer getMaxSplitPartitions() 获取若开启最大分裂，该主题能够能够允许的最大分区数
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置若开启最大分裂，该主题能够能够允许的最大分区数
 * @method integer getPeriod() 获取生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
 * @method void setPeriod(integer $Period) 设置生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
 * @method string getDescribes() 获取日志主题描述
 * @method void setDescribes(string $Describes) 设置日志主题描述
 * @method integer getHotPeriod() 获取0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
 * @method void setHotPeriod(integer $HotPeriod) 设置0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
 * @method boolean getIsWebTracking() 获取webtracking开关； false: 关闭 true: 开启
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置webtracking开关； false: 关闭 true: 开启
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，并且不能有重复的键值对。
     */
    public $Tags;

    /**
     * @var boolean 该日志主题是否开始采集
     */
    public $Status;

    /**
     * @var boolean 是否开启自动分裂
     */
    public $AutoSplit;

    /**
     * @var integer 若开启最大分裂，该主题能够能够允许的最大分区数
     */
    public $MaxSplitPartitions;

    /**
     * @var integer 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
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
     * @var boolean webtracking开关； false: 关闭 true: 开启
     */
    public $IsWebTracking;

    /**
     * @param string $TopicId 日志主题ID
     * @param string $TopicName 日志主题名称
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，并且不能有重复的键值对。
     * @param boolean $Status 该日志主题是否开始采集
     * @param boolean $AutoSplit 是否开启自动分裂
     * @param integer $MaxSplitPartitions 若开启最大分裂，该主题能够能够允许的最大分区数
     * @param integer $Period 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
     * @param string $Describes 日志主题描述
     * @param integer $HotPeriod 0：关闭日志沉降。
非0：开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。仅在StorageType为 hot 时生效
     * @param boolean $IsWebTracking webtracking开关； false: 关闭 true: 开启
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoSplit",$param) and $param["AutoSplit"] !== null) {
            $this->AutoSplit = $param["AutoSplit"];
        }

        if (array_key_exists("MaxSplitPartitions",$param) and $param["MaxSplitPartitions"] !== null) {
            $this->MaxSplitPartitions = $param["MaxSplitPartitions"];
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
