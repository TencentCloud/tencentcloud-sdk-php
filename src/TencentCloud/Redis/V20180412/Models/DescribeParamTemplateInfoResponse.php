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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplateInfo返回参数结构体
 *
 * @method integer getTotalCount() 获取参数模板的参数数量。
 * @method void setTotalCount(integer $TotalCount) 设置参数模板的参数数量。
 * @method string getTemplateId() 获取参数模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置参数模板 ID。
 * @method string getName() 获取参数模板名称。
 * @method void setName(string $Name) 设置参数模板名称。
 * @method integer getProductType() 获取产品类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method void setProductType(integer $ProductType) 设置产品类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method string getDescription() 获取参数模板描述。
 * @method void setDescription(string $Description) 设置参数模板描述。
 * @method array getItems() 获取参数详情。包含：参数的名称，当前运行值，默认值，最大值、最小值、枚举值等信息。
 * @method void setItems(array $Items) 设置参数详情。包含：参数的名称，当前运行值，默认值，最大值、最小值、枚举值等信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeParamTemplateInfoResponse extends AbstractModel
{
    /**
     * @var integer 参数模板的参数数量。
     */
    public $TotalCount;

    /**
     * @var string 参数模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称。
     */
    public $Name;

    /**
     * @var integer 产品类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     */
    public $ProductType;

    /**
     * @var string 参数模板描述。
     */
    public $Description;

    /**
     * @var array 参数详情。包含：参数的名称，当前运行值，默认值，最大值、最小值、枚举值等信息。
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 参数模板的参数数量。
     * @param string $TemplateId 参数模板 ID。
     * @param string $Name 参数模板名称。
     * @param integer $ProductType 产品类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     * @param string $Description 参数模板描述。
     * @param array $Items 参数详情。包含：参数的名称，当前运行值，默认值，最大值、最小值、枚举值等信息。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ParameterDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
