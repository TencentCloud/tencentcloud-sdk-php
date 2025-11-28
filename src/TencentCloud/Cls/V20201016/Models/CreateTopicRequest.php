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
 * @method string getLogsetId() 获取日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method string getTopicName() 获取主题名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]

 * @method void setTopicName(string $TopicName) 设置主题名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]

 * @method integer getPartitionCount() 获取主题分区个数。默认创建1个，最大支持创建10个分区。
 * @method void setPartitionCount(integer $PartitionCount) 设置主题分区个数。默认创建1个，最大支持创建10个分区。
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
 * @method boolean getAutoSplit() 获取是否开启自动分裂，默认值为true
 * @method void setAutoSplit(boolean $AutoSplit) 设置是否开启自动分裂，默认值为true
 * @method integer getMaxSplitPartitions() 获取开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
 * @method string getStorageType() 获取日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。
 * @method void setStorageType(string $StorageType) 设置日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。
 * @method integer getPeriod() 获取存储时间，单位天。
- 日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。
- 日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。
- 指标主题：支持1至3600天，值为3640时代表永久保存。
 * @method void setPeriod(integer $Period) 设置存储时间，单位天。
- 日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。
- 日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。
- 指标主题：支持1至3600天，值为3640时代表永久保存。
 * @method string getDescribes() 获取主题描述
 * @method void setDescribes(string $Describes) 设置主题描述
 * @method integer getHotPeriod() 获取0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
 * @method void setHotPeriod(integer $HotPeriod) 设置0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
 * @method integer getEncryption() 获取加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
0或者不传： 不加密
1：kms-cls 云产品密钥加密

支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo
 * @method void setEncryption(integer $Encryption) 设置加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
0或者不传： 不加密
1：kms-cls 云产品密钥加密

支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo
 * @method integer getBizType() 获取主题类型
- 0:日志主题，默认值
- 1:指标主题
 * @method void setBizType(integer $BizType) 设置主题类型
- 0:日志主题，默认值
- 1:指标主题
 * @method string getTopicId() 获取主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。
- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
 * @method void setTopicId(string $TopicId) 设置主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。
- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
 * @method boolean getIsWebTracking() 获取免鉴权开关。 false：关闭； true：开启。默认为false。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。指标主题不支持该配置。
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置免鉴权开关。 false：关闭； true：开启。默认为false。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。指标主题不支持该配置。
 * @method TopicExtendInfo getExtends() 获取主题扩展信息
 * @method void setExtends(TopicExtendInfo $Extends) 设置主题扩展信息
 * @method boolean getIsSourceFrom() 获取开启记录公网来源ip和服务端接收时间
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置开启记录公网来源ip和服务端接收时间
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     */
    public $LogsetId;

    /**
     * @var string 主题名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]

     */
    public $TopicName;

    /**
     * @var integer 主题分区个数。默认创建1个，最大支持创建10个分区。
     */
    public $PartitionCount;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
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
     * @var string 日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。
     */
    public $StorageType;

    /**
     * @var integer 存储时间，单位天。
- 日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。
- 日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。
- 指标主题：支持1至3600天，值为3640时代表永久保存。
     */
    public $Period;

    /**
     * @var string 主题描述
     */
    public $Describes;

    /**
     * @var integer 0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
     */
    public $HotPeriod;

    /**
     * @var integer 加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
0或者不传： 不加密
1：kms-cls 云产品密钥加密

支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo
     */
    public $Encryption;

    /**
     * @var integer 主题类型
- 0:日志主题，默认值
- 1:指标主题
     */
    public $BizType;

    /**
     * @var string 主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。
- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
     */
    public $TopicId;

    /**
     * @var boolean 免鉴权开关。 false：关闭； true：开启。默认为false。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。指标主题不支持该配置。
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo 主题扩展信息
     */
    public $Extends;

    /**
     * @var boolean 开启记录公网来源ip和服务端接收时间
     */
    public $IsSourceFrom;

    /**
     * @param string $LogsetId 日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     * @param string $TopicName 主题名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 不能使用以下名称["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]

     * @param integer $PartitionCount 主题分区个数。默认创建1个，最大支持创建10个分区。
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。
     * @param boolean $AutoSplit 是否开启自动分裂，默认值为true
     * @param integer $MaxSplitPartitions 开启自动分裂后，每个主题能够允许的最大分区数，默认值为50
     * @param string $StorageType 日志主题的存储类型，可选值 hot（标准存储），cold（低频存储）；默认为hot。指标主题不支持该配置。
     * @param integer $Period 存储时间，单位天。
- 日志主题：日志接入标准存储时，支持1至3600天，值为3640时代表永久保存。
- 日志主题：日志接入低频存储时，支持7至3600天，值为3640时代表永久保存。
- 指标主题：支持1至3600天，值为3640时代表永久保存。
     * @param string $Describes 主题描述
     * @param integer $HotPeriod 0：日志主题关闭日志沉降。
非0：日志主题开启日志沉降后标准存储的天数，HotPeriod需要大于等于7，且小于Period。
仅在StorageType为 hot 时生效，指标主题不支持该配置。
     * @param integer $Encryption 加密相关参数。 支持加密地域并且开白用户可以传此参数，其他场景不能传递该参数。
0或者不传： 不加密
1：kms-cls 云产品密钥加密

支持地域：ap-beijing,ap-guangzhou,ap-shanghai,ap-singapore,ap-bangkok,ap-jakarta,eu-frankfurt,ap-seoul,ap-tokyo
     * @param integer $BizType 主题类型
- 0:日志主题，默认值
- 1:指标主题
     * @param string $TopicId 主题自定义ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。
- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
     * @param boolean $IsWebTracking 免鉴权开关。 false：关闭； true：开启。默认为false。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。指标主题不支持该配置。
     * @param TopicExtendInfo $Extends 主题扩展信息
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
    }
}
