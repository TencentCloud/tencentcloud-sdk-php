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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookImageRecords请求参数结构体
 *
 * @method string getNotebookId() 获取notebook id
 * @method void setNotebookId(string $NotebookId) 设置notebook id
 * @method integer getOffset() 获取位移值
 * @method void setOffset(integer $Offset) 设置位移值
 * @method integer getLimit() 获取日志限制
 * @method void setLimit(integer $Limit) 设置日志限制
 * @method array getFilters() 获取状态筛选
 * @method void setFilters(array $Filters) 设置状态筛选
 */
class DescribeNotebookImageRecordsRequest extends AbstractModel
{
    /**
     * @var string notebook id
     */
    public $NotebookId;

    /**
     * @var integer 位移值
     */
    public $Offset;

    /**
     * @var integer 日志限制
     */
    public $Limit;

    /**
     * @var array 状态筛选
     */
    public $Filters;

    /**
     * @param string $NotebookId notebook id
     * @param integer $Offset 位移值
     * @param integer $Limit 日志限制
     * @param array $Filters 状态筛选
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
        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            $this->NotebookId = $param["NotebookId"];
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
    }
}
