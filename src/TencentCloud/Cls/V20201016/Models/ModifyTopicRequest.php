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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTopic请求参数结构体
 *
 * @method string getTopicId() 获取 主题ID- 通过[获取主题列表](https://cloud.tencent.com/document/product/614/56454)获取主题Id。
 * @method void setTopicId(string $TopicId) 设置 主题ID- 通过[获取主题列表](https://cloud.tencent.com/document/product/614/56454)获取主题Id。
 * @method string getTopicName() 获取主题名称
输入限制：
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]
 * @method void setTopicName(string $TopicName) 设置主题名称
输入限制：
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method boolean getStatus() 获取主题是否开启采集，true：开启采集；false：关闭采集。
控制台目前不支持修改此参数。
 * @method void setStatus(boolean $Status) 设置主题是否开启采集，true：开启采集；false：关闭采集。
控制台目前不支持修改此参数。
 * @method boolean getAutoSplit() 获取是否开启自动分裂
 * @method void setAutoSplit(boolean $AutoSplit) 设置是否开启自动分裂
 * @method integer getMaxSplitPartitions() 获取若开启最大分裂，该主题能够允许的最大分区数；
默认为50；必须为正数
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置若开启最大分裂，该主题能够允许的最大分区数；
默认为50；必须为正数
 * @method integer getPeriod() 获取生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
 * @method void setPeriod(integer $Period) 设置生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
 * @method string getStorageType() 获取存储类型：cold 低频存储，hot 标准存储
 * @method void setStorageType(string $StorageType) 设置存储类型：cold 低频存储，hot 标准存储
 * @method string getDescribes() 获取主题描述
 * @method void setDescribes(string $Describes) 设置主题描述
 * @method integer getHotPeriod() 获取0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
 * @method void setHotPeriod(integer $HotPeriod) 设置0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
 * @method boolean getIsWebTracking() 获取免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
 * @method TopicExtendInfo getExtends() 获取主题扩展信息
 * @method void setExtends(TopicExtendInfo $Extends) 设置主题扩展信息
 * @method integer getPartitionCount() 获取主题分区数量。
默认为1；
取值范围及约束：
- 当输入值<=0，系统自动调整为1。
- 如果未传MaxSplitPartitions，需要PartitionCount<=50；
- 如果传递了MaxSplitPartitions，需要PartitionCount<=MaxSplitPartitions；
 * @method void setPartitionCount(integer $PartitionCount) 设置主题分区数量。
默认为1；
取值范围及约束：
- 当输入值<=0，系统自动调整为1。
- 如果未传MaxSplitPartitions，需要PartitionCount<=50；
- 如果传递了MaxSplitPartitions，需要PartitionCount<=MaxSplitPartitions；
 * @method string getCancelTopicAsyncTaskID() 获取取消切换存储任务的id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。
 * @method void setCancelTopicAsyncTaskID(string $CancelTopicAsyncTaskID) 设置取消切换存储任务的id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。
 * @method integer getEncryption() 获取加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
只支持传入1：kms-cls 云产品秘钥加密
 * @method void setEncryption(integer $Encryption) 设置加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
只支持传入1：kms-cls 云产品秘钥加密
 * @method boolean getIsSourceFrom() 获取开启记录公网来源ip和服务端接收时间
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置开启记录公网来源ip和服务端接收时间
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string  主题ID- 通过[获取主题列表](https://cloud.tencent.com/document/product/614/56454)获取主题Id。
     */
    public $TopicId;

    /**
     * @var string 主题名称
输入限制：
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]
     */
    public $TopicName;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。
     */
    public $Tags;

    /**
     * @var boolean 主题是否开启采集，true：开启采集；false：关闭采集。
控制台目前不支持修改此参数。
     */
    public $Status;

    /**
     * @var boolean 是否开启自动分裂
     */
    public $AutoSplit;

    /**
     * @var integer 若开启最大分裂，该主题能够允许的最大分区数；
默认为50；必须为正数
     */
    public $MaxSplitPartitions;

    /**
     * @var integer 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
     */
    public $Period;

    /**
     * @var string 存储类型：cold 低频存储，hot 标准存储
     */
    public $StorageType;

    /**
     * @var string 主题描述
     */
    public $Describes;

    /**
     * @var integer 0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
     */
    public $HotPeriod;

    /**
     * @var boolean 免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo 主题扩展信息
     */
    public $Extends;

    /**
     * @var integer 主题分区数量。
默认为1；
取值范围及约束：
- 当输入值<=0，系统自动调整为1。
- 如果未传MaxSplitPartitions，需要PartitionCount<=50；
- 如果传递了MaxSplitPartitions，需要PartitionCount<=MaxSplitPartitions；
     */
    public $PartitionCount;

    /**
     * @var string 取消切换存储任务的id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。
     */
    public $CancelTopicAsyncTaskID;

    /**
     * @var integer 加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
只支持传入1：kms-cls 云产品秘钥加密
     */
    public $Encryption;

    /**
     * @var boolean 开启记录公网来源ip和服务端接收时间
     */
    public $IsSourceFrom;

    /**
     * @param string $TopicId  主题ID- 通过[获取主题列表](https://cloud.tencent.com/document/product/614/56454)获取主题Id。
     * @param string $TopicName 主题名称
输入限制：
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。
     * @param boolean $Status 主题是否开启采集，true：开启采集；false：关闭采集。
控制台目前不支持修改此参数。
     * @param boolean $AutoSplit 是否开启自动分裂
     * @param integer $MaxSplitPartitions 若开启最大分裂，该主题能够允许的最大分区数；
默认为50；必须为正数
     * @param integer $Period 生命周期，单位天，标准存储取值范围1\~3600，低频存储取值范围7\~3600。取值为3640时代表永久保存
     * @param string $StorageType 存储类型：cold 低频存储，hot 标准存储
     * @param string $Describes 主题描述
     * @param integer $HotPeriod 0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
     * @param boolean $IsWebTracking 免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
     * @param TopicExtendInfo $Extends 主题扩展信息
     * @param integer $PartitionCount 主题分区数量。
默认为1；
取值范围及约束：
- 当输入值<=0，系统自动调整为1。
- 如果未传MaxSplitPartitions，需要PartitionCount<=50；
- 如果传递了MaxSplitPartitions，需要PartitionCount<=MaxSplitPartitions；
     * @param string $CancelTopicAsyncTaskID 取消切换存储任务的id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。
     * @param integer $Encryption 加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
只支持传入1：kms-cls 云产品秘钥加密
     * @param boolean $IsSourceFrom 开启记录公网来源ip和服务端接收时间
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
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

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("CancelTopicAsyncTaskID",$param) and $param["CancelTopicAsyncTaskID"] !== null) {
            $this->CancelTopicAsyncTaskID = $param["CancelTopicAsyncTaskID"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }
    }
}
