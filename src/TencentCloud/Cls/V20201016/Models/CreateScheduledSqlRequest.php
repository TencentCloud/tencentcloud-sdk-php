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
 * CreateScheduledSql请求参数结构体
 *
 * @method string getSrcTopicId() 获取<p>源日志主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method void setSrcTopicId(string $SrcTopicId) 设置<p>源日志主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method string getName() 获取<p>任务名称，0~255字符</p>
 * @method void setName(string $Name) 设置<p>任务名称，0~255字符</p>
 * @method integer getEnableFlag() 获取<p>任务启动状态.  1开启,  2关闭</p>
 * @method void setEnableFlag(integer $EnableFlag) 设置<p>任务启动状态.  1开启,  2关闭</p>
 * @method ScheduledSqlResouceInfo getDstResource() 获取<p>定时SQL分析目标日志主题</p>
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) 设置<p>定时SQL分析目标日志主题</p>
 * @method string getScheduledSqlContent() 获取<p>查询语句</p>
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) 设置<p>查询语句</p>
 * @method integer getProcessStartTime() 获取<p>调度开始时间,Unix时间戳，单位ms</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) 设置<p>调度开始时间,Unix时间戳，单位ms</p>
 * @method integer getProcessType() 获取<p>调度类型，1:持续运行 2:指定时间范围</p>
 * @method void setProcessType(integer $ProcessType) 设置<p>调度类型，1:持续运行 2:指定时间范围</p>
 * @method integer getProcessPeriod() 获取<p>调度周期(分钟)，1~1440分钟</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置<p>调度周期(分钟)，1~1440分钟</p>
 * @method string getProcessTimeWindow() 获取<p>单次查询的时间窗口,如果您的目标主题为指标主题，建议该参数的大小不超过30分钟，否则可能转指标失败。</p>
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) 设置<p>单次查询的时间窗口,如果您的目标主题为指标主题，建议该参数的大小不超过30分钟，否则可能转指标失败。</p>
 * @method integer getProcessDelay() 获取<p>执行延迟(秒)，0~120秒，默认60秒</p>
 * @method void setProcessDelay(integer $ProcessDelay) 设置<p>执行延迟(秒)，0~120秒，默认60秒</p>
 * @method string getSrcTopicRegion() 获取<p>源topicId的地域信息,支持地域见 <a href="https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a> 文档</p>
 * @method void setSrcTopicRegion(string $SrcTopicRegion) 设置<p>源topicId的地域信息,支持地域见 <a href="https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a> 文档</p>
 * @method integer getProcessPeriodUnit() 获取<p>调度时间单位</p><p>取值范围：[1, 2]</p><p>默认值：1</p><p>默认值为1（分钟），其他值2（秒）</p>
 * @method void setProcessPeriodUnit(integer $ProcessPeriodUnit) 设置<p>调度时间单位</p><p>取值范围：[1, 2]</p><p>默认值：1</p><p>默认值为1（分钟），其他值2（秒）</p>
 * @method integer getProcessEndTime() 获取<p>调度结束时间，当ProcessType=2时为必传字段, Unix时间戳，单位ms</p>
 * @method void setProcessEndTime(integer $ProcessEndTime) 设置<p>调度结束时间，当ProcessType=2时为必传字段, Unix时间戳，单位ms</p>
 * @method integer getSyntaxRule() 获取<p>查询语法规则。 默认值为0。0：Lucene语法，1：CQL语法</p>
 * @method void setSyntaxRule(integer $SyntaxRule) 设置<p>查询语法规则。 默认值为0。0：Lucene语法，1：CQL语法</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method integer getFullQuery() 获取<p>全文检索标记。1：关闭，2：打开。默认：1</p>
 * @method void setFullQuery(integer $FullQuery) 设置<p>全文检索标记。1：关闭，2：打开。默认：1</p>
 */
class CreateScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string <p>源日志主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     */
    public $SrcTopicId;

    /**
     * @var string <p>任务名称，0~255字符</p>
     */
    public $Name;

    /**
     * @var integer <p>任务启动状态.  1开启,  2关闭</p>
     */
    public $EnableFlag;

    /**
     * @var ScheduledSqlResouceInfo <p>定时SQL分析目标日志主题</p>
     */
    public $DstResource;

    /**
     * @var string <p>查询语句</p>
     */
    public $ScheduledSqlContent;

    /**
     * @var integer <p>调度开始时间,Unix时间戳，单位ms</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>调度类型，1:持续运行 2:指定时间范围</p>
     */
    public $ProcessType;

    /**
     * @var integer <p>调度周期(分钟)，1~1440分钟</p>
     */
    public $ProcessPeriod;

    /**
     * @var string <p>单次查询的时间窗口,如果您的目标主题为指标主题，建议该参数的大小不超过30分钟，否则可能转指标失败。</p>
     */
    public $ProcessTimeWindow;

    /**
     * @var integer <p>执行延迟(秒)，0~120秒，默认60秒</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>源topicId的地域信息,支持地域见 <a href="https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a> 文档</p>
     */
    public $SrcTopicRegion;

    /**
     * @var integer <p>调度时间单位</p><p>取值范围：[1, 2]</p><p>默认值：1</p><p>默认值为1（分钟），其他值2（秒）</p>
     */
    public $ProcessPeriodUnit;

    /**
     * @var integer <p>调度结束时间，当ProcessType=2时为必传字段, Unix时间戳，单位ms</p>
     */
    public $ProcessEndTime;

    /**
     * @var integer <p>查询语法规则。 默认值为0。0：Lucene语法，1：CQL语法</p>
     */
    public $SyntaxRule;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>全文检索标记。1：关闭，2：打开。默认：1</p>
     */
    public $FullQuery;

    /**
     * @param string $SrcTopicId <p>源日志主题ID- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     * @param string $Name <p>任务名称，0~255字符</p>
     * @param integer $EnableFlag <p>任务启动状态.  1开启,  2关闭</p>
     * @param ScheduledSqlResouceInfo $DstResource <p>定时SQL分析目标日志主题</p>
     * @param string $ScheduledSqlContent <p>查询语句</p>
     * @param integer $ProcessStartTime <p>调度开始时间,Unix时间戳，单位ms</p>
     * @param integer $ProcessType <p>调度类型，1:持续运行 2:指定时间范围</p>
     * @param integer $ProcessPeriod <p>调度周期(分钟)，1~1440分钟</p>
     * @param string $ProcessTimeWindow <p>单次查询的时间窗口,如果您的目标主题为指标主题，建议该参数的大小不超过30分钟，否则可能转指标失败。</p>
     * @param integer $ProcessDelay <p>执行延迟(秒)，0~120秒，默认60秒</p>
     * @param string $SrcTopicRegion <p>源topicId的地域信息,支持地域见 <a href="https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a> 文档</p>
     * @param integer $ProcessPeriodUnit <p>调度时间单位</p><p>取值范围：[1, 2]</p><p>默认值：1</p><p>默认值为1（分钟），其他值2（秒）</p>
     * @param integer $ProcessEndTime <p>调度结束时间，当ProcessType=2时为必传字段, Unix时间戳，单位ms</p>
     * @param integer $SyntaxRule <p>查询语法规则。 默认值为0。0：Lucene语法，1：CQL语法</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     * @param integer $FullQuery <p>全文检索标记。1：关闭，2：打开。默认：1</p>
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
        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
        }

        if (array_key_exists("ScheduledSqlContent",$param) and $param["ScheduledSqlContent"] !== null) {
            $this->ScheduledSqlContent = $param["ScheduledSqlContent"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessTimeWindow",$param) and $param["ProcessTimeWindow"] !== null) {
            $this->ProcessTimeWindow = $param["ProcessTimeWindow"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("SrcTopicRegion",$param) and $param["SrcTopicRegion"] !== null) {
            $this->SrcTopicRegion = $param["SrcTopicRegion"];
        }

        if (array_key_exists("ProcessPeriodUnit",$param) and $param["ProcessPeriodUnit"] !== null) {
            $this->ProcessPeriodUnit = $param["ProcessPeriodUnit"];
        }

        if (array_key_exists("ProcessEndTime",$param) and $param["ProcessEndTime"] !== null) {
            $this->ProcessEndTime = $param["ProcessEndTime"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("FullQuery",$param) and $param["FullQuery"] !== null) {
            $this->FullQuery = $param["FullQuery"];
        }
    }
}
