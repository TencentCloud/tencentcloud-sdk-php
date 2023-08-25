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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPASelfBuildMetaResource返回参数结构体
 *
 * @method string getConnectivityStatus() 获取连通性测试情况，success表示可正常访问，failed表示无法访问。
 * @method void setConnectivityStatus(string $ConnectivityStatus) 设置连通性测试情况，success表示可正常访问，failed表示无法访问。
 * @method string getConnectivityDescription() 获取连通性描述字段，如果连通性测试失败，这里会返回无法访问的相关信息说明。
 * @method void setConnectivityDescription(string $ConnectivityDescription) 设置连通性描述字段，如果连通性测试失败，这里会返回无法访问的相关信息说明。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDSPASelfBuildMetaResourceResponse extends AbstractModel
{
    /**
     * @var string 连通性测试情况，success表示可正常访问，failed表示无法访问。
     */
    public $ConnectivityStatus;

    /**
     * @var string 连通性描述字段，如果连通性测试失败，这里会返回无法访问的相关信息说明。
     */
    public $ConnectivityDescription;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ConnectivityStatus 连通性测试情况，success表示可正常访问，failed表示无法访问。
     * @param string $ConnectivityDescription 连通性描述字段，如果连通性测试失败，这里会返回无法访问的相关信息说明。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ConnectivityStatus",$param) and $param["ConnectivityStatus"] !== null) {
            $this->ConnectivityStatus = $param["ConnectivityStatus"];
        }

        if (array_key_exists("ConnectivityDescription",$param) and $param["ConnectivityDescription"] !== null) {
            $this->ConnectivityDescription = $param["ConnectivityDescription"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
