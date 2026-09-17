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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceSummary返回参数结构体
 *
 * @method ResourcePackageInfo getResourcePackage() 获取<p>计费套餐包用量信息</p>
 * @method void setResourcePackage(ResourcePackageInfo $ResourcePackage) 设置<p>计费套餐包用量信息</p>
 * @method AddOnPackageInfo getAddOnPackage() 获取<p>计费增值包用量信息</p>
 * @method void setAddOnPackage(AddOnPackageInfo $AddOnPackage) 设置<p>计费增值包用量信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceSummaryResponse extends AbstractModel
{
    /**
     * @var ResourcePackageInfo <p>计费套餐包用量信息</p>
     */
    public $ResourcePackage;

    /**
     * @var AddOnPackageInfo <p>计费增值包用量信息</p>
     */
    public $AddOnPackage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ResourcePackageInfo $ResourcePackage <p>计费套餐包用量信息</p>
     * @param AddOnPackageInfo $AddOnPackage <p>计费增值包用量信息</p>
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
        if (array_key_exists("ResourcePackage",$param) and $param["ResourcePackage"] !== null) {
            $this->ResourcePackage = new ResourcePackageInfo();
            $this->ResourcePackage->deserialize($param["ResourcePackage"]);
        }

        if (array_key_exists("AddOnPackage",$param) and $param["AddOnPackage"] !== null) {
            $this->AddOnPackage = new AddOnPackageInfo();
            $this->AddOnPackage->deserialize($param["AddOnPackage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
