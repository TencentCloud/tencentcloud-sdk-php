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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSimpleInstances请求参数结构体
 *
 * @method string getSearchInstanceId() 获取11
 * @method void setSearchInstanceId(string $SearchInstanceId) 设置11
 * @method string getSearchInstanceName() 获取11
 * @method void setSearchInstanceName(string $SearchInstanceName) 设置11
 * @method integer getOffset() 获取11
 * @method void setOffset(integer $Offset) 设置11
 * @method integer getLimit() 获取11
 * @method void setLimit(integer $Limit) 设置11
 * @method array getSearchTags() 获取11
 * @method void setSearchTags(array $SearchTags) 设置11
 */
class DescribeSimpleInstancesRequest extends AbstractModel
{
    /**
     * @var string 11
     */
    public $SearchInstanceId;

    /**
     * @var string 11
     */
    public $SearchInstanceName;

    /**
     * @var integer 11
     */
    public $Offset;

    /**
     * @var integer 11
     */
    public $Limit;

    /**
     * @var array 11
     */
    public $SearchTags;

    /**
     * @param string $SearchInstanceId 11
     * @param string $SearchInstanceName 11
     * @param integer $Offset 11
     * @param integer $Limit 11
     * @param array $SearchTags 11
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
        if (array_key_exists("SearchInstanceId",$param) and $param["SearchInstanceId"] !== null) {
            $this->SearchInstanceId = $param["SearchInstanceId"];
        }

        if (array_key_exists("SearchInstanceName",$param) and $param["SearchInstanceName"] !== null) {
            $this->SearchInstanceName = $param["SearchInstanceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchTags",$param) and $param["SearchTags"] !== null) {
            $this->SearchTags = $param["SearchTags"];
        }
    }
}
