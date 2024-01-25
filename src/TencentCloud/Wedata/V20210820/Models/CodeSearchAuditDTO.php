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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码搜索审计信息
 *
 * @method integer getTenantId() 获取当前租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(integer $TenantId) 设置当前租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerUserId() 获取当前用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(integer $OwnerUserId) 设置当前用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取当前用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置当前用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyword() 获取关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyword(string $Keyword) 设置关键词
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeSearchAuditDTO extends AbstractModel
{
    /**
     * @var integer 当前租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var integer 当前用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var integer 当前用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var integer 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keyword;

    /**
     * @param integer $TenantId 当前租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerUserId 当前用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 当前用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Keyword 关键词
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
