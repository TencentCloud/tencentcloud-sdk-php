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
 * 云产品投递任务topic配置信息
 *
 * @method integer getEncryption() 获取<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。</p><p>枚举值：</p><ul><li>0： 不加密</li><li>1： kms-cls 云产品密钥加密</li></ul><p>默认值：0</p>
 * @method void setEncryption(integer $Encryption) 设置<p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。</p><p>枚举值：</p><ul><li>0： 不加密</li><li>1： kms-cls 云产品密钥加密</li></ul><p>默认值：0</p>
 * @method integer getPartitionCount() 获取<p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
 * @method boolean getAutoSplit() 获取<p>是否开启自动分裂，默认值为true</p>
 * @method void setAutoSplit(boolean $AutoSplit) 设置<p>是否开启自动分裂，默认值为true</p>
 * @method integer getMaxSplitPartitions() 获取<p>开启自动分裂后，每个主题能够允许的最大分区数</p><p>默认值：50</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置<p>开启自动分裂后，每个主题能够允许的最大分区数</p><p>默认值：50</p>
 * @method string getStorageType() 获取<p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）。指标主题不支持该配置。</p><p>默认值：hot</p>
 * @method void setStorageType(string $StorageType) 设置<p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）。指标主题不支持该配置。</p><p>默认值：hot</p>
 * @method integer getPeriod() 获取<p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
 * @method void setPeriod(integer $Period) 设置<p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
 * @method integer getHotPeriod() 获取<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method void setHotPeriod(integer $HotPeriod) 设置<p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
 * @method integer getBillingMode() 获取<p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 * @method string getDescribes() 获取<p>主题描述</p>
 * @method void setDescribes(string $Describes) 设置<p>主题描述</p>
 * @method boolean getIsSourceFrom() 获取<p>开启记录公网来源ip和服务端接收时间</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置<p>开启记录公网来源ip和服务端接收时间</p>
 * @method boolean getIsWebTracking() 获取<p>免鉴权开关。 false：关闭； true：开启。默认为false。 开启后将支持指定操作匿名访问该日志主题。</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置<p>免鉴权开关。 false：关闭； true：开启。默认为false。 开启后将支持指定操作匿名访问该日志主题。</p>
 * @method CustomKmsInfo getCustomKmsInfo() 获取<p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）<br>当参数 Encryption为 1 时有效。</p>
 * @method void setCustomKmsInfo(CustomKmsInfo $CustomKmsInfo) 设置<p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）<br>当参数 Encryption为 1 时有效。</p>
 * @method string getTopicId() 获取<p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
 * @method TopicExtendInfo getExtends() 获取<p>主题扩展信息</p>
 * @method void setExtends(TopicExtendInfo $Extends) 设置<p>主题扩展信息</p>
 */
class CloudProductTopicConfig extends AbstractModel
{
    /**
     * @var integer <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。</p><p>枚举值：</p><ul><li>0： 不加密</li><li>1： kms-cls 云产品密钥加密</li></ul><p>默认值：0</p>
     */
    public $Encryption;

    /**
     * @var integer <p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
     */
    public $PartitionCount;

    /**
     * @var boolean <p>是否开启自动分裂，默认值为true</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>开启自动分裂后，每个主题能够允许的最大分区数</p><p>默认值：50</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var string <p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）。指标主题不支持该配置。</p><p>默认值：hot</p>
     */
    public $StorageType;

    /**
     * @var integer <p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
     */
    public $Period;

    /**
     * @var integer <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     */
    public $HotPeriod;

    /**
     * @var integer <p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
     */
    public $BillingMode;

    /**
     * @var string <p>主题描述</p>
     */
    public $Describes;

    /**
     * @var boolean <p>开启记录公网来源ip和服务端接收时间</p>
     */
    public $IsSourceFrom;

    /**
     * @var boolean <p>免鉴权开关。 false：关闭； true：开启。默认为false。 开启后将支持指定操作匿名访问该日志主题。</p>
     */
    public $IsWebTracking;

    /**
     * @var CustomKmsInfo <p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）<br>当参数 Encryption为 1 时有效。</p>
     */
    public $CustomKmsInfo;

    /**
     * @var string <p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
     */
    public $TopicId;

    /**
     * @var TopicExtendInfo <p>主题扩展信息</p>
     */
    public $Extends;

    /**
     * @param integer $Encryption <p>加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。</p><p>枚举值：</p><ul><li>0： 不加密</li><li>1： kms-cls 云产品密钥加密</li></ul><p>默认值：0</p>
     * @param integer $PartitionCount <p>主题分区个数。默认创建1个，最大支持创建10个分区。</p>
     * @param boolean $AutoSplit <p>是否开启自动分裂，默认值为true</p>
     * @param integer $MaxSplitPartitions <p>开启自动分裂后，每个主题能够允许的最大分区数</p><p>默认值：50</p>
     * @param string $StorageType <p>日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）。指标主题不支持该配置。</p><p>默认值：hot</p>
     * @param integer $Period <p>存储时间，单位天。</p><ul><li>日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。</li><li>日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。</li><li>指标主题：支持1至3600天，值为3640时代表永久保存。</li></ul>
     * @param integer $HotPeriod <p>0：日志主题关闭日志沉降。<br>非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。<br>仅在StorageType为 hot 时生效，指标主题不支持该配置。</p>
     * @param integer $BillingMode <p>计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
     * @param string $Describes <p>主题描述</p>
     * @param boolean $IsSourceFrom <p>开启记录公网来源ip和服务端接收时间</p>
     * @param boolean $IsWebTracking <p>免鉴权开关。 false：关闭； true：开启。默认为false。 开启后将支持指定操作匿名访问该日志主题。</p>
     * @param CustomKmsInfo $CustomKmsInfo <p>用户自定义 KMS 密钥信息；为空则使用默认密钥（别名 KMS-CLS）<br>当参数 Encryption为 1 时有效。</p>
     * @param string $TopicId <p>主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。</p><ul><li>用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符</li><li>尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。</li><li>如果指定该字段，需保证全地域唯一</li></ul>
     * @param TopicExtendInfo $Extends <p>主题扩展信息</p>
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
        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
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

        if (array_key_exists("HotPeriod",$param) and $param["HotPeriod"] !== null) {
            $this->HotPeriod = $param["HotPeriod"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Describes",$param) and $param["Describes"] !== null) {
            $this->Describes = $param["Describes"];
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }

        if (array_key_exists("CustomKmsInfo",$param) and $param["CustomKmsInfo"] !== null) {
            $this->CustomKmsInfo = new CustomKmsInfo();
            $this->CustomKmsInfo->deserialize($param["CustomKmsInfo"]);
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }
    }
}
