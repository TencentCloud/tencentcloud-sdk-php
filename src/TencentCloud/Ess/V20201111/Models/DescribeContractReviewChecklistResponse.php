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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContractReviewChecklist返回参数结构体
 *
 * @method string getChecklistId() 获取<p>获取的合同风险审查清单ID</p>
 * @method void setChecklistId(string $ChecklistId) 设置<p>获取的合同风险审查清单ID</p>
 * @method string getName() 获取<p>获取的合同风险审查清单名称</p>
 * @method void setName(string $Name) 设置<p>获取的合同风险审查清单名称</p>
 * @method boolean getEnabled() 获取<p>获取的合同风险审查清单是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>获取的合同风险审查清单是否启用</p>
 * @method array getCategories() 获取<p>获取的合同风险审查清单审查点列表</p>
 * @method void setCategories(array $Categories) 设置<p>获取的合同风险审查清单审查点列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContractReviewChecklistResponse extends AbstractModel
{
    /**
     * @var string <p>获取的合同风险审查清单ID</p>
     */
    public $ChecklistId;

    /**
     * @var string <p>获取的合同风险审查清单名称</p>
     */
    public $Name;

    /**
     * @var boolean <p>获取的合同风险审查清单是否启用</p>
     */
    public $Enabled;

    /**
     * @var array <p>获取的合同风险审查清单审查点列表</p>
     */
    public $Categories;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChecklistId <p>获取的合同风险审查清单ID</p>
     * @param string $Name <p>获取的合同风险审查清单名称</p>
     * @param boolean $Enabled <p>获取的合同风险审查清单是否启用</p>
     * @param array $Categories <p>获取的合同风险审查清单审查点列表</p>
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
        if (array_key_exists("ChecklistId",$param) and $param["ChecklistId"] !== null) {
            $this->ChecklistId = $param["ChecklistId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new ChecklistCategory();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
