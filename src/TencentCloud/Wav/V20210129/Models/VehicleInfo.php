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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 车型车系信息
 *
 * @method integer getBrandId() 获取品牌id
 * @method void setBrandId(integer $BrandId) 设置品牌id
 * @method string getBrandName() 获取品牌名称
 * @method void setBrandName(string $BrandName) 设置品牌名称
 * @method integer getSeriesId() 获取车系id
 * @method void setSeriesId(integer $SeriesId) 设置车系id
 * @method string getSeriesName() 获取车系名称
 * @method void setSeriesName(string $SeriesName) 设置车系名称
 * @method integer getModelId() 获取车型id
 * @method void setModelId(integer $ModelId) 设置车型id
 * @method string getModelName() 获取车型名称
 * @method void setModelName(string $ModelName) 设置车型名称
 */
class VehicleInfo extends AbstractModel
{
    /**
     * @var integer 品牌id
     */
    public $BrandId;

    /**
     * @var string 品牌名称
     */
    public $BrandName;

    /**
     * @var integer 车系id
     */
    public $SeriesId;

    /**
     * @var string 车系名称
     */
    public $SeriesName;

    /**
     * @var integer 车型id
     */
    public $ModelId;

    /**
     * @var string 车型名称
     */
    public $ModelName;

    /**
     * @param integer $BrandId 品牌id
     * @param string $BrandName 品牌名称
     * @param integer $SeriesId 车系id
     * @param string $SeriesName 车系名称
     * @param integer $ModelId 车型id
     * @param string $ModelName 车型名称
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
        if (array_key_exists("BrandId",$param) and $param["BrandId"] !== null) {
            $this->BrandId = $param["BrandId"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("SeriesId",$param) and $param["SeriesId"] !== null) {
            $this->SeriesId = $param["SeriesId"];
        }

        if (array_key_exists("SeriesName",$param) and $param["SeriesName"] !== null) {
            $this->SeriesName = $param["SeriesName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }
    }
}
