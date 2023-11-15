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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频流查询结果
 *
 * @method string getFLV() 获取FLV协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFLV(string $FLV) 设置FLV协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRTMP() 获取RTMP协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMP(string $RTMP) 设置RTMP协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHLS() 获取HLS协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHLS(string $HLS) 设置HLS协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebRTC() 获取WebRtc协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebRTC(string $WebRTC) 设置WebRtc协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method RawInfo getRAW() 获取RAW协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRAW(RawInfo $RAW) 设置RAW协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStream() 获取视频流的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStream(string $Stream) 设置视频流的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoRecordStreamRes extends AbstractModel
{
    /**
     * @var string FLV协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FLV;

    /**
     * @var string RTMP协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMP;

    /**
     * @var string HLS协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HLS;

    /**
     * @var string WebRtc协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebRTC;

    /**
     * @var RawInfo RAW协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RAW;

    /**
     * @var string 视频流的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stream;

    /**
     * @param string $FLV FLV协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RTMP RTMP协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HLS HLS协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebRTC WebRtc协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     * @param RawInfo $RAW RAW协议格式视频流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Stream 视频流的唯一标识
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
        if (array_key_exists("FLV",$param) and $param["FLV"] !== null) {
            $this->FLV = $param["FLV"];
        }

        if (array_key_exists("RTMP",$param) and $param["RTMP"] !== null) {
            $this->RTMP = $param["RTMP"];
        }

        if (array_key_exists("HLS",$param) and $param["HLS"] !== null) {
            $this->HLS = $param["HLS"];
        }

        if (array_key_exists("WebRTC",$param) and $param["WebRTC"] !== null) {
            $this->WebRTC = $param["WebRTC"];
        }

        if (array_key_exists("RAW",$param) and $param["RAW"] !== null) {
            $this->RAW = new RawInfo();
            $this->RAW->deserialize($param["RAW"]);
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }
    }
}
