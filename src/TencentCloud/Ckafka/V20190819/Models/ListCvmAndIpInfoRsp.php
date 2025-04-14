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
 * CVM和IP 信息列表
 *
 * @method array getCvmList() 获取cvm和IP 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmList(array $CvmList) 设置cvm和IP 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取实例数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置实例数据量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListCvmAndIpInfoRsp extends AbstractModel
{
    /**
     * @var array cvm和IP 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmList;

    /**
     * @var integer 实例数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param array $CvmList cvm和IP 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 实例数据量
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
        if (array_key_exists("CvmList",$param) and $param["CvmList"] !== null) {
            $this->CvmList = [];
            foreach ($param["CvmList"] as $key => $value){
                $obj = new CvmAndIpInfo();
                $obj->deserialize($value);
                array_push($this->CvmList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
