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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApp返回参数结构体
 *
 * @method string getAppBizId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppBizId(string $AppBizId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCustomList() 获取判断账户应用列表权限是否是自定义的，用户交互提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCustomList(boolean $IsCustomList) 设置判断账户应用列表权限是否是自定义的，用户交互提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAppResponse extends AbstractModel
{
    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppBizId;

    /**
     * @var boolean 判断账户应用列表权限是否是自定义的，用户交互提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCustomList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppBizId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCustomList 判断账户应用列表权限是否是自定义的，用户交互提示
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("IsCustomList",$param) and $param["IsCustomList"] !== null) {
            $this->IsCustomList = $param["IsCustomList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
