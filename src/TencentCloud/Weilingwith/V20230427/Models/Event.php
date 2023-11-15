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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件信息
 *
 * @method integer getId() 获取事件id或动作Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置事件id或动作Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取事件名称或动作名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置事件名称或动作名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Event extends AbstractModel
{
    /**
     * @var integer 事件id或动作Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 事件名称或动作名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param integer $Id 事件id或动作Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 事件名称或动作名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
