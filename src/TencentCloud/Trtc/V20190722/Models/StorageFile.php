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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云端录制查询接口，录制文件的信息
 *
 * @method string getUserId() 获取录制文件对应的UserId，如果是混流的话的这里返回的是空串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置录制文件对应的UserId，如果是混流的话的这里返回的是空串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取录制索引文件名。
 * @method void setFileName(string $FileName) 设置录制索引文件名。
 * @method string getTrackType() 获取录制文件流信息。
video：视频录制文件
audio：音频录制文件
audio_video：音视频录制文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackType(string $TrackType) 设置录制文件流信息。
video：视频录制文件
audio：音频录制文件
audio_video：音视频录制文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBeginTimeStamp() 获取录制文件开始Unix时间戳。
 * @method void setBeginTimeStamp(integer $BeginTimeStamp) 设置录制文件开始Unix时间戳。
 */
class StorageFile extends AbstractModel
{
    /**
     * @var string 录制文件对应的UserId，如果是混流的话的这里返回的是空串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 录制索引文件名。
     */
    public $FileName;

    /**
     * @var string 录制文件流信息。
video：视频录制文件
audio：音频录制文件
audio_video：音视频录制文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackType;

    /**
     * @var integer 录制文件开始Unix时间戳。
     */
    public $BeginTimeStamp;

    /**
     * @param string $UserId 录制文件对应的UserId，如果是混流的话的这里返回的是空串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 录制索引文件名。
     * @param string $TrackType 录制文件流信息。
video：视频录制文件
audio：音频录制文件
audio_video：音视频录制文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BeginTimeStamp 录制文件开始Unix时间戳。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("BeginTimeStamp",$param) and $param["BeginTimeStamp"] !== null) {
            $this->BeginTimeStamp = $param["BeginTimeStamp"];
        }
    }
}
