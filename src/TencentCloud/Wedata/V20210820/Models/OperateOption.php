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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产操作标记
 *
 * @method boolean getHasProjectPermission() 获取是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasProjectPermission(boolean $HasProjectPermission) 设置是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperateOption extends AbstractModel
{
    /**
     * @var boolean 是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasProjectPermission;

    /**
     * @param boolean $HasProjectPermission 是否有修改归属项目权限
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
        if (array_key_exists("HasProjectPermission",$param) and $param["HasProjectPermission"] !== null) {
            $this->HasProjectPermission = $param["HasProjectPermission"];
        }
    }
}
