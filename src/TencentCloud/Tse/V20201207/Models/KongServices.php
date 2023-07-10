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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kong实例的服务列表
 *
 * @method array getServiceList() 获取kong实例的服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceList(array $ServiceList) 设置kong实例的服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置列表总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongServices extends AbstractModel
{
    /**
     * @var array kong实例的服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceList;

    /**
     * @var integer 列表总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param array $ServiceList kong实例的服务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 列表总数
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
        if (array_key_exists("ServiceList",$param) and $param["ServiceList"] !== null) {
            $this->ServiceList = [];
            foreach ($param["ServiceList"] as $key => $value){
                $obj = new KongServicePreview();
                $obj->deserialize($value);
                array_push($this->ServiceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
