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
 * Splunk投递任务信息
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method integer getUin() 获取用户id
 * @method void setUin(integer $Uin) 设置用户id
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method integer getStatus() 获取任务状态；1.运行中；2:暂停；3：异常
 * @method void setStatus(integer $Status) 设置任务状态；1.运行中；2:暂停；3：异常
 * @method integer getEnable() 获取启用状态；0:禁用；1:启用
 * @method void setEnable(integer $Enable) 设置启用状态；0:禁用；1:启用
 * @method integer getCreateTime() 获取创建时间；单位：秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间；单位：秒
 * @method integer getUpdateTime() 获取更新时间；单位：秒
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间；单位：秒
 * @method NetInfo getNetInfo() 获取splunk投递任务-目标配置
 * @method void setNetInfo(NetInfo $NetInfo) 设置splunk投递任务-目标配置
 * @method MetadataInfo getMetadata() 获取splunk投递任务元信息
 * @method void setMetadata(MetadataInfo $Metadata) 设置splunk投递任务元信息
 * @method integer getHasServiceLog() 获取是否启用服务日志；1:关闭；2:开启
 * @method void setHasServiceLog(integer $HasServiceLog) 设置是否启用服务日志；1:关闭；2:开启
 * @method string getSource() 获取高级配置-数据来源；
 * @method void setSource(string $Source) 设置高级配置-数据来源；
 * @method string getSourceType() 获取高级配置-数据来源类型；
 * @method void setSourceType(string $SourceType) 设置高级配置-数据来源类型；
 * @method string getIndex() 获取高级配置-Splunk写入的索引
 * @method void setIndex(string $Index) 设置高级配置-Splunk写入的索引
 * @method integer getIndexAck() 获取高级配置-是否启用索引器；1-不开启；2-开启；
 * @method void setIndexAck(integer $IndexAck) 设置高级配置-是否启用索引器；1-不开启；2-开启；
 * @method string getChannel() 获取高级配置-通道
 * @method void setChannel(string $Channel) 设置高级配置-通道
 */
class SplunkDeliverInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var integer 用户id
     */
    public $Uin;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var integer 任务状态；1.运行中；2:暂停；3：异常
     */
    public $Status;

    /**
     * @var integer 启用状态；0:禁用；1:启用
     */
    public $Enable;

    /**
     * @var integer 创建时间；单位：秒
     */
    public $CreateTime;

    /**
     * @var integer 更新时间；单位：秒
     */
    public $UpdateTime;

    /**
     * @var NetInfo splunk投递任务-目标配置
     */
    public $NetInfo;

    /**
     * @var MetadataInfo splunk投递任务元信息
     */
    public $Metadata;

    /**
     * @var integer 是否启用服务日志；1:关闭；2:开启
     */
    public $HasServiceLog;

    /**
     * @var string 高级配置-数据来源；
     */
    public $Source;

    /**
     * @var string 高级配置-数据来源类型；
     */
    public $SourceType;

    /**
     * @var string 高级配置-Splunk写入的索引
     */
    public $Index;

    /**
     * @var integer 高级配置-是否启用索引器；1-不开启；2-开启；
     */
    public $IndexAck;

    /**
     * @var string 高级配置-通道
     */
    public $Channel;

    /**
     * @param string $TaskId 任务id
     * @param string $Name 任务名称
     * @param integer $Uin 用户id
     * @param string $TopicId 日志主题id
     * @param integer $Status 任务状态；1.运行中；2:暂停；3：异常
     * @param integer $Enable 启用状态；0:禁用；1:启用
     * @param integer $CreateTime 创建时间；单位：秒
     * @param integer $UpdateTime 更新时间；单位：秒
     * @param NetInfo $NetInfo splunk投递任务-目标配置
     * @param MetadataInfo $Metadata splunk投递任务元信息
     * @param integer $HasServiceLog 是否启用服务日志；1:关闭；2:开启
     * @param string $Source 高级配置-数据来源；
     * @param string $SourceType 高级配置-数据来源类型；
     * @param string $Index 高级配置-Splunk写入的索引
     * @param integer $IndexAck 高级配置-是否启用索引器；1-不开启；2-开启；
     * @param string $Channel 高级配置-通道
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NetInfo",$param) and $param["NetInfo"] !== null) {
            $this->NetInfo = new NetInfo();
            $this->NetInfo->deserialize($param["NetInfo"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new MetadataInfo();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("HasServiceLog",$param) and $param["HasServiceLog"] !== null) {
            $this->HasServiceLog = $param["HasServiceLog"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("IndexAck",$param) and $param["IndexAck"] !== null) {
            $this->IndexAck = $param["IndexAck"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
