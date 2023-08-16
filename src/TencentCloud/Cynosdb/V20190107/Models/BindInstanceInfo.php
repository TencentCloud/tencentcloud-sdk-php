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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源包绑定的实例信息
 *
 * @method string getInstanceId() 获取绑定的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置绑定的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRegion() 获取绑定的实例所在的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceRegion(string $InstanceRegion) 设置绑定的实例所在的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取绑定的实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置绑定的实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtendIds() 获取绑定集群下的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendIds(array $ExtendIds) 设置绑定集群下的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindInstanceInfo extends AbstractModel
{
    /**
     * @var string 绑定的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 绑定的实例所在的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceRegion;

    /**
     * @var string 绑定的实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 绑定集群下的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendIds;

    /**
     * @param string $InstanceId 绑定的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRegion 绑定的实例所在的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 绑定的实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtendIds 绑定集群下的实例ID
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

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExtendIds",$param) and $param["ExtendIds"] !== null) {
            $this->ExtendIds = $param["ExtendIds"];
        }
    }
}
