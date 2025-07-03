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
 * 录制模板参数。
 *
 * @method integer getRecordInterval() 获取录制间隔。
单位秒，默认：1800。
取值范围：30-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
 * @method void setRecordInterval(integer $RecordInterval) 设置录制间隔。
单位秒，默认：1800。
取值范围：30-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
 * @method integer getStorageTime() 获取录制存储时长。
单位秒，取值范围： 0 - 1500天。
0：表示永久存储。
 * @method void setStorageTime(integer $StorageTime) 设置录制存储时长。
单位秒，取值范围： 0 - 1500天。
0：表示永久存储。
 * @method integer getEnable() 获取是否开启当前格式录制，默认值为0，0：否， 1：是。
 * @method void setEnable(integer $Enable) 设置是否开启当前格式录制，默认值为0，0：否， 1：是。
 * @method integer getVodSubAppId() 获取点播子应用 ID。
 * @method void setVodSubAppId(integer $VodSubAppId) 设置点播子应用 ID。
 * @method string getVodFileName() 获取录制文件名。
支持的特殊占位符有：
{StreamID}: 流ID
{StartYear}: 开始时间-年
{StartMonth}: 开始时间-月
{StartDay}: 开始时间-日
{StartHour}: 开始时间-小时
{StartMinute}: 开始时间-分钟
{StartSecond}: 开始时间-秒
{StartMillisecond}: 开始时间-毫秒
{EndYear}: 结束时间-年
{EndMonth}: 结束时间-月
{EndDay}: 结束时间-日
{EndHour}: 结束时间-小时
{EndMinute}: 结束时间-分钟
{EndSecond}: 结束时间-秒
{EndMillisecond}: 结束时间-毫秒

若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}
 * @method void setVodFileName(string $VodFileName) 设置录制文件名。
支持的特殊占位符有：
{StreamID}: 流ID
{StartYear}: 开始时间-年
{StartMonth}: 开始时间-月
{StartDay}: 开始时间-日
{StartHour}: 开始时间-小时
{StartMinute}: 开始时间-分钟
{StartSecond}: 开始时间-秒
{StartMillisecond}: 开始时间-毫秒
{EndYear}: 结束时间-年
{EndMonth}: 结束时间-月
{EndDay}: 结束时间-日
{EndHour}: 结束时间-小时
{EndMinute}: 结束时间-分钟
{EndSecond}: 结束时间-秒
{EndMillisecond}: 结束时间-毫秒

若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}
 * @method string getProcedure() 获取任务流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedure(string $Procedure) 设置任务流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageMode() 获取视频存储策略。
normal：标准存储。
cold：低频存储。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageMode(string $StorageMode) 设置视频存储策略。
normal：标准存储。
cold：低频存储。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClassId() 获取点播应用分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassId(integer $ClassId) 设置点播应用分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketName() 获取存储至 cos 的 bucket 桶名称。
注：CosBucketName参数值不能包含-[appid] 部分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置存储至 cos 的 bucket 桶名称。
注：CosBucketName参数值不能包含-[appid] 部分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketRegion() 获取存储至 cos 的 bucket 区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置存储至 cos 的 bucket 区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketPath() 获取存储至 cos 的 bucket 路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketPath(string $CosBucketPath) 设置存储至 cos 的 bucket 路径。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordParam extends AbstractModel
{
    /**
     * @var integer 录制间隔。
单位秒，默认：1800。
取值范围：30-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
     */
    public $RecordInterval;

    /**
     * @var integer 录制存储时长。
单位秒，取值范围： 0 - 1500天。
0：表示永久存储。
     */
    public $StorageTime;

    /**
     * @var integer 是否开启当前格式录制，默认值为0，0：否， 1：是。
     */
    public $Enable;

    /**
     * @var integer 点播子应用 ID。
     */
    public $VodSubAppId;

    /**
     * @var string 录制文件名。
支持的特殊占位符有：
{StreamID}: 流ID
{StartYear}: 开始时间-年
{StartMonth}: 开始时间-月
{StartDay}: 开始时间-日
{StartHour}: 开始时间-小时
{StartMinute}: 开始时间-分钟
{StartSecond}: 开始时间-秒
{StartMillisecond}: 开始时间-毫秒
{EndYear}: 结束时间-年
{EndMonth}: 结束时间-月
{EndDay}: 结束时间-日
{EndHour}: 结束时间-小时
{EndMinute}: 结束时间-分钟
{EndSecond}: 结束时间-秒
{EndMillisecond}: 结束时间-毫秒

若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}
     */
    public $VodFileName;

    /**
     * @var string 任务流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procedure;

    /**
     * @var string 视频存储策略。
normal：标准存储。
cold：低频存储。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageMode;

    /**
     * @var integer 点播应用分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassId;

    /**
     * @var string 存储至 cos 的 bucket 桶名称。
注：CosBucketName参数值不能包含-[appid] 部分。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @var string 存储至 cos 的 bucket 区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketRegion;

    /**
     * @var string 存储至 cos 的 bucket 路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketPath;

    /**
     * @param integer $RecordInterval 录制间隔。
单位秒，默认：1800。
取值范围：30-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
     * @param integer $StorageTime 录制存储时长。
单位秒，取值范围： 0 - 1500天。
0：表示永久存储。
     * @param integer $Enable 是否开启当前格式录制，默认值为0，0：否， 1：是。
     * @param integer $VodSubAppId 点播子应用 ID。
     * @param string $VodFileName 录制文件名。
支持的特殊占位符有：
{StreamID}: 流ID
{StartYear}: 开始时间-年
{StartMonth}: 开始时间-月
{StartDay}: 开始时间-日
{StartHour}: 开始时间-小时
{StartMinute}: 开始时间-分钟
{StartSecond}: 开始时间-秒
{StartMillisecond}: 开始时间-毫秒
{EndYear}: 结束时间-年
{EndMonth}: 结束时间-月
{EndDay}: 结束时间-日
{EndHour}: 结束时间-小时
{EndMinute}: 结束时间-分钟
{EndSecond}: 结束时间-秒
{EndMillisecond}: 结束时间-毫秒

若未设置默认录制文件名为{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}
     * @param string $Procedure 任务流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageMode 视频存储策略。
normal：标准存储。
cold：低频存储。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClassId 点播应用分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketName 存储至 cos 的 bucket 桶名称。
注：CosBucketName参数值不能包含-[appid] 部分。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketRegion 存储至 cos 的 bucket 区域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketPath 存储至 cos 的 bucket 路径。
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
