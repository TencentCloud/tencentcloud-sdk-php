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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由接收策略。当云联网或其他业务添加路由到VPC自定义路由表时，可以丢弃或启用，禁用相应的路由条目。
 *
 * @method string getRoutePolicyId() 获取路由策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyId(string $RoutePolicyId) 设置路由策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoutePolicyName() 获取路由策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyName(string $RoutePolicyName) 设置路由策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoutePolicyDescription() 获取路由策略描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) 设置路由策略描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoutePolicyEntrySet() 获取路由策略规则列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) 设置路由策略规则列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoutePolicyAssociationSet() 获取路由策略绑定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyAssociationSet(array $RoutePolicyAssociationSet) 设置路由策略绑定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 */
class RoutePolicy extends AbstractModel
{
    /**
     * @var string 路由策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyId;

    /**
     * @var string 路由策略名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyName;

    /**
     * @var string 路由策略描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyDescription;

    /**
     * @var array 路由策略规则列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyEntrySet;

    /**
     * @var array 路由策略绑定。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyAssociationSet;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @param string $RoutePolicyId 路由策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoutePolicyName 路由策略名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoutePolicyDescription 路由策略描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RoutePolicyEntrySet 路由策略规则列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RoutePolicyAssociationSet 路由策略绑定。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签键值对。
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
        if (array_key_exists("RoutePolicyId",$param) and $param["RoutePolicyId"] !== null) {
            $this->RoutePolicyId = $param["RoutePolicyId"];
        }

        if (array_key_exists("RoutePolicyName",$param) and $param["RoutePolicyName"] !== null) {
            $this->RoutePolicyName = $param["RoutePolicyName"];
        }

        if (array_key_exists("RoutePolicyDescription",$param) and $param["RoutePolicyDescription"] !== null) {
            $this->RoutePolicyDescription = $param["RoutePolicyDescription"];
        }

        if (array_key_exists("RoutePolicyEntrySet",$param) and $param["RoutePolicyEntrySet"] !== null) {
            $this->RoutePolicyEntrySet = [];
            foreach ($param["RoutePolicyEntrySet"] as $key => $value){
                $obj = new RoutePolicyEntry();
                $obj->deserialize($value);
                array_push($this->RoutePolicyEntrySet, $obj);
            }
        }

        if (array_key_exists("RoutePolicyAssociationSet",$param) and $param["RoutePolicyAssociationSet"] !== null) {
            $this->RoutePolicyAssociationSet = [];
            foreach ($param["RoutePolicyAssociationSet"] as $key => $value){
                $obj = new RoutePolicyAssociation();
                $obj->deserialize($value);
                array_push($this->RoutePolicyAssociationSet, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
