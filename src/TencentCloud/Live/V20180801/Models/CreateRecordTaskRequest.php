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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecordTask请求参数结构体
 *
 * @method string getStreamName() 获取<p>流名称。</p>
 * @method void setStreamName(string $StreamName) 设置<p>流名称。</p>
 * @method string getDomainName() 获取<p>推流域名。</p>
 * @method void setDomainName(string $DomainName) 设置<p>推流域名。</p>
 * @method string getAppName() 获取<p>推流路径。</p>
 * @method void setAppName(string $AppName) 设置<p>推流路径。</p>
 * @method integer getEndTime() 获取<p>录制任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>录制任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。</p>
 * @method integer getStartTime() 获取<p>录制任务开始时间，Unix时间戳。如果不填表示立即启动录制。EndTime - StartTime不能超过24小时。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>录制任务开始时间，Unix时间戳。如果不填表示立即启动录制。EndTime - StartTime不能超过24小时。</p>
 * @method integer getStreamType() 获取<p>推流类型，默认0。取值：<br>0-直播推流。<br>1-合成流，即 A+B=C 类型混流。</p>
 * @method void setStreamType(integer $StreamType) 设置<p>推流类型，默认0。取值：<br>0-直播推流。<br>1-合成流，即 A+B=C 类型混流。</p>
 * @method integer getTemplateId() 获取<p>录制模板ID，CreateLiveRecordTemplate 返回值。如果不填或者传入错误ID，则默认录制 HLS 格式、永久存储至 VOD 主应用下。<br>示例值：0。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>录制模板ID，CreateLiveRecordTemplate 返回值。如果不填或者传入错误ID，则默认录制 HLS 格式、永久存储至 VOD 主应用下。<br>示例值：0。</p>
 * @method string getExtension() 获取<p>扩展字段，暂无定义。默认为空。</p>
 * @method void setExtension(string $Extension) 设置<p>扩展字段，暂无定义。默认为空。</p>
 */
class CreateRecordTaskRequest extends AbstractModel
{
    /**
     * @var string <p>流名称。</p>
     */
    public $StreamName;

    /**
     * @var string <p>推流域名。</p>
     */
    public $DomainName;

    /**
     * @var string <p>推流路径。</p>
     */
    public $AppName;

    /**
     * @var integer <p>录制任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>录制任务开始时间，Unix时间戳。如果不填表示立即启动录制。EndTime - StartTime不能超过24小时。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>推流类型，默认0。取值：<br>0-直播推流。<br>1-合成流，即 A+B=C 类型混流。</p>
     */
    public $StreamType;

    /**
     * @var integer <p>录制模板ID，CreateLiveRecordTemplate 返回值。如果不填或者传入错误ID，则默认录制 HLS 格式、永久存储至 VOD 主应用下。<br>示例值：0。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>扩展字段，暂无定义。默认为空。</p>
     */
    public $Extension;

    /**
     * @param string $StreamName <p>流名称。</p>
     * @param string $DomainName <p>推流域名。</p>
     * @param string $AppName <p>推流路径。</p>
     * @param integer $EndTime <p>录制任务结束时间，Unix时间戳。设置时间必须大于StartTime及当前时间，且小于当前时间+7天。</p>
     * @param integer $StartTime <p>录制任务开始时间，Unix时间戳。如果不填表示立即启动录制。EndTime - StartTime不能超过24小时。</p>
     * @param integer $StreamType <p>推流类型，默认0。取值：<br>0-直播推流。<br>1-合成流，即 A+B=C 类型混流。</p>
     * @param integer $TemplateId <p>录制模板ID，CreateLiveRecordTemplate 返回值。如果不填或者传入错误ID，则默认录制 HLS 格式、永久存储至 VOD 主应用下。<br>示例值：0。</p>
     * @param string $Extension <p>扩展字段，暂无定义。默认为空。</p>
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
