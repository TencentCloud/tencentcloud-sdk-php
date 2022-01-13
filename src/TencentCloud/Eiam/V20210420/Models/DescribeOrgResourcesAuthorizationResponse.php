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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrgResourcesAuthorization返回参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getOrgNodeId() 获取授权机构ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeId(string $OrgNodeId) 设置授权机构ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeName() 获取机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeName(string $OrgNodeName) 设置机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodePath() 获取机构目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodePath(string $OrgNodePath) 设置机构目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthorizationOrgResourceList() 获取资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationOrgResourceList(array $AuthorizationOrgResourceList) 设置资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrgResourcesAuthorizationResponse extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 授权机构ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeId;

    /**
     * @var string 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeName;

    /**
     * @var string 机构目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodePath;

    /**
     * @var array 资源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationOrgResourceList;

    /**
     * @var integer 资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $OrgNodeId 授权机构ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeName 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodePath 机构目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthorizationOrgResourceList 资源列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 资源数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("OrgNodeName",$param) and $param["OrgNodeName"] !== null) {
            $this->OrgNodeName = $param["OrgNodeName"];
        }

        if (array_key_exists("OrgNodePath",$param) and $param["OrgNodePath"] !== null) {
            $this->OrgNodePath = $param["OrgNodePath"];
        }

        if (array_key_exists("AuthorizationOrgResourceList",$param) and $param["AuthorizationOrgResourceList"] !== null) {
            $this->AuthorizationOrgResourceList = [];
            foreach ($param["AuthorizationOrgResourceList"] as $key => $value){
                $obj = new AuthorizationResourceEntityInfo();
                $obj->deserialize($value);
                array_push($this->AuthorizationOrgResourceList, $obj);
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
