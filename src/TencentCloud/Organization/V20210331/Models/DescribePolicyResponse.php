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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicy返回参数结构体
 *
 * @method integer getPolicyId() 获取策略Id。
 * @method void setPolicyId(integer $PolicyId) 设置策略Id。
 * @method string getPolicyName() 获取策略名称。
 * @method void setPolicyName(string $PolicyName) 设置策略名称。
 * @method integer getType() 获取策略类型。1-自定义 2-预设策略
 * @method void setType(integer $Type) 设置策略类型。1-自定义 2-预设策略
 * @method string getDescription() 获取策略描述。
 * @method void setDescription(string $Description) 设置策略描述。
 * @method string getPolicyDocument() 获取策略文档。
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档。
 * @method string getUpdateTime() 获取策略更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置策略更新时间。
 * @method string getAddTime() 获取策略创建时间。
 * @method void setAddTime(string $AddTime) 设置策略创建时间。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePolicyResponse extends AbstractModel
{
    /**
     * @var integer 策略Id。
     */
    public $PolicyId;

    /**
     * @var string 策略名称。
     */
    public $PolicyName;

    /**
     * @var integer 策略类型。1-自定义 2-预设策略
     */
    public $Type;

    /**
     * @var string 策略描述。
     */
    public $Description;

    /**
     * @var string 策略文档。
     */
    public $PolicyDocument;

    /**
     * @var string 策略更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 策略创建时间。
     */
    public $AddTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PolicyId 策略Id。
     * @param string $PolicyName 策略名称。
     * @param integer $Type 策略类型。1-自定义 2-预设策略
     * @param string $Description 策略描述。
     * @param string $PolicyDocument 策略文档。
     * @param string $UpdateTime 策略更新时间。
     * @param string $AddTime 策略创建时间。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
