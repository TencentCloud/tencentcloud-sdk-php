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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleForAllocatedEnv返回参数结构体
 *
 * @method string getSecretId() 获取<p>SecretId</p>
 * @method void setSecretId(string $SecretId) 设置<p>SecretId</p>
 * @method string getSecretKey() 获取<p>SecretKey</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>SecretKey</p>
 * @method string getToken() 获取<p>Token值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置<p>Token值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiredTime() 获取<p>过期时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>过期时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCache() 获取<p>是否从缓存中加载。标明该值是否实时从sts服务获取，还是从缓存中获取。调用方可不关心</p>
 * @method void setIsCache(boolean $IsCache) 设置<p>是否从缓存中加载。标明该值是否实时从sts服务获取，还是从缓存中获取。调用方可不关心</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AssumeRoleForAllocatedEnvResponse extends AbstractModel
{
    /**
     * @var string <p>SecretId</p>
     */
    public $SecretId;

    /**
     * @var string <p>SecretKey</p>
     */
    public $SecretKey;

    /**
     * @var string <p>Token值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var integer <p>过期时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var boolean <p>是否从缓存中加载。标明该值是否实时从sts服务获取，还是从缓存中获取。调用方可不关心</p>
     */
    public $IsCache;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretId <p>SecretId</p>
     * @param string $SecretKey <p>SecretKey</p>
     * @param string $Token <p>Token值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpiredTime <p>过期时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCache <p>是否从缓存中加载。标明该值是否实时从sts服务获取，还是从缓存中获取。调用方可不关心</p>
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsCache",$param) and $param["IsCache"] !== null) {
            $this->IsCache = $param["IsCache"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
