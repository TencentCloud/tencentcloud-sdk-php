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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核身视频信息。
 *
 * @method string getLivenessVideo() 获取活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessVideo(string $LivenessVideo) 设置活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLivenessVideos() 获取当次token中所有用户活体视频的COS存储路径，仅当您开启数据存储服务且“IsReturnAllVideo”入参取值为true 时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessVideos(array $LivenessVideos) 设置当次token中所有用户活体视频的COS存储路径，仅当您开启数据存储服务且“IsReturnAllVideo”入参取值为true 时返回。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectInfoVideoData extends AbstractModel
{
    /**
     * @var string 活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessVideo;

    /**
     * @var array 当次token中所有用户活体视频的COS存储路径，仅当您开启数据存储服务且“IsReturnAllVideo”入参取值为true 时返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessVideos;

    /**
     * @param string $LivenessVideo 活体视频的base64编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LivenessVideos 当次token中所有用户活体视频的COS存储路径，仅当您开启数据存储服务且“IsReturnAllVideo”入参取值为true 时返回。
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
        if (array_key_exists("LivenessVideo",$param) and $param["LivenessVideo"] !== null) {
            $this->LivenessVideo = $param["LivenessVideo"];
        }

        if (array_key_exists("LivenessVideos",$param) and $param["LivenessVideos"] !== null) {
            $this->LivenessVideos = [];
            foreach ($param["LivenessVideos"] as $key => $value){
                $obj = new VideoDetailData();
                $obj->deserialize($value);
                array_push($this->LivenessVideos, $obj);
            }
        }
    }
}
