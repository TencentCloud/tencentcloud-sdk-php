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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * topic链接信息
 *
 * @method string getIpAddr() 获取ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddr(string $IpAddr) 设置ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取连结时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置连结时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUnSupportVersion() 获取是否支持的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnSupportVersion(boolean $IsUnSupportVersion) 设置是否支持的版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeConnectInfoResultDTO extends AbstractModel
{
    /**
     * @var string ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddr;

    /**
     * @var string 连结时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var boolean 是否支持的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnSupportVersion;

    /**
     * @param string $IpAddr ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 连结时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUnSupportVersion 是否支持的版本
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
        if (array_key_exists("IpAddr",$param) and $param["IpAddr"] !== null) {
            $this->IpAddr = $param["IpAddr"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("IsUnSupportVersion",$param) and $param["IsUnSupportVersion"] !== null) {
            $this->IsUnSupportVersion = $param["IsUnSupportVersion"];
        }
    }
}
