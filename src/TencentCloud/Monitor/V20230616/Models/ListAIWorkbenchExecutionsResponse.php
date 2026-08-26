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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchExecutions返回参数结构体
 *
 * @method array getExecutions() 获取<p>执行列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutions(array $Executions) 设置<p>执行列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PageByNumResult getPageResult() 获取<p>分页结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageResult(PageByNumResult $PageResult) 设置<p>分页结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListAIWorkbenchExecutionsResponse extends AbstractModel
{
    /**
     * @var array <p>执行列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Executions;

    /**
     * @var PageByNumResult <p>分页结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Executions <p>执行列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PageByNumResult $PageResult <p>分页结果</p>
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
        if (array_key_exists("Executions",$param) and $param["Executions"] !== null) {
            $this->Executions = [];
            foreach ($param["Executions"] as $key => $value){
                $obj = new ExecutionInfo();
                $obj->deserialize($value);
                array_push($this->Executions, $obj);
            }
        }

        if (array_key_exists("PageResult",$param) and $param["PageResult"] !== null) {
            $this->PageResult = new PageByNumResult();
            $this->PageResult->deserialize($param["PageResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
