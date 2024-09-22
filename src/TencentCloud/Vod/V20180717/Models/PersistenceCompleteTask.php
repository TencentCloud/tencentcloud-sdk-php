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
 * 剪辑固化任务信息。
 *
 * @method string getFileId() 获取固化生成的媒体 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置固化生成的媒体 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersistenceSource() 获取剪辑固化的来源，有以下三种。
<li>SimpleHlsClip：来自简单 HLS 剪辑；</li>
<li>FastEditMedia：来自快速媒体编辑；</li>
<li>LiveRealTimeClip:来自直播即时剪辑。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersistenceSource(string $PersistenceSource) 设置剪辑固化的来源，有以下三种。
<li>SimpleHlsClip：来自简单 HLS 剪辑；</li>
<li>FastEditMedia：来自快速媒体编辑；</li>
<li>LiveRealTimeClip:来自直播即时剪辑。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PersistenceCompleteTask extends AbstractModel
{
    /**
     * @var string 固化生成的媒体 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string 剪辑固化的来源，有以下三种。
<li>SimpleHlsClip：来自简单 HLS 剪辑；</li>
<li>FastEditMedia：来自快速媒体编辑；</li>
<li>LiveRealTimeClip:来自直播即时剪辑。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersistenceSource;

    /**
     * @param string $FileId 固化生成的媒体 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersistenceSource 剪辑固化的来源，有以下三种。
<li>SimpleHlsClip：来自简单 HLS 剪辑；</li>
<li>FastEditMedia：来自快速媒体编辑；</li>
<li>LiveRealTimeClip:来自直播即时剪辑。</li>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PersistenceSource",$param) and $param["PersistenceSource"] !== null) {
            $this->PersistenceSource = $param["PersistenceSource"];
        }
    }
}
