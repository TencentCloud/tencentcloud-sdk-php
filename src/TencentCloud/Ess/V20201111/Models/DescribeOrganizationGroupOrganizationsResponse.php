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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationGroupOrganizations返回参数结构体
 *
 * @method integer getTotal() 获取查询到的符合条件的成员企业总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置查询到的符合条件的成员企业总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinedTotal() 获取已授权待激活的企业数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinedTotal(integer $JoinedTotal) 设置已授权待激活的企业数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivedTotal() 获取已加入的企业数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivedTotal(integer $ActivedTotal) 设置已加入的企业数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExportUrl() 获取导出文件的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExportUrl(string $ExportUrl) 设置导出文件的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getList() 获取成员企业信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置成员企业信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationGroupOrganizationsResponse extends AbstractModel
{
    /**
     * @var integer 查询到的符合条件的成员企业总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 已授权待激活的企业数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinedTotal;

    /**
     * @var integer 已加入的企业数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivedTotal;

    /**
     * @var string 导出文件的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExportUrl;

    /**
     * @var array 成员企业信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 查询到的符合条件的成员企业总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinedTotal 已授权待激活的企业数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivedTotal 已加入的企业数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExportUrl 导出文件的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $List 成员企业信息列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("JoinedTotal",$param) and $param["JoinedTotal"] !== null) {
            $this->JoinedTotal = $param["JoinedTotal"];
        }

        if (array_key_exists("ActivedTotal",$param) and $param["ActivedTotal"] !== null) {
            $this->ActivedTotal = $param["ActivedTotal"];
        }

        if (array_key_exists("ExportUrl",$param) and $param["ExportUrl"] !== null) {
            $this->ExportUrl = $param["ExportUrl"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new GroupOrganization();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
