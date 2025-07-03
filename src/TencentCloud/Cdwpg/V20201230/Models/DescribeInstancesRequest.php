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
 * DescribeInstances请求参数结构体
 *
 * @method string getSearchInstanceId() 获取用集群id搜索
 * @method void setSearchInstanceId(string $SearchInstanceId) 设置用集群id搜索
 * @method string getSearchInstanceName() 获取用集群名字搜索
 * @method void setSearchInstanceName(string $SearchInstanceName) 设置用集群名字搜索
 * @method integer getOffset() 获取分页参数，第一页为0，第二页为10
 * @method void setOffset(integer $Offset) 设置分页参数，第一页为0，第二页为10
 * @method integer getLimit() 获取分页参数，分页步长，默认为10
 * @method void setLimit(integer $Limit) 设置分页参数，分页步长，默认为10
 * @method array getSearchTags() 获取搜索标签列表
 * @method void setSearchTags(array $SearchTags) 设置搜索标签列表
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string 用集群id搜索
     */
    public $SearchInstanceId;

    /**
     * @var string 用集群名字搜索
     */
    public $SearchInstanceName;

    /**
     * @var integer 分页参数，第一页为0，第二页为10
     */
    public $Offset;

    /**
     * @var integer 分页参数，分页步长，默认为10
     */
    public $Limit;

    /**
     * @var array 搜索标签列表
     */
    public $SearchTags;

    /**
     * @param string $SearchInstanceId 用集群id搜索
     * @param string $SearchInstanceName 用集群名字搜索
     * @param integer $Offset 分页参数，第一页为0，第二页为10
     * @param integer $Limit 分页参数，分页步长，默认为10
     * @param array $SearchTags 搜索标签列表
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
            $this->SearchTags = [];
            foreach ($param["SearchTags"] as $key => $value){
                $obj = new SearchTags();
                $obj->deserialize($value);
                array_push($this->SearchTags, $obj);
            }
        }
    }
}
