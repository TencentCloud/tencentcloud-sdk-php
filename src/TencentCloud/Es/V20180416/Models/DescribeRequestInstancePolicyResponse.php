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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRequestInstancePolicy返回参数结构体
 *
 * @method array getGetPaths() 获取<p>GET路径可请求的命令合集</p>
 * @method void setGetPaths(array $GetPaths) 设置<p>GET路径可请求的命令合集</p>
 * @method array getPostPaths() 获取<p>POST路径可请求的命令合集</p>
 * @method void setPostPaths(array $PostPaths) 设置<p>POST路径可请求的命令合集</p>
 * @method array getPutPaths() 获取<p>PUT路径可请求的命令合集</p>
 * @method void setPutPaths(array $PutPaths) 设置<p>PUT路径可请求的命令合集</p>
 * @method boolean getIsDefault() 获取<p>是否是默认的参数</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否是默认的参数</p>
 * @method string getUpdateTime() 获取<p>变更时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>变更时间</p>
 * @method string getOperator() 获取<p>变更人</p>
 * @method void setOperator(string $Operator) 设置<p>变更人</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRequestInstancePolicyResponse extends AbstractModel
{
    /**
     * @var array <p>GET路径可请求的命令合集</p>
     */
    public $GetPaths;

    /**
     * @var array <p>POST路径可请求的命令合集</p>
     */
    public $PostPaths;

    /**
     * @var array <p>PUT路径可请求的命令合集</p>
     */
    public $PutPaths;

    /**
     * @var boolean <p>是否是默认的参数</p>
     */
    public $IsDefault;

    /**
     * @var string <p>变更时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>变更人</p>
     */
    public $Operator;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $GetPaths <p>GET路径可请求的命令合集</p>
     * @param array $PostPaths <p>POST路径可请求的命令合集</p>
     * @param array $PutPaths <p>PUT路径可请求的命令合集</p>
     * @param boolean $IsDefault <p>是否是默认的参数</p>
     * @param string $UpdateTime <p>变更时间</p>
     * @param string $Operator <p>变更人</p>
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
        if (array_key_exists("GetPaths",$param) and $param["GetPaths"] !== null) {
            $this->GetPaths = $param["GetPaths"];
        }

        if (array_key_exists("PostPaths",$param) and $param["PostPaths"] !== null) {
            $this->PostPaths = $param["PostPaths"];
        }

        if (array_key_exists("PutPaths",$param) and $param["PutPaths"] !== null) {
            $this->PutPaths = $param["PutPaths"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
