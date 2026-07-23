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
 * @method string getTopicId() 获取<p>主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取主题列表</a>获取主题Id。</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取主题列表</a>获取主题Id。</p>
 * @method string getTopicName() 获取<p>主题名称<br>输入限制：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 * @method void setTopicName(string $TopicName) 设置<p>主题名称<br>输入限制：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。</p>
 * @method boolean getStatus() 获取<p>主题是否开启采集，true：开启采集；false：关闭采集。<br>控制台目前不支持修改此参数。</p>
 * @method void setStatus(boolean $Status) 设置<p>主题是否开启采集，true：开启采集；false：关闭采集。<br>控制台目前不支持修改此参数。</p>
 * @method boolean getAutoSplit() 获取<p>是否开启自动分裂</p>
 * @method void setAutoSplit(boolean $AutoSplit) 设置<p>是否开启自动分裂</p>
 * @method integer getMaxSplitPartitions() 获取<p>若开启最大分裂，该主题能够允许的最大分区数；<br>默认为50；必须为正数</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置<p>若开启最大分裂，该主题能够允许的最大分区数；<br>默认为50；必须为正数</p>
 * @method integer getPeriod() 获取<p>生命周期，单位天，标准存储取值范围1~3600，低频存储取值范围7~3600。取值为3640时代表永久保存</p>
 * @method void setPeriod(integer $Period) 设置<p>生命周期，单位天，标准存储取值范围1~3600，低频存储取值范围7~3600。取值为3640时代表永久保存</p>
 * @method string getStorageType() 获取<p>存储类型：cold 低频存储，hot 标准存储</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型：cold 低频存储，hot 标准存储</p>
 * @method string getDescribes() 获取<p>主题描述</p>
 * @method void setDescribes(string $Describes) 设置<p>主题描述</p>
 * @method integer getHotPeriod() 获取<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method void setHotPeriod(integer $HotPeriod) 设置<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method boolean getIsWebTracking() 获取<p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置<p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
 * @method TopicExtendInfo getExtends() 获取<p>主题扩展信息</p>
 * @method void setExtends(TopicExtendInfo $Extends) 设置<p>主题扩展信息</p>
 * @method integer getPartitionCount() 获取<p>主题分区数量。<br>默认为1；<br>取值范围及约束：</p><ul><li>当输入值&lt;=0，系统自动调整为1。</li><li>如果未传MaxSplitPartitions，需要PartitionCount&lt;=50；</li><li>如果传递了MaxSplitPartitions，需要PartitionCount&lt;=MaxSplitPartitions；</li></ul>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>主题分区数量。<br>默认为1；<br>取值范围及约束：</p><ul><li>当输入值&lt;=0，系统自动调整为1。</li><li>如果未传MaxSplitPartitions，需要PartitionCount&lt;=50；</li><li>如果传递了MaxSplitPartitions，需要PartitionCount&lt;=MaxSplitPartitions；</li></ul>
 * @method string getCancelTopicAsyncTaskID() 获取<p>取消切换存储任务的id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。</li></ul>
 * @method void setCancelTopicAsyncTaskID(string $CancelTopicAsyncTaskID) 设置<p>取消切换存储任务的id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。</li></ul>
 * @method integer getEncryption() 获取<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>只支持传入1：kms-cls 云产品秘钥加密</p>
 * @method void setEncryption(integer $Encryption) 设置<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>只支持传入1：kms-cls 云产品秘钥加密</p>
 * @method CustomKmsInfo getCustomKmsInfo() 获取<p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）</p><p>当参数 Encryption为 1 时生效</p>
 * @method void setCustomKmsInfo(CustomKmsInfo $CustomKmsInfo) 设置<p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）</p><p>当参数 Encryption为 1 时生效</p>
 * @method boolean getIsSourceFrom() 获取<p>开启记录公网来源ip和服务端接收时间</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置<p>开启记录公网来源ip和服务端接收时间</p>
 * @method integer getBillingMode() 获取<p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul><p>默认值：0</p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul><p>默认值：0</p>
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string <p>主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取主题列表</a>获取主题Id。</p>
     */
    public $TopicId;

    /**
     * @var string <p>主题名称<br>输入限制：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
     */
    public $TopicName;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>主题是否开启采集，true：开启采集；false：关闭采集。<br>控制台目前不支持修改此参数。</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否开启自动分裂</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>若开启最大分裂，该主题能够允许的最大分区数；<br>默认为50；必须为正数</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var integer <p>生命周期，单位天，标准存储取值范围1~3600，低频存储取值范围7~3600。取值为3640时代表永久保存</p>
     */
    public $Period;

    /**
     * @var string <p>存储类型：cold 低频存储，hot 标准存储</p>
     */
    public $StorageType;

    /**
     * @var string <p>主题描述</p>
     */
    public $Describes;

    /**
     * @var integer <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     */
    public $HotPeriod;

    /**
     * @var boolean <p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>主题扩展信息</p>
     */
    public $Extends;

    /**
     * @var integer <p>主题分区数量。<br>默认为1；<br>取值范围及约束：</p><ul><li>当输入值&lt;=0，系统自动调整为1。</li><li>如果未传MaxSplitPartitions，需要PartitionCount&lt;=50；</li><li>如果传递了MaxSplitPartitions，需要PartitionCount&lt;=MaxSplitPartitions；</li></ul>
     */
    public $PartitionCount;

    /**
     * @var string <p>取消切换存储任务的id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。</li></ul>
     */
    public $CancelTopicAsyncTaskID;

    /**
     * @var integer <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>只支持传入1：kms-cls 云产品秘钥加密</p>
     */
    public $Encryption;

    /**
     * @var CustomKmsInfo <p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）</p><p>当参数 Encryption为 1 时生效</p>
     */
    public $CustomKmsInfo;

    /**
     * @var boolean <p>开启记录公网来源ip和服务端接收时间</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul><p>默认值：0</p>
     */
    public $BillingMode;

    /**
     * @param string $TopicId <p>主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取主题列表</a>获取主题Id。</p>
     * @param string $TopicName <p>主题名称<br>输入限制：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，并且不能有重复的键值对。</p>
     * @param boolean $Status <p>主题是否开启采集，true：开启采集；false：关闭采集。<br>控制台目前不支持修改此参数。</p>
     * @param boolean $AutoSplit <p>是否开启自动分裂</p>
     * @param integer $MaxSplitPartitions <p>若开启最大分裂，该主题能够允许的最大分区数；<br>默认为50；必须为正数</p>
     * @param integer $Period <p>生命周期，单位天，标准存储取值范围1~3600，低频存储取值范围7~3600。取值为3640时代表永久保存</p>
     * @param string $StorageType <p>存储类型：cold 低频存储，hot 标准存储</p>
     * @param string $Describes <p>主题描述</p>
     * @param integer $HotPeriod <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数。HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     * @param boolean $IsWebTracking <p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
     * @param TopicExtendInfo $Extends <p>主题扩展信息</p>
     * @param integer $PartitionCount <p>主题分区数量。<br>默认为1；<br>取值范围及约束：</p><ul><li>当输入值&lt;=0，系统自动调整为1。</li><li>如果未传MaxSplitPartitions，需要PartitionCount&lt;=50；</li><li>如果传递了MaxSplitPartitions，需要PartitionCount&lt;=MaxSplitPartitions；</li></ul>
     * @param string $CancelTopicAsyncTaskID <p>取消切换存储任务的id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取取消切换存储任务的id【Topics中的TopicAsyncTaskID字段】。</li></ul>
     * @param integer $Encryption <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>只支持传入1：kms-cls 云产品秘钥加密</p>
     * @param CustomKmsInfo $CustomKmsInfo <p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）</p><p>当参数 Encryption为 1 时生效</p>
     * @param boolean $IsSourceFrom <p>开启记录公网来源ip和服务端接收时间</p>
     * @param integer $BillingMode <p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul><p>默认值：0</p>
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

        if (array_key_exists("CustomKmsInfo",$param) and $param["CustomKmsInfo"] !== null) {
            $this->CustomKmsInfo = new CustomKmsInfo();
            $this->CustomKmsInfo->deserialize($param["CustomKmsInfo"]);
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }
    }
}
