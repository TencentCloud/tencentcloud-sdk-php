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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述组件的一条版本信息。
 *
 * @method PURL getPURL() 获取该组件的PURL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPURL(PURL $PURL) 设置该组件的PURL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseExpression() 获取该组件版本的许可证表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseExpression(string $LicenseExpression) 设置该组件版本的许可证表达式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComponentVersion extends AbstractModel
{
    /**
     * @var PURL 该组件的PURL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PURL;

    /**
     * @var string 该组件版本的许可证表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseExpression;

    /**
     * @param PURL $PURL 该组件的PURL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseExpression 该组件版本的许可证表达式
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
        if (array_key_exists("PURL",$param) and $param["PURL"] !== null) {
            $this->PURL = new PURL();
            $this->PURL->deserialize($param["PURL"]);
        }

        if (array_key_exists("LicenseExpression",$param) and $param["LicenseExpression"] !== null) {
            $this->LicenseExpression = $param["LicenseExpression"];
        }
    }
}
