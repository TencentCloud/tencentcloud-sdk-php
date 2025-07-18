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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API版本数组
 *
 * @method string getApplicationId() 获取App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取App 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置App 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgVersion() 获取App 包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgVersion(string $PkgVersion) 设置App 包版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiVersionArray extends AbstractModel
{
    /**
     * @var string App ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string App 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string App 包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgVersion;

    /**
     * @param string $ApplicationId App ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName App 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgVersion App 包版本
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("PkgVersion",$param) and $param["PkgVersion"] !== null) {
            $this->PkgVersion = $param["PkgVersion"];
        }
    }
}
