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
 * 主题基本信息
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicId() 获取主题ID
 * @method void setTopicId(string $TopicId) 设置主题ID
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method integer getPartitionCount() 获取主题分区个数
 * @method void setPartitionCount(integer $PartitionCount) 设置主题分区个数
 * @method boolean getIndex() 获取主题是否开启索引（主题类型需为日志主题）
 * @method void setIndex(boolean $Index) 设置主题是否开启索引（主题类型需为日志主题）
 * @method integer getAssumerUin() 获取AssumerUin非空则表示创建该日志主题的服务方Uin
 * @method void setAssumerUin(integer $AssumerUin) 设置AssumerUin非空则表示创建该日志主题的服务方Uin
 * @method string getAssumerName() 获取云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
 * @method void setAssumerName(string $AssumerName) 设置云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
 * @method string getCreateTime() 获取创建时间。格式：yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式：yyyy-MM-dd HH:mm:ss
 * @method boolean getStatus() 获取主题是否开启采集，true：开启采集；false：关闭采集。
创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。
控制台目前不支持修改此参数。
 * @method void setStatus(boolean $Status) 设置主题是否开启采集，true：开启采集；false：关闭采集。
创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。
控制台目前不支持修改此参数。
 * @method array getTags() 获取主题绑定的标签信息
 * @method void setTags(array $Tags) 设置主题绑定的标签信息
 * @method string getRoleName() 获取RoleName非空则表示创建该日志主题的服务方使用的角色
 * @method void setRoleName(string $RoleName) 设置RoleName非空则表示创建该日志主题的服务方使用的角色
 * @method boolean getAutoSplit() 获取该主题是否开启自动分裂
 * @method void setAutoSplit(boolean $AutoSplit) 设置该主题是否开启自动分裂
 * @method integer getMaxSplitPartitions() 获取若开启自动分裂的话，该主题能够允许的最大分区数
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置若开启自动分裂的话，该主题能够允许的最大分区数
 * @method string getStorageType() 获取主题的存储类型

- hot: 标准存储
- cold: 低频存储
 * @method void setStorageType(string $StorageType) 设置主题的存储类型

- hot: 标准存储
- cold: 低频存储
 * @method integer getPeriod() 获取生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存
 * @method void setPeriod(integer $Period) 设置生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存
 * @method string getSubAssumerName() 获取云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。
 * @method void setSubAssumerName(string $SubAssumerName) 设置云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。
 * @method string getDescribes() 获取主题描述
 * @method void setDescribes(string $Describes) 设置主题描述
 * @method integer getHotPeriod() 获取开启日志沉降，标准存储的生命周期， hotPeriod < Period。
标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）
HotPeriod=0为没有开启日志沉降。
 * @method void setHotPeriod(integer $HotPeriod) 设置开启日志沉降，标准存储的生命周期， hotPeriod < Period。
标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）
HotPeriod=0为没有开启日志沉降。
 * @method string getKeyId() 获取kms-cls服务秘钥id
 * @method void setKeyId(string $KeyId) 设置kms-cls服务秘钥id
 * @method integer getBizType() 获取主题类型。
- 0: 日志主题 
- 1: 指标主题
 * @method void setBizType(integer $BizType) 设置主题类型。
- 0: 日志主题 
- 1: 指标主题
 * @method boolean getIsWebTracking() 获取免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
 * @method TopicExtendInfo getExtends() 获取日志主题扩展信息
 * @method void setExtends(TopicExtendInfo $Extends) 设置日志主题扩展信息
 * @method string getTopicAsyncTaskID() 获取异步迁移任务ID
 * @method void setTopicAsyncTaskID(string $TopicAsyncTaskID) 设置异步迁移任务ID
 * @method integer getMigrationStatus() 获取异步迁移状态
- 1：进行中
- 2：已完成
- 3：失败
- 4：已取消
 * @method void setMigrationStatus(integer $MigrationStatus) 设置异步迁移状态
- 1：进行中
- 2：已完成
- 3：失败
- 4：已取消
 * @method string getEffectiveDate() 获取异步迁移完成后，预计生效日期
