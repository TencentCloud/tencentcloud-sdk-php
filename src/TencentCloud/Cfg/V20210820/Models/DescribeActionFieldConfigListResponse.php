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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActionFieldConfigList返回参数结构体
 *
 * @method array getCommon() 获取通用栏位配置列表
 * @method void setCommon(array $Common) 设置通用栏位配置列表
 * @method array getResults() 获取动作栏位配置列表
 * @method void setResults(array $Results) 设置动作栏位配置列表
 * @method array getResourceOffline() 获取资源下线信息
 * @method void setResourceOffline(array $ResourceOffline) 设置资源下线信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeActionFieldConfigListResponse extends AbstractModel
{
    /**
     * @var array 通用栏位配置列表
     */
    public $Common;

    /**
     * @var array 动作栏位配置列表
     */
    public $Results;

    /**
     * @var array 资源下线信息
     */
    public $ResourceOffline;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Common 通用栏位配置列表
     * @param array $Results 动作栏位配置列表
     * @param array $ResourceOffline 资源下线信息
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
        if (array_key_exists("Common",$param) and $param["Common"] !== null) {
            $this->Common = [];
            foreach ($param["Common"] as $key => $value){
                $obj = new ActionFieldConfigResult();
                $obj->deserialize($value);
                array_push($this->Common, $obj);
            }
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ActionFieldConfigResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("ResourceOffline",$param) and $param["ResourceOffline"] !== null) {
            $this->ResourceOffline = [];
            foreach ($param["ResourceOffline"] as $key => $value){
                $obj = new ResourceOffline();
                $obj->deserialize($value);
                array_push($this->ResourceOffline, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
