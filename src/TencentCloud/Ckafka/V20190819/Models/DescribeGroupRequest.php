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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取最大返回数量
 * @method void setLimit(integer $Limit) 设置最大返回数量
 * @method array getFilters() 获取仅支持 GroupState 筛选,   支持的筛选状态有 Empty/Stable  注意：该参数只能在2.8/3.2 版本生效
 * @method void setFilters(array $Filters) 设置仅支持 GroupState 筛选,   支持的筛选状态有 Empty/Stable  注意：该参数只能在2.8/3.2 版本生效
 */
class DescribeGroupRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 最大返回数量
     */
    public $Limit;

    /**
     * @var array 仅支持 GroupState 筛选,   支持的筛选状态有 Empty/Stable  注意：该参数只能在2.8/3.2 版本生效
     */
    public $Filters;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $SearchWord 搜索关键字
     * @param integer $Offset 偏移量
     * @param integer $Limit 最大返回数量
     * @param array $Filters 仅支持 GroupState 筛选,   支持的筛选状态有 Empty/Stable  注意：该参数只能在2.8/3.2 版本生效
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
