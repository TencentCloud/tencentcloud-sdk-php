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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlExplainV2返回参数结构体
 *
 * @method string getSchema() 获取<p>数据库名，回显请求中的 Schema。</p>
 * @method void setSchema(string $Schema) 设置<p>数据库名，回显请求中的 Schema。</p>
 * @method string getSqlText() 获取<p>SQL 文本，回显请求中的 SqlText。</p>
 * @method void setSqlText(string $SqlText) 设置<p>SQL 文本，回显请求中的 SqlText。</p>
 * @method array getTables() 获取<p>SQL 涉及的表名列表。</p>
 * @method void setTables(array $Tables) 设置<p>SQL 涉及的表名列表。</p>
 * @method SqlExplainResultV2 getExplain() 获取<p>执行计划详细信息。由数据库 EXPLAIN 输出透传，内容为 JSON 字符串，包含 Meta（列定义）与 Data（执行计划行）两部分；Format=JSON 时为 EXPLAIN FORMAT=JSON 的原始结果。</p>
 * @method void setExplain(SqlExplainResultV2 $Explain) 设置<p>执行计划详细信息。由数据库 EXPLAIN 输出透传，内容为 JSON 字符串，包含 Meta（列定义）与 Data（执行计划行）两部分；Format=JSON 时为 EXPLAIN FORMAT=JSON 的原始结果。</p>
 * @method array getFieldDesc() 获取<p>执行计划字段说明列表。仅当请求 Visual=true 或走 SqlTemplateKey 路径时返回，用于前端展示字段中文释义。</p>
 * @method void setFieldDesc(array $FieldDesc) 设置<p>执行计划字段说明列表。仅当请求 Visual=true 或走 SqlTemplateKey 路径时返回，用于前端展示字段中文释义。</p>
 * @method string getVisualExplain() 获取<p>可视化执行计划树，当Visual=true时返回</p>
 * @method void setVisualExplain(string $VisualExplain) 设置<p>可视化执行计划树，当Visual=true时返回</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSqlExplainV2Response extends AbstractModel
{
    /**
     * @var string <p>数据库名，回显请求中的 Schema。</p>
     */
    public $Schema;

    /**
     * @var string <p>SQL 文本，回显请求中的 SqlText。</p>
     */
    public $SqlText;

    /**
     * @var array <p>SQL 涉及的表名列表。</p>
     */
    public $Tables;

    /**
     * @var SqlExplainResultV2 <p>执行计划详细信息。由数据库 EXPLAIN 输出透传，内容为 JSON 字符串，包含 Meta（列定义）与 Data（执行计划行）两部分；Format=JSON 时为 EXPLAIN FORMAT=JSON 的原始结果。</p>
     */
    public $Explain;

    /**
     * @var array <p>执行计划字段说明列表。仅当请求 Visual=true 或走 SqlTemplateKey 路径时返回，用于前端展示字段中文释义。</p>
     */
    public $FieldDesc;

    /**
     * @var string <p>可视化执行计划树，当Visual=true时返回</p>
     */
    public $VisualExplain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Schema <p>数据库名，回显请求中的 Schema。</p>
     * @param string $SqlText <p>SQL 文本，回显请求中的 SqlText。</p>
     * @param array $Tables <p>SQL 涉及的表名列表。</p>
     * @param SqlExplainResultV2 $Explain <p>执行计划详细信息。由数据库 EXPLAIN 输出透传，内容为 JSON 字符串，包含 Meta（列定义）与 Data（执行计划行）两部分；Format=JSON 时为 EXPLAIN FORMAT=JSON 的原始结果。</p>
     * @param array $FieldDesc <p>执行计划字段说明列表。仅当请求 Visual=true 或走 SqlTemplateKey 路径时返回，用于前端展示字段中文释义。</p>
     * @param string $VisualExplain <p>可视化执行计划树，当Visual=true时返回</p>
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
        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new SqlExplainTableRefV2();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Explain",$param) and $param["Explain"] !== null) {
            $this->Explain = new SqlExplainResultV2();
            $this->Explain->deserialize($param["Explain"]);
        }

        if (array_key_exists("FieldDesc",$param) and $param["FieldDesc"] !== null) {
            $this->FieldDesc = [];
            foreach ($param["FieldDesc"] as $key => $value){
                $obj = new SqlExplainFieldDescV2();
                $obj->deserialize($value);
                array_push($this->FieldDesc, $obj);
            }
        }

        if (array_key_exists("VisualExplain",$param) and $param["VisualExplain"] !== null) {
            $this->VisualExplain = $param["VisualExplain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
