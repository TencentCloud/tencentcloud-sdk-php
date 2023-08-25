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
 * DSPA敏感数据扫描数据源条件
 *
 * @method array getRDBInstances() 获取RDB实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRDBInstances(array $RDBInstances) 设置RDB实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCOSInstances() 获取COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSInstances(array $COSInstances) 设置COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNOSQLInstances() 获取Mongo实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNOSQLInstances(array $NOSQLInstances) 设置Mongo实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getESInstances() 获取ES实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setESInstances(array $ESInstances) 设置ES实例列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiscoveryCondition extends AbstractModel
{
    /**
     * @var array RDB实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RDBInstances;

    /**
     * @var array COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSInstances;

    /**
     * @var array Mongo实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NOSQLInstances;

    /**
     * @var array ES实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ESInstances;

    /**
     * @param array $RDBInstances RDB实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $COSInstances COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NOSQLInstances Mongo实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ESInstances ES实例列表
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
        if (array_key_exists("RDBInstances",$param) and $param["RDBInstances"] !== null) {
            $this->RDBInstances = [];
            foreach ($param["RDBInstances"] as $key => $value){
                $obj = new RDBInstance();
                $obj->deserialize($value);
                array_push($this->RDBInstances, $obj);
            }
        }

        if (array_key_exists("COSInstances",$param) and $param["COSInstances"] !== null) {
            $this->COSInstances = [];
            foreach ($param["COSInstances"] as $key => $value){
                $obj = new COSInstance();
                $obj->deserialize($value);
                array_push($this->COSInstances, $obj);
            }
        }

        if (array_key_exists("NOSQLInstances",$param) and $param["NOSQLInstances"] !== null) {
            $this->NOSQLInstances = [];
            foreach ($param["NOSQLInstances"] as $key => $value){
                $obj = new NOSQLInstance();
                $obj->deserialize($value);
                array_push($this->NOSQLInstances, $obj);
            }
        }

        if (array_key_exists("ESInstances",$param) and $param["ESInstances"] !== null) {
            $this->ESInstances = [];
            foreach ($param["ESInstances"] as $key => $value){
                $obj = new ESInstance();
                $obj->deserialize($value);
                array_push($this->ESInstances, $obj);
            }
        }
    }
}
