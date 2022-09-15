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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWafAutoDenyStatus请求参数结构体
 *
 * @method AutoDenyDetail getWafAutoDenyDetails() 获取WAF 自动封禁配置项
 * @method void setWafAutoDenyDetails(AutoDenyDetail $WafAutoDenyDetails) 设置WAF 自动封禁配置项
 */
class ModifyWafAutoDenyStatusRequest extends AbstractModel
{
    /**
     * @var AutoDenyDetail WAF 自动封禁配置项
     */
    public $WafAutoDenyDetails;

    /**
     * @param AutoDenyDetail $WafAutoDenyDetails WAF 自动封禁配置项
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
        if (array_key_exists("WafAutoDenyDetails",$param) and $param["WafAutoDenyDetails"] !== null) {
            $this->WafAutoDenyDetails = new AutoDenyDetail();
            $this->WafAutoDenyDetails->deserialize($param["WafAutoDenyDetails"]);
        }
    }
}
