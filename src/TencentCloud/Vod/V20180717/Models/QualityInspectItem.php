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
 * 音画质检测异常片段信息。
 *
 * @method float getStartTimeOffset() 获取异常片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置异常片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取异常片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置异常片段终止的偏移时间，单位：秒。
 * @method array getAreaCoordSet() 获取检测出异常的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>BlackWhiteEdge：黑白边；</li>
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置检测出异常的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>BlackWhiteEdge：黑白边；</li>
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
 * @method integer getConfidence() 获取置信度，取值范围：[0, 100]。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
 * @method void setConfidence(integer $Confidence) 设置置信度，取值范围：[0, 100]。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
 */
class QualityInspectItem extends AbstractModel
{
    /**
     * @var float 异常片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 异常片段终止的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @var array 检测出异常的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>BlackWhiteEdge：黑白边；</li>
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
     */
    public $AreaCoordSet;

    /**
     * @var integer 置信度，取值范围：[0, 100]。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
     */
    public $Confidence;

    /**
     * @param float $StartTimeOffset 异常片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 异常片段终止的偏移时间，单位：秒。
     * @param array $AreaCoordSet 检测出异常的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>BlackWhiteEdge：黑白边；</li>
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
     * @param integer $Confidence 置信度，取值范围：[0, 100]。
<font color=red>注意：</font> 仅当 Type 取值为下列之一时，本字段取值有效：
<li>Mosaic：马赛克；</li>
<li>QRCode：二维码；</li>
<li>AppletCode：小程序码；</li>
<li>BarCode：条形码。</li>
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
