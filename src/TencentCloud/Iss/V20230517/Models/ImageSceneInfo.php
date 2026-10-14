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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片场景配置
 *
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1：实时截帧</li><li>2：低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1：实时截帧</li><li>2：低频截帧</li></ul>
 * @method integer getInterval() 获取<p>截帧频率</p><p>Type=1时取值[5, 180]秒，Type=2时取值[30, 36000]秒</p>
 * @method void setInterval(integer $Interval) 设置<p>截帧频率</p><p>Type=1时取值[5, 180]秒，Type=2时取值[30, 36000]秒</p>
 * @method MultiSnapshotMode getMultiMode() 获取<p>多张截图模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiMode(MultiSnapshotMode $MultiMode) 设置<p>多张截图模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageSceneInfo extends AbstractModel
{
    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1：实时截帧</li><li>2：低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>截帧频率</p><p>Type=1时取值[5, 180]秒，Type=2时取值[30, 36000]秒</p>
     */
    public $Interval;

    /**
     * @var MultiSnapshotMode <p>多张截图模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiMode;

    /**
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1：实时截帧</li><li>2：低频截帧</li></ul>
     * @param integer $Interval <p>截帧频率</p><p>Type=1时取值[5, 180]秒，Type=2时取值[30, 36000]秒</p>
     * @param MultiSnapshotMode $MultiMode <p>多张截图模式</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }
    }
}
