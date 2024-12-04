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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPresetApplication请求参数结构体
 *
 * @method integer getApplicationId() 获取应用Id
 * @method void setApplicationId(integer $ApplicationId) 设置应用Id
 * @method string getAppName() 获取您的app名称
 * @method void setAppName(string $AppName) 设置您的app名称
 * @method string getBundleId() 获取ios包名
 * @method void setBundleId(string $BundleId) 设置ios包名
 * @method string getPackageName() 获取安卓包名
 * @method void setPackageName(string $PackageName) 设置安卓包名
 */
class ModifyPresetApplicationRequest extends AbstractModel
{
    /**
     * @var integer 应用Id
     */
    public $ApplicationId;

    /**
     * @var string 您的app名称
     */
    public $AppName;

    /**
     * @var string ios包名
     */
    public $BundleId;

    /**
     * @var string 安卓包名
     */
    public $PackageName;

    /**
     * @param integer $ApplicationId 应用Id
     * @param string $AppName 您的app名称
     * @param string $BundleId ios包名
     * @param string $PackageName 安卓包名
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
