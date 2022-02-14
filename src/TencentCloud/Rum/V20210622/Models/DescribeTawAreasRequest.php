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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTawAreas请求参数结构体
 *
 * @method array getAreaIds() 获取片区Id
 * @method void setAreaIds(array $AreaIds) 设置片区Id
 * @method array getAreaKeys() 获取片区Key
 * @method void setAreaKeys(array $AreaKeys) 设置片区Key
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method array getAreaStatuses() 获取片区状态(1=有效，2=无效)
 * @method void setAreaStatuses(array $AreaStatuses) 设置片区状态(1=有效，2=无效)
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 */
class DescribeTawAreasRequest extends AbstractModel
{
    /**
     * @var array 片区Id
     */
    public $AreaIds;

    /**
     * @var array 片区Key
     */
    public $AreaKeys;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var array 片区状态(1=有效，2=无效)
     */
    public $AreaStatuses;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @param array $AreaIds 片区Id
     * @param array $AreaKeys 片区Key
     * @param integer $Limit 分页Limit
     * @param array $AreaStatuses 片区状态(1=有效，2=无效)
     * @param integer $Offset 分页Offset
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
        if (array_key_exists("AreaIds",$param) and $param["AreaIds"] !== null) {
            $this->AreaIds = $param["AreaIds"];
        }

        if (array_key_exists("AreaKeys",$param) and $param["AreaKeys"] !== null) {
            $this->AreaKeys = $param["AreaKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AreaStatuses",$param) and $param["AreaStatuses"] !== null) {
            $this->AreaStatuses = $param["AreaStatuses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
