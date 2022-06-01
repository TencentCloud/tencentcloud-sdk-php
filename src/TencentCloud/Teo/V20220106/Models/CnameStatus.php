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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CNAME 状态
 *
 * @method string getName() 获取记录名称
 * @method void setName(string $Name) 设置记录名称
 * @method string getCname() 获取CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
生效：active
不生效：moved
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
生效：active
不生效：moved
注意：此字段可能返回 null，表示取不到有效值。
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string 记录名称
     */
    public $Name;

    /**
     * @var string CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string 状态
生效：active
不生效：moved
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Name 记录名称
     * @param string $Cname CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
生效：active
不生效：moved
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

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
