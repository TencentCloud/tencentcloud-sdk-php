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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLineGroupList返回参数结构体
 *
 * @method array getLineGroups() 获取自定义线路分组列表
 * @method void setLineGroups(array $LineGroups) 设置自定义线路分组列表
 * @method LineGroupSum getInfo() 获取自定义线路分组数量信息
 * @method void setInfo(LineGroupSum $Info) 设置自定义线路分组数量信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLineGroupListResponse extends AbstractModel
{
    /**
     * @var array 自定义线路分组列表
     */
    public $LineGroups;

    /**
     * @var LineGroupSum 自定义线路分组数量信息
     */
    public $Info;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LineGroups 自定义线路分组列表
     * @param LineGroupSum $Info 自定义线路分组数量信息
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
        if (array_key_exists("LineGroups",$param) and $param["LineGroups"] !== null) {
            $this->LineGroups = [];
            foreach ($param["LineGroups"] as $key => $value){
                $obj = new LineGroupItem();
                $obj->deserialize($value);
                array_push($this->LineGroups, $obj);
            }
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new LineGroupSum();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
