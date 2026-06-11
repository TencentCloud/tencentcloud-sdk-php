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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRemoteDiskConfigQuota请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件。支持的过滤条件如下：</p><ul><li>instance-family：按照机型族过滤。</li><li>instance-type：按照机型规格过滤。</li><li>zone：按照可用区过滤。</li><li>instance-charge-type：按照付费方式过滤。取值范围：PREPAID、POSTPAID_BY_HOUR、SPOTPAID、UNDERWRITE。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。支持的过滤条件如下：</p><ul><li>instance-family：按照机型族过滤。</li><li>instance-type：按照机型规格过滤。</li><li>zone：按照可用区过滤。</li><li>instance-charge-type：按照付费方式过滤。取值范围：PREPAID、POSTPAID_BY_HOUR、SPOTPAID、UNDERWRITE。</li></ul>
 */
class DescribeRemoteDiskConfigQuotaRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件。支持的过滤条件如下：</p><ul><li>instance-family：按照机型族过滤。</li><li>instance-type：按照机型规格过滤。</li><li>zone：按照可用区过滤。</li><li>instance-charge-type：按照付费方式过滤。取值范围：PREPAID、POSTPAID_BY_HOUR、SPOTPAID、UNDERWRITE。</li></ul>
     */
    public $Filters;

    /**
     * @param array $Filters <p>过滤条件。支持的过滤条件如下：</p><ul><li>instance-family：按照机型族过滤。</li><li>instance-type：按照机型规格过滤。</li><li>zone：按照可用区过滤。</li><li>instance-charge-type：按照付费方式过滤。取值范围：PREPAID、POSTPAID_BY_HOUR、SPOTPAID、UNDERWRITE。</li></ul>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
