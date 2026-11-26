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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTawAreas请求参数结构体
 *
 * @method array getAreaIds() 获取<p>片区Id</p>
 * @method void setAreaIds(array $AreaIds) 设置<p>片区Id</p>
 * @method array getAreaKeys() 获取<p>片区Key</p>
 * @method void setAreaKeys(array $AreaKeys) 设置<p>片区Key</p>
 * @method integer getLimit() 获取<p>分页Limit，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页Limit，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
 * @method array getAreaStatuses() 获取<p>片区状态(1=有效，2=无效)</p>
 * @method void setAreaStatuses(array $AreaStatuses) 设置<p>片区状态(1=有效，2=无效)</p>
 * @method integer getOffset() 获取<p>分页Offset，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页Offset，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
 */
class DescribeTawAreasRequest extends AbstractModel
{
    /**
     * @var array <p>片区Id</p>
     */
    public $AreaIds;

    /**
     * @var array <p>片区Key</p>
     */
    public $AreaKeys;

    /**
     * @var integer <p>分页Limit，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
     */
    public $Limit;

    /**
     * @var array <p>片区状态(1=有效，2=无效)</p>
     */
    public $AreaStatuses;

    /**
     * @var integer <p>分页Offset，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
     */
    public $Offset;

    /**
     * @param array $AreaIds <p>片区Id</p>
     * @param array $AreaKeys <p>片区Key</p>
     * @param integer $Limit <p>分页Limit，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
     * @param array $AreaStatuses <p>片区状态(1=有效，2=无效)</p>
     * @param integer $Offset <p>分页Offset，默认根据AreaKeys和AreaStatuses参数查询所有。</p>
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
