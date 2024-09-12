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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowComponents返回参数结构体
 *
 * @method array getRecipientComponentInfos() 获取合同流程关联的填写控件信息，包括填写控件的归属方以及是否填写等内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientComponentInfos(array $RecipientComponentInfos) 设置合同流程关联的填写控件信息，包括填写控件的归属方以及是否填写等内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowComponentsResponse extends AbstractModel
{
    /**
     * @var array 合同流程关联的填写控件信息，包括填写控件的归属方以及是否填写等内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientComponentInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RecipientComponentInfos 合同流程关联的填写控件信息，包括填写控件的归属方以及是否填写等内容。
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
        if (array_key_exists("RecipientComponentInfos",$param) and $param["RecipientComponentInfos"] !== null) {
            $this->RecipientComponentInfos = [];
            foreach ($param["RecipientComponentInfos"] as $key => $value){
                $obj = new RecipientComponentInfo();
                $obj->deserialize($value);
                array_push($this->RecipientComponentInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
