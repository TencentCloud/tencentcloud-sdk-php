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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 含百分比流量配置的服务
 *
 * @method string getServiceID() 获取服务 ID，作为入参时，必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置服务 ID，作为入参时，必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamName() 获取Upstream 名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamName(string $UpstreamName) 设置Upstream 名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPercent() 获取百分比，10 即 10%，范围0-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(float $Percent) 设置百分比，10 即 10%，范围0-100
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayBalancedService extends AbstractModel
{
    /**
     * @var string 服务 ID，作为入参时，必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var string 服务名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string Upstream 名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamName;

    /**
     * @var float 百分比，10 即 10%，范围0-100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @param string $ServiceID 服务 ID，作为入参时，必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamName Upstream 名称，作为入参时，无意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Percent 百分比，10 即 10%，范围0-100
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UpstreamName",$param) and $param["UpstreamName"] !== null) {
            $this->UpstreamName = $param["UpstreamName"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
