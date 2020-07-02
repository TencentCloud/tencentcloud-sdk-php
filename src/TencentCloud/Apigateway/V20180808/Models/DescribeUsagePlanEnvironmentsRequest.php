<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsagePlanEnvironments请求参数结构体
 *
 * @method string getUsagePlanId() 获取待查询的使用计划唯一 ID。
 * @method void setUsagePlanId(string $UsagePlanId) 设置待查询的使用计划唯一 ID。
 * @method string getBindType() 获取定类型，取值为 API、SERVICE，默认值为 SERVICE。
 * @method void setBindType(string $BindType) 设置定类型，取值为 API、SERVICE，默认值为 SERVICE。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 */
class DescribeUsagePlanEnvironmentsRequest extends AbstractModel
{
    /**
     * @var string 待查询的使用计划唯一 ID。
     */
    public $UsagePlanId;

    /**
     * @var string 定类型，取值为 API、SERVICE，默认值为 SERVICE。
     */
    public $BindType;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @param string $UsagePlanId 待查询的使用计划唯一 ID。
     * @param string $BindType 定类型，取值为 API、SERVICE，默认值为 SERVICE。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param integer $Offset 偏移量，默认为 0。
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
        if (array_key_exists('UsagePlanId',$param) and $param['UsagePlanId'] !== null) {
            $this->UsagePlanId = $param['UsagePlanId'];
        }

        if (array_key_exists('BindType',$param) and $param['BindType'] !== null) {
            $this->BindType = $param['BindType'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }
    }
}
