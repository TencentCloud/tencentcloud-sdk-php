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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组信息。
 *
 * @method string getId() 获取安全组 ID。
 * @method void setId(string $Id) 设置安全组 ID。
 * @method string getName() 获取安全组名称。
 * @method void setName(string $Name) 设置安全组名称。
 * @method array getWhitelist() 获取白名单列表。
 * @method void setWhitelist(array $Whitelist) 设置白名单列表。
 * @method array getOccupiedInputs() 获取绑定的输入流列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOccupiedInputs(array $OccupiedInputs) 设置绑定的输入流列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取安全组地址。
 * @method void setRegion(string $Region) 设置安全组地址。
 * @method array getOccupiedOutputs() 获取绑定的输出流列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOccupiedOutputs(array $OccupiedOutputs) 设置绑定的输出流列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityGroupInfo extends AbstractModel
{
    /**
     * @var string 安全组 ID。
     */
    public $Id;

    /**
     * @var string 安全组名称。
     */
    public $Name;

    /**
     * @var array 白名单列表。
     */
    public $Whitelist;

    /**
     * @var array 绑定的输入流列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OccupiedInputs;

    /**
     * @var string 安全组地址。
     */
    public $Region;

    /**
     * @var array 绑定的输出流列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OccupiedOutputs;

    /**
     * @param string $Id 安全组 ID。
     * @param string $Name 安全组名称。
     * @param array $Whitelist 白名单列表。
     * @param array $OccupiedInputs 绑定的输入流列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 安全组地址。
     * @param array $OccupiedOutputs 绑定的输出流列表。
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

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }

        if (array_key_exists("OccupiedInputs",$param) and $param["OccupiedInputs"] !== null) {
            $this->OccupiedInputs = $param["OccupiedInputs"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("OccupiedOutputs",$param) and $param["OccupiedOutputs"] !== null) {
            $this->OccupiedOutputs = $param["OccupiedOutputs"];
        }
    }
}
