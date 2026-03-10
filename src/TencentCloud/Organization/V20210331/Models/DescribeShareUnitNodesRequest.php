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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShareUnitNodes请求参数结构体
 *
 * @method string getUnitId() 获取<p>共享单元ID。</p>
 * @method void setUnitId(string $UnitId) 设置<p>共享单元ID。</p>
 * @method integer getOffset() 获取<p>偏移量。取值是limit的整数倍，默认值 : 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。取值是limit的整数倍，默认值 : 0</p>
 * @method integer getLimit() 获取<p>限制数目。取值范围：1~50。</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目。取值范围：1~50。</p>
 * @method string getSearchKey() 获取<p>搜索关键字。支持部门ID搜索。</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>搜索关键字。支持部门ID搜索。</p>
 */
class DescribeShareUnitNodesRequest extends AbstractModel
{
    /**
     * @var string <p>共享单元ID。</p>
     */
    public $UnitId;

    /**
     * @var integer <p>偏移量。取值是limit的整数倍，默认值 : 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数目。取值范围：1~50。</p>
     */
    public $Limit;

    /**
     * @var string <p>搜索关键字。支持部门ID搜索。</p>
     */
    public $SearchKey;

    /**
     * @param string $UnitId <p>共享单元ID。</p>
     * @param integer $Offset <p>偏移量。取值是limit的整数倍，默认值 : 0</p>
     * @param integer $Limit <p>限制数目。取值范围：1~50。</p>
     * @param string $SearchKey <p>搜索关键字。支持部门ID搜索。</p>
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
