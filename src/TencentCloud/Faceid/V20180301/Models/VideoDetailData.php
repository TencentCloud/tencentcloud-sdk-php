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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核身过程视频信息。
 *
 * @method string getSeq() 获取本次活体一比一请求的唯一标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeq(string $Seq) 设置本次活体一比一请求的唯一标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideo() 获取活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideo(string $Video) 设置活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoDetailData extends AbstractModel
{
    /**
     * @var string 本次活体一比一请求的唯一标记。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seq;

    /**
     * @var string 活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Video;

    /**
     * @param string $Seq 本次活体一比一请求的唯一标记。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Video 活体视频的base64编码。
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
        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }
    }
}
