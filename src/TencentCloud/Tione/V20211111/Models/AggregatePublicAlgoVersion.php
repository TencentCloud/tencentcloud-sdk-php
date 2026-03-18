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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聚合后的公共算法版本
 *
 * @method string getGroupName() 获取用于聚合的系列名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置用于聚合的系列名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicAlgoVersions() 获取算法公共版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAlgoVersions(array $PublicAlgoVersions) 设置算法公共版本列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AggregatePublicAlgoVersion extends AbstractModel
{
    /**
     * @var string 用于聚合的系列名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var array 算法公共版本列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAlgoVersions;

    /**
     * @param string $GroupName 用于聚合的系列名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicAlgoVersions 算法公共版本列表
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PublicAlgoVersions",$param) and $param["PublicAlgoVersions"] !== null) {
            $this->PublicAlgoVersions = [];
            foreach ($param["PublicAlgoVersions"] as $key => $value){
                $obj = new PublicAlgoVersion();
                $obj->deserialize($value);
                array_push($this->PublicAlgoVersions, $obj);
            }
        }
    }
}
