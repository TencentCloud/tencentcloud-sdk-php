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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询云原生网关访问控制配置出参
 *
 * @method string getSourceType() 获取访问控制插件绑定的资源类型：route | service
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(string $SourceType) 设置访问控制插件绑定的资源类型：route | service
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceId() 获取路由或服务的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceId(string $SourceId) 设置路由或服务的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取是否启用插件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否启用插件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestrictionType() 获取访问控制类型：whiteList｜blackList
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestrictionType(string $RestrictionType) 设置访问控制类型：whiteList｜blackList
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAddressList() 获取cidr｜ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressList(array $AddressList) 设置cidr｜ip
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeKongIpRestrictionResult extends AbstractModel
{
    /**
     * @var string 访问控制插件绑定的资源类型：route | service
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string 路由或服务的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceId;

    /**
     * @var boolean 是否启用插件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var string 访问控制类型：whiteList｜blackList
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestrictionType;

    /**
     * @var array cidr｜ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressList;

    /**
     * @param string $SourceType 访问控制插件绑定的资源类型：route | service
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceId 路由或服务的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 是否启用插件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestrictionType 访问控制类型：whiteList｜blackList
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AddressList cidr｜ip
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RestrictionType",$param) and $param["RestrictionType"] !== null) {
            $this->RestrictionType = $param["RestrictionType"];
        }

        if (array_key_exists("AddressList",$param) and $param["AddressList"] !== null) {
            $this->AddressList = $param["AddressList"];
        }
    }
}
