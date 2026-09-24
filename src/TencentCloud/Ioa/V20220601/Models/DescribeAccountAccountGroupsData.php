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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多OU组信息
 *
 * @method integer getAccountGroupId() 获取<p>组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupName() 获取<p>组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupName(string $AccountGroupName) 设置<p>组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterFlag() 获取<p>主组标识(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterFlag(integer $MasterFlag) 设置<p>主组标识(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccountGroupNamePaths() 获取<p>组路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupNamePaths(array $AccountGroupNamePaths) 设置<p>组路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccountGroupPathIds() 获取<p>组路径Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupPathIds(array $AccountGroupPathIds) 设置<p>组路径Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAccountAccountGroupsData extends AbstractModel
{
    /**
     * @var integer <p>组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string <p>组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupName;

    /**
     * @var integer <p>主组标识(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterFlag;

    /**
     * @var array <p>组路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupNamePaths;

    /**
     * @var array <p>组路径Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupPathIds;

    /**
     * @param integer $AccountGroupId <p>组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupName <p>组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterFlag <p>主组标识(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccountGroupNamePaths <p>组路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccountGroupPathIds <p>组路径Id(只支持32位)</p>
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("AccountGroupName",$param) and $param["AccountGroupName"] !== null) {
            $this->AccountGroupName = $param["AccountGroupName"];
        }

        if (array_key_exists("MasterFlag",$param) and $param["MasterFlag"] !== null) {
            $this->MasterFlag = $param["MasterFlag"];
        }

        if (array_key_exists("AccountGroupNamePaths",$param) and $param["AccountGroupNamePaths"] !== null) {
            $this->AccountGroupNamePaths = $param["AccountGroupNamePaths"];
        }

        if (array_key_exists("AccountGroupPathIds",$param) and $param["AccountGroupPathIds"] !== null) {
            $this->AccountGroupPathIds = $param["AccountGroupPathIds"];
        }
    }
}
