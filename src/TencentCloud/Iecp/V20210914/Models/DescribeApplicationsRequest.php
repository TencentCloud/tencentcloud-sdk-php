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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method string getNamePattern() 获取模糊搜索字符串
 * @method void setNamePattern(string $NamePattern) 设置模糊搜索字符串
 * @method integer getOffset() 获取默认 0
 * @method void setOffset(integer $Offset) 设置默认 0
 * @method integer getLimit() 获取默认 20
 * @method void setLimit(integer $Limit) 设置默认 20
 * @method array getSort() 获取仅支持对 DistributeTime 字段排序，ASC/DESC
 * @method void setSort(array $Sort) 设置仅支持对 DistributeTime 字段排序，ASC/DESC
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string 模糊搜索字符串
     */
    public $NamePattern;

    /**
     * @var integer 默认 0
     */
    public $Offset;

    /**
     * @var integer 默认 20
     */
    public $Limit;

    /**
     * @var array 仅支持对 DistributeTime 字段排序，ASC/DESC
     */
    public $Sort;

    /**
     * @param string $NamePattern 模糊搜索字符串
     * @param integer $Offset 默认 0
     * @param integer $Limit 默认 20
     * @param array $Sort 仅支持对 DistributeTime 字段排序，ASC/DESC
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
        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new FieldSort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }
    }
}
