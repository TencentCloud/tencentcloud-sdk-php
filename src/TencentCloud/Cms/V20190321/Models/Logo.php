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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logo审核结果
 *
 * @method float getConfidence() 获取logo图标置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(float $Confidence) 设置logo图标置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method RrectF getRrectF() 获取logo图标坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRrectF(RrectF $RrectF) 设置logo图标坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取logo图标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置logo图标名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Logo extends AbstractModel
{
    /**
     * @var float logo图标置信度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var RrectF logo图标坐标信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RrectF;

    /**
     * @var string logo图标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param float $Confidence logo图标置信度
注意：此字段可能返回 null，表示取不到有效值。
     * @param RrectF $RrectF logo图标坐标信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name logo图标名称
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("RrectF",$param) and $param["RrectF"] !== null) {
            $this->RrectF = new RrectF();
            $this->RrectF->deserialize($param["RrectF"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
