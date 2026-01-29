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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTables请求参数结构体
 *
 * @method integer getMgoLimit() 获取每页返回数量（0-1000)
 * @method void setMgoLimit(integer $MgoLimit) 设置每页返回数量（0-1000)
 * @method string getTag() 获取FlexDB实例ID
 * @method void setTag(string $Tag) 设置FlexDB实例ID
 * @method integer getMgoOffset() 获取分页偏移量
 * @method void setMgoOffset(integer $MgoOffset) 设置分页偏移量
 * @method array getFilters() 获取过滤标签数组，用于过滤表名，可选值如：HIDDEN、WEDA、WEDA_SYSTEM
 * @method void setFilters(array $Filters) 设置过滤标签数组，用于过滤表名，可选值如：HIDDEN、WEDA、WEDA_SYSTEM
 * @method string getSearchValue() 获取模糊搜索查询值
 * @method void setSearchValue(string $SearchValue) 设置模糊搜索查询值
 * @method boolean getShowHidden() 获取是否展示隐藏表
 * @method void setShowHidden(boolean $ShowHidden) 设置是否展示隐藏表
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method MongoConnector getMongoConnector() 获取mongo连接器信息
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置mongo连接器信息
 */
class ListTablesRequest extends AbstractModel
{
    /**
     * @var integer 每页返回数量（0-1000)
     */
    public $MgoLimit;

    /**
     * @var string FlexDB实例ID
     */
    public $Tag;

    /**
     * @var integer 分页偏移量
     */
    public $MgoOffset;

    /**
     * @var array 过滤标签数组，用于过滤表名，可选值如：HIDDEN、WEDA、WEDA_SYSTEM
     */
    public $Filters;

    /**
     * @var string 模糊搜索查询值
     */
    public $SearchValue;

    /**
     * @var boolean 是否展示隐藏表
     */
    public $ShowHidden;

    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var MongoConnector mongo连接器信息
     */
    public $MongoConnector;

    /**
     * @param integer $MgoLimit 每页返回数量（0-1000)
     * @param string $Tag FlexDB实例ID
     * @param integer $MgoOffset 分页偏移量
     * @param array $Filters 过滤标签数组，用于过滤表名，可选值如：HIDDEN、WEDA、WEDA_SYSTEM
     * @param string $SearchValue 模糊搜索查询值
     * @param boolean $ShowHidden 是否展示隐藏表
     * @param string $EnvId 云开发环境ID
     * @param MongoConnector $MongoConnector mongo连接器信息
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
        if (array_key_exists("MgoLimit",$param) and $param["MgoLimit"] !== null) {
            $this->MgoLimit = $param["MgoLimit"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("MgoOffset",$param) and $param["MgoOffset"] !== null) {
            $this->MgoOffset = $param["MgoOffset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("ShowHidden",$param) and $param["ShowHidden"] !== null) {
            $this->ShowHidden = $param["ShowHidden"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("MongoConnector",$param) and $param["MongoConnector"] !== null) {
            $this->MongoConnector = new MongoConnector();
            $this->MongoConnector->deserialize($param["MongoConnector"]);
        }
    }
}
