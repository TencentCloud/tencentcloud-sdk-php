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
 * CreateDlcDeliver请求参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method string getName() 获取<p>名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。</p>
 * @method void setName(string $Name) 设置<p>名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。</p>
 * @method integer getDeliverType() 获取<p>投递类型。0:批投递,1:实时投递</p>
 * @method void setDeliverType(integer $DeliverType) 设置<p>投递类型。0:批投递,1:实时投递</p>
 * @method integer getStartTime() 获取<p>投递时间范围的开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>投递时间范围的开始时间</p>
 * @method DlcInfo getDlcInfo() 获取<p>dlc配置信息</p>
 * @method void setDlcInfo(DlcInfo $DlcInfo) 设置<p>dlc配置信息</p>
 * @method integer getMaxSize() 获取<p>投递文件大小,单位MB。 DeliverType=0时必填，范围 5&lt;= MaxSize &lt;= 256。</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>投递文件大小,单位MB。 DeliverType=0时必填，范围 5&lt;= MaxSize &lt;= 256。</p>
 * @method integer getInterval() 获取<p>投递间隔，单位秒。 DeliverType=0时必填，范围 300&lt;= Interval &lt;=900。</p>
 * @method void setInterval(integer $Interval) 设置<p>投递间隔，单位秒。 DeliverType=0时必填，范围 300&lt;= Interval &lt;=900。</p>
 * @method integer getEndTime() 获取<p>投递时间范围的结束时间。 如果为空，则表示不限时。EndTime不为空时，需要大于StartTime。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>投递时间范围的结束时间。 如果为空，则表示不限时。EndTime不为空时，需要大于StartTime。</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1关闭，2开启。默认开启</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1关闭，2开启。默认开启</p>
 */
class CreateDlcDeliverRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。</p>
     */
    public $Name;

    /**
     * @var integer <p>投递类型。0:批投递,1:实时投递</p>
     */
    public $DeliverType;

    /**
     * @var integer <p>投递时间范围的开始时间</p>
     */
    public $StartTime;

    /**
     * @var DlcInfo <p>dlc配置信息</p>
     */
    public $DlcInfo;

    /**
     * @var integer <p>投递文件大小,单位MB。 DeliverType=0时必填，范围 5&lt;= MaxSize &lt;= 256。</p>
     */
    public $MaxSize;

    /**
     * @var integer <p>投递间隔，单位秒。 DeliverType=0时必填，范围 300&lt;= Interval &lt;=900。</p>
     */
    public $Interval;

    /**
     * @var integer <p>投递时间范围的结束时间。 如果为空，则表示不限时。EndTime不为空时，需要大于StartTime。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否开启投递服务日志。1关闭，2开启。默认开启</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TopicId <p>日志主题id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     * @param string $Name <p>名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。</p>
     * @param integer $DeliverType <p>投递类型。0:批投递,1:实时投递</p>
     * @param integer $StartTime <p>投递时间范围的开始时间</p>
     * @param DlcInfo $DlcInfo <p>dlc配置信息</p>
     * @param integer $MaxSize <p>投递文件大小,单位MB。 DeliverType=0时必填，范围 5&lt;= MaxSize &lt;= 256。</p>
     * @param integer $Interval <p>投递间隔，单位秒。 DeliverType=0时必填，范围 300&lt;= Interval &lt;=900。</p>
     * @param integer $EndTime <p>投递时间范围的结束时间。 如果为空，则表示不限时。EndTime不为空时，需要大于StartTime。</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1关闭，2开启。默认开启</p>
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

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DlcInfo",$param) and $param["DlcInfo"] !== null) {
            $this->DlcInfo = new DlcInfo();
            $this->DlcInfo->deserialize($param["DlcInfo"]);
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
