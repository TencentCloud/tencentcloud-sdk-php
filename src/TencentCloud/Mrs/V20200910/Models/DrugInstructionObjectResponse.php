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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DrugInstructionObject返回参数结构体
 *
 * @method ChemicalProductInfo getChemicalProductInfo() 获取药品说明书消息定义
 * @method void setChemicalProductInfo(ChemicalProductInfo $ChemicalProductInfo) 设置药品说明书消息定义
 * @method BiologicalProductInfo getBiologicalProductInfo() 获取预防用生物制品说明书
 * @method void setBiologicalProductInfo(BiologicalProductInfo $BiologicalProductInfo) 设置预防用生物制品说明书
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DrugInstructionObjectResponse extends AbstractModel
{
    /**
     * @var ChemicalProductInfo 药品说明书消息定义
     */
    public $ChemicalProductInfo;

    /**
     * @var BiologicalProductInfo 预防用生物制品说明书
     */
    public $BiologicalProductInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ChemicalProductInfo $ChemicalProductInfo 药品说明书消息定义
     * @param BiologicalProductInfo $BiologicalProductInfo 预防用生物制品说明书
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
        if (array_key_exists("ChemicalProductInfo",$param) and $param["ChemicalProductInfo"] !== null) {
            $this->ChemicalProductInfo = new ChemicalProductInfo();
            $this->ChemicalProductInfo->deserialize($param["ChemicalProductInfo"]);
        }

        if (array_key_exists("BiologicalProductInfo",$param) and $param["BiologicalProductInfo"] !== null) {
            $this->BiologicalProductInfo = new BiologicalProductInfo();
            $this->BiologicalProductInfo->deserialize($param["BiologicalProductInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
