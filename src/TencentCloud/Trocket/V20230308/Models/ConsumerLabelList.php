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
 * 单个消费组下的标签列表
 *
 * @method string getGroup() 获取<p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(string $Group) 设置<p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取<p>标签数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置<p>标签数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerLabelList extends AbstractModel
{
    /**
     * @var string <p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var integer <p>标签数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $Group <p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount <p>标签数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels <p>标签列表</p>
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new ConsumerLabelItem();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
