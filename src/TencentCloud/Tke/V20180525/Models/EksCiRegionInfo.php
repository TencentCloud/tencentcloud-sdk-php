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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EksCi地域信息
 *
 * @method string getAlias() 获取地域别名，形如gz
 * @method void setAlias(string $Alias) 设置地域别名，形如gz
 * @method string getRegionName() 获取地域名，形如ap-guangzhou
 * @method void setRegionName(string $RegionName) 设置地域名，形如ap-guangzhou
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 */
class EksCiRegionInfo extends AbstractModel
{
    /**
     * @var string 地域别名，形如gz
     */
    public $Alias;

    /**
     * @var string 地域名，形如ap-guangzhou
     */
    public $RegionName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @param string $Alias 地域别名，形如gz
     * @param string $RegionName 地域名，形如ap-guangzhou
     * @param integer $RegionId 地域ID
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
