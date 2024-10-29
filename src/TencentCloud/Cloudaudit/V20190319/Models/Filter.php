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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跟踪集数据投递筛选条件
 *
 * @method array getResourceFields() 获取资源筛选条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceFields(array $ResourceFields) 设置资源筛选条件
注意：此字段可能返回 null，表示取不到有效值。
 */
class Filter extends AbstractModel
{
    /**
     * @var array 资源筛选条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceFields;

    /**
     * @param array $ResourceFields 资源筛选条件
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
        if (array_key_exists("ResourceFields",$param) and $param["ResourceFields"] !== null) {
            $this->ResourceFields = [];
            foreach ($param["ResourceFields"] as $key => $value){
                $obj = new ResourceField();
                $obj->deserialize($value);
                array_push($this->ResourceFields, $obj);
            }
        }
    }
}
