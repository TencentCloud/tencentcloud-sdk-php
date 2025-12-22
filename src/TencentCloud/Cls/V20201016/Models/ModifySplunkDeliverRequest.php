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
 * ModifySplunkDeliver请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTopicId() 获取日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getName() 获取投递任务名称
name有以下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
 * @method void setName(string $Name) 设置投递任务名称
name有以下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
 * @method integer getEnable() 获取投递任务启用状态；0:禁用；1:启用
 * @method void setEnable(integer $Enable) 设置投递任务启用状态；0:禁用；1:启用
 * @method NetInfo getNetInfo() 获取splunk投递任务-目标配置
 * @method void setNetInfo(NetInfo $NetInfo) 设置splunk投递任务-目标配置
 * @method MetadataInfo getMetadataInfo() 获取splunk投递任务元信息
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) 设置splunk投递任务元信息
 * @method integer getHasServiceLog() 获取是否启用服务日志；1:关闭；2:开启
 * @method void setHasServiceLog(integer $HasServiceLog) 设置是否启用服务日志；1:关闭；2:开启
 * @method integer getIndexAck() 获取高级配置-是否启用索引器;
1-不开启；2-开启；默认为：1
 * @method void setIndexAck(integer $IndexAck) 设置高级配置-是否启用索引器;
1-不开启；2-开启；默认为：1
 * @method string getSource() 获取高级配置-数据来源；不超过64个字符
 * @method void setSource(string $Source) 设置高级配置-数据来源；不超过64个字符
 * @method string getSourceType() 获取高级配置-数据来源类型；不超过64个字符
 * @method void setSourceType(string $SourceType) 设置高级配置-数据来源类型；不超过64个字符
 * @method string getIndex() 获取高级配置-Splunk写入的索引；不超过64个字符
 * @method void setIndex(string $Index) 设置高级配置-Splunk写入的索引；不超过64个字符
 * @method string getChannel() 获取高级配置-通道。
需满足限制：如果启用索引器，该值不能为空
 * @method void setChannel(string $Channel) 设置高级配置-通道。
需满足限制：如果启用索引器，该值不能为空
 */
class ModifySplunkDeliverRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 投递任务名称
name有以下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
     */
    public $Name;

    /**
     * @var integer 投递任务启用状态；0:禁用；1:启用
     */
    public $Enable;

    /**
     * @var NetInfo splunk投递任务-目标配置
     */
    public $NetInfo;

    /**
     * @var MetadataInfo splunk投递任务元信息
     */
    public $MetadataInfo;

    /**
     * @var integer 是否启用服务日志；1:关闭；2:开启
     */
    public $HasServiceLog;

    /**
     * @var integer 高级配置-是否启用索引器;
1-不开启；2-开启；默认为：1
     */
    public $IndexAck;

    /**
     * @var string 高级配置-数据来源；不超过64个字符
     */
    public $Source;

    /**
     * @var string 高级配置-数据来源类型；不超过64个字符
     */
    public $SourceType;

    /**
     * @var string 高级配置-Splunk写入的索引；不超过64个字符
     */
    public $Index;

    /**
     * @var string 高级配置-通道。
需满足限制：如果启用索引器，该值不能为空
     */
    public $Channel;

    /**
     * @param string $TaskId 任务id
     * @param string $TopicId 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $Name 投递任务名称
name有以下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
     * @param integer $Enable 投递任务启用状态；0:禁用；1:启用
     * @param NetInfo $NetInfo splunk投递任务-目标配置
     * @param MetadataInfo $MetadataInfo splunk投递任务元信息
     * @param integer $HasServiceLog 是否启用服务日志；1:关闭；2:开启
     * @param integer $IndexAck 高级配置-是否启用索引器;
1-不开启；2-开启；默认为：1
     * @param string $Source 高级配置-数据来源；不超过64个字符
     * @param string $SourceType 高级配置-数据来源类型；不超过64个字符
     * @param string $Index 高级配置-Splunk写入的索引；不超过64个字符
     * @param string $Channel 高级配置-通道。
需满足限制：如果启用索引器，该值不能为空
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("NetInfo",$param) and $param["NetInfo"] !== null) {
            $this->NetInfo = new NetInfo();
            $this->NetInfo->deserialize($param["NetInfo"]);
        }

        if (array_key_exists("MetadataInfo",$param) and $param["MetadataInfo"] !== null) {
            $this->MetadataInfo = new MetadataInfo();
            $this->MetadataInfo->deserialize($param["MetadataInfo"]);
        }

        if (array_key_exists("HasServiceLog",$param) and $param["HasServiceLog"] !== null) {
            $this->HasServiceLog = $param["HasServiceLog"];
        }

        if (array_key_exists("IndexAck",$param) and $param["IndexAck"] !== null) {
            $this->IndexAck = $param["IndexAck"];
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

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
