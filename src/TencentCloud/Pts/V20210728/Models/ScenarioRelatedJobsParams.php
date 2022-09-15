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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询与特定scenario关联的job的参数
 *
 * @method integer getOffset() 获取job偏移量
 * @method void setOffset(integer $Offset) 设置job偏移量
 * @method integer getLimit() 获取限制最多查询的job数
 * @method void setLimit(integer $Limit) 设置限制最多查询的job数
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method boolean getAscend() 获取是否升序
 * @method void setAscend(boolean $Ascend) 设置是否升序
 */
class ScenarioRelatedJobsParams extends AbstractModel
{
    /**
     * @var integer job偏移量
     */
    public $Offset;

    /**
     * @var integer 限制最多查询的job数
     */
    public $Limit;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var boolean 是否升序
     */
    public $Ascend;

    /**
     * @param integer $Offset job偏移量
     * @param integer $Limit 限制最多查询的job数
     * @param string $OrderBy 排序字段
     * @param boolean $Ascend 是否升序
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }
    }
}
