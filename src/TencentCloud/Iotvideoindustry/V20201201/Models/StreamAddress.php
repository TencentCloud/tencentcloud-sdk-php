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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉流地址，只有在推流情况下才有

 *
 * @method string getStreamId() 获取流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamId(string $StreamId) 设置流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRtspAddr() 获取rtsp流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRtspAddr(string $RtspAddr) 设置rtsp流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRtmpAddr() 获取rtmp流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRtmpAddr(string $RtmpAddr) 设置rtmp流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHlsAddr() 获取hls流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsAddr(string $HlsAddr) 设置hls流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlvAddr() 获取flv流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlvAddr(string $FlvAddr) 设置flv流地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class StreamAddress extends AbstractModel
{
    /**
     * @var string 流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamId;

    /**
     * @var string rtsp流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RtspAddr;

    /**
     * @var string rtmp流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RtmpAddr;

    /**
     * @var string hls流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsAddr;

    /**
     * @var string flv流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlvAddr;

    /**
     * @param string $StreamId 流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RtspAddr rtsp流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RtmpAddr rtmp流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HlsAddr hls流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlvAddr flv流地址
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("RtspAddr",$param) and $param["RtspAddr"] !== null) {
            $this->RtspAddr = $param["RtspAddr"];
        }

        if (array_key_exists("RtmpAddr",$param) and $param["RtmpAddr"] !== null) {
            $this->RtmpAddr = $param["RtmpAddr"];
        }

        if (array_key_exists("HlsAddr",$param) and $param["HlsAddr"] !== null) {
            $this->HlsAddr = $param["HlsAddr"];
        }

        if (array_key_exists("FlvAddr",$param) and $param["FlvAddr"] !== null) {
            $this->FlvAddr = $param["FlvAddr"];
        }
    }
}
