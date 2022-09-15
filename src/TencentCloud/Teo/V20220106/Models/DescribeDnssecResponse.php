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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnssec返回参数结构体
 *
 * @method string getId() 获取站点 ID
 * @method void setId(string $Id) 设置站点 ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method string getStatus() 获取DNSSEC 状态
- enabled 开启
- disabled 关闭
 * @method void setStatus(string $Status) 设置DNSSEC 状态
- enabled 开启
- disabled 关闭
 * @method DnssecInfo getDnssec() 获取DNSSEC 相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnssec(DnssecInfo $Dnssec) 设置DNSSEC 相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedOn() 获取修改时间
 * @method void setModifiedOn(string $ModifiedOn) 设置修改时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDnssecResponse extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $Id;

    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var string DNSSEC 状态
- enabled 开启
- disabled 关闭
     */
    public $Status;

    /**
     * @var DnssecInfo DNSSEC 相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dnssec;

    /**
     * @var string 修改时间
     */
    public $ModifiedOn;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id 站点 ID
     * @param string $Name 站点名称
     * @param string $Status DNSSEC 状态
- enabled 开启
- disabled 关闭
     * @param DnssecInfo $Dnssec DNSSEC 相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedOn 修改时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Dnssec",$param) and $param["Dnssec"] !== null) {
            $this->Dnssec = new DnssecInfo();
            $this->Dnssec->deserialize($param["Dnssec"]);
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
