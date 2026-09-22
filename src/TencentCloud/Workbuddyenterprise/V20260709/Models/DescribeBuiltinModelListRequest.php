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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBuiltinModelList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，从 0 开始
 * @method void setOffset(integer $Offset) 设置偏移量，从 0 开始
 * @method integer getLimit() 获取返回数量，缺省为 20，最大 100
 * @method void setLimit(integer $Limit) 设置返回数量，缺省为 20，最大 100
 * @method array getFilters() 获取过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
 * @method void setFilters(array $Filters) 设置过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
 * @method string getAccountId() 获取OneID 企业账号 ID，可选。传入时拉取该账号对应企业的模型（要求当前主账号 UIN 已授权该账号），不传时使用服务配置的企业 ID
 * @method void setAccountId(string $AccountId) 设置OneID 企业账号 ID，可选。传入时拉取该账号对应企业的模型（要求当前主账号 UIN 已授权该账号），不传时使用服务配置的企业 ID
 */
class DescribeBuiltinModelListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，从 0 开始
     */
    public $Offset;

    /**
     * @var integer 返回数量，缺省为 20，最大 100
     */
    public $Limit;

    /**
     * @var array 过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
     */
    public $Filters;

    /**
     * @var string OneID 企业账号 ID，可选。传入时拉取该账号对应企业的模型（要求当前主账号 UIN 已授权该账号），不传时使用服务配置的企业 ID
     */
    public $AccountId;

    /**
     * @param integer $Offset 偏移量，从 0 开始
     * @param integer $Limit 返回数量，缺省为 20，最大 100
     * @param array $Filters 过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系
     * @param string $AccountId OneID 企业账号 ID，可选。传入时拉取该账号对应企业的模型（要求当前主账号 UIN 已授权该账号），不传时使用服务配置的企业 ID
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
