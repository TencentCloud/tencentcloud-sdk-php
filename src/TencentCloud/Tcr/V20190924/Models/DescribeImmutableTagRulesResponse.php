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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImmutableTagRules返回参数结构体
 *
 * @method array getRules() 获取规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEmptyNs() 获取未创建规则的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmptyNs(array $EmptyNs) 设置未创建规则的命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取规则总量
 * @method void setTotal(integer $Total) 设置规则总量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImmutableTagRulesResponse extends AbstractModel
{
    /**
     * @var array 规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var array 未创建规则的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmptyNs;

    /**
     * @var integer 规则总量
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Rules 规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EmptyNs 未创建规则的命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 规则总量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ImmutableTagRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("EmptyNs",$param) and $param["EmptyNs"] !== null) {
            $this->EmptyNs = $param["EmptyNs"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
