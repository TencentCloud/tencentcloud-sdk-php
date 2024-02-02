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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险中心状态处理Key
 *
 * @method string getId() 获取风险ID
 * @method void setId(string $Id) 设置风险ID
 * @method string getPublicIPDomain() 获取公网IP/域名
 * @method void setPublicIPDomain(string $PublicIPDomain) 设置公网IP/域名
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAppId() 获取APP ID
 * @method void setAppId(string $AppId) 设置APP ID
 */
class RiskCenterStatusKey extends AbstractModel
{
    /**
     * @var string 风险ID
     */
    public $Id;

    /**
     * @var string 公网IP/域名
     */
    public $PublicIPDomain;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string APP ID
     */
    public $AppId;

    /**
     * @param string $Id 风险ID
     * @param string $PublicIPDomain 公网IP/域名
     * @param string $InstanceId 实例ID
     * @param string $AppId APP ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PublicIPDomain",$param) and $param["PublicIPDomain"] !== null) {
            $this->PublicIPDomain = $param["PublicIPDomain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
