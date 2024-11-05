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
 * GetThread返回参数结构体
 *
 * @method string getID() 获取会话 ID
 * @method void setID(string $ID) 设置会话 ID
 * @method string getObject() 获取对象类型
 * @method void setObject(string $Object) 设置对象类型
 * @method integer getCreatedAt() 获取创建时间，Unix 时间戳，单位为秒。
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间，Unix 时间戳，单位为秒。
 * @method ThreadToolResources getToolResources() 获取提供给工具的资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolResources(ThreadToolResources $ToolResources) 设置提供给工具的资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class GetThreadResponse extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $ID;

    /**
     * @var string 对象类型
     */
    public $Object;

    /**
     * @var integer 创建时间，Unix 时间戳，单位为秒。
     */
    public $CreatedAt;

    /**
     * @var ThreadToolResources 提供给工具的资源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolResources;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param string $ID 会话 ID
     * @param string $Object 对象类型
     * @param integer $CreatedAt 创建时间，Unix 时间戳，单位为秒。
     * @param ThreadToolResources $ToolResources 提供给工具的资源列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ToolResources",$param) and $param["ToolResources"] !== null) {
            $this->ToolResources = new ThreadToolResources();
            $this->ToolResources->deserialize($param["ToolResources"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
