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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外挂字幕。
 *
 * @method string getType() 获取插入形式，可选值：
<li>subtitle-stream：插入字幕轨道</li>
<li>close-caption-708：CEA-708字幕编码到SEI帧</li>
<li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置插入形式，可选值：
<li>subtitle-stream：插入字幕轨道</li>
<li>close-caption-708：CEA-708字幕编码到SEI帧</li>
<li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInputInfo getSubtitle() 获取字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitle(MediaInputInfo $Subtitle) 设置字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AddOnSubtitle extends AbstractModel
{
    /**
     * @var string 插入形式，可选值：
<li>subtitle-stream：插入字幕轨道</li>
<li>close-caption-708：CEA-708字幕编码到SEI帧</li>
<li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var MediaInputInfo 字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subtitle;

    /**
     * @param string $Type 插入形式，可选值：
<li>subtitle-stream：插入字幕轨道</li>
<li>close-caption-708：CEA-708字幕编码到SEI帧</li>
<li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInputInfo $Subtitle 字幕文件。
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

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new MediaInputInfo();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }
    }
}
