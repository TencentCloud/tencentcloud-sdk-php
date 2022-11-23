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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates请求参数结构体
 *
 * @method array getEngineVersions() 获取数据库引擎版本号
 * @method void setEngineVersions(array $EngineVersions) 设置数据库引擎版本号
 * @method array getTemplateNames() 获取模版名称
 * @method void setTemplateNames(array $TemplateNames) 设置模版名称
 * @method array getTemplateIds() 获取模版ID
 * @method void setTemplateIds(array $TemplateIds) 设置模版ID
 * @method array getDbModes() 获取数据库类型，可选值：NORMAL，SERVERLESS
 * @method void setDbModes(array $DbModes) 设置数据库类型，可选值：NORMAL，SERVERLESS
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制条数
 * @method void setLimit(integer $Limit) 设置查询限制条数
 * @method array getProducts() 获取查询的模板对应的产品类型
 * @method void setProducts(array $Products) 设置查询的模板对应的产品类型
 * @method array getTemplateTypes() 获取模版类型
 * @method void setTemplateTypes(array $TemplateTypes) 设置模版类型
 * @method array getEngineTypes() 获取版本类型
 * @method void setEngineTypes(array $EngineTypes) 设置版本类型
 * @method string getOrderBy() 获取返回结果的排序字段
 * @method void setOrderBy(string $OrderBy) 设置返回结果的排序字段
 * @method string getOrderDirection() 获取排序方式（asc、desc）
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式（asc、desc）
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array 数据库引擎版本号
     */
    public $EngineVersions;

    /**
     * @var array 模版名称
     */
    public $TemplateNames;

    /**
     * @var array 模版ID
     */
    public $TemplateIds;

    /**
     * @var array 数据库类型，可选值：NORMAL，SERVERLESS
     */
    public $DbModes;

    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询限制条数
     */
    public $Limit;

    /**
     * @var array 查询的模板对应的产品类型
     */
    public $Products;

    /**
     * @var array 模版类型
     */
    public $TemplateTypes;

    /**
     * @var array 版本类型
     */
    public $EngineTypes;

    /**
     * @var string 返回结果的排序字段
     */
    public $OrderBy;

    /**
     * @var string 排序方式（asc、desc）
     */
    public $OrderDirection;

    /**
     * @param array $EngineVersions 数据库引擎版本号
     * @param array $TemplateNames 模版名称
     * @param array $TemplateIds 模版ID
     * @param array $DbModes 数据库类型，可选值：NORMAL，SERVERLESS
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制条数
     * @param array $Products 查询的模板对应的产品类型
     * @param array $TemplateTypes 模版类型
     * @param array $EngineTypes 版本类型
     * @param string $OrderBy 返回结果的排序字段
     * @param string $OrderDirection 排序方式（asc、desc）
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
        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("DbModes",$param) and $param["DbModes"] !== null) {
            $this->DbModes = $param["DbModes"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("TemplateTypes",$param) and $param["TemplateTypes"] !== null) {
            $this->TemplateTypes = $param["TemplateTypes"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
