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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发压host来源
 *
 * @method string getIP() 获取发压host的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置发压host的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取发压host所在的pod
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置发压host所在的pod
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置所属地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadSource extends AbstractModel
{
    /**
     * @var string 发压host的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string 发压host所在的pod
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string 所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $IP 发压host的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName 发压host所在的pod
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 所属地域
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
