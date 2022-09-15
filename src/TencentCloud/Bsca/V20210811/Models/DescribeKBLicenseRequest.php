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
 * DescribeKBLicense请求参数结构体
 *
 * @method string getLicenseExpression() 获取License表达式
 * @method void setLicenseExpression(string $LicenseExpression) 设置License表达式
 */
class DescribeKBLicenseRequest extends AbstractModel
{
    /**
     * @var string License表达式
     */
    public $LicenseExpression;

    /**
     * @param string $LicenseExpression License表达式
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
        if (array_key_exists("LicenseExpression",$param) and $param["LicenseExpression"] !== null) {
            $this->LicenseExpression = $param["LicenseExpression"];
        }
    }
}
