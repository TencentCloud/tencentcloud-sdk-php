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
 * @method string getTopicId() 获取<p>日志主题id- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method string getName() 获取<p>splunk投递任务名称；name有如下限制：- 不能为空- 长度不大于64- 只能包含aA-zZ、下划线、-、0-9</p>
 * @method void setName(string $Name) 设置<p>splunk投递任务名称；name有如下限制：- 不能为空- 长度不大于64- 只能包含aA-zZ、下划线、-、0-9</p>
 * @method NetInfo getNetInfo() 获取<p>Splunk投递任务-目标配置-网络信息</p>
 * @method void setNetInfo(NetInfo $NetInfo) 设置<p>Splunk投递任务-目标配置-网络信息</p>
 * @method MetadataInfo getMetadataInfo() 获取<p>Splunk投递任务元信息</p>
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) 设置<p>Splunk投递任务元信息</p>
 * @method integer getHasServiceLog() 获取<p>是否开启服务日志 1:关闭；2:开启 ;默认开启</p>
 * @method void setHasServiceLog(integer $HasServiceLog) 设置<p>是否开启服务日志 1:关闭；2:开启 ;默认开启</p>
 * @method integer getIndexAck() 获取<p>高级配置-是否启用索引器；1-不启用；2-启用；默认：1</p>
 * @method void setIndexAck(integer $IndexAck) 设置<p>高级配置-是否启用索引器；1-不启用；2-启用；默认：1</p>
 * @method string getSource() 获取<p>高级配置-数据来源；不超过64个字符</p>
 * @method void setSource(string $Source) 设置<p>高级配置-数据来源；不超过64个字符</p>
 * @method string getSourceType() 获取<p>高级配置-数据来源类型；不超过64个字符</p>
 * @method void setSourceType(string $SourceType) 设置<p>高级配置-数据来源类型；不超过64个字符</p>
 * @method string getIndex() 获取<p>高级配置-Splunk写入的索引；不超过64个字符</p>
 * @method void setIndex(string $Index) 设置<p>高级配置-Splunk写入的索引；不超过64个字符</p>
 * @method string getChannel() 获取<p>高级配置-通道需满足限制：如果启用索引器，那么Channel必填</p>
 * @method void setChannel(string $Channel) 设置<p>高级配置-通道需满足限制：如果启用索引器，那么Channel必填</p>
 * @method string getDSLFilter() 获取<p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
 */
class CreateSplunkDeliverRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题id- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     */
    public $TopicId;

    /**
     * @var string <p>splunk投递任务名称；name有如下限制：- 不能为空- 长度不大于64- 只能包含aA-zZ、下划线、-、0-9</p>
     */
    public $Name;

    /**
     * @var NetInfo <p>Splunk投递任务-目标配置-网络信息</p>
     */
    public $NetInfo;

    /**
     * @var MetadataInfo <p>Splunk投递任务元信息</p>
     */
    public $MetadataInfo;

    /**
     * @var integer <p>是否开启服务日志 1:关闭；2:开启 ;默认开启</p>
     */
    public $HasServiceLog;

    /**
     * @var integer <p>高级配置-是否启用索引器；1-不启用；2-启用；默认：1</p>
     */
    public $IndexAck;

    /**
     * @var string <p>高级配置-数据来源；不超过64个字符</p>
     */
    public $Source;

    /**
     * @var string <p>高级配置-数据来源类型；不超过64个字符</p>
     */
    public $SourceType;

    /**
     * @var string <p>高级配置-Splunk写入的索引；不超过64个字符</p>
     */
    public $Index;

    /**
     * @var string <p>高级配置-通道需满足限制：如果启用索引器，那么Channel必填</p>
     */
    public $Channel;

    /**
     * @var string <p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>日志主题id- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     * @param string $Name <p>splunk投递任务名称；name有如下限制：- 不能为空- 长度不大于64- 只能包含aA-zZ、下划线、-、0-9</p>
     * @param NetInfo $NetInfo <p>Splunk投递任务-目标配置-网络信息</p>
     * @param MetadataInfo $MetadataInfo <p>Splunk投递任务元信息</p>
     * @param integer $HasServiceLog <p>是否开启服务日志 1:关闭；2:开启 ;默认开启</p>
     * @param integer $IndexAck <p>高级配置-是否启用索引器；1-不启用；2-启用；默认：1</p>
     * @param string $Source <p>高级配置-数据来源；不超过64个字符</p>
     * @param string $SourceType <p>高级配置-数据来源类型；不超过64个字符</p>
     * @param string $Index <p>高级配置-Splunk写入的索引；不超过64个字符</p>
     * @param string $Channel <p>高级配置-通道需满足限制：如果启用索引器，那么Channel必填</p>
     * @param string $DSLFilter <p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
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

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
