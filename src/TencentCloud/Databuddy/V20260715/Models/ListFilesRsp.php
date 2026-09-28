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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询文件信息结果
 *
 * @method array getItems() 获取<p>文件/文件夹节点列表</p>
 * @method void setItems(array $Items) 设置<p>文件/文件夹节点列表</p>
 * @method integer getPageNumber() 获取<p>当前页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>当前页码</p>
 * @method integer getPageSize() 获取<p>每页条数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数</p>
 * @method integer getTotalCount() 获取<p>总条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总条数</p>
 * @method integer getTotalPageNumber() 获取<p>总页数</p>
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置<p>总页数</p>
 */
class ListFilesRsp extends AbstractModel
{
    /**
     * @var array <p>文件/文件夹节点列表</p>
     */
    public $Items;

    /**
     * @var integer <p>当前页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页条数</p>
     */
    public $PageSize;

    /**
     * @var integer <p>总条数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>总页数</p>
     */
    public $TotalPageNumber;

    /**
     * @param array $Items <p>文件/文件夹节点列表</p>
     * @param integer $PageNumber <p>当前页码</p>
     * @param integer $PageSize <p>每页条数</p>
     * @param integer $TotalCount <p>总条数</p>
     * @param integer $TotalPageNumber <p>总页数</p>
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new FileNode();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
