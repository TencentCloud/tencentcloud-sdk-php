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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListenerCertificates返回参数结构体
 *
 * @method array getCertificates() 获取监听器绑定的证书信息列表。
 * @method void setCertificates(array $Certificates) 设置监听器绑定的证书信息列表。
 * @method integer getMaxResults() 获取本次读取的最大数据记录数量。	
 * @method void setMaxResults(integer $MaxResults) 设置本次读取的最大数据记录数量。	
 * @method string getNextToken() 获取下一次查询的令牌。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextToken(string $NextToken) 设置下一次查询的令牌。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取监听器绑定的证书总量。
 * @method void setTotalCount(integer $TotalCount) 设置监听器绑定的证书总量。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeListenerCertificatesResponse extends AbstractModel
{
    /**
     * @var array 监听器绑定的证书信息列表。
     */
    public $Certificates;

    /**
     * @var integer 本次读取的最大数据记录数量。	
     */
    public $MaxResults;

    /**
     * @var string 下一次查询的令牌。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextToken;

    /**
     * @var integer 监听器绑定的证书总量。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Certificates 监听器绑定的证书信息列表。
     * @param integer $MaxResults 本次读取的最大数据记录数量。	
     * @param string $NextToken 下一次查询的令牌。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 监听器绑定的证书总量。
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
        if (array_key_exists("Certificates",$param) and $param["Certificates"] !== null) {
            $this->Certificates = [];
            foreach ($param["Certificates"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->Certificates, $obj);
            }
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
