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
 * CreateTopic请求参数结构体
 *
 * @method string getLogsetId() 获取<p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
 * @method string getTopicName() 获取<p>主题名称<br>名称限制</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 * @method void setTopicName(string $TopicName) 设置<p>主题名称<br>名称限制</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 * @method integer getPartitionCount() 获取<p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method boolean getAutoSplit() 获取<p>是否开启自动分裂，默认值为true</p>
 * @method void setAutoSplit(boolean $AutoSplit) 设置<p>是否开启自动分裂，默认值为true</p>
 * @method integer getMaxSplitPartitions() 获取<p>开启自动分裂后，每个主题能够允许的最大分区数，默认值为50</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置<p>开启自动分裂后，每个主题能够允许的最大分区数，默认值为50</p>
 * @method string getStorageType() 获取<p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。</p>
 * @method void setStorageType(string $StorageType) 设置<p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。</p>
 * @method integer getPeriod() 获取<p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
 * @method void setPeriod(integer $Period) 设置<p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
 * @method string getDescribes() 获取<p>主题描述</p>
 * @method void setDescribes(string $Describes) 设置<p>主题描述</p>
 * @method integer getHotPeriod() 获取<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method void setHotPeriod(integer $HotPeriod) 设置<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method integer getEncryption() 获取<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>0或者不传： 不加密<br>1：kms-cls 云产品密钥加密</p><p>支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo</p>
 * @method void setEncryption(integer $Encryption) 设置<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>0或者不传： 不加密<br>1：kms-cls 云产品密钥加密</p><p>支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo</p>
 * @method integer getBizType() 获取<p>主题类型</p><ul><li>0:日志主题，默认值</li><li>1:指标主题</li></ul>
 * @method void setBizType(integer $BizType) 设置<p>主题类型</p><ul><li>0:日志主题，默认值</li><li>1:指标主题</li></ul>
 * @method string getTopicId() 获取<p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
 * @method boolean getIsWebTracking() 获取<p>免鉴权开关。 false：关闭； true：开启。默认为false。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。指标主题不支持该配置。</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置<p>免鉴权开关。 false：关闭； true：开启。默认为false。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。指标主题不支持该配置。</p>
 * @method TopicExtendInfo getExtends() 获取<p>主题扩展信息</p>
 * @method void setExtends(TopicExtendInfo $Extends) 设置<p>主题扩展信息</p>
 * @method boolean getIsSourceFrom() 获取<p>开启记录公网来源ip和服务端接收时间</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置<p>开启记录公网来源ip和服务端接收时间</p>
 * @method integer getBillingMode() 获取<p>计费模式</p><p>枚举值：</p><ul><li>0： 按功能项计费</li><li>1： 原始日志量计费</li></ul><p>默认值：0</p><p>通过接口调用时默认值为0，通过控制台调用时默认值为1</p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式</p><p>枚举值：</p><ul><li>0： 按功能项计费</li><li>1： 原始日志量计费</li></ul><p>默认值：0</p><p>通过接口调用时默认值为0，通过控制台调用时默认值为1</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string <p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
     */
    public $LogsetId;

    /**
     * @var string <p>主题名称<br>名称限制</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
     */
    public $TopicName;

    /**
     * @var integer <p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
     */
    public $PartitionCount;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启自动分裂，默认值为true</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>开启自动分裂后，每个主题能够允许的最大分区数，默认值为50</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var string <p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。</p>
     */
    public $StorageType;

    /**
     * @var integer <p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
     */
    public $Period;

    /**
     * @var string <p>主题描述</p>
     */
    public $Describes;

    /**
     * @var integer <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     */
    public $HotPeriod;

    /**
     * @var integer <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>0或者不传： 不加密<br>1：kms-cls 云产品密钥加密</p><p>支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo</p>
     */
    public $Encryption;

    /**
     * @var integer <p>主题类型</p><ul><li>0:日志主题，默认值</li><li>1:指标主题</li></ul>
     */
    public $BizType;

    /**
     * @var string <p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
     */
    public $TopicId;

    /**
     * @var boolean <p>免鉴权开关。 false：关闭； true：开启。默认为false。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。指标主题不支持该配置。</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>主题扩展信息</p>
     */
    public $Extends;

    /**
     * @var boolean <p>开启记录公网来源ip和服务端接收时间</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>计费模式</p><p>枚举值：</p><ul><li>0： 按功能项计费</li><li>1： 原始日志量计费</li></ul><p>默认值：0</p><p>通过接口调用时默认值为0，通过控制台调用时默认值为1</p>
     */
    public $BillingMode;

    /**
     * @param string $LogsetId <p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
     * @param string $TopicName <p>主题名称<br>名称限制</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
     * @param integer $PartitionCount <p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     * @param boolean $AutoSplit <p>是否开启自动分裂，默认值为true</p>
     * @param integer $MaxSplitPartitions <p>开启自动分裂后，每个主题能够允许的最大分区数，默认值为50</p>
     * @param string $StorageType <p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。</p>
     * @param integer $Period <p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
     * @param string $Describes <p>主题描述</p>
     * @param integer $HotPeriod <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     * @param integer $Encryption <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。<br>0或者不传： 不加密<br>1：kms-cls 云产品密钥加密</p><p>支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo</p>
     * @param integer $BizType <p>主题类型</p><ul><li>0:日志主题，默认值</li><li>1:指标主题</li></ul>
     * @param string $TopicId <p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
     * @param boolean $IsWebTracking <p>免鉴权开关。 false：关闭； true：开启。默认为false。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。指标主题不支持该配置。</p>
     * @param TopicExtendInfo $Extends <p>主题扩展信息</p>
     * @param boolean $IsSourceFrom <p>开启记录公网来源ip和服务端接收时间</p>
     * @param integer $BillingMode <p>计费模式</p><p>枚举值：</p><ul><li>0： 按功能项计费</li><li>1： 原始日志量计费</li></ul><p>默认值：0</p><p>通过接口调用时默认值为0，通过控制台调用时默认值为1</p>
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

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }
    }
}
