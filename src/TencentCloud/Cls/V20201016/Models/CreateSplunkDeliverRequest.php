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
 * CreateSplunkDeliver请求参数结构体
 *
 * @method string getTopicId() 获取日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getName() 获取splunk投递任务名称；
name有如下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
 * @method void setName(string $Name) 设置splunk投递任务名称；
name有如下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
 * @method NetInfo getNetInfo() 获取Splunk投递任务-目标配置-网络信息
 * @method void setNetInfo(NetInfo $NetInfo) 设置Splunk投递任务-目标配置-网络信息
 * @method MetadataInfo getMetadataInfo() 获取Splunk投递任务元信息
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) 设置Splunk投递任务元信息
 * @method integer getHasServiceLog() 获取是否开启服务日志 1:关闭；2:开启 ;默认开启
 * @method void setHasServiceLog(integer $HasServiceLog) 设置是否开启服务日志 1:关闭；2:开启 ;默认开启
 * @method integer getIndexAck() 获取高级配置-是否启用索引器；1-不启用；2-启用；
默认：1
 * @method void setIndexAck(integer $IndexAck) 设置高级配置-是否启用索引器；1-不启用；2-启用；
默认：1
 * @method string getSource() 获取高级配置-数据来源；不超过64个字符
 * @method void setSource(string $Source) 设置高级配置-数据来源；不超过64个字符
 * @method string getSourceType() 获取高级配置-数据来源类型；不超过64个字符
 * @method void setSourceType(string $SourceType) 设置高级配置-数据来源类型；不超过64个字符
 * @method string getIndex() 获取高级配置-Splunk写入的索引；不超过64个字符
 * @method void setIndex(string $Index) 设置高级配置-Splunk写入的索引；不超过64个字符
 * @method string getChannel() 获取高级配置-通道
需满足限制：如果启用索引器，那么Channel必填
 * @method void setChannel(string $Channel) 设置高级配置-通道
需满足限制：如果启用索引器，那么Channel必填
 */
class CreateSplunkDeliverRequest extends AbstractModel
{
    /**
     * @var string 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string splunk投递任务名称；
name有如下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
     */
    public $Name;

    /**
     * @var NetInfo Splunk投递任务-目标配置-网络信息
     */
    public $NetInfo;

    /**
     * @var MetadataInfo Splunk投递任务元信息
     */
    public $MetadataInfo;

    /**
     * @var integer 是否开启服务日志 1:关闭；2:开启 ;默认开启
     */
    public $HasServiceLog;

    /**
     * @var integer 高级配置-是否启用索引器；1-不启用；2-启用；
默认：1
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
     * @var string 高级配置-通道
需满足限制：如果启用索引器，那么Channel必填
     */
    public $Channel;

    /**
     * @param string $TopicId 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $Name splunk投递任务名称；
name有如下限制：
- 不能为空
- 长度不大于64
- 只能包含aA-zZ、下划线、-、0-9
     * @param NetInfo $NetInfo Splunk投递任务-目标配置-网络信息
     * @param MetadataInfo $MetadataInfo Splunk投递任务元信息
     * @param integer $HasServiceLog 是否开启服务日志 1:关闭；2:开启 ;默认开启
     * @param integer $IndexAck 高级配置-是否启用索引器；1-不启用；2-启用；
默认：1
     * @param string $Source 高级配置-数据来源；不超过64个字符
     * @param string $SourceType 高级配置-数据来源类型；不超过64个字符
     * @param string $Index 高级配置-Splunk写入的索引；不超过64个字符
     * @param string $Channel 高级配置-通道
需满足限制：如果启用索引器，那么Channel必填
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
