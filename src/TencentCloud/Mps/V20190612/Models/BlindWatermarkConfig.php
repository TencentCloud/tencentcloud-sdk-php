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
 * 盲水印配置
 *
 * @method AddBlindWatermarkConfig getAddBlindWatermark() 获取增加盲水印
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddBlindWatermark(AddBlindWatermarkConfig $AddBlindWatermark) 设置增加盲水印
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractBlindWatermarkConfig getExtractBlindWatermark() 获取提取盲水印
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractBlindWatermark(ExtractBlindWatermarkConfig $ExtractBlindWatermark) 设置提取盲水印
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoveBlindWatermarkConfig getRemoveBlindWatermark() 获取移除盲水印
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveBlindWatermark(RemoveBlindWatermarkConfig $RemoveBlindWatermark) 设置移除盲水印
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlindWatermarkConfig extends AbstractModel
{
    /**
     * @var AddBlindWatermarkConfig 增加盲水印
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddBlindWatermark;

    /**
     * @var ExtractBlindWatermarkConfig 提取盲水印
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractBlindWatermark;

    /**
     * @var RemoveBlindWatermarkConfig 移除盲水印
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveBlindWatermark;

    /**
     * @param AddBlindWatermarkConfig $AddBlindWatermark 增加盲水印
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractBlindWatermarkConfig $ExtractBlindWatermark 提取盲水印
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoveBlindWatermarkConfig $RemoveBlindWatermark 移除盲水印
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
        if (array_key_exists("AddBlindWatermark",$param) and $param["AddBlindWatermark"] !== null) {
            $this->AddBlindWatermark = new AddBlindWatermarkConfig();
            $this->AddBlindWatermark->deserialize($param["AddBlindWatermark"]);
        }

        if (array_key_exists("ExtractBlindWatermark",$param) and $param["ExtractBlindWatermark"] !== null) {
            $this->ExtractBlindWatermark = new ExtractBlindWatermarkConfig();
            $this->ExtractBlindWatermark->deserialize($param["ExtractBlindWatermark"]);
        }

        if (array_key_exists("RemoveBlindWatermark",$param) and $param["RemoveBlindWatermark"] !== null) {
            $this->RemoveBlindWatermark = new RemoveBlindWatermarkConfig();
            $this->RemoveBlindWatermark->deserialize($param["RemoveBlindWatermark"]);
        }
    }
}
