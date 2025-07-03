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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作列表查询结果
 *
 * @method integer getPageNumber() 获取第几页
 * @method void setPageNumber(integer $PageNumber) 设置第几页
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method integer getTotalPage() 获取总页数
 * @method void setTotalPage(integer $TotalPage) 设置总页数
 * @method integer getTotalRow() 获取总条数
 * @method void setTotalRow(integer $TotalRow) 设置总条数
 * @method array getActionDetailSet() 获取动作列表查询集合
 * @method void setActionDetailSet(array $ActionDetailSet) 设置动作列表查询集合
 */
class DescribeActionListRes extends AbstractModel
{
    /**
     * @var integer 第几页
     */
    public $PageNumber;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var integer 总页数
     */
    public $TotalPage;

    /**
     * @var integer 总条数
     */
    public $TotalRow;

    /**
     * @var array 动作列表查询集合
     */
    public $ActionDetailSet;

    /**
     * @param integer $PageNumber 第几页
     * @param integer $PageSize 每页条数
     * @param integer $TotalPage 总页数
     * @param integer $TotalRow 总条数
     * @param array $ActionDetailSet 动作列表查询集合
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("TotalRow",$param) and $param["TotalRow"] !== null) {
            $this->TotalRow = $param["TotalRow"];
        }

        if (array_key_exists("ActionDetailSet",$param) and $param["ActionDetailSet"] !== null) {
            $this->ActionDetailSet = [];
            foreach ($param["ActionDetailSet"] as $key => $value){
                $obj = new ActionDetail();
                $obj->deserialize($value);
                array_push($this->ActionDetailSet, $obj);
            }
        }
    }
}
