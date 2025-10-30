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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受漏洞影响的组件信息。
 *
 * @method string getName() 获取受漏洞影响的组件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置受漏洞影响的组件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAffectedVersionList() 获取受漏洞影响的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedVersionList(array $AffectedVersionList) 设置受漏洞影响的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFixedVersionList() 获取修复此漏洞的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixedVersionList(array $FixedVersionList) 设置修复此漏洞的版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class AffectedComponent extends AbstractModel
{
    /**
     * @var string 受漏洞影响的组件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 受漏洞影响的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedVersionList;

    /**
     * @var array 修复此漏洞的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixedVersionList;

    /**
     * @param string $Name 受漏洞影响的组件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AffectedVersionList 受漏洞影响的版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FixedVersionList 修复此漏洞的版本
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AffectedVersionList",$param) and $param["AffectedVersionList"] !== null) {
            $this->AffectedVersionList = $param["AffectedVersionList"];
        }

        if (array_key_exists("FixedVersionList",$param) and $param["FixedVersionList"] !== null) {
            $this->FixedVersionList = $param["FixedVersionList"];
        }
    }
}
