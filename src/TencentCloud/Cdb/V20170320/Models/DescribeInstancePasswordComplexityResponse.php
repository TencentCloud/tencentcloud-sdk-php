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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancePasswordComplexity返回参数结构体
 *
 * @method integer getTotalCount() 获取密码复杂度相关参数总数
 * @method void setTotalCount(integer $TotalCount) 设置密码复杂度相关参数总数
 * @method array getItems() 获取密码复杂度参数详情，policy取值范围["","LOW","MEDIUM"],空或者LOW表示：密码复杂度关，MEDIUM表示：密码复杂度开；当policy参数值是MEDIUM时，以下参数才有意义，length:取值范围[8-64],表示：最少字符数；mixed_case_count：取值范围[1-16]，表示大写字母和小写字母的最少个数。number_count：取值范围[1-16]，表示数字字符的最少个数。special_char_count：取值范围[1-16]，表示特殊字符的最少个数。
 * @method void setItems(array $Items) 设置密码复杂度参数详情，policy取值范围["","LOW","MEDIUM"],空或者LOW表示：密码复杂度关，MEDIUM表示：密码复杂度开；当policy参数值是MEDIUM时，以下参数才有意义，length:取值范围[8-64],表示：最少字符数；mixed_case_count：取值范围[1-16]，表示大写字母和小写字母的最少个数。number_count：取值范围[1-16]，表示数字字符的最少个数。special_char_count：取值范围[1-16]，表示特殊字符的最少个数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstancePasswordComplexityResponse extends AbstractModel
{
    /**
     * @var integer 密码复杂度相关参数总数
     */
    public $TotalCount;

    /**
     * @var array 密码复杂度参数详情，policy取值范围["","LOW","MEDIUM"],空或者LOW表示：密码复杂度关，MEDIUM表示：密码复杂度开；当policy参数值是MEDIUM时，以下参数才有意义，length:取值范围[8-64],表示：最少字符数；mixed_case_count：取值范围[1-16]，表示大写字母和小写字母的最少个数。number_count：取值范围[1-16]，表示数字字符的最少个数。special_char_count：取值范围[1-16]，表示特殊字符的最少个数。
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 密码复杂度相关参数总数
     * @param array $Items 密码复杂度参数详情，policy取值范围["","LOW","MEDIUM"],空或者LOW表示：密码复杂度关，MEDIUM表示：密码复杂度开；当policy参数值是MEDIUM时，以下参数才有意义，length:取值范围[8-64],表示：最少字符数；mixed_case_count：取值范围[1-16]，表示大写字母和小写字母的最少个数。number_count：取值范围[1-16]，表示数字字符的最少个数。special_char_count：取值范围[1-16]，表示特殊字符的最少个数。
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
