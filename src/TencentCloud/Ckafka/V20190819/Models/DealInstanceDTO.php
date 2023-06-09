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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费/后付费接口中，订单和 CKafka 实例映射数据结构
 *
 * @method string getDealName() 获取订单流水
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置订单流水
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceIdList() 获取订单流水对应购买的 CKafka 实例 id 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIdList(array $InstanceIdList) 设置订单流水对应购买的 CKafka 实例 id 列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DealInstanceDTO extends AbstractModel
{
    /**
     * @var string 订单流水
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var array 订单流水对应购买的 CKafka 实例 id 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIdList;

    /**
     * @param string $DealName 订单流水
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceIdList 订单流水对应购买的 CKafka 实例 id 列表
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }
    }
}
