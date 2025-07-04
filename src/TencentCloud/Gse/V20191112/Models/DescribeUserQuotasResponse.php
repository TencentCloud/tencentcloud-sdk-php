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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserQuotas返回参数结构体
 *
 * @method array getQuotaResource() 获取配额信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaResource(array $QuotaResource) 设置配额信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取配额信息列表总数，最小值0
 * @method void setTotal(integer $Total) 设置配额信息列表总数，最小值0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserQuotasResponse extends AbstractModel
{
    /**
     * @var array 配额信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaResource;

    /**
     * @var integer 配额信息列表总数，最小值0
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $QuotaResource 配额信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 配额信息列表总数，最小值0
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
        if (array_key_exists("QuotaResource",$param) and $param["QuotaResource"] !== null) {
            $this->QuotaResource = [];
            foreach ($param["QuotaResource"] as $key => $value){
                $obj = new QuotaResource();
                $obj->deserialize($value);
                array_push($this->QuotaResource, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
