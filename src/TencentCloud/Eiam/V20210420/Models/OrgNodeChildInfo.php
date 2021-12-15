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
 * 当前机构节点下的子节点列表
 *
 * @method string getDisplayName() 获取机构节点展示名称，长度限制：64个字符。 默认与机构名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置机构节点展示名称，长度限制：64个字符。 默认与机构名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedDate() 获取机构节点最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(string $LastModifiedDate) 设置机构节点最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomizedOrgNodeId() 获取用户自定义可选填的机构节点对外ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomizedOrgNodeId(string $CustomizedOrgNodeId) 设置用户自定义可选填的机构节点对外ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentOrgNodeId() 获取当前机构节点的父节点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentOrgNodeId(string $ParentOrgNodeId) 设置当前机构节点的父节点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeId() 获取机构节点ID，是机构节点的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeId(string $OrgNodeId) 设置机构节点ID，是机构节点的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取机构节点创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置机构节点创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取机构节点描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置机构节点描述。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrgNodeChildInfo extends AbstractModel
{
    /**
     * @var string 机构节点展示名称，长度限制：64个字符。 默认与机构名相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 机构节点最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @var string 用户自定义可选填的机构节点对外ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomizedOrgNodeId;

    /**
     * @var string 当前机构节点的父节点ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentOrgNodeId;

    /**
     * @var string 机构节点ID，是机构节点的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeId;

    /**
     * @var string 数据来源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var string 机构节点创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @var string 机构节点描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $DisplayName 机构节点展示名称，长度限制：64个字符。 默认与机构名相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedDate 机构节点最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomizedOrgNodeId 用户自定义可选填的机构节点对外ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentOrgNodeId 当前机构节点的父节点ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeId 机构节点ID，是机构节点的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource 数据来源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 机构节点创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 机构节点描述。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("CustomizedOrgNodeId",$param) and $param["CustomizedOrgNodeId"] !== null) {
            $this->CustomizedOrgNodeId = $param["CustomizedOrgNodeId"];
        }

        if (array_key_exists("ParentOrgNodeId",$param) and $param["ParentOrgNodeId"] !== null) {
            $this->ParentOrgNodeId = $param["ParentOrgNodeId"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
