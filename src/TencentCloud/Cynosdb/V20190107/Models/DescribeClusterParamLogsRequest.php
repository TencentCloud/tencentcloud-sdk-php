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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterParamLogs请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getLimit() 获取返回数量，默认为 20，取值范围为(0,100]
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，取值范围为(0,100]
 * @method integer getOffset() 获取记录偏移量，默认值为0，取值范围为[0,INF)
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0，取值范围为[0,INF)
 */
class DescribeClusterParamLogsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 返回数量，默认为 20，取值范围为(0,100]
     */
    public $Limit;

    /**
     * @var integer 记录偏移量，默认值为0，取值范围为[0,INF)
     */
    public $Offset;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Limit 返回数量，默认为 20，取值范围为(0,100]
     * @param integer $Offset 记录偏移量，默认值为0，取值范围为[0,INF)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
