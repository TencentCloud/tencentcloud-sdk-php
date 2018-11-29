<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getAppName() 获取直播流所属应用名称。
 * @method void setAppName(string $AppName) 设置直播流所属应用名称。
 * @method string getDomainName() 获取推流域名。多域名推流必须设置。
 * @method void setDomainName(string $DomainName) 设置推流域名。多域名推流必须设置。
 * @method string getStartTime() 获取任务起始时间，中国标准时间，需要URLEncode。如 2017-01-01 10:10:01，编码为：2017-01-01+10%3a10%3a01。录制视频为精彩视频时，忽略此字段。
 * @method void setStartTime(string $StartTime) 设置任务起始时间，中国标准时间，需要URLEncode。如 2017-01-01 10:10:01，编码为：2017-01-01+10%3a10%3a01。录制视频为精彩视频时，忽略此字段。
 * @method string getEndTime() 获取任务结束时间，中国标准时间，需要URLEncode。如 2017-01-01 10:30:01，编码为：2017-01-01+10%3a30%3a01。若指定精彩视频录制，结束时间不超过当前时间+30分钟，如果超过或小于起始时间，则实际结束时间为当前时间+30分钟。
 * @method void setEndTime(string $EndTime) 设置任务结束时间，中国标准时间，需要URLEncode。如 2017-01-01 10:30:01，编码为：2017-01-01+10%3a30%3a01。若指定精彩视频录制，结束时间不超过当前时间+30分钟，如果超过或小于起始时间，则实际结束时间为当前时间+30分钟。
 * @method string getRecordType() 获取录制类型。不区分大小写。
“video” : 音视频录制【默认】。
“audio” : 纯音频录制。
 * @method void setRecordType(string $RecordType) 设置录制类型。不区分大小写。
“video” : 音视频录制【默认】。
“audio” : 纯音频录制。
 * @method string getFileFormat() 获取录制文件格式。不区分大小写。其值为：
“flv”,“hls”,”mp4”,“aac”,”mp3”，默认“flv”。
 * @method void setFileFormat(string $FileFormat) 设置录制文件格式。不区分大小写。其值为：
“flv”,“hls”,”mp4”,“aac”,”mp3”，默认“flv”。
 * @method integer getHighlight() 获取精彩视频标志。0：普通视频【默认】；1：精彩视频。
 * @method void setHighlight(integer $Highlight) 设置精彩视频标志。0：普通视频【默认】；1：精彩视频。
 * @method integer getMixStream() 获取A+B=C混流标志。0：非A+B=C混流录制【默认】；1：标示为A+B=C混流录制。
 * @method void setMixStream(integer $MixStream) 设置A+B=C混流标志。0：非A+B=C混流录制【默认】；1：标示为A+B=C混流录制。
 * @method string getStreamParam() 获取录制流参数，当前支持以下参数： 
interval 录制分片时长，单位 秒，0 - 7200
storage_time 录制文件存储时长，单位 秒
eg. interval=3600&storage_time=7200
注：参数需要url encode。
 * @method void setStreamParam(string $StreamParam) 设置录制流参数，当前支持以下参数： 
interval 录制分片时长，单位 秒，0 - 7200
storage_time 录制文件存储时长，单位 秒
eg. interval=3600&storage_time=7200
注：参数需要url encode。
 */

/**
 *CreateLiveRecord请求参数结构体
 */
class CreateLiveRecordRequest extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 直播流所属应用名称。
     */
    public $AppName;

    /**
     * @var string 推流域名。多域名推流必须设置。
     */
    public $DomainName;

    /**
     * @var string 任务起始时间，中国标准时间，需要URLEncode。如 2017-01-01 10:10:01，编码为：2017-01-01+10%3a10%3a01。录制视频为精彩视频时，忽略此字段。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间，中国标准时间，需要URLEncode。如 2017-01-01 10:30:01，编码为：2017-01-01+10%3a30%3a01。若指定精彩视频录制，结束时间不超过当前时间+30分钟，如果超过或小于起始时间，则实际结束时间为当前时间+30分钟。
     */
    public $EndTime;

    /**
     * @var string 录制类型。不区分大小写。
“video” : 音视频录制【默认】。
“audio” : 纯音频录制。
     */
    public $RecordType;

    /**
     * @var string 录制文件格式。不区分大小写。其值为：
“flv”,“hls”,”mp4”,“aac”,”mp3”，默认“flv”。
     */
    public $FileFormat;

    /**
     * @var integer 精彩视频标志。0：普通视频【默认】；1：精彩视频。
     */
    public $Highlight;

    /**
     * @var integer A+B=C混流标志。0：非A+B=C混流录制【默认】；1：标示为A+B=C混流录制。
     */
    public $MixStream;

    /**
     * @var string 录制流参数，当前支持以下参数： 
interval 录制分片时长，单位 秒，0 - 7200
storage_time 录制文件存储时长，单位 秒
eg. interval=3600&storage_time=7200
注：参数需要url encode。
     */
    public $StreamParam;
    /**
     * @param string $StreamName 流名称。
     * @param string $AppName 直播流所属应用名称。
     * @param string $DomainName 推流域名。多域名推流必须设置。
     * @param string $StartTime 任务起始时间，中国标准时间，需要URLEncode。如 2017-01-01 10:10:01，编码为：2017-01-01+10%3a10%3a01。录制视频为精彩视频时，忽略此字段。
     * @param string $EndTime 任务结束时间，中国标准时间，需要URLEncode。如 2017-01-01 10:30:01，编码为：2017-01-01+10%3a30%3a01。若指定精彩视频录制，结束时间不超过当前时间+30分钟，如果超过或小于起始时间，则实际结束时间为当前时间+30分钟。
     * @param string $RecordType 录制类型。不区分大小写。
“video” : 音视频录制【默认】。
“audio” : 纯音频录制。
     * @param string $FileFormat 录制文件格式。不区分大小写。其值为：
“flv”,“hls”,”mp4”,“aac”,”mp3”，默认“flv”。
     * @param integer $Highlight 精彩视频标志。0：普通视频【默认】；1：精彩视频。
     * @param integer $MixStream A+B=C混流标志。0：非A+B=C混流录制【默认】；1：标示为A+B=C混流录制。
     * @param string $StreamParam 录制流参数，当前支持以下参数： 
interval 录制分片时长，单位 秒，0 - 7200
storage_time 录制文件存储时长，单位 秒
eg. interval=3600&storage_time=7200
注：参数需要url encode。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("Highlight",$param) and $param["Highlight"] !== null) {
            $this->Highlight = $param["Highlight"];
        }

        if (array_key_exists("MixStream",$param) and $param["MixStream"] !== null) {
            $this->MixStream = $param["MixStream"];
        }

        if (array_key_exists("StreamParam",$param) and $param["StreamParam"] !== null) {
            $this->StreamParam = $param["StreamParam"];
        }
    }
}
