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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlossary返回参数结构体
 *
 * @method string getGlossaryId() 获取术语库 ID。
 * @method void setGlossaryId(string $GlossaryId) 设置术语库 ID。
 * @method string getName() 获取术语库名称。
 * @method void setName(string $Name) 设置术语库名称。
 * @method integer getCreatedAt() 获取创建时间。Unix 时间戳（毫秒）。
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间。Unix 时间戳（毫秒）。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateGlossaryResponse extends AbstractModel
{
    /**
     * @var string 术语库 ID。
     */
    public $GlossaryId;

    /**
     * @var string 术语库名称。
     */
    public $Name;

    /**
     * @var integer 创建时间。Unix 时间戳（毫秒）。
     */
    public $CreatedAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GlossaryId 术语库 ID。
     * @param string $Name 术语库名称。
     * @param integer $CreatedAt 创建时间。Unix 时间戳（毫秒）。
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
