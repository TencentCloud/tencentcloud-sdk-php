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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源实例
 *
 * @method string getId() 获取<p>实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getService() 获取<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(string $Service) 设置<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsReady() 获取<p>是否就绪</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReady(boolean $IsReady) 设置<p>是否就绪</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceInstance extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var boolean <p>是否就绪</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReady;

    /**
     * @param string $Id <p>实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Service <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsReady <p>是否就绪</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IsReady",$param) and $param["IsReady"] !== null) {
            $this->IsReady = $param["IsReady"];
        }
    }
}
