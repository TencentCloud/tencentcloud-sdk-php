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
 * 批量查询路由配置的单条结果
 *
 * @method ConsumerRouteKey getKey() 获取<p>配置项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(ConsumerRouteKey $Key) 设置<p>配置项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取<p>路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置<p>路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCutTimestamp() 获取<p>切流时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCutTimestamp(integer $CutTimestamp) 设置<p>切流时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeConsumerRouteConfigItem extends AbstractModel
{
    /**
     * @var ConsumerRouteKey <p>配置项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var integer <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array <p>路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var integer <p>切流时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CutTimestamp;

    /**
     * @param ConsumerRouteKey $Key <p>配置项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules <p>路由规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CutTimestamp <p>切流时间戳</p>
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
            $this->Key = new ConsumerRouteKey();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RouteRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CutTimestamp",$param) and $param["CutTimestamp"] !== null) {
            $this->CutTimestamp = $param["CutTimestamp"];
        }
    }
}
