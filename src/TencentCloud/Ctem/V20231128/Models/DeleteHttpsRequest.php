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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteHttps请求参数结构体
 *
 * @method array getIds() 获取ID列表
 * @method void setIds(array $Ids) 设置ID列表
 * @method array getCustomerIdList() 获取企业ID列表，可多选
 * @method void setCustomerIdList(array $CustomerIdList) 设置企业ID列表，可多选
 * @method boolean getIsAggregation() 获取是否聚合数据
 * @method void setIsAggregation(boolean $IsAggregation) 设置是否聚合数据
 */
class DeleteHttpsRequest extends AbstractModel
{
    /**
     * @var array ID列表
     */
    public $Ids;

    /**
     * @var array 企业ID列表，可多选
     */
    public $CustomerIdList;

    /**
     * @var boolean 是否聚合数据
     */
    public $IsAggregation;

    /**
     * @param array $Ids ID列表
     * @param array $CustomerIdList 企业ID列表，可多选
     * @param boolean $IsAggregation 是否聚合数据
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("CustomerIdList",$param) and $param["CustomerIdList"] !== null) {
            $this->CustomerIdList = $param["CustomerIdList"];
        }

        if (array_key_exists("IsAggregation",$param) and $param["IsAggregation"] !== null) {
            $this->IsAggregation = $param["IsAggregation"];
        }
    }
}
