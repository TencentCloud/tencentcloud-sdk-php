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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCCBuyInfoList返回参数结构体
 *
 * @method integer getTotalCount() 获取应用总数
 * @method void setTotalCount(integer $TotalCount) 设置应用总数
 * @method array getSdkAppIdBuyList() 获取应用购买信息列表
 * @method void setSdkAppIdBuyList(array $SdkAppIdBuyList) 设置应用购买信息列表
 * @method array getPackageBuyList() 获取套餐包购买信息列表
 * @method void setPackageBuyList(array $PackageBuyList) 设置套餐包购买信息列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCCCBuyInfoListResponse extends AbstractModel
{
    /**
     * @var integer 应用总数
     */
    public $TotalCount;

    /**
     * @var array 应用购买信息列表
     */
    public $SdkAppIdBuyList;

    /**
     * @var array 套餐包购买信息列表
     */
    public $PackageBuyList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 应用总数
     * @param array $SdkAppIdBuyList 应用购买信息列表
     * @param array $PackageBuyList 套餐包购买信息列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SdkAppIdBuyList",$param) and $param["SdkAppIdBuyList"] !== null) {
            $this->SdkAppIdBuyList = [];
            foreach ($param["SdkAppIdBuyList"] as $key => $value){
                $obj = new SdkAppIdBuyInfo();
                $obj->deserialize($value);
                array_push($this->SdkAppIdBuyList, $obj);
            }
        }

        if (array_key_exists("PackageBuyList",$param) and $param["PackageBuyList"] !== null) {
            $this->PackageBuyList = [];
            foreach ($param["PackageBuyList"] as $key => $value){
                $obj = new PackageBuyInfo();
                $obj->deserialize($value);
                array_push($this->PackageBuyList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
