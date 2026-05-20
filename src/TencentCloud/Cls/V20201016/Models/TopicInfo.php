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
 * @method string getLogsetId() 获取<p>日志集ID</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集ID</p>
 * @method string getTopicId() 获取<p>主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题ID</p>
 * @method string getTopicName() 获取<p>主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>主题名称</p>
 * @method integer getPartitionCount() 获取<p>主题分区个数</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>主题分区个数</p>
 * @method boolean getIndex() 获取<p>主题是否开启索引（主题类型需为日志主题）</p>
 * @method void setIndex(boolean $Index) 设置<p>主题是否开启索引（主题类型需为日志主题）</p>
 * @method integer getAssumerUin() 获取<p>AssumerUin非空则表示创建该日志主题的服务方Uin</p>
 * @method void setAssumerUin(integer $AssumerUin) 设置<p>AssumerUin非空则表示创建该日志主题的服务方Uin</p>
 * @method string getAssumerName() 获取<p>云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE</p>
 * @method void setAssumerName(string $AssumerName) 设置<p>云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE</p>
 * @method string getCreateTime() 获取<p>创建时间。格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。格式：yyyy-MM-dd HH:mm:ss</p>
 * @method boolean getStatus() 获取<p>主题是否开启采集，true：开启采集；false：关闭采集。<br>创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。<br>控制台目前不支持修改此参数。</p>
 * @method void setStatus(boolean $Status) 设置<p>主题是否开启采集，true：开启采集；false：关闭采集。<br>创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。<br>控制台目前不支持修改此参数。</p>
 * @method array getTags() 获取<p>主题绑定的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>主题绑定的标签信息</p>
 * @method string getRoleName() 获取<p>RoleName非空则表示创建该日志主题的服务方使用的角色</p>
 * @method void setRoleName(string $RoleName) 设置<p>RoleName非空则表示创建该日志主题的服务方使用的角色</p>
 * @method boolean getAutoSplit() 获取<p>该主题是否开启自动分裂</p>
 * @method void setAutoSplit(boolean $AutoSplit) 设置<p>该主题是否开启自动分裂</p>
 * @method integer getMaxSplitPartitions() 获取<p>若开启自动分裂的话，该主题能够允许的最大分区数</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置<p>若开启自动分裂的话，该主题能够允许的最大分区数</p>
 * @method string getStorageType() 获取<p>主题的存储类型</p><ul><li>hot: 标准存储</li><li>cold: 低频存储</li></ul>
 * @method void setStorageType(string $StorageType) 设置<p>主题的存储类型</p><ul><li>hot: 标准存储</li><li>cold: 低频存储</li></ul>
 * @method integer getPeriod() 获取<p>生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存</p>
 * @method void setPeriod(integer $Period) 设置<p>生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存</p>
 * @method string getSubAssumerName() 获取<p>云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。</p>
 * @method void setSubAssumerName(string $SubAssumerName) 设置<p>云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。</p>
 * @method string getDescribes() 获取<p>主题描述</p>
 * @method void setDescribes(string $Describes) 设置<p>主题描述</p>
 * @method integer getHotPeriod() 获取<p>开启日志沉降，标准存储的生命周期， hotPeriod &lt; Period。<br>标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）<br>HotPeriod=0为没有开启日志沉降。</p>
 * @method void setHotPeriod(integer $HotPeriod) 设置<p>开启日志沉降，标准存储的生命周期， hotPeriod &lt; Period。<br>标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）<br>HotPeriod=0为没有开启日志沉降。</p>
 * @method string getKeyId() 获取<p>kms-cls服务秘钥id</p>
 * @method void setKeyId(string $KeyId) 设置<p>kms-cls服务秘钥id</p>
 * @method integer getBizType() 获取<p>主题类型。</p><ul><li>0: 日志主题 </li><li>1: 指标主题</li></ul>
 * @method void setBizType(integer $BizType) 设置<p>主题类型。</p><ul><li>0: 日志主题 </li><li>1: 指标主题</li></ul>
 * @method boolean getIsWebTracking() 获取<p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) 设置<p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
 * @method TopicExtendInfo getExtends() 获取<p>日志主题扩展信息</p>
 * @method void setExtends(TopicExtendInfo $Extends) 设置<p>日志主题扩展信息</p>
 * @method string getTopicAsyncTaskID() 获取<p>异步迁移任务ID</p>
 * @method void setTopicAsyncTaskID(string $TopicAsyncTaskID) 设置<p>异步迁移任务ID</p>
 * @method integer getMigrationStatus() 获取<p>异步迁移状态</p><ul><li>1：进行中</li><li>2：已完成</li><li>3：失败</li><li>4：已取消</li></ul>
 * @method void setMigrationStatus(integer $MigrationStatus) 设置<p>异步迁移状态</p><ul><li>1：进行中</li><li>2：已完成</li><li>3：失败</li><li>4：已取消</li></ul>
 * @method string getEffectiveDate() 获取<p>异步迁移完成后，预计生效日期<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setEffectiveDate(string $EffectiveDate) 设置<p>异步迁移完成后，预计生效日期<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method boolean getIsSourceFrom() 获取<p>IsSourceFrom 开启记录公网来源ip和服务端接收时间</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) 设置<p>IsSourceFrom 开启记录公网来源ip和服务端接收时间</p>
 * @method integer getBillingMode() 获取<p>当前计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 * @method void setBillingMode(integer $BillingMode) 设置<p>当前计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 * @method integer getNewBillingMode() 获取<p>如果有异步任务，任务成功后的新计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 * @method void setNewBillingMode(integer $NewBillingMode) 设置<p>如果有异步任务，任务成功后的新计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string <p>日志集ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>主题名称</p>
     */
    public $TopicName;

    /**
     * @var integer <p>主题分区个数</p>
     */
    public $PartitionCount;

    /**
     * @var boolean <p>主题是否开启索引（主题类型需为日志主题）</p>
     */
    public $Index;

    /**
     * @var integer <p>AssumerUin非空则表示创建该日志主题的服务方Uin</p>
     */
    public $AssumerUin;

    /**
     * @var string <p>云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE</p>
     */
    public $AssumerName;

    /**
     * @var string <p>创建时间。格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>主题是否开启采集，true：开启采集；false：关闭采集。<br>创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。<br>控制台目前不支持修改此参数。</p>
     */
    public $Status;

    /**
     * @var array <p>主题绑定的标签信息</p>
     */
    public $Tags;

    /**
     * @var string <p>RoleName非空则表示创建该日志主题的服务方使用的角色</p>
     */
    public $RoleName;

    /**
     * @var boolean <p>该主题是否开启自动分裂</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>若开启自动分裂的话，该主题能够允许的最大分区数</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var string <p>主题的存储类型</p><ul><li>hot: 标准存储</li><li>cold: 低频存储</li></ul>
     */
    public $StorageType;

    /**
     * @var integer <p>生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存</p>
     */
    public $Period;

    /**
     * @var string <p>云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。</p>
     */
    public $SubAssumerName;

    /**
     * @var string <p>主题描述</p>
     */
    public $Describes;

    /**
     * @var integer <p>开启日志沉降，标准存储的生命周期， hotPeriod &lt; Period。<br>标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）<br>HotPeriod=0为没有开启日志沉降。</p>
     */
    public $HotPeriod;

    /**
     * @var string <p>kms-cls服务秘钥id</p>
     */
    public $KeyId;

    /**
     * @var integer <p>主题类型。</p><ul><li>0: 日志主题 </li><li>1: 指标主题</li></ul>
     */
    public $BizType;

    /**
     * @var boolean <p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>日志主题扩展信息</p>
     */
    public $Extends;

    /**
     * @var string <p>异步迁移任务ID</p>
     */
    public $TopicAsyncTaskID;

    /**
     * @var integer <p>异步迁移状态</p><ul><li>1：进行中</li><li>2：已完成</li><li>3：失败</li><li>4：已取消</li></ul>
     */
    public $MigrationStatus;

    /**
     * @var string <p>异步迁移完成后，预计生效日期<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $EffectiveDate;

    /**
     * @var boolean <p>IsSourceFrom 开启记录公网来源ip和服务端接收时间</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>当前计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>如果有异步任务，任务成功后的新计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
     */
    public $NewBillingMode;

    /**
     * @param string $LogsetId <p>日志集ID</p>
     * @param string $TopicId <p>主题ID</p>
     * @param string $TopicName <p>主题名称</p>
     * @param integer $PartitionCount <p>主题分区个数</p>
     * @param boolean $Index <p>主题是否开启索引（主题类型需为日志主题）</p>
     * @param integer $AssumerUin <p>AssumerUin非空则表示创建该日志主题的服务方Uin</p>
     * @param string $AssumerName <p>云产品标识，主题由其它云产品创建时，该字段会显示云产品名称，例如CDN、TKE</p>
     * @param string $CreateTime <p>创建时间。格式：yyyy-MM-dd HH:mm:ss</p>
     * @param boolean $Status <p>主题是否开启采集，true：开启采集；false：关闭采集。<br>创建日志主题时默认开启，可通过SDK调用ModifyTopic修改此字段。<br>控制台目前不支持修改此参数。</p>
     * @param array $Tags <p>主题绑定的标签信息</p>
     * @param string $RoleName <p>RoleName非空则表示创建该日志主题的服务方使用的角色</p>
     * @param boolean $AutoSplit <p>该主题是否开启自动分裂</p>
     * @param integer $MaxSplitPartitions <p>若开启自动分裂的话，该主题能够允许的最大分区数</p>
     * @param string $StorageType <p>主题的存储类型</p><ul><li>hot: 标准存储</li><li>cold: 低频存储</li></ul>
     * @param integer $Period <p>生命周期，单位天，可取值范围1~3600。取值为3640时代表永久保存</p>
     * @param string $SubAssumerName <p>云产品二级标识，日志主题由其它云产品创建时，该字段会显示云产品名称及其日志类型的二级分类，例如TKE-Audit、TKE-Event。部分云产品仅有云产品标识(AssumerName)，无该字段。</p>
     * @param string $Describes <p>主题描述</p>
     * @param integer $HotPeriod <p>开启日志沉降，标准存储的生命周期， hotPeriod &lt; Period。<br>标准存储为 hotPeriod, 低频存储则为 Period-hotPeriod。（主题类型需为日志主题）<br>HotPeriod=0为没有开启日志沉降。</p>
     * @param string $KeyId <p>kms-cls服务秘钥id</p>
     * @param integer $BizType <p>主题类型。</p><ul><li>0: 日志主题 </li><li>1: 指标主题</li></ul>
     * @param boolean $IsWebTracking <p>免鉴权开关。 false：关闭； true：开启。<br>开启后将支持指定操作匿名访问该日志主题。详情请参见<a href="https://cloud.tencent.com/document/product/614/41035">日志主题</a>。</p>
     * @param TopicExtendInfo $Extends <p>日志主题扩展信息</p>
     * @param string $TopicAsyncTaskID <p>异步迁移任务ID</p>
     * @param integer $MigrationStatus <p>异步迁移状态</p><ul><li>1：进行中</li><li>2：已完成</li><li>3：失败</li><li>4：已取消</li></ul>
     * @param string $EffectiveDate <p>异步迁移完成后，预计生效日期<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     * @param boolean $IsSourceFrom <p>IsSourceFrom 开启记录公网来源ip和服务端接收时间</p>
     * @param integer $BillingMode <p>当前计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
     * @param integer $NewBillingMode <p>如果有异步任务，任务成功后的新计费模式</p><p>枚举值：</p><ul><li>0： 按使用功能计费</li><li>1： 按原始日志量计费（目前仅面向少部分客户支持）</li></ul>
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

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("NewBillingMode",$param) and $param["NewBillingMode"] !== null) {
            $this->NewBillingMode = $param["NewBillingMode"];
        }
    }
}
