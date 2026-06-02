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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WizardConfig 向导模式配置
 *
 * @method string getDbTable() 获取<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbTable(string $DbTable) 设置<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDbEnablePaging() 获取<p>是否分页</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbEnablePaging(boolean $DbEnablePaging) 设置<p>是否分页</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDbReqParams() 获取<p>请求参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbReqParams(array $DbReqParams) 设置<p>请求参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDbRespParams() 获取<p>响应参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbRespParams(array $DbRespParams) 设置<p>响应参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDbOrdParams() 获取<p>排序参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbOrdParams(array $DbOrdParams) 设置<p>排序参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDbEnableMappingResp() 获取<p>是否开启出参映射</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbEnableMappingResp(boolean $DbEnableMappingResp) 设置<p>是否开启出参映射</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WizardConfig extends AbstractModel
{
    /**
     * @var string <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbTable;

    /**
     * @var boolean <p>是否分页</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbEnablePaging;

    /**
     * @var array <p>请求参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbReqParams;

    /**
     * @var array <p>响应参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbRespParams;

    /**
     * @var array <p>排序参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbOrdParams;

    /**
     * @var boolean <p>是否开启出参映射</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbEnableMappingResp;

    /**
     * @param string $DbTable <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DbEnablePaging <p>是否分页</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DbReqParams <p>请求参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DbRespParams <p>响应参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DbOrdParams <p>排序参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DbEnableMappingResp <p>是否开启出参映射</p>
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
        if (array_key_exists("DbTable",$param) and $param["DbTable"] !== null) {
            $this->DbTable = $param["DbTable"];
        }

        if (array_key_exists("DbEnablePaging",$param) and $param["DbEnablePaging"] !== null) {
            $this->DbEnablePaging = $param["DbEnablePaging"];
        }

        if (array_key_exists("DbReqParams",$param) and $param["DbReqParams"] !== null) {
            $this->DbReqParams = [];
            foreach ($param["DbReqParams"] as $key => $value){
                $obj = new ServiceDatabaseReqParam();
                $obj->deserialize($value);
                array_push($this->DbReqParams, $obj);
            }
        }

        if (array_key_exists("DbRespParams",$param) and $param["DbRespParams"] !== null) {
            $this->DbRespParams = [];
            foreach ($param["DbRespParams"] as $key => $value){
                $obj = new ServiceDatabaseRespParam();
                $obj->deserialize($value);
                array_push($this->DbRespParams, $obj);
            }
        }

        if (array_key_exists("DbOrdParams",$param) and $param["DbOrdParams"] !== null) {
            $this->DbOrdParams = [];
            foreach ($param["DbOrdParams"] as $key => $value){
                $obj = new ServiceDatabaseOrderParam();
                $obj->deserialize($value);
                array_push($this->DbOrdParams, $obj);
            }
        }

        if (array_key_exists("DbEnableMappingResp",$param) and $param["DbEnableMappingResp"] !== null) {
            $this->DbEnableMappingResp = $param["DbEnableMappingResp"];
        }
    }
}
