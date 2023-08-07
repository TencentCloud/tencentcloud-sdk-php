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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户下所有实时上云计划中的通道id列表返回数据
 *
 * @method array getList() 获取用户所有计划下通道id，存在通道是为数组格式，不存在时，字段数据为空 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置用户所有计划下通道id，存在通道是为数组格式，不存在时，字段数据为空 
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListRecordPlanChannelsData extends AbstractModel
{
    /**
     * @var array 用户所有计划下通道id，存在通道是为数组格式，不存在时，字段数据为空 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param array $List 用户所有计划下通道id，存在通道是为数组格式，不存在时，字段数据为空 
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = $param["List"];
        }
    }
}
