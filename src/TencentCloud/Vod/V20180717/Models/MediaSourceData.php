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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 来源文件信息
 *
 * @method string getSourceType() 获取媒体文件的来源类别：
<li>Record：来自录制。如直播录制、直播时移录制等。</li>
<li>Upload：来自上传。如拉取上传、服务端上传、客户端 UGC 上传等。</li>
<li>VideoProcessing：来自视频处理。如视频拼接、视频剪辑等。</li>
<li>TrtcRecord：来自TRTC 伴生录制。</li>
<li>WebPageRecord：来自全景录制。</li>
<li>Unknown：未知来源。</li>
 * @method void setSourceType(string $SourceType) 设置媒体文件的来源类别：
<li>Record：来自录制。如直播录制、直播时移录制等。</li>
<li>Upload：来自上传。如拉取上传、服务端上传、客户端 UGC 上传等。</li>
<li>VideoProcessing：来自视频处理。如视频拼接、视频剪辑等。</li>
<li>TrtcRecord：来自TRTC 伴生录制。</li>
<li>WebPageRecord：来自全景录制。</li>
<li>Unknown：未知来源。</li>
 * @method string getSourceContext() 获取用户创建文件时透传的字段。
 * @method void setSourceContext(string $SourceContext) 设置用户创建文件时透传的字段。
 * @method LiveRecordInfo getLiveRecordInfo() 获取直播录制信息，当文件来源为 Record 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveRecordInfo(LiveRecordInfo $LiveRecordInfo) 设置直播录制信息，当文件来源为 Record 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TrtcRecordInfo getTrtcRecordInfo() 获取TRTC 伴生录制信息，当文件来源为 TrtcRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrtcRecordInfo(TrtcRecordInfo $TrtcRecordInfo) 设置TRTC 伴生录制信息，当文件来源为 TrtcRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebPageRecordInfo getWebPageRecordInfo() 获取全景录制信息，当文件来源为 WebPageRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebPageRecordInfo(WebPageRecordInfo $WebPageRecordInfo) 设置全景录制信息，当文件来源为 WebPageRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaSourceData extends AbstractModel
{
    /**
     * @var string 媒体文件的来源类别：
<li>Record：来自录制。如直播录制、直播时移录制等。</li>
<li>Upload：来自上传。如拉取上传、服务端上传、客户端 UGC 上传等。</li>
<li>VideoProcessing：来自视频处理。如视频拼接、视频剪辑等。</li>
<li>TrtcRecord：来自TRTC 伴生录制。</li>
<li>WebPageRecord：来自全景录制。</li>
<li>Unknown：未知来源。</li>
     */
    public $SourceType;

    /**
     * @var string 用户创建文件时透传的字段。
     */
    public $SourceContext;

    /**
     * @var LiveRecordInfo 直播录制信息，当文件来源为 Record 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveRecordInfo;

    /**
     * @var TrtcRecordInfo TRTC 伴生录制信息，当文件来源为 TrtcRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrtcRecordInfo;

    /**
     * @var WebPageRecordInfo 全景录制信息，当文件来源为 WebPageRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebPageRecordInfo;

    /**
     * @param string $SourceType 媒体文件的来源类别：
<li>Record：来自录制。如直播录制、直播时移录制等。</li>
<li>Upload：来自上传。如拉取上传、服务端上传、客户端 UGC 上传等。</li>
<li>VideoProcessing：来自视频处理。如视频拼接、视频剪辑等。</li>
<li>TrtcRecord：来自TRTC 伴生录制。</li>
<li>WebPageRecord：来自全景录制。</li>
<li>Unknown：未知来源。</li>
     * @param string $SourceContext 用户创建文件时透传的字段。
     * @param LiveRecordInfo $LiveRecordInfo 直播录制信息，当文件来源为 Record 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TrtcRecordInfo $TrtcRecordInfo TRTC 伴生录制信息，当文件来源为 TrtcRecord 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebPageRecordInfo $WebPageRecordInfo 全景录制信息，当文件来源为 WebPageRecord 时有效。
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("LiveRecordInfo",$param) and $param["LiveRecordInfo"] !== null) {
            $this->LiveRecordInfo = new LiveRecordInfo();
            $this->LiveRecordInfo->deserialize($param["LiveRecordInfo"]);
        }

        if (array_key_exists("TrtcRecordInfo",$param) and $param["TrtcRecordInfo"] !== null) {
            $this->TrtcRecordInfo = new TrtcRecordInfo();
            $this->TrtcRecordInfo->deserialize($param["TrtcRecordInfo"]);
        }

        if (array_key_exists("WebPageRecordInfo",$param) and $param["WebPageRecordInfo"] !== null) {
            $this->WebPageRecordInfo = new WebPageRecordInfo();
            $this->WebPageRecordInfo->deserialize($param["WebPageRecordInfo"]);
        }
    }
}
