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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 卡槽信息。
 *
 * @method integer getId() 获取卡槽 Id。
 * @method void setId(integer $Id) 设置卡槽 Id。
 * @method string getType() 获取卡槽类型，可取值有：
<li> AUDIO：音频卡槽，可替换素材类型为 AUDIO 的音频素材;</li>
<li> VIDEO：视频卡槽，可替换素材类型为 VIDEO 的视频素材;</li>
<li> IMAGE：图片卡槽，可替换素材类型为 IMAGE 的图片素材;</li>
<li> TEXT：文本卡槽，可替换文本内容。</li>
 * @method void setType(string $Type) 设置卡槽类型，可取值有：
<li> AUDIO：音频卡槽，可替换素材类型为 AUDIO 的音频素材;</li>
<li> VIDEO：视频卡槽，可替换素材类型为 VIDEO 的视频素材;</li>
<li> IMAGE：图片卡槽，可替换素材类型为 IMAGE 的图片素材;</li>
<li> TEXT：文本卡槽，可替换文本内容。</li>
 * @method string getDefaultMaterialId() 获取默认素材ID。当卡槽类型为 AUDIO，VIDEO，或 IMAGE 中的一种时有效。
 * @method void setDefaultMaterialId(string $DefaultMaterialId) 设置默认素材ID。当卡槽类型为 AUDIO，VIDEO，或 IMAGE 中的一种时有效。
 * @method TextSlotInfo getDefaultTextSlotInfo() 获取默认文本卡槽信息。当卡槽类型为 TEXT 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultTextSlotInfo(TextSlotInfo $DefaultTextSlotInfo) 设置默认文本卡槽信息。当卡槽类型为 TEXT 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取素材时长，单位秒。
 * @method void setDuration(float $Duration) 设置素材时长，单位秒。
 */
class SlotInfo extends AbstractModel
{
    /**
     * @var integer 卡槽 Id。
     */
    public $Id;

    /**
     * @var string 卡槽类型，可取值有：
<li> AUDIO：音频卡槽，可替换素材类型为 AUDIO 的音频素材;</li>
<li> VIDEO：视频卡槽，可替换素材类型为 VIDEO 的视频素材;</li>
<li> IMAGE：图片卡槽，可替换素材类型为 IMAGE 的图片素材;</li>
<li> TEXT：文本卡槽，可替换文本内容。</li>
     */
    public $Type;

    /**
     * @var string 默认素材ID。当卡槽类型为 AUDIO，VIDEO，或 IMAGE 中的一种时有效。
     */
    public $DefaultMaterialId;

    /**
     * @var TextSlotInfo 默认文本卡槽信息。当卡槽类型为 TEXT 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultTextSlotInfo;

    /**
     * @var float 素材时长，单位秒。
     */
    public $Duration;

    /**
     * @param integer $Id 卡槽 Id。
     * @param string $Type 卡槽类型，可取值有：
<li> AUDIO：音频卡槽，可替换素材类型为 AUDIO 的音频素材;</li>
<li> VIDEO：视频卡槽，可替换素材类型为 VIDEO 的视频素材;</li>
<li> IMAGE：图片卡槽，可替换素材类型为 IMAGE 的图片素材;</li>
<li> TEXT：文本卡槽，可替换文本内容。</li>
     * @param string $DefaultMaterialId 默认素材ID。当卡槽类型为 AUDIO，VIDEO，或 IMAGE 中的一种时有效。
     * @param TextSlotInfo $DefaultTextSlotInfo 默认文本卡槽信息。当卡槽类型为 TEXT 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration 素材时长，单位秒。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultMaterialId",$param) and $param["DefaultMaterialId"] !== null) {
            $this->DefaultMaterialId = $param["DefaultMaterialId"];
        }

        if (array_key_exists("DefaultTextSlotInfo",$param) and $param["DefaultTextSlotInfo"] !== null) {
            $this->DefaultTextSlotInfo = new TextSlotInfo();
            $this->DefaultTextSlotInfo->deserialize($param["DefaultTextSlotInfo"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
