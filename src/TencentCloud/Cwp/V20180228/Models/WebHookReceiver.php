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
 * 告警接收人
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddr() 获取webhook地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddr(string $Addr) 设置webhook地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebHookReceiver extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string webhook地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Addr;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Addr webhook地址
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

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }
    }
}
