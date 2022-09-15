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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyOrder请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getLicenseType() 获取授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method void setLicenseType(integer $LicenseType) 设置授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 */
class DestroyOrderRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
     */
    public $LicenseType;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $LicenseType 授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
