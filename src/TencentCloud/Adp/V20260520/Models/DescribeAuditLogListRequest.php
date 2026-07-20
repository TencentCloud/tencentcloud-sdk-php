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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogList请求参数结构体
 *
 * @method string getSpaceId() 获取<p>空间id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间id</p>
 * @method integer getLimit() 获取<p>每页数量</p><p>取值范围：[1, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p><p>取值范围：[1, 100]</p>
 * @method array getSearchAfter() 获取<p>es查询起始位置</p><p>对应接口返回SearchAfter</p>
 * @method void setSearchAfter(array $SearchAfter) 设置<p>es查询起始位置</p><p>对应接口返回SearchAfter</p>
 * @method array getFilterList() 获取<p>参数过滤</p><p>支持 Action,BizObject,Content<br>支持SpaceId,AccountUin,AppId(最多100个)<br>支持startTime,endTime(秒时间戳)</p>
 * @method void setFilterList(array $FilterList) 设置<p>参数过滤</p><p>支持 Action,BizObject,Content<br>支持SpaceId,AccountUin,AppId(最多100个)<br>支持startTime,endTime(秒时间戳)</p>
 */
class DescribeAuditLogListRequest extends AbstractModel
{
    /**
     * @var string <p>空间id</p>
     */
    public $SpaceId;

    /**
     * @var integer <p>每页数量</p><p>取值范围：[1, 100]</p>
     */
    public $Limit;

    /**
     * @var array <p>es查询起始位置</p><p>对应接口返回SearchAfter</p>
     */
    public $SearchAfter;

    /**
     * @var array <p>参数过滤</p><p>支持 Action,BizObject,Content<br>支持SpaceId,AccountUin,AppId(最多100个)<br>支持startTime,endTime(秒时间戳)</p>
     */
    public $FilterList;

    /**
     * @param string $SpaceId <p>空间id</p>
     * @param integer $Limit <p>每页数量</p><p>取值范围：[1, 100]</p>
     * @param array $SearchAfter <p>es查询起始位置</p><p>对应接口返回SearchAfter</p>
     * @param array $FilterList <p>参数过滤</p><p>支持 Action,BizObject,Content<br>支持SpaceId,AccountUin,AppId(最多100个)<br>支持startTime,endTime(秒时间戳)</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
