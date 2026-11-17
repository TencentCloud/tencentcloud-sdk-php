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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目部署地域
 *
 * @method array getMainland() 获取<p>中国大陆地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainland(array $Mainland) 设置<p>中国大陆地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOverseas() 获取<p>海外地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverseas(array $Overseas) 设置<p>海外地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Regions extends AbstractModel
{
    /**
     * @var array <p>中国大陆地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mainland;

    /**
     * @var array <p>海外地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Overseas;

    /**
     * @param array $Mainland <p>中国大陆地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Overseas <p>海外地域</p>
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
        if (array_key_exists("Mainland",$param) and $param["Mainland"] !== null) {
            $this->Mainland = $param["Mainland"];
        }

        if (array_key_exists("Overseas",$param) and $param["Overseas"] !== null) {
            $this->Overseas = $param["Overseas"];
        }
    }
}
