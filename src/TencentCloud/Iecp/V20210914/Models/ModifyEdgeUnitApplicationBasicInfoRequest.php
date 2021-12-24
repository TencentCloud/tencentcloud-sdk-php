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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdgeUnitApplicationBasicInfo请求参数结构体
 *
 * @method ApplicationBasicInfo getBasicInfo() 获取应用基本信息
 * @method void setBasicInfo(ApplicationBasicInfo $BasicInfo) 设置应用基本信息
 * @method integer getEdgeUnitId() 获取单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置单元ID
 * @method integer getApplicationId() 获取应用ID
 * @method void setApplicationId(integer $ApplicationId) 设置应用ID
 */
class ModifyEdgeUnitApplicationBasicInfoRequest extends AbstractModel
{
    /**
     * @var ApplicationBasicInfo 应用基本信息
     */
    public $BasicInfo;

    /**
     * @var integer 单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer 应用ID
     */
    public $ApplicationId;

    /**
     * @param ApplicationBasicInfo $BasicInfo 应用基本信息
     * @param integer $EdgeUnitId 单元ID
     * @param integer $ApplicationId 应用ID
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new ApplicationBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
