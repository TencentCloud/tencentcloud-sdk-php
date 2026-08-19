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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机登录方式
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取<p>主机Quuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置<p>主机Quuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoginType() 获取<p>登录方式：0-原始登录方式，1-扫码免密登录，2-开启扫码中，3-关闭扫码中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginType(integer $LoginType) 设置<p>登录方式：0-原始登录方式，1-扫码免密登录，2-开启扫码中，3-关闭扫码中</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MachineLoginType extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>主机Quuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var integer <p>登录方式：0-原始登录方式，1-扫码免密登录，2-开启扫码中，3-关闭扫码中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginType;

    /**
     * @param string $InstanceId <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid <p>主机Quuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoginType <p>登录方式：0-原始登录方式，1-扫码免密登录，2-开启扫码中，3-关闭扫码中</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }
    }
}
