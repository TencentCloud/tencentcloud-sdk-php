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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTreeResources返回参数结构体
 *
 * @method string getParentId() 获取父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子目录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子目录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTreeResourcesResponse extends AbstractModel
{
    /**
     * @var string 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 文件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var array 子目录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var integer 资源总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ParentId 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 文件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子目录列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 资源总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TreeResourceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DescribeTreeResourcesRsp();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
