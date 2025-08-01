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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserVpcConnection请求参数结构体
 *
 * @method string getEngineNetworkId() 获取引擎网络ID
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
 * @method array getDataEngineIds() 获取引擎ID集合
 * @method void setDataEngineIds(array $DataEngineIds) 设置引擎ID集合
 */
class DescribeUserVpcConnectionRequest extends AbstractModel
{
    /**
     * @var string 引擎网络ID
     */
    public $EngineNetworkId;

    /**
     * @var array 引擎ID集合
     */
    public $DataEngineIds;

    /**
     * @param string $EngineNetworkId 引擎网络ID
     * @param array $DataEngineIds 引擎ID集合
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
        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("DataEngineIds",$param) and $param["DataEngineIds"] !== null) {
            $this->DataEngineIds = $param["DataEngineIds"];
        }
    }
}
