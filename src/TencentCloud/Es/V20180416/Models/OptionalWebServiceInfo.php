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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可选web组件信息
 *
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicUrl() 获取公网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicUrl(string $PublicUrl) 设置公网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateUrl() 获取内网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateUrl(string $PrivateUrl) 设置内网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAccess() 获取公网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccess(string $PublicAccess) 设置公网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateAccess() 获取内网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateAccess(string $PrivateAccess) 设置内网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 */
class OptionalWebServiceInfo extends AbstractModel
{
    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 公网url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicUrl;

    /**
     * @var string 内网url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateUrl;

    /**
     * @var string 公网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccess;

    /**
     * @var string 内网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateAccess;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicUrl 公网url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateUrl 内网url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAccess 公网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateAccess 内网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本号
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicUrl",$param) and $param["PublicUrl"] !== null) {
            $this->PublicUrl = $param["PublicUrl"];
        }

        if (array_key_exists("PrivateUrl",$param) and $param["PrivateUrl"] !== null) {
            $this->PrivateUrl = $param["PrivateUrl"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
