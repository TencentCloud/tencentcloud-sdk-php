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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CCN关联的实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInsType() 获取实例类型
 * @method void setInsType(string $InsType) 设置实例类型
 * @method array getCidrLst() 获取实例的网段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrLst(array $CidrLst) 设置实例的网段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRegion() 获取实例所属地域
 * @method void setInstanceRegion(string $InstanceRegion) 设置实例所属地域
 */
class CcnAssociatedInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例类型
     */
    public $InsType;

    /**
     * @var array 实例的网段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrLst;

    /**
     * @var string 实例所属地域
     */
    public $InstanceRegion;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InsType 实例类型
     * @param array $CidrLst 实例的网段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRegion 实例所属地域
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("CidrLst",$param) and $param["CidrLst"] !== null) {
            $this->CidrLst = $param["CidrLst"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }
    }
}
