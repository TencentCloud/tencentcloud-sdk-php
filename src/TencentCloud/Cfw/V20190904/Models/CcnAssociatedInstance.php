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
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInsType() 获取<p>实例类型</p>
 * @method void setInsType(string $InsType) 设置<p>实例类型</p>
 * @method array getCidrLst() 获取<p>实例的网段列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrLst(array $CidrLst) 设置<p>实例的网段列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRegion() 获取<p>实例所属地域</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>实例所属地域</p>
 * @method integer getIsCrossInstance() 获取<p>是否跨账号</p>
 * @method void setIsCrossInstance(integer $IsCrossInstance) 设置<p>是否跨账号</p>
 */
class CcnAssociatedInstance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例类型</p>
     */
    public $InsType;

    /**
     * @var array <p>实例的网段列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrLst;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $InstanceRegion;

    /**
     * @var integer <p>是否跨账号</p>
     */
    public $IsCrossInstance;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InsType <p>实例类型</p>
     * @param array $CidrLst <p>实例的网段列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRegion <p>实例所属地域</p>
     * @param integer $IsCrossInstance <p>是否跨账号</p>
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

        if (array_key_exists("IsCrossInstance",$param) and $param["IsCrossInstance"] !== null) {
            $this->IsCrossInstance = $param["IsCrossInstance"];
        }
    }
}
