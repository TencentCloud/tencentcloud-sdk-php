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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignClientsToSales返回参数结构体
 *
 * @method array getSucceedUins() 获取处理成功的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSucceedUins(array $SucceedUins) 设置处理成功的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailedUins() 获取处理失败的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedUins(array $FailedUins) 设置处理失败的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AssignClientsToSalesResponse extends AbstractModel
{
    /**
     * @var array 处理成功的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SucceedUins;

    /**
     * @var array 处理失败的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedUins;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SucceedUins 处理成功的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailedUins 处理失败的代客uin列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SucceedUins",$param) and $param["SucceedUins"] !== null) {
            $this->SucceedUins = $param["SucceedUins"];
        }

        if (array_key_exists("FailedUins",$param) and $param["FailedUins"] !== null) {
            $this->FailedUins = $param["FailedUins"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
