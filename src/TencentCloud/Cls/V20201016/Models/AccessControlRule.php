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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataSight访问控制规则
 *
 * @method string getAccessMode() 获取访问方式：public - 公网，internal - 内网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessMode(string $AccessMode) 设置访问方式：public - 公网，internal - 内网
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessControlRule extends AbstractModel
{
    /**
     * @var string 访问方式：public - 公网，internal - 内网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessMode;

    /**
     * @param string $AccessMode 访问方式：public - 公网，internal - 内网
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
        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }
    }
}
