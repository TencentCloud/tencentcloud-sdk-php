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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LiveRealTimeClip返回参数结构体
 *
 * @method string getUrl() 获取<p>剪辑后的视频播放 URL。</p>
 * @method void setUrl(string $Url) 设置<p>剪辑后的视频播放 URL。</p>
 * @method string getFileId() 获取<p>剪辑固化后的视频的媒体文件的唯一标识。</p>
 * @method void setFileId(string $FileId) 设置<p>剪辑固化后的视频的媒体文件的唯一标识。</p>
 * @method string getVodTaskId() 获取<p>剪辑固化后的视频任务流 ID。</p>
 * @method void setVodTaskId(string $VodTaskId) 设置<p>剪辑固化后的视频任务流 ID。</p>
 * @method MediaMetaData getMetaData() 获取<p>剪辑后的视频元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置<p>剪辑后的视频元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSegmentSet() 获取<p><span id="p_segmentset">剪辑后的视频片段信息。</span></p>
 * @method void setSegmentSet(array $SegmentSet) 设置<p><span id="p_segmentset">剪辑后的视频片段信息。</span></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class LiveRealTimeClipResponse extends AbstractModel
{
    /**
     * @var string <p>剪辑后的视频播放 URL。</p>
     */
    public $Url;

    /**
     * @var string <p>剪辑固化后的视频的媒体文件的唯一标识。</p>
     */
    public $FileId;

    /**
     * @var string <p>剪辑固化后的视频任务流 ID。</p>
     */
    public $VodTaskId;

    /**
     * @var MediaMetaData <p>剪辑后的视频元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array <p><span id="p_segmentset">剪辑后的视频片段信息。</span></p>
     */
    public $SegmentSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url <p>剪辑后的视频播放 URL。</p>
     * @param string $FileId <p>剪辑固化后的视频的媒体文件的唯一标识。</p>
     * @param string $VodTaskId <p>剪辑固化后的视频任务流 ID。</p>
     * @param MediaMetaData $MetaData <p>剪辑后的视频元信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SegmentSet <p><span id="p_segmentset">剪辑后的视频片段信息。</span></p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("VodTaskId",$param) and $param["VodTaskId"] !== null) {
            $this->VodTaskId = $param["VodTaskId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new LiveRealTimeClipMediaSegmentInfo();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
