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
 * DescribeRegion请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回最大结果数
 * @method void setLimit(integer $Limit) 设置返回最大结果数
 * @method string getBusiness() 获取业务字段，可忽略
 * @method void setBusiness(string $Business) 设置业务字段，可忽略
 * @method string getCdcId() 获取cdc专有集群业务字段，可忽略
 * @method void setCdcId(string $CdcId) 设置cdc专有集群业务字段，可忽略
 */
class DescribeRegionRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回最大结果数
     */
    public $Limit;

    /**
     * @var string 业务字段，可忽略
     */
    public $Business;

    /**
     * @var string cdc专有集群业务字段，可忽略
     */
    public $CdcId;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回最大结果数
     * @param string $Business 业务字段，可忽略
     * @param string $CdcId cdc专有集群业务字段，可忽略
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
