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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralResourceQuotas请求参数结构体
 *
 * @method array getResourceNames() 获取资源名列表，取值为：USER_KEY_PAIR、GENERAL_BUNDLE_INSTANCE、STORAGE_BUNDLE_INSTANCE、ENTERPRISE_BUNDLE_INSTANCE、EXCLUSIVE_BUNDLE_INSTANCE、BEFAST_BUNDLE_INSTANCE、SNAPSHOT、BLUEPRINT、FREE_BLUEPRINT、DATA_DISK、ATTACHED_DATA_DISK、FIREWALL_RULE。
 * @method void setResourceNames(array $ResourceNames) 设置资源名列表，取值为：USER_KEY_PAIR、GENERAL_BUNDLE_INSTANCE、STORAGE_BUNDLE_INSTANCE、ENTERPRISE_BUNDLE_INSTANCE、EXCLUSIVE_BUNDLE_INSTANCE、BEFAST_BUNDLE_INSTANCE、SNAPSHOT、BLUEPRINT、FREE_BLUEPRINT、DATA_DISK、ATTACHED_DATA_DISK、FIREWALL_RULE。
 */
class DescribeGeneralResourceQuotasRequest extends AbstractModel
{
    /**
     * @var array 资源名列表，取值为：USER_KEY_PAIR、GENERAL_BUNDLE_INSTANCE、STORAGE_BUNDLE_INSTANCE、ENTERPRISE_BUNDLE_INSTANCE、EXCLUSIVE_BUNDLE_INSTANCE、BEFAST_BUNDLE_INSTANCE、SNAPSHOT、BLUEPRINT、FREE_BLUEPRINT、DATA_DISK、ATTACHED_DATA_DISK、FIREWALL_RULE。
     */
    public $ResourceNames;

    /**
     * @param array $ResourceNames 资源名列表，取值为：USER_KEY_PAIR、GENERAL_BUNDLE_INSTANCE、STORAGE_BUNDLE_INSTANCE、ENTERPRISE_BUNDLE_INSTANCE、EXCLUSIVE_BUNDLE_INSTANCE、BEFAST_BUNDLE_INSTANCE、SNAPSHOT、BLUEPRINT、FREE_BLUEPRINT、DATA_DISK、ATTACHED_DATA_DISK、FIREWALL_RULE。
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
        if (array_key_exists("ResourceNames",$param) and $param["ResourceNames"] !== null) {
            $this->ResourceNames = $param["ResourceNames"];
        }
    }
}
