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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGoodsDetail返回参数结构体
 *
 * @method string getGoodsDetail() 获取GoodsDetail对象
 * @method void setGoodsDetail(string $GoodsDetail) 设置GoodsDetail对象
 * @method integer getGoodsCategoryId() 获取GoodsCategoryId 表示操作类型
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) 设置GoodsCategoryId 表示操作类型
 * @method string getType() 获取子商品码
 * @method void setType(string $Type) 设置子商品码
 * @method integer getPayMode() 获取付费模式，0后付费，1预付费
 * @method void setPayMode(integer $PayMode) 设置付费模式，0后付费，1预付费
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method string getResourceId() 获取资源标识符
 * @method void setResourceId(string $ResourceId) 设置资源标识符
 * @method integer getGoodsNum() 获取商品数目
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数目
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGoodsDetailResponse extends AbstractModel
{
    /**
     * @var string GoodsDetail对象
     */
    public $GoodsDetail;

    /**
     * @var integer GoodsCategoryId 表示操作类型
     */
    public $GoodsCategoryId;

    /**
     * @var string 子商品码
     */
    public $Type;

    /**
     * @var integer 付费模式，0后付费，1预付费
     */
    public $PayMode;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 资源标识符
     */
    public $ResourceId;

    /**
     * @var integer 商品数目
     */
    public $GoodsNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GoodsDetail GoodsDetail对象
     * @param integer $GoodsCategoryId GoodsCategoryId 表示操作类型
     * @param string $Type 子商品码
     * @param integer $PayMode 付费模式，0后付费，1预付费
     * @param integer $RegionId 地域ID
     * @param integer $ZoneId 可用区ID
     * @param string $ResourceId 资源标识符
     * @param integer $GoodsNum 商品数目
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
        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = $param["GoodsDetail"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
