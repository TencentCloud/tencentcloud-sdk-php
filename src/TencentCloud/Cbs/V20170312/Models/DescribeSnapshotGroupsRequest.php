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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotGroups请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。<br><li>snapshot-group-id - Array of String - 是否必填：否 -（过滤条件）按快照组ID过滤 <br><li>snapshot-group-state - Array of String - 是否必填：否 -（过滤条件）按快照组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) <br><li>snapshot-group-name - Array of String - 是否必填：否 -（过滤条件）按快照组名称过滤 <br><li>snapshot-id - Array of String - 是否必填：否 -（过滤条件）按快照组内的快照ID过滤
 * @method void setFilters(array $Filters) 设置过滤条件。<br><li>snapshot-group-id - Array of String - 是否必填：否 -（过滤条件）按快照组ID过滤 <br><li>snapshot-group-state - Array of String - 是否必填：否 -（过滤条件）按快照组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) <br><li>snapshot-group-name - Array of String - 是否必填：否 -（过滤条件）按快照组名称过滤 <br><li>snapshot-id - Array of String - 是否必填：否 -（过滤条件）按快照组内的快照ID过滤
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeSnapshotGroupsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。<br><li>snapshot-group-id - Array of String - 是否必填：否 -（过滤条件）按快照组ID过滤 <br><li>snapshot-group-state - Array of String - 是否必填：否 -（过滤条件）按快照组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) <br><li>snapshot-group-name - Array of String - 是否必填：否 -（过滤条件）按快照组名称过滤 <br><li>snapshot-id - Array of String - 是否必填：否 -（过滤条件）按快照组内的快照ID过滤
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件。<br><li>snapshot-group-id - Array of String - 是否必填：否 -（过滤条件）按快照组ID过滤 <br><li>snapshot-group-state - Array of String - 是否必填：否 -（过滤条件）按快照组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) <br><li>snapshot-group-name - Array of String - 是否必填：否 -（过滤条件）按快照组名称过滤 <br><li>snapshot-id - Array of String - 是否必填：否 -（过滤条件）按快照组内的快照ID过滤
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
