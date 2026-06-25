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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRouterQuota请求参数结构体
 *
 * @method array getQuotaTypes() 获取<p>配额类型</p>
 * @method void setQuotaTypes(array $QuotaTypes) 设置<p>配额类型</p>
 * @method array getResourceIds() 获取<p>要查询的资源ID</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>要查询的资源ID</p>
 * @method array getDisplayFields() 获取<p>需要展示的字段</p><p>枚举值：</p><ul><li>Used： 已使用的配额数量</li><li>Available： 剩余的配额数量</li></ul>
 * @method void setDisplayFields(array $DisplayFields) 设置<p>需要展示的字段</p><p>枚举值：</p><ul><li>Used： 已使用的配额数量</li><li>Available： 剩余的配额数量</li></ul>
 */
class DescribeModelRouterQuotaRequest extends AbstractModel
{
    /**
     * @var array <p>配额类型</p>
     */
    public $QuotaTypes;

    /**
     * @var array <p>要查询的资源ID</p>
     */
    public $ResourceIds;

    /**
     * @var array <p>需要展示的字段</p><p>枚举值：</p><ul><li>Used： 已使用的配额数量</li><li>Available： 剩余的配额数量</li></ul>
     */
    public $DisplayFields;

    /**
     * @param array $QuotaTypes <p>配额类型</p>
     * @param array $ResourceIds <p>要查询的资源ID</p>
     * @param array $DisplayFields <p>需要展示的字段</p><p>枚举值：</p><ul><li>Used： 已使用的配额数量</li><li>Available： 剩余的配额数量</li></ul>
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
        if (array_key_exists("QuotaTypes",$param) and $param["QuotaTypes"] !== null) {
            $this->QuotaTypes = $param["QuotaTypes"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("DisplayFields",$param) and $param["DisplayFields"] !== null) {
            $this->DisplayFields = $param["DisplayFields"];
        }
    }
}
