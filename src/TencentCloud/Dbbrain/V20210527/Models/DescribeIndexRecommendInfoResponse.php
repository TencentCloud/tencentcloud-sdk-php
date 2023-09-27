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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndexRecommendInfo返回参数结构体
 *
 * @method integer getCollectionNum() 获取索引推荐的集合数量。
 * @method void setCollectionNum(integer $CollectionNum) 设置索引推荐的集合数量。
 * @method integer getIndexNum() 获取索引推荐的索引数量。
 * @method void setIndexNum(integer $IndexNum) 设置索引推荐的索引数量。
 * @method array getItems() 获取索引项。
 * @method void setItems(array $Items) 设置索引项。
 * @method integer getLevel() 获取优化级别，1-4，优先级从高到低。
 * @method void setLevel(integer $Level) 设置优化级别，1-4，优先级从高到低。
 * @method integer getOptimized() 获取历史优化数。
 * @method void setOptimized(integer $Optimized) 设置历史优化数。
 * @method integer getOptimizedCount() 获取累计优化条数。
 * @method void setOptimizedCount(integer $OptimizedCount) 设置累计优化条数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndexRecommendInfoResponse extends AbstractModel
{
    /**
     * @var integer 索引推荐的集合数量。
     */
    public $CollectionNum;

    /**
     * @var integer 索引推荐的索引数量。
     */
    public $IndexNum;

    /**
     * @var array 索引项。
     */
    public $Items;

    /**
     * @var integer 优化级别，1-4，优先级从高到低。
     */
    public $Level;

    /**
     * @var integer 历史优化数。
     */
    public $Optimized;

    /**
     * @var integer 累计优化条数。
     */
    public $OptimizedCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CollectionNum 索引推荐的集合数量。
     * @param integer $IndexNum 索引推荐的索引数量。
     * @param array $Items 索引项。
     * @param integer $Level 优化级别，1-4，优先级从高到低。
     * @param integer $Optimized 历史优化数。
     * @param integer $OptimizedCount 累计优化条数。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CollectionNum",$param) and $param["CollectionNum"] !== null) {
            $this->CollectionNum = $param["CollectionNum"];
        }

        if (array_key_exists("IndexNum",$param) and $param["IndexNum"] !== null) {
            $this->IndexNum = $param["IndexNum"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new MongoDBIndex();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Optimized",$param) and $param["Optimized"] !== null) {
            $this->Optimized = $param["Optimized"];
        }

        if (array_key_exists("OptimizedCount",$param) and $param["OptimizedCount"] !== null) {
            $this->OptimizedCount = $param["OptimizedCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
