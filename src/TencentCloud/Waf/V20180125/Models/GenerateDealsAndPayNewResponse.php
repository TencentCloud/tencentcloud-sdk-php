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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateDealsAndPayNew返回参数结构体
 *
 * @method DealData getData() 获取计费下单响应结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(DealData $Data) 设置计费下单响应结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取1:成功，0:失败
 * @method void setStatus(integer $Status) 设置1:成功，0:失败
 * @method string getReturnMessage() 获取返回message
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnMessage(string $ReturnMessage) 设置返回message
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取购买的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置购买的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateDealsAndPayNewResponse extends AbstractModel
{
    /**
     * @var DealData 计费下单响应结构体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 1:成功，0:失败
     */
    public $Status;

    /**
     * @var string 返回message
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnMessage;

    /**
     * @var string 购买的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DealData $Data 计费下单响应结构体
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 1:成功，0:失败
     * @param string $ReturnMessage 返回message
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 购买的实例ID
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new DealData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
