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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云安全配置检查项列表
 *
 * @method array getList() 获取检查项详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置检查项详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置检查项总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeSocCheckItemListRspRsp extends AbstractModel
{
    /**
     * @var array 检查项详情列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var integer 检查项总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param array $List 检查项详情列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 检查项总数
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
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SocCheckItemV1();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
