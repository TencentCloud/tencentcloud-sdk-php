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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostCosInstanceList返回参数结构体
 *
 * @method array getInstanceList() 获取COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceList(array $InstanceList) 设置COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAsyncTotalNum() 获取异步刷新总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncTotalNum(integer $AsyncTotalNum) 设置异步刷新总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAsyncOffset() 获取异步刷新当前执行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncOffset(integer $AsyncOffset) 设置异步刷新当前执行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsyncCacheTime() 获取当前缓存读取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncCacheTime(string $AsyncCacheTime) 设置当前缓存读取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHostCosInstanceListResponse extends AbstractModel
{
    /**
     * @var array COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceList;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 异步刷新总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncTotalNum;

    /**
     * @var integer 异步刷新当前执行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncOffset;

    /**
     * @var string 当前缓存读取时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncCacheTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InstanceList COS实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AsyncTotalNum 异步刷新总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AsyncOffset 异步刷新当前执行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsyncCacheTime 当前缓存读取时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new CosInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AsyncTotalNum",$param) and $param["AsyncTotalNum"] !== null) {
            $this->AsyncTotalNum = $param["AsyncTotalNum"];
        }

        if (array_key_exists("AsyncOffset",$param) and $param["AsyncOffset"] !== null) {
            $this->AsyncOffset = $param["AsyncOffset"];
        }

        if (array_key_exists("AsyncCacheTime",$param) and $param["AsyncCacheTime"] !== null) {
            $this->AsyncCacheTime = $param["AsyncCacheTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
