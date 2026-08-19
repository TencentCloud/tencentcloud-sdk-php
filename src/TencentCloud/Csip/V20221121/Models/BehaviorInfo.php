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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户行为 异常行为详细信息
 *
 * @method string getDate() 获取日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfo() 获取具体数据，用来渲染曲线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfo(array $NodeInfo) 设置具体数据，用来渲染曲线
注意：此字段可能返回 null，表示取不到有效值。
 */
class BehaviorInfo extends AbstractModel
{
    /**
     * @var string 日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var array 具体数据，用来渲染曲线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfo;

    /**
     * @param string $Date 日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfo 具体数据，用来渲染曲线
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = [];
            foreach ($param["NodeInfo"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfo, $obj);
            }
        }
    }
}
