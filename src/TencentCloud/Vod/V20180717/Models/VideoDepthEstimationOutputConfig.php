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
 * 视频深度估计输出存储配置。
 *
 * @method string getStorageMode() 获取<p>存储模式。可选值：Temporary（默认，产物临时存储 7 天，不返回 FileId）、Permanent（产物写入当前应用媒资库并返回 FileId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式。可选值：Temporary（默认，产物临时存储 7 天，不返回 FileId）、Permanent（产物写入当前应用媒资库并返回 FileId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMediaName() 获取<p>输出媒资名称，仅 StorageMode 为 Permanent 时生效，不传默认为 depthVideoGenFile。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaName(string $MediaName) 设置<p>输出媒资名称，仅 StorageMode 为 Permanent 时生效，不传默认为 depthVideoGenFile。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>输出媒资过期时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>，仅 StorageMode 为 Permanent 时生效。不传表示永不过期。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出媒资过期时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>，仅 StorageMode 为 Permanent 时生效。不传表示永不过期。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoDepthEstimationOutputConfig extends AbstractModel
{
    /**
     * @var string <p>存储模式。可选值：Temporary（默认，产物临时存储 7 天，不返回 FileId）、Permanent（产物写入当前应用媒资库并返回 FileId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageMode;

    /**
     * @var string <p>输出媒资名称，仅 StorageMode 为 Permanent 时生效，不传默认为 depthVideoGenFile。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaName;

    /**
     * @var string <p>输出媒资过期时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>，仅 StorageMode 为 Permanent 时生效。不传表示永不过期。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param string $StorageMode <p>存储模式。可选值：Temporary（默认，产物临时存储 7 天，不返回 FileId）、Permanent（产物写入当前应用媒资库并返回 FileId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MediaName <p>输出媒资名称，仅 StorageMode 为 Permanent 时生效，不传默认为 depthVideoGenFile。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>输出媒资过期时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>，仅 StorageMode 为 Permanent 时生效。不传表示永不过期。</p>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
