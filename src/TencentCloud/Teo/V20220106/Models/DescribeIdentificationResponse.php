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
 * DescribeIdentification返回参数结构体
 *
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method string getStatus() 获取验证状态
- pending 验证中
- finished 验证完成
 * @method void setStatus(string $Status) 设置验证状态
- pending 验证中
- finished 验证完成
 * @method string getSubdomain() 获取子域
 * @method void setSubdomain(string $Subdomain) 设置子域
 * @method string getRecordType() 获取记录类型
 * @method void setRecordType(string $RecordType) 设置记录类型
 * @method string getRecordValue() 获取记录值
 * @method void setRecordValue(string $RecordValue) 设置记录值
 * @method array getOriginalNameServers() 获取域名当前的 NS 记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置域名当前的 NS 记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIdentificationResponse extends AbstractModel
{
    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var string 验证状态
- pending 验证中
- finished 验证完成
     */
    public $Status;

    /**
     * @var string 子域
     */
    public $Subdomain;

    /**
     * @var string 记录类型
     */
    public $RecordType;

    /**
     * @var string 记录值
     */
    public $RecordValue;

    /**
     * @var array 域名当前的 NS 记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalNameServers;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 站点名称
     * @param string $Status 验证状态
- pending 验证中
- finished 验证完成
     * @param string $Subdomain 子域
     * @param string $RecordType 记录类型
     * @param string $RecordValue 记录值
     * @param array $OriginalNameServers 域名当前的 NS 记录
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
