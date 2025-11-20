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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountGroups请求参数结构体
 *
 * @method integer getDeepIn() 获取是否递归查询，0为不递归，1为递归
 * @method void setDeepIn(integer $DeepIn) 设置是否递归查询，0为不递归，1为递归
 * @method integer getParentId() 获取父账号组ID, 默认0,查询根账号组下所有分组 
 * @method void setParentId(integer $ParentId) 设置父账号组ID, 默认0,查询根账号组下所有分组 
 * @method string getGroupName() 获取账号组名称，模糊查询
 * @method void setGroupName(string $GroupName) 设置账号组名称，模糊查询
 * @method integer getPageSize() 获取分页查询，每页条数
 * @method void setPageSize(integer $PageSize) 设置分页查询，每页条数
 * @method integer getPageNum() 获取获取第几页的数据
 * @method void setPageNum(integer $PageNum) 设置获取第几页的数据
 */
class DescribeAccountGroupsRequest extends AbstractModel
{
    /**
     * @var integer 是否递归查询，0为不递归，1为递归
     */
    public $DeepIn;

    /**
     * @var integer 父账号组ID, 默认0,查询根账号组下所有分组 
     */
    public $ParentId;

    /**
     * @var string 账号组名称，模糊查询
     */
    public $GroupName;

    /**
     * @var integer 分页查询，每页条数
     */
    public $PageSize;

    /**
     * @var integer 获取第几页的数据
     */
    public $PageNum;

    /**
     * @param integer $DeepIn 是否递归查询，0为不递归，1为递归
     * @param integer $ParentId 父账号组ID, 默认0,查询根账号组下所有分组 
     * @param string $GroupName 账号组名称，模糊查询
     * @param integer $PageSize 分页查询，每页条数
     * @param integer $PageNum 获取第几页的数据
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
        if (array_key_exists("DeepIn",$param) and $param["DeepIn"] !== null) {
            $this->DeepIn = $param["DeepIn"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
