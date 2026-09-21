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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组灰度标签项
 *
 * @method string getLabel() 获取<p>标签名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置<p>标签名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取<p>标签状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置<p>标签状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedAt() 获取<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(integer $UpdatedAt) 设置<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerLabelItem extends AbstractModel
{
    /**
     * @var string <p>标签名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string <p>标签状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer <p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $Label <p>标签名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State <p>标签状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedAt <p>最近更新时间</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
