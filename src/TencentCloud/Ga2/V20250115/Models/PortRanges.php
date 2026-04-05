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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口范围
 *
 * @method integer getFromPort() 获取起始端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromPort(integer $FromPort) 设置起始端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToPort() 获取终点端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToPort(integer $ToPort) 设置终点端口。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PortRanges extends AbstractModel
{
    /**
     * @var integer 起始端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromPort;

    /**
     * @var integer 终点端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToPort;

    /**
     * @param integer $FromPort 起始端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToPort 终点端口。
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
        if (array_key_exists("FromPort",$param) and $param["FromPort"] !== null) {
            $this->FromPort = $param["FromPort"];
        }

        if (array_key_exists("ToPort",$param) and $param["ToPort"] !== null) {
            $this->ToPort = $param["ToPort"];
        }
    }
}
