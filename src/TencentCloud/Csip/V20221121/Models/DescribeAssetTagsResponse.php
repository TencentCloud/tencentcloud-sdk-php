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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetTags返回参数结构体
 *
 * @method integer getTotalCount() 获取资产数量
 * @method void setTotalCount(integer $TotalCount) 设置资产数量
 * @method array getAssetTags() 获取资产集合
 * @method void setAssetTags(array $AssetTags) 设置资产集合
 * @method array getAutoTaggingEnabledList() 获取自动打标策略是否开启集合
 * @method void setAutoTaggingEnabledList(array $AutoTaggingEnabledList) 设置自动打标策略是否开启集合
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetTagsResponse extends AbstractModel
{
    /**
     * @var integer 资产数量
     */
    public $TotalCount;

    /**
     * @var array 资产集合
     */
    public $AssetTags;

    /**
     * @var array 自动打标策略是否开启集合
     */
    public $AutoTaggingEnabledList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 资产数量
     * @param array $AssetTags 资产集合
     * @param array $AutoTaggingEnabledList 自动打标策略是否开启集合
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AssetTags",$param) and $param["AssetTags"] !== null) {
            $this->AssetTags = [];
            foreach ($param["AssetTags"] as $key => $value){
                $obj = new AssetTagItem();
                $obj->deserialize($value);
                array_push($this->AssetTags, $obj);
            }
        }

        if (array_key_exists("AutoTaggingEnabledList",$param) and $param["AutoTaggingEnabledList"] !== null) {
            $this->AutoTaggingEnabledList = [];
            foreach ($param["AutoTaggingEnabledList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->AutoTaggingEnabledList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
