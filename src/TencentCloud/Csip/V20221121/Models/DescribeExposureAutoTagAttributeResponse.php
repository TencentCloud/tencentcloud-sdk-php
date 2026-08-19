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
 * DescribeExposureAutoTagAttribute返回参数结构体
 *
 * @method array getAssetTypeList() 获取<p>资产类型</p>
 * @method void setAssetTypeList(array $AssetTypeList) 设置<p>资产类型</p>
 * @method array getTagList() 获取<p>标签集合</p>
 * @method void setTagList(array $TagList) 设置<p>标签集合</p>
 * @method array getOpenStatusList() 获取<p>开放状态集合</p>
 * @method void setOpenStatusList(array $OpenStatusList) 设置<p>开放状态集合</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExposureAutoTagAttributeResponse extends AbstractModel
{
    /**
     * @var array <p>资产类型</p>
     */
    public $AssetTypeList;

    /**
     * @var array <p>标签集合</p>
     */
    public $TagList;

    /**
     * @var array <p>开放状态集合</p>
     */
    public $OpenStatusList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AssetTypeList <p>资产类型</p>
     * @param array $TagList <p>标签集合</p>
     * @param array $OpenStatusList <p>开放状态集合</p>
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
        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new ExposeAssetTypeItem();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("OpenStatusList",$param) and $param["OpenStatusList"] !== null) {
            $this->OpenStatusList = [];
            foreach ($param["OpenStatusList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->OpenStatusList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
