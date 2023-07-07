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
 * CreateRedisBigKeyAnalysisTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getProduct() 获取服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method array getShardIds() 获取分片节点序号列表。当列表为空时，选择所有分片节点。
 * @method void setShardIds(array $ShardIds) 设置分片节点序号列表。当列表为空时，选择所有分片节点。
 * @method array getKeyDelimiterList() 获取Top Key前缀的分隔符列表。
目前仅支持以下分割符：[",", ";", ":", "_", "-", "+", "@", "=", "|", "#", "."]，当列表为空时，默认选择所有分隔符。
 * @method void setKeyDelimiterList(array $KeyDelimiterList) 设置Top Key前缀的分隔符列表。
目前仅支持以下分割符：[",", ";", ":", "_", "-", "+", "@", "=", "|", "#", "."]，当列表为空时，默认选择所有分隔符。
 */
class CreateRedisBigKeyAnalysisTaskRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var array 分片节点序号列表。当列表为空时，选择所有分片节点。
     */
    public $ShardIds;

    /**
     * @var array Top Key前缀的分隔符列表。
目前仅支持以下分割符：[",", ";", ":", "_", "-", "+", "@", "=", "|", "#", "."]，当列表为空时，默认选择所有分隔符。
     */
    public $KeyDelimiterList;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Product 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     * @param array $ShardIds 分片节点序号列表。当列表为空时，选择所有分片节点。
     * @param array $KeyDelimiterList Top Key前缀的分隔符列表。
目前仅支持以下分割符：[",", ";", ":", "_", "-", "+", "@", "=", "|", "#", "."]，当列表为空时，默认选择所有分隔符。
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }

        if (array_key_exists("KeyDelimiterList",$param) and $param["KeyDelimiterList"] !== null) {
            $this->KeyDelimiterList = $param["KeyDelimiterList"];
        }
    }
}
