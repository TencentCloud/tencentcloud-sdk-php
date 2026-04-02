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
 * 录制模板参数。
 *
 * @method integer getRecordInterval() 获取<p>录制间隔。<br>单位秒，默认：1800。<br>FLV、MP4取值范围： 60-43200， AAC取值范围： 60-7200 。<br>此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。</p>
 * @method void setRecordInterval(integer $RecordInterval) 设置<p>录制间隔。<br>单位秒，默认：1800。<br>FLV、MP4取值范围： 60-43200， AAC取值范围： 60-7200 。<br>此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。</p>
 * @method integer getStorageTime() 获取<p>录制存储时长。<br>单位秒，取值范围： 0 - 1500天。<br>0：表示永久存储。<br>注：此参数只对录制到VOD有效。</p>
 * @method void setStorageTime(integer $StorageTime) 设置<p>录制存储时长。<br>单位秒，取值范围： 0 - 1500天。<br>0：表示永久存储。<br>注：此参数只对录制到VOD有效。</p>
 * @method integer getEnable() 获取<p>是否开启当前格式录制，默认值为0，0：否， 1：是。</p>
 * @method void setEnable(integer $Enable) 设置<p>是否开启当前格式录制，默认值为0，0：否， 1：是。</p>
 * @method integer getVodSubAppId() 获取<p>点播子应用 ID。</p>
 * @method void setVodSubAppId(integer $VodSubAppId) 设置<p>点播子应用 ID。</p>
 * @method string getVodFileName() 获取<p>录制文件名。<br>支持的特殊占位符有：<br>{StreamID}: 流ID<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p><p>若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}</p>
 * @method void setVodFileName(string $VodFileName) 设置<p>录制文件名。<br>支持的特殊占位符有：<br>{StreamID}: 流ID<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p><p>若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}</p>
 * @method string getProcedure() 获取<p>任务流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedure(string $Procedure) 设置<p>任务流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageMode() 获取<p>视频存储策略。<br>normal：标准存储。<br>cold：低频存储。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageMode(string $StorageMode) 设置<p>视频存储策略。<br>normal：标准存储。<br>cold：低频存储。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClassId() 获取<p>点播应用分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassId(integer $ClassId) 设置<p>点播应用分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketName() 获取<p>存储至 cos 的 bucket 桶名称。<br>注：CosBucketName参数值不能包含-[appid] 部分。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置<p>存储至 cos 的 bucket 桶名称。<br>注：CosBucketName参数值不能包含-[appid] 部分。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketRegion() 获取<p>存储至 cos 的 bucket 区域。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置<p>存储至 cos 的 bucket 区域。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketPath() 获取<p>存储至 cos 的 bucket 路径。<br>注意：若为输入参数，则该参数必填，且必须以斜杠（/）开头，建议至少包含 {StartYear}、{StartMonth}、{StartDay}、{StartHour}、{StartMinute}、{StartSecond} 或 {RandomID} 任意一种，否则可能出现录制文件名重复造成文件相互覆盖；若为返回参数，则此字段可能返回 null，表示取不到有效值。<br>示例值：/{RecordSource}/{Domain}/{AppName}/{StreamID}/{RecordId}-{RandomID}/{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}</p><p>支持的特殊占位符有：<br>{RecordSource}：区分录制内容，若录制原始流、水印流则为“origin”，录制转码流时，代表转码模板ID<br>{StreamID}: 流ID<br>{RecordId}：录制任务ID，断流前后该值可能重复；<br>{RandomID}：随机数，断流前后该值不同；<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketPath(string $CosBucketPath) 设置<p>存储至 cos 的 bucket 路径。<br>注意：若为输入参数，则该参数必填，且必须以斜杠（/）开头，建议至少包含 {StartYear}、{StartMonth}、{StartDay}、{StartHour}、{StartMinute}、{StartSecond} 或 {RandomID} 任意一种，否则可能出现录制文件名重复造成文件相互覆盖；若为返回参数，则此字段可能返回 null，表示取不到有效值。<br>示例值：/{RecordSource}/{Domain}/{AppName}/{StreamID}/{RecordId}-{RandomID}/{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}</p><p>支持的特殊占位符有：<br>{RecordSource}：区分录制内容，若录制原始流、水印流则为“origin”，录制转码流时，代表转码模板ID<br>{StreamID}: 流ID<br>{RecordId}：录制任务ID，断流前后该值可能重复；<br>{RandomID}：随机数，断流前后该值不同；<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordParam extends AbstractModel
{
    /**
     * @var integer <p>录制间隔。<br>单位秒，默认：1800。<br>FLV、MP4取值范围： 60-43200， AAC取值范围： 60-7200 。<br>此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。</p>
     */
    public $RecordInterval;

    /**
     * @var integer <p>录制存储时长。<br>单位秒，取值范围： 0 - 1500天。<br>0：表示永久存储。<br>注：此参数只对录制到VOD有效。</p>
     */
    public $StorageTime;

    /**
     * @var integer <p>是否开启当前格式录制，默认值为0，0：否， 1：是。</p>
     */
    public $Enable;

    /**
     * @var integer <p>点播子应用 ID。</p>
     */
    public $VodSubAppId;

    /**
     * @var string <p>录制文件名。<br>支持的特殊占位符有：<br>{StreamID}: 流ID<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p><p>若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}</p>
     */
    public $VodFileName;

    /**
     * @var string <p>任务流</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procedure;

    /**
     * @var string <p>视频存储策略。<br>normal：标准存储。<br>cold：低频存储。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageMode;

    /**
     * @var integer <p>点播应用分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassId;

    /**
     * @var string <p>存储至 cos 的 bucket 桶名称。<br>注：CosBucketName参数值不能包含-[appid] 部分。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @var string <p>存储至 cos 的 bucket 区域。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketRegion;

    /**
     * @var string <p>存储至 cos 的 bucket 路径。<br>注意：若为输入参数，则该参数必填，且必须以斜杠（/）开头，建议至少包含 {StartYear}、{StartMonth}、{StartDay}、{StartHour}、{StartMinute}、{StartSecond} 或 {RandomID} 任意一种，否则可能出现录制文件名重复造成文件相互覆盖；若为返回参数，则此字段可能返回 null，表示取不到有效值。<br>示例值：/{RecordSource}/{Domain}/{AppName}/{StreamID}/{RecordId}-{RandomID}/{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}</p><p>支持的特殊占位符有：<br>{RecordSource}：区分录制内容，若录制原始流、水印流则为“origin”，录制转码流时，代表转码模板ID<br>{StreamID}: 流ID<br>{RecordId}：录制任务ID，断流前后该值可能重复；<br>{RandomID}：随机数，断流前后该值不同；<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketPath;

    /**
     * @param integer $RecordInterval <p>录制间隔。<br>单位秒，默认：1800。<br>FLV、MP4取值范围： 60-43200， AAC取值范围： 60-7200 。<br>此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。</p>
     * @param integer $StorageTime <p>录制存储时长。<br>单位秒，取值范围： 0 - 1500天。<br>0：表示永久存储。<br>注：此参数只对录制到VOD有效。</p>
     * @param integer $Enable <p>是否开启当前格式录制，默认值为0，0：否， 1：是。</p>
     * @param integer $VodSubAppId <p>点播子应用 ID。</p>
     * @param string $VodFileName <p>录制文件名。<br>支持的特殊占位符有：<br>{StreamID}: 流ID<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p><p>若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}</p>
     * @param string $Procedure <p>任务流</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageMode <p>视频存储策略。<br>normal：标准存储。<br>cold：低频存储。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClassId <p>点播应用分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketName <p>存储至 cos 的 bucket 桶名称。<br>注：CosBucketName参数值不能包含-[appid] 部分。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketRegion <p>存储至 cos 的 bucket 区域。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketPath <p>存储至 cos 的 bucket 路径。<br>注意：若为输入参数，则该参数必填，且必须以斜杠（/）开头，建议至少包含 {StartYear}、{StartMonth}、{StartDay}、{StartHour}、{StartMinute}、{StartSecond} 或 {RandomID} 任意一种，否则可能出现录制文件名重复造成文件相互覆盖；若为返回参数，则此字段可能返回 null，表示取不到有效值。<br>示例值：/{RecordSource}/{Domain}/{AppName}/{StreamID}/{RecordId}-{RandomID}/{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}</p><p>支持的特殊占位符有：<br>{RecordSource}：区分录制内容，若录制原始流、水印流则为“origin”，录制转码流时，代表转码模板ID<br>{StreamID}: 流ID<br>{RecordId}：录制任务ID，断流前后该值可能重复；<br>{RandomID}：随机数，断流前后该值不同；<br>{StartYear}: 开始时间-年<br>{StartMonth}: 开始时间-月<br>{StartDay}: 开始时间-日<br>{StartHour}: 开始时间-小时<br>{StartMinute}: 开始时间-分钟<br>{StartSecond}: 开始时间-秒<br>{StartMillisecond}: 开始时间-毫秒<br>{EndYear}: 结束时间-年<br>{EndMonth}: 结束时间-月<br>{EndDay}: 结束时间-日<br>{EndHour}: 结束时间-小时<br>{EndMinute}: 结束时间-分钟<br>{EndSecond}: 结束时间-秒<br>{EndMillisecond}: 结束时间-毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RecordInterval",$param) and $param["RecordInterval"] !== null) {
            $this->RecordInterval = $param["RecordInterval"];
        }

        if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
            $this->StorageTime = $param["StorageTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VodSubAppId",$param) and $param["VodSubAppId"] !== null) {
            $this->VodSubAppId = $param["VodSubAppId"];
        }

        if (array_key_exists("VodFileName",$param) and $param["VodFileName"] !== null) {
            $this->VodFileName = $param["VodFileName"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("CosBucketPath",$param) and $param["CosBucketPath"] !== null) {
            $this->CosBucketPath = $param["CosBucketPath"];
        }
    }
}
