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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectList请求参数结构体
 *
 * @method integer getPageSize() 获取页容，初版默认20，将来可能根据屏幕宽度动态变化
 * @method void setPageSize(integer $PageSize) 设置页容，初版默认20，将来可能根据屏幕宽度动态变化
 * @method integer getPageNo() 获取页标
 * @method void setPageNo(integer $PageNo) 设置页标
 * @method string getKeyword() 获取检索模糊字段
 * @method void setKeyword(string $Keyword) 设置检索模糊字段
 * @method boolean getAllPage() 获取是否全部展示，如果是ture，则忽略分页
 * @method void setAllPage(boolean $AllPage) 设置是否全部展示，如果是ture，则忽略分页
 * @method string getModuleCollection() 获取角色信息
 * @method void setModuleCollection(string $ModuleCollection) 设置角色信息
 */
class DescribeProjectListRequest extends AbstractModel
{
    /**
     * @var integer 页容，初版默认20，将来可能根据屏幕宽度动态变化
     */
    public $PageSize;

    /**
     * @var integer 页标
     */
    public $PageNo;

    /**
     * @var string 检索模糊字段
     */
    public $Keyword;

    /**
     * @var boolean 是否全部展示，如果是ture，则忽略分页
     */
    public $AllPage;

    /**
     * @var string 角色信息
     */
    public $ModuleCollection;

    /**
     * @param integer $PageSize 页容，初版默认20，将来可能根据屏幕宽度动态变化
     * @param integer $PageNo 页标
     * @param string $Keyword 检索模糊字段
     * @param boolean $AllPage 是否全部展示，如果是ture，则忽略分页
     * @param string $ModuleCollection 角色信息
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }
    }
}
