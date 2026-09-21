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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个标签键命中的 Topic 路由结果
 *
 * @method ConsumerLabelKey getKey() 获取<p>标签键</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(ConsumerLabelKey $Key) 设置<p>标签键</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoutes() 获取<p>命中的路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutes(array $Routes) 设置<p>命中的路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerLabelRoute extends AbstractModel
{
    /**
     * @var ConsumerLabelKey <p>标签键</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var array <p>命中的路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Routes;

    /**
     * @param ConsumerLabelKey $Key <p>标签键</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Routes <p>命中的路由规则列表</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = new ConsumerLabelKey();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new ConsumerLabelRouteItem();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
