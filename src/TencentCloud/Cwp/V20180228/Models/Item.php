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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项
 *
 * @method integer getItemId() 获取Id
 * @method void setItemId(integer $ItemId) 设置Id
 * @method string getItemName() 获取名称
 * @method void setItemName(string $ItemName) 设置名称
 * @method array getCustomItemValues() 获取自定义阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomItemValues(array $CustomItemValues) 设置自定义阈值
注意：此字段可能返回 null，表示取不到有效值。
 */
class Item extends AbstractModel
{
    /**
     * @var integer Id
     */
    public $ItemId;

    /**
     * @var string 名称
     */
    public $ItemName;

    /**
     * @var array 自定义阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomItemValues;

    /**
     * @param integer $ItemId Id
     * @param string $ItemName 名称
     * @param array $CustomItemValues 自定义阈值
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("CustomItemValues",$param) and $param["CustomItemValues"] !== null) {
            $this->CustomItemValues = $param["CustomItemValues"];
        }
    }
}
