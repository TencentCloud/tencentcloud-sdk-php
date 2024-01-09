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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据数据订阅的对象，用于修改订阅对象接口。与SubscribeObject结构类似，只是类型和参数名不同。
 *
 * @method integer getObjectsType() 获取订阅对象的类型，枚举值为：0-库，1-表(该值对于mongo任务来说，是集合) 。
注意：mongo只支持全实例、单库或者单集合订阅，因此该字段不要与SubscribeObjectType冲突。如：SubscribeObjectType=4，表示mongo单库订阅，那么该字段应该传0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectsType(integer $ObjectsType) 设置订阅对象的类型，枚举值为：0-库，1-表(该值对于mongo任务来说，是集合) 。
注意：mongo只支持全实例、单库或者单集合订阅，因此该字段不要与SubscribeObjectType冲突。如：SubscribeObjectType=4，表示mongo单库订阅，那么该字段应该传0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取订阅数据库的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置订阅数据库的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableNames() 获取订阅数据库中表(或集合)的名称。如果 ObjectsType 为 1，那么此字段为必填，且不为空；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNames(array $TableNames) 设置订阅数据库中表(或集合)的名称。如果 ObjectsType 为 1，那么此字段为必填，且不为空；
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModifiedSubscribeObject extends AbstractModel
{
    /**
     * @var integer 订阅对象的类型，枚举值为：0-库，1-表(该值对于mongo任务来说，是集合) 。
注意：mongo只支持全实例、单库或者单集合订阅，因此该字段不要与SubscribeObjectType冲突。如：SubscribeObjectType=4，表示mongo单库订阅，那么该字段应该传0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectsType;

    /**
     * @var string 订阅数据库的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var array 订阅数据库中表(或集合)的名称。如果 ObjectsType 为 1，那么此字段为必填，且不为空；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNames;

    /**
     * @param integer $ObjectsType 订阅对象的类型，枚举值为：0-库，1-表(该值对于mongo任务来说，是集合) 。
注意：mongo只支持全实例、单库或者单集合订阅，因此该字段不要与SubscribeObjectType冲突。如：SubscribeObjectType=4，表示mongo单库订阅，那么该字段应该传0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 订阅数据库的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableNames 订阅数据库中表(或集合)的名称。如果 ObjectsType 为 1，那么此字段为必填，且不为空；
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
        if (array_key_exists("ObjectsType",$param) and $param["ObjectsType"] !== null) {
            $this->ObjectsType = $param["ObjectsType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableNames",$param) and $param["TableNames"] !== null) {
            $this->TableNames = $param["TableNames"];
        }
    }
}