时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setEffectiveDate(string $EffectiveDate) 设置异步迁移完成后，预计生效日期
时间格式：yyyy-MM-dd HH:mm:ss
 * @method boolean getIsSourceFrom() 获取IsSourceFrom 开启记录公网来源ip和服务端接收时间
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置IsSourceFrom 开启记录公网来源ip和服务端接收时间
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 主题ID
     */
    public $TopicId;

    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var integer 主题分区个数
     */
    public $PartitionCount;

    /**
     * @var boolean 主题是否开启索引（主题类型需为日志主题）
     */
    public $Index;

    /**
     * @var integer AssumerUin非空则表示创建该日志主题的服务方Uin
     */
    public $AssumerUin;

    /**
     * @var string 云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
     */
    public $AssumerName;

    /**
     * @var string 创建时间。格式：yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var boolean 主题是否开启采集，true：开启采集；false：关闭采集。
创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。
控制台目前不支持修改此参数。
     */
    public $Status;

    /**
     * @var array 主题绑定的标签信息
     */
    public $Tags;

    /**
     * @var string RoleName非空则表示创建该日志主题的服务方使用的角色
     */
    public $RoleName;

    /**
     * @var boolean 该主题是否开启自动分裂
     */
    public $AutoSplit;

    /**
     * @var integer 若开启自动分裂的话，该主题能够允许的最大分区数
     */
    public $MaxSplitPartitions;

    /**
     * @var string 主题的存储类型

- hot: 标准存储
- cold: 低频存储
     */
    public $StorageType;

    /**
     * @var integer 生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存
     */
    public $Period;

    /**
     * @var string 云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。
     */
    public $SubAssumerName;

    /**
     * @var string 主题描述
     */
    public $Describes;

    /**
     * @var integer 开启日志沉降，标准存储的生命周期， hotPeriod < Period。
标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）
HotPeriod=0为没有开启日志沉降。
     */
    public $HotPeriod;

    /**
     * @var string kms-cls服务秘钥id
     */
    public $KeyId;

    /**
     * @var integer 主题类型。
- 0: 日志主题 
- 1: 指标主题
     */
    public $BizType;

    /**
     * @var boolean 免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo 日志主题扩展信息
     */
    public $Extends;

    /**
     * @var string 异步迁移任务ID
     */
    public $TopicAsyncTaskID;

    /**
     * @var integer 异步迁移状态
- 1：进行中
- 2：已完成
- 3：失败
- 4：已取消
     */
    public $MigrationStatus;

    /**
     * @var string 异步迁移完成后，预计生效日期
时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $EffectiveDate;

    /**
     * @var boolean IsSourceFrom 开启记录公网来源ip和服务端接收时间
     */
    public $IsSourceFrom;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $TopicId 主题ID
     * @param string $TopicName 主题名称
     * @param integer $PartitionCount 主题分区个数
     * @param boolean $Index 主题是否开启索引（主题类型需为日志主题）
     * @param integer $AssumerUin AssumerUin非空则表示创建该日志主题的服务方Uin
     * @param string $AssumerName 云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE
     * @param string $CreateTime 创建时间。格式：yyyy-MM-dd HH:mm:ss
     * @param boolean $Status 主题是否开启采集，true：开启采集；false：关闭采集。
创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。
控制台目前不支持修改此参数。
     * @param array $Tags 主题绑定的标签信息
     * @param string $RoleName RoleName非空则表示创建该日志主题的服务方使用的角色
     * @param boolean $AutoSplit 该主题是否开启自动分裂
     * @param integer $MaxSplitPartitions 若开启自动分裂的话，该主题能够允许的最大分区数
     * @param string $StorageType 主题的存储类型

- hot: 标准存储
- cold: 低频存储
     * @param integer $Period 生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存
     * @param string $SubAssumerName 云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。
     * @param string $Describes 主题描述
     * @param integer $HotPeriod 开启日志沉降，标准存储的生命周期， hotPeriod < Period。
标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）
HotPeriod=0为没有开启日志沉降。
     * @param string $KeyId kms-cls服务秘钥id
     * @param integer $BizType 主题类型。
- 0: 日志主题 
- 1: 指标主题
     * @param boolean $IsWebTracking 免鉴权开关。 false：关闭； true：开启。
开启后将支持指定操作匿名访问该日志主题。详情请参见[日志主题](https://cloud.tencent.com/document/product/614/41035)。
     * @param TopicExtendInfo $Extends 日志主题扩展信息
     * @param string $TopicAsyncTaskID 异步迁移任务ID
     * @param integer $MigrationStatus 异步迁移状态
- 1：进行中
- 2：已完成
- 3：失败
- 4：已取消
     * @param string $EffectiveDate 异步迁移完成后，预计生效日期
时间格式：yyyy-MM-dd HH:mm:ss
     * @param boolean $IsSourceFrom IsSourceFrom 开启记录公网来源ip和服务端接收时间
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("AssumerUin",$param) and $param["AssumerUin"] !== null) {
            $this->AssumerUin = $param["AssumerUin"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
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

        if (array_key_exists("SubAssumerName",$param) and $param["SubAssumerName"] !== null) {
            $this->SubAssumerName = $param["SubAssumerName"];
        }

        if (array_key_exists("Describes",$param) and $param["Describes"] !== null) {
            $this->Describes = $param["Describes"];
        }

        if (array_key_exists("HotPeriod",$param) and $param["HotPeriod"] !== null) {
            $this->HotPeriod = $param["HotPeriod"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("TopicAsyncTaskID",$param) and $param["TopicAsyncTaskID"] !== null) {
            $this->TopicAsyncTaskID = $param["TopicAsyncTaskID"];
        }

        if (array_key_exists("MigrationStatus",$param) and $param["MigrationStatus"] !== null) {
            $this->MigrationStatus = $param["MigrationStatus"];
        }

        if (array_key_exists("EffectiveDate",$param) and $param["EffectiveDate"] !== null) {
            $this->EffectiveDate = $param["EffectiveDate"];
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }
    }
}
