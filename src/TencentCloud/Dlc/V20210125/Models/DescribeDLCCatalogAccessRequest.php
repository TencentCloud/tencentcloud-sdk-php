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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDLCCatalogAccess请求参数结构体
 *
 * @method integer getLimit() 获取显示条数
 * @method void setLimit(integer $Limit) 设置显示条数
 * @method integer getOffset() 获取记录数量
 * @method void setOffset(integer $Offset) 设置记录数量
 * @method Filter getFilter() 获取过滤条件
 * @method void setFilter(Filter $Filter) 设置过滤条件
 */
class DescribeDLCCatalogAccessRequest extends AbstractModel
{
    /**
     * @var integer 显示条数
     */
    public $Limit;

    /**
     * @var integer 记录数量
     */
    public $Offset;

    /**
     * @var Filter 过滤条件
     */
    public $Filter;

    /**
     * @param integer $Limit 显示条数
     * @param integer $Offset 记录数量
     * @param Filter $Filter 过滤条件
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
