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
 * 租户基础信息
 *
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantName() 获取租户标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantName(string $TenantName) 设置租户标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取租户显示名称，一般是中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置租户显示名称，一般是中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserId() 获取租户主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(string $OwnerUserId) 设置租户主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取租户的额外配置参数, json格式字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置租户的额外配置参数, json格式字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseTenant extends AbstractModel
{
    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 租户标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantName;

    /**
     * @var string 租户显示名称，一般是中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 租户主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var string 租户的额外配置参数, json格式字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantName 租户标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 租户显示名称，一般是中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserId 租户主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 租户的额外配置参数, json格式字符串
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

        if (array_key_exists("TenantName",$param) and $param["TenantName"] !== null) {
            $this->TenantName = $param["TenantName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
