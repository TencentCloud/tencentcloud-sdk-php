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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定的实例信息
 *
 * @method string getResourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDbInfos() 获取数据源绑定的db信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbInfos(array $DbInfos) 设置数据源绑定的db信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInstanceInfo extends AbstractModel
{
    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var array 数据源绑定的db信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbInfos;

    /**
     * @param string $ResourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DbInfos 数据源绑定的db信息
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DbInfos",$param) and $param["DbInfos"] !== null) {
            $this->DbInfos = [];
            foreach ($param["DbInfos"] as $key => $value){
                $obj = new DbInfo();
                $obj->deserialize($value);
                array_push($this->DbInfos, $obj);
            }
        }
    }
}
