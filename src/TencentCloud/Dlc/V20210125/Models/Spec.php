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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业资源规格（跨引擎平铺载体；字段须与请求 MajorType 匹配）。
 *
 * @method SparkJobSpec getSpark() 获取<p>SPARK 资源规格（CU 维度）；MajorType=SPARK 时必填，其余引擎字段须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpark(SparkJobSpec $Spark) 设置<p>SPARK 资源规格（CU 维度）；MajorType=SPARK 时必填，其余引擎字段须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Spec extends AbstractModel
{
    /**
     * @var SparkJobSpec <p>SPARK 资源规格（CU 维度）；MajorType=SPARK 时必填，其余引擎字段须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spark;

    /**
     * @param SparkJobSpec $Spark <p>SPARK 资源规格（CU 维度）；MajorType=SPARK 时必填，其余引擎字段须为空。</p>
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
        if (array_key_exists("Spark",$param) and $param["Spark"] !== null) {
            $this->Spark = new SparkJobSpec();
            $this->Spark->deserialize($param["Spark"]);
        }
    }
}
