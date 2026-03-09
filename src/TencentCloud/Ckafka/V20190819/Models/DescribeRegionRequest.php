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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegion请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>返回最大结果数</p>
 * @method void setLimit(integer $Limit) 设置<p>返回最大结果数</p>
 * @method string getBusiness() 获取<p>业务字段，可忽略</p><p>枚举值：</p><ul><li>ckafka： ckafka业务</li><li>cmq： cmq业务</li></ul><p>默认值：ckafka</p>
 * @method void setBusiness(string $Business) 设置<p>业务字段，可忽略</p><p>枚举值：</p><ul><li>ckafka： ckafka业务</li><li>cmq： cmq业务</li></ul><p>默认值：ckafka</p>
 * @method string getCdcId() 获取<p>cdc专有集群业务字段，可忽略</p>
 * @method void setCdcId(string $CdcId) 设置<p>cdc专有集群业务字段，可忽略</p>
 */
class DescribeRegionRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回最大结果数</p>
     */
    public $Limit;

    /**
     * @var string <p>业务字段，可忽略</p><p>枚举值：</p><ul><li>ckafka： ckafka业务</li><li>cmq： cmq业务</li></ul><p>默认值：ckafka</p>
     */
    public $Business;

    /**
     * @var string <p>cdc专有集群业务字段，可忽略</p>
     */
    public $CdcId;

    /**
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>返回最大结果数</p>
     * @param string $Business <p>业务字段，可忽略</p><p>枚举值：</p><ul><li>ckafka： ckafka业务</li><li>cmq： cmq业务</li></ul><p>默认值：ckafka</p>
     * @param string $CdcId <p>cdc专有集群业务字段，可忽略</p>
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
