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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码包信息
 *
 * @method string getPackageName() 获取代码包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置代码包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取代码包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置代码包版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class CbrPackageInfo extends AbstractModel
{
    /**
     * @var string 代码包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 代码包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @param string $PackageName 代码包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 代码包版本
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
        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }
    }
}
