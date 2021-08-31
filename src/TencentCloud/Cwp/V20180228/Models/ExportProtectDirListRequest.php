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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportProtectDirList请求参数结构体
 *
 * @method array getFilters() 获取DirName 网站名称
DirPath 网站防护目录地址
 * @method void setFilters(array $Filters) 设置DirName 网站名称
DirPath 网站防护目录地址
 * @method string getOrder() 获取asc：升序/desc：降序
 * @method void setOrder(string $Order) 设置asc：升序/desc：降序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 */
class ExportProtectDirListRequest extends AbstractModel
{
    /**
     * @var array DirName 网站名称
DirPath 网站防护目录地址
     */
    public $Filters;

    /**
     * @var string asc：升序/desc：降序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @param array $Filters DirName 网站名称
DirPath 网站防护目录地址
     * @param string $Order asc：升序/desc：降序
     * @param string $By 排序字段
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
