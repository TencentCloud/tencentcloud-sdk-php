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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAdvancedStoreLocation请求参数结构体
 *
 * @method string getStoreLocation() 获取查询结果保存cos路径
 * @method void setStoreLocation(string $StoreLocation) 设置查询结果保存cos路径
 * @method integer getEnable() 获取是否启用高级设置：0-否，1-是
 * @method void setEnable(integer $Enable) 设置是否启用高级设置：0-否，1-是
 */
class ModifyAdvancedStoreLocationRequest extends AbstractModel
{
    /**
     * @var string 查询结果保存cos路径
     */
    public $StoreLocation;

    /**
     * @var integer 是否启用高级设置：0-否，1-是
     */
    public $Enable;

    /**
     * @param string $StoreLocation 查询结果保存cos路径
     * @param integer $Enable 是否启用高级设置：0-否，1-是
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
        if (array_key_exists("StoreLocation",$param) and $param["StoreLocation"] !== null) {
            $this->StoreLocation = $param["StoreLocation"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
