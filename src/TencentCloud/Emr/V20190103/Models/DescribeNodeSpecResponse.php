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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeSpec返回参数结构体
 *
 * @method array getNodeSpecs() 获取<p>节点规格类型</p>
 * @method void setNodeSpecs(array $NodeSpecs) 设置<p>节点规格类型</p>
 * @method array getArchitectures() 获取<p>机型架构信息</p>
 * @method void setArchitectures(array $Architectures) 设置<p>机型架构信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNodeSpecResponse extends AbstractModel
{
    /**
     * @var array <p>节点规格类型</p>
     */
    public $NodeSpecs;

    /**
     * @var array <p>机型架构信息</p>
     */
    public $Architectures;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NodeSpecs <p>节点规格类型</p>
     * @param array $Architectures <p>机型架构信息</p>
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
        if (array_key_exists("NodeSpecs",$param) and $param["NodeSpecs"] !== null) {
            $this->NodeSpecs = [];
            foreach ($param["NodeSpecs"] as $key => $value){
                $obj = new DescribeNodeSpec();
                $obj->deserialize($value);
                array_push($this->NodeSpecs, $obj);
            }
        }

        if (array_key_exists("Architectures",$param) and $param["Architectures"] !== null) {
            $this->Architectures = [];
            foreach ($param["Architectures"] as $key => $value){
                $obj = new ArchitectureInfo();
                $obj->deserialize($value);
                array_push($this->Architectures, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
