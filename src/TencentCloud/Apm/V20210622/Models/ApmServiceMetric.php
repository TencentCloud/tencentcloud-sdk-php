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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * apm应用指标信息
 *
 * @method array getFields() 获取filed数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFields(array $Fields) 设置filed数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取tag数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置tag数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceDetail getServiceDetail() 获取应用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDetail(ServiceDetail $ServiceDetail) 设置应用信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApmServiceMetric extends AbstractModel
{
    /**
     * @var array filed数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fields;

    /**
     * @var array tag数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var ServiceDetail 应用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDetail;

    /**
     * @param array $Fields filed数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags tag数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceDetail $ServiceDetail 应用信息
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ApmField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ServiceDetail",$param) and $param["ServiceDetail"] !== null) {
            $this->ServiceDetail = new ServiceDetail();
            $this->ServiceDetail->deserialize($param["ServiceDetail"]);
        }
    }
}
