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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频检索的检索结果
 *
 * @method float getScore() 获取视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoId() 获取检索获得的视频ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoId(string $VideoId) 设置检索获得的视频ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchTaskResult extends AbstractModel
{
    /**
     * @var float 视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 检索获得的视频ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoId;

    /**
     * @param float $Score 视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoId 检索获得的视频ID
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }
    }
}
