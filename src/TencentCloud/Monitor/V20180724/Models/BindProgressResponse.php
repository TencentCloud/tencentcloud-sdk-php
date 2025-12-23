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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定状态Response
 *
 * @method array getSteps() 获取绑定步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSteps(array $Steps) 设置绑定步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取集群绑定状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置集群绑定状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindProgressResponse extends AbstractModel
{
    /**
     * @var array 绑定步骤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Steps;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群绑定状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param array $Steps 绑定步骤
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 集群绑定状态
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
        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new BindProgressStep();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
