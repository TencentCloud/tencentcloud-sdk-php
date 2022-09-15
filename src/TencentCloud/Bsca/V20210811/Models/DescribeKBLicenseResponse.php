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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKBLicense返回参数结构体
 *
 * @method array getLicenseList() 获取许可证列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseList(array $LicenseList) 设置许可证列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNormalizedLicenseExpression() 获取用于匹配的License表达式
 * @method void setNormalizedLicenseExpression(string $NormalizedLicenseExpression) 设置用于匹配的License表达式
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKBLicenseResponse extends AbstractModel
{
    /**
     * @var array 许可证列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseList;

    /**
     * @var string 用于匹配的License表达式
     */
    public $NormalizedLicenseExpression;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LicenseList 许可证列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedLicenseExpression 用于匹配的License表达式
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
        if (array_key_exists("LicenseList",$param) and $param["LicenseList"] !== null) {
            $this->LicenseList = [];
            foreach ($param["LicenseList"] as $key => $value){
                $obj = new LicenseUnion();
                $obj->deserialize($value);
                array_push($this->LicenseList, $obj);
            }
        }

        if (array_key_exists("NormalizedLicenseExpression",$param) and $param["NormalizedLicenseExpression"] !== null) {
            $this->NormalizedLicenseExpression = $param["NormalizedLicenseExpression"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
