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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片段信息
 *
 * @method string getOffsetTime() 获取该字段用于返回视频片段的截帧时间，单位为秒。对于点播文件，该参数代表对应截取图片相对于视频的偏移时间，如0（代表不偏移），5（视频开始后5秒），10（视频开始后10秒）；对于直播文件，该参数则返回对应图片的Unix时间戳，如：1594650717。
 * @method void setOffsetTime(string $OffsetTime) 设置该字段用于返回视频片段的截帧时间，单位为秒。对于点播文件，该参数代表对应截取图片相对于视频的偏移时间，如0（代表不偏移），5（视频开始后5秒），10（视频开始后10秒）；对于直播文件，该参数则返回对应图片的Unix时间戳，如：1594650717。
 * @method ImageResult getResult() 获取该字段用于返回视频片段的具体截帧审核结果，详细内容敬请参考ImageResult数据结构的描述。
 * @method void setResult(ImageResult $Result) 设置该字段用于返回视频片段的具体截帧审核结果，详细内容敬请参考ImageResult数据结构的描述。
 * @method string getCreatedAt() 获取该字段用于返回视频片段的具体截帧审核时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置该字段用于返回视频片段的具体截帧审核时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOffsetusTime() 获取该字段用于返回视频片段的截帧时间，单位为豪秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetusTime(string $OffsetusTime) 设置该字段用于返回视频片段的截帧时间，单位为豪秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageSegments extends AbstractModel
{
    /**
     * @var string 该字段用于返回视频片段的截帧时间，单位为秒。对于点播文件，该参数代表对应截取图片相对于视频的偏移时间，如0（代表不偏移），5（视频开始后5秒），10（视频开始后10秒）；对于直播文件，该参数则返回对应图片的Unix时间戳，如：1594650717。
     */
    public $OffsetTime;

    /**
     * @var ImageResult 该字段用于返回视频片段的具体截帧审核结果，详细内容敬请参考ImageResult数据结构的描述。
     */
    public $Result;

    /**
     * @var string 该字段用于返回视频片段的具体截帧审核时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 该字段用于返回视频片段的截帧时间，单位为豪秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetusTime;

    /**
     * @param string $OffsetTime 该字段用于返回视频片段的截帧时间，单位为秒。对于点播文件，该参数代表对应截取图片相对于视频的偏移时间，如0（代表不偏移），5（视频开始后5秒），10（视频开始后10秒）；对于直播文件，该参数则返回对应图片的Unix时间戳，如：1594650717。
     * @param ImageResult $Result 该字段用于返回视频片段的具体截帧审核结果，详细内容敬请参考ImageResult数据结构的描述。
     * @param string $CreatedAt 该字段用于返回视频片段的具体截帧审核时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OffsetusTime 该字段用于返回视频片段的截帧时间，单位为豪秒。
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
        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new ImageResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("OffsetusTime",$param) and $param["OffsetusTime"] !== null) {
            $this->OffsetusTime = $param["OffsetusTime"];
        }
    }
}
