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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRDBAssetSensitiveDistribution返回参数结构体
 *
 * @method RDBAsset getRDBAsset() 获取rdb的资产统计数据
 * @method void setRDBAsset(RDBAsset $RDBAsset) 设置rdb的资产统计数据
 * @method array getTopAsset() 获取涉敏top数据
 * @method void setTopAsset(array $TopAsset) 设置涉敏top数据
 * @method array getRDBDetail() 获取rdb的详情列表
 * @method void setRDBDetail(array $RDBDetail) 设置rdb的详情列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRDBAssetSensitiveDistributionResponse extends AbstractModel
{
    /**
     * @var RDBAsset rdb的资产统计数据
     */
    public $RDBAsset;

    /**
     * @var array 涉敏top数据
     */
    public $TopAsset;

    /**
     * @var array rdb的详情列表
     */
    public $RDBDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RDBAsset $RDBAsset rdb的资产统计数据
     * @param array $TopAsset 涉敏top数据
     * @param array $RDBDetail rdb的详情列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RDBAsset",$param) and $param["RDBAsset"] !== null) {
            $this->RDBAsset = new RDBAsset();
            $this->RDBAsset->deserialize($param["RDBAsset"]);
        }

        if (array_key_exists("TopAsset",$param) and $param["TopAsset"] !== null) {
            $this->TopAsset = [];
            foreach ($param["TopAsset"] as $key => $value){
                $obj = new TopAsset();
                $obj->deserialize($value);
                array_push($this->TopAsset, $obj);
            }
        }

        if (array_key_exists("RDBDetail",$param) and $param["RDBDetail"] !== null) {
            $this->RDBDetail = [];
            foreach ($param["RDBDetail"] as $key => $value){
                $obj = new AssetDBDetail();
                $obj->deserialize($value);
                array_push($this->RDBDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
