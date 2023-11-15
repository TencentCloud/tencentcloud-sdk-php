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
 * 设备标签信息
 *
 * @method integer getTagId() 获取标签Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagId(integer $TagId) 设置标签Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取标签名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置标签名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceTagInfo extends AbstractModel
{
    /**
     * @var integer 标签Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagId;

    /**
     * @var string 标签名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @param integer $TagId 标签Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 标签名字
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }
    }
}
