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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregator返回参数结构体
 *
 * @method string getName() 获取<p>账号组名称</p>
 * @method void setName(string $Name) 设置<p>账号组名称</p>
 * @method string getDescription() 获取<p>账号组描述</p>
 * @method void setDescription(string $Description) 设置<p>账号组描述</p>
 * @method string getType() 获取<p>账号组类型</p>
 * @method void setType(string $Type) 设置<p>账号组类型</p>
 * @method array getAggregatorAccounts() 获取<p>成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggregatorAccounts(array $AggregatorAccounts) 设置<p>成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAggregatorStatus() 获取<p>创建状态</p>
 * @method void setAggregatorStatus(integer $AggregatorStatus) 设置<p>创建状态</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAggregatorResponse extends AbstractModel
{
    /**
     * @var string <p>账号组名称</p>
     */
    public $Name;

    /**
     * @var string <p>账号组描述</p>
     */
    public $Description;

    /**
     * @var string <p>账号组类型</p>
     */
    public $Type;

    /**
     * @var array <p>成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggregatorAccounts;

    /**
     * @var integer <p>创建状态</p>
     */
    public $AggregatorStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>账号组名称</p>
     * @param string $Description <p>账号组描述</p>
     * @param string $Type <p>账号组类型</p>
     * @param array $AggregatorAccounts <p>成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AggregatorStatus <p>创建状态</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AggregatorAccounts",$param) and $param["AggregatorAccounts"] !== null) {
            $this->AggregatorAccounts = [];
            foreach ($param["AggregatorAccounts"] as $key => $value){
                $obj = new AggregatorAccount();
                $obj->deserialize($value);
                array_push($this->AggregatorAccounts, $obj);
            }
        }

        if (array_key_exists("AggregatorStatus",$param) and $param["AggregatorStatus"] !== null) {
            $this->AggregatorStatus = $param["AggregatorStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
