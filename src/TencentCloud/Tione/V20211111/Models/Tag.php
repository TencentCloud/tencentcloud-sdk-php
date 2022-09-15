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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述腾讯云标签
 *
 * @method string getTagKey() 获取标签键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagKey(string $TagKey) 设置标签键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValue(string $TagValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tag extends AbstractModel
{
    /**
     * @var string 标签键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagKey;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValue;

    /**
     * @param string $TagKey 标签键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagValue 标签值
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
