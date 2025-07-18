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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用排序字段名和排序方向
 *
 * @method string getName() 获取name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirection() 获取降序DESC; 升序ASC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirection(string $Direction) 设置降序DESC; 升序ASC
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrderCondition extends AbstractModel
{
    /**
     * @var string name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 降序DESC; 升序ASC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Direction;

    /**
     * @param string $Name name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Direction 降序DESC; 升序ASC
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
