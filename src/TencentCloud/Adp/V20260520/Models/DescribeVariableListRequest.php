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
 * DescribeVariableList请求参数结构体
 *
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 * @method array getFilterList() 获取过滤条件(支持: VariableIdList-变量ID列表, VariableType-变量类型)
 * @method void setFilterList(array $FilterList) 设置过滤条件(支持: VariableIdList-变量ID列表, VariableType-变量类型)
 * @method integer getModuleType() 获取模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 * @method void setModuleType(integer $ModuleType) 设置模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 * @method boolean getNeedInternalVariable() 获取是否需要内部变量
 * @method void setNeedInternalVariable(boolean $NeedInternalVariable) 设置是否需要内部变量
 * @method integer getPageNumber() 获取页码(从0开始)
 * @method void setPageNumber(integer $PageNumber) 设置页码(从0开始)
 * @method integer getPageSize() 获取每页数量(最大值:100)
 * @method void setPageSize(integer $PageSize) 设置每页数量(最大值:100)
 * @method string getQuery() 获取查询关键词
 * @method void setQuery(string $Query) 设置查询关键词
 */
class DescribeVariableListRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @var array 过滤条件(支持: VariableIdList-变量ID列表, VariableType-变量类型)
     */
    public $FilterList;

    /**
     * @var integer 模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
     */
    public $ModuleType;

    /**
     * @var boolean 是否需要内部变量
     */
    public $NeedInternalVariable;

    /**
     * @var integer 页码(从0开始)
     */
    public $PageNumber;

    /**
     * @var integer 每页数量(最大值:100)
     */
    public $PageSize;

    /**
     * @var string 查询关键词
     */
    public $Query;

    /**
     * @param string $AppId 应用ID
     * @param array $FilterList 过滤条件(支持: VariableIdList-变量ID列表, VariableType-变量类型)
     * @param integer $ModuleType 模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
     * @param boolean $NeedInternalVariable 是否需要内部变量
     * @param integer $PageNumber 页码(从0开始)
     * @param integer $PageSize 每页数量(最大值:100)
     * @param string $Query 查询关键词
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("NeedInternalVariable",$param) and $param["NeedInternalVariable"] !== null) {
            $this->NeedInternalVariable = $param["NeedInternalVariable"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
