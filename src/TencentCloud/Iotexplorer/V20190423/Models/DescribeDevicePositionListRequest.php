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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevicePositionList请求参数结构体
 *
 * @method array getProductIdList() 获取产品标识列表
 * @method void setProductIdList(array $ProductIdList) 设置产品标识列表
 * @method integer getCoordinateType() 获取坐标类型
 * @method void setCoordinateType(integer $CoordinateType) 设置坐标类型
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取分页的大小
 * @method void setLimit(integer $Limit) 设置分页的大小
 */
class DescribeDevicePositionListRequest extends AbstractModel
{
    /**
     * @var array 产品标识列表
     */
    public $ProductIdList;

    /**
     * @var integer 坐标类型
     */
    public $CoordinateType;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 分页的大小
     */
    public $Limit;

    /**
     * @param array $ProductIdList 产品标识列表
     * @param integer $CoordinateType 坐标类型
     * @param integer $Offset 分页偏移
     * @param integer $Limit 分页的大小
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
        if (array_key_exists("ProductIdList",$param) and $param["ProductIdList"] !== null) {
            $this->ProductIdList = $param["ProductIdList"];
        }

        if (array_key_exists("CoordinateType",$param) and $param["CoordinateType"] !== null) {
            $this->CoordinateType = $param["CoordinateType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
