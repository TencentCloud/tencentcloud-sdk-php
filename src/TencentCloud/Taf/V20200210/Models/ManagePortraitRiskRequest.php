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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManagePortraitRisk请求参数结构体
 *
 * @method ManagePortraitRiskInput getBusinessSecurityData() 获取业务入参
 * @method void setBusinessSecurityData(ManagePortraitRiskInput $BusinessSecurityData) 设置业务入参
 */
class ManagePortraitRiskRequest extends AbstractModel
{
    /**
     * @var ManagePortraitRiskInput 业务入参
     */
    public $BusinessSecurityData;

    /**
     * @param ManagePortraitRiskInput $BusinessSecurityData 业务入参
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
        if (array_key_exists("BusinessSecurityData",$param) and $param["BusinessSecurityData"] !== null) {
            $this->BusinessSecurityData = new ManagePortraitRiskInput();
            $this->BusinessSecurityData->deserialize($param["BusinessSecurityData"]);
        }
    }
}
