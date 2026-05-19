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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects返回参数结构体
 *
 * @method string getInstanceId() 获取<p>透传入参。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>透传入参。</p>
 * @method string getDbName() 获取<p>数据库名称。</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称。</p>
 * @method array getTables() 获取<p>表列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(array $Tables) 设置<p>表列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getViews() 获取<p>视图列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViews(array $Views) 设置<p>视图列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcs() 获取<p>存储过程列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcs(array $Procs) 设置<p>存储过程列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFuncs() 获取<p>函数列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFuncs(array $Funcs) 设置<p>函数列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatabaseObjectsResponse extends AbstractModel
{
    /**
     * @var string <p>透传入参。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库名称。</p>
     */
    public $DbName;

    /**
     * @var array <p>表列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @var array <p>视图列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Views;

    /**
     * @var array <p>存储过程列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procs;

    /**
     * @var array <p>函数列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Funcs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId <p>透传入参。</p>
     * @param string $DbName <p>数据库名称。</p>
     * @param array $Tables <p>表列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Views <p>视图列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Procs <p>存储过程列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Funcs <p>函数列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new DatabaseTable();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new DatabaseView();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("Procs",$param) and $param["Procs"] !== null) {
            $this->Procs = [];
            foreach ($param["Procs"] as $key => $value){
                $obj = new DatabaseProcedure();
                $obj->deserialize($value);
                array_push($this->Procs, $obj);
            }
        }

        if (array_key_exists("Funcs",$param) and $param["Funcs"] !== null) {
            $this->Funcs = [];
            foreach ($param["Funcs"] as $key => $value){
                $obj = new DatabaseFunction();
                $obj->deserialize($value);
                array_push($this->Funcs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
