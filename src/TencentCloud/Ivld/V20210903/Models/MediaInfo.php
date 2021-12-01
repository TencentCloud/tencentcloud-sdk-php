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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒资信息结构体

媒资状态定义如下：

| 状态名 | 状态值 | 状态描述 | 
|---|---|---|
| MEDIA_STATUS_INVALID | 0 | 非法状态|
| MEDIA_STATUS_WAITING| 1 | 等待中 |
| MEDIA_STATUS_DOWNLOADING | 2 | 下载中 |
| MEDIA_STATUS_DOWNLOADED | 3 | 下载完成 |
| MEDIA_STATUS_DOWNLOAD_FAILED | 4 | 下载失败 |
| MEDIA_STATUS_TRANSCODING | 5 | 转码中 |
| MEDIA_STATUS_TRANSCODED | 6 | 转码完成 | 
| MEDIA_STATUS_TRANCODE_FAILED | 7 | 转码失败 |
| MEDIA_STATUS_SUCCESS | 8 | 媒资文件状态就绪，可发起任务 |
| MEDIA_STATUS_EXPIRED | 9 | 媒资文件已过期 |

 *
 * @method string getMediaId() 获取媒资ID
 * @method void setMediaId(string $MediaId) 设置媒资ID
 * @method string getName() 获取媒资名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置媒资名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownLoadURL() 获取媒资下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownLoadURL(string $DownLoadURL) 设置媒资下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取媒资状态，取值参看上方表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置媒资状态，取值参看上方表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedReason() 获取若状态为失败，表示失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReason(string $FailedReason) 设置若状态为失败，表示失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetadata getMetadata() 获取媒资视频元信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(MediaMetadata $Metadata) 设置媒资视频元信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProgress() 获取导入视频进度，取值范围为[0,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(float $Progress) 设置导入视频进度，取值范围为[0,100]
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var string 媒资ID
     */
    public $MediaId;

    /**
     * @var string 媒资名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 媒资下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownLoadURL;

    /**
     * @var integer 媒资状态，取值参看上方表格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 若状态为失败，表示失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReason;

    /**
     * @var MediaMetadata 媒资视频元信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var float 导入视频进度，取值范围为[0,100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @param string $MediaId 媒资ID
     * @param string $Name 媒资名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownLoadURL 媒资下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 媒资状态，取值参看上方表格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedReason 若状态为失败，表示失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetadata $Metadata 媒资视频元信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Progress 导入视频进度，取值范围为[0,100]
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
        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DownLoadURL",$param) and $param["DownLoadURL"] !== null) {
            $this->DownLoadURL = $param["DownLoadURL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new MediaMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
