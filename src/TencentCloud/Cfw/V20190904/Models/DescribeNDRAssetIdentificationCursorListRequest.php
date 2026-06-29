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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNDRAssetIdentificationCursorList请求参数结构体
 *
 * @method integer getLimit() 获取<p>每页条数</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数</p>
 * @method string getCursor() 获取<p>分页游标</p><p>前一页返回的NextCursor</p>
 * @method void setCursor(string $Cursor) 设置<p>分页游标</p><p>前一页返回的NextCursor</p>
 * @method array getFilters() 获取<p>查询过滤条件，多个条件之间为AND的关系</p>
 * @method void setFilters(array $Filters) 设置<p>查询过滤条件，多个条件之间为AND的关系</p>
 */
class DescribeNDRAssetIdentificationCursorListRequest extends AbstractModel
{
    /**
     * @var integer <p>每页条数</p>
     */
    public $Limit;

    /**
     * @var string <p>分页游标</p><p>前一页返回的NextCursor</p>
     */
    public $Cursor;

    /**
     * @var array <p>查询过滤条件，多个条件之间为AND的关系</p>
     */
    public $Filters;

    /**
     * @param integer $Limit <p>每页条数</p>
     * @param string $Cursor <p>分页游标</p><p>前一页返回的NextCursor</p>
     * @param array $Filters <p>查询过滤条件，多个条件之间为AND的关系</p>
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

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new OperatorFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
