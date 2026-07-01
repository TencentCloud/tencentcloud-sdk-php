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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTreeJobs请求参数结构体
 *
 * @method array getFilters() 获取<p>筛选条件字段，使用了筛选字段后不支持分页，最多返回2000条记录</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件字段，使用了筛选字段后不支持分页，最多返回2000条记录</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 Serialid</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 Serialid</p>
 * @method integer getFlatMode() 获取<p>返回形式</p><p>枚举值：</p><ul><li>0： 树形结构</li><li>1： 平铺结构</li></ul>
 * @method void setFlatMode(integer $FlatMode) 设置<p>返回形式</p><p>枚举值：</p><ul><li>0： 树形结构</li><li>1： 平铺结构</li></ul>
 */
class DescribeTreeJobsRequest extends AbstractModel
{
    /**
     * @var array <p>筛选条件字段，使用了筛选字段后不支持分页，最多返回2000条记录</p>
     */
    public $Filters;

    /**
     * @var string <p>工作空间 Serialid</p>
     */
    public $WorkSpaceId;

    /**
     * @var integer <p>返回形式</p><p>枚举值：</p><ul><li>0： 树形结构</li><li>1： 平铺结构</li></ul>
     */
    public $FlatMode;

    /**
     * @param array $Filters <p>筛选条件字段，使用了筛选字段后不支持分页，最多返回2000条记录</p>
     * @param string $WorkSpaceId <p>工作空间 Serialid</p>
     * @param integer $FlatMode <p>返回形式</p><p>枚举值：</p><ul><li>0： 树形结构</li><li>1： 平铺结构</li></ul>
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

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("FlatMode",$param) and $param["FlatMode"] !== null) {
            $this->FlatMode = $param["FlatMode"];
        }
    }
}
