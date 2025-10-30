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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopAttackDomain返回参数结构体
 *
 * @method array getCC() 获取CC攻击域名列表
 * @method void setCC(array $CC) 设置CC攻击域名列表
 * @method array getWeb() 获取Web攻击域名列表
 * @method void setWeb(array $Web) 设置Web攻击域名列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopAttackDomainResponse extends AbstractModel
{
    /**
     * @var array CC攻击域名列表
     */
    public $CC;

    /**
     * @var array Web攻击域名列表
     */
    public $Web;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CC CC攻击域名列表
     * @param array $Web Web攻击域名列表
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
        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = [];
            foreach ($param["CC"] as $key => $value){
                $obj = new KVInt();
                $obj->deserialize($value);
                array_push($this->CC, $obj);
            }
        }

        if (array_key_exists("Web",$param) and $param["Web"] !== null) {
            $this->Web = [];
            foreach ($param["Web"] as $key => $value){
                $obj = new KVInt();
                $obj->deserialize($value);
                array_push($this->Web, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
