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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTokenCount返回参数结构体
 *
 * @method integer getTokenCount() 获取token计数
 * @method void setTokenCount(integer $TokenCount) 设置token计数
 * @method integer getCharacterCount() 获取字符计数
 * @method void setCharacterCount(integer $CharacterCount) 设置字符计数
 * @method array getTokens() 获取切分后的列表
 * @method void setTokens(array $Tokens) 设置切分后的列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetTokenCountResponse extends AbstractModel
{
    /**
     * @var integer token计数
     */
    public $TokenCount;

    /**
     * @var integer 字符计数
     */
    public $CharacterCount;

    /**
     * @var array 切分后的列表
     */
    public $Tokens;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TokenCount token计数
     * @param integer $CharacterCount 字符计数
     * @param array $Tokens 切分后的列表
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
        if (array_key_exists("TokenCount",$param) and $param["TokenCount"] !== null) {
            $this->TokenCount = $param["TokenCount"];
        }

        if (array_key_exists("CharacterCount",$param) and $param["CharacterCount"] !== null) {
            $this->CharacterCount = $param["CharacterCount"];
        }

        if (array_key_exists("Tokens",$param) and $param["Tokens"] !== null) {
            $this->Tokens = $param["Tokens"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
