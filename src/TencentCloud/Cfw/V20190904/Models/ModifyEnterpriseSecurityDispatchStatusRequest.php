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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnterpriseSecurityDispatchStatus请求参数结构体
 *
 * @method integer getStatus() 获取<p>0：打开立即下发开关；</p><p>1：关闭立即下发开关；</p><p>2：关闭立即下发开关情况下，触发开始下发</p>
 * @method void setStatus(integer $Status) 设置<p>0：打开立即下发开关；</p><p>1：关闭立即下发开关；</p><p>2：关闭立即下发开关情况下，触发开始下发</p>
 * @method integer getBindFallbackOnce() 获取<p>开启自动下发时，注明本次修改是否为空绑资产绑定兜底安全组</p>
 * @method void setBindFallbackOnce(integer $BindFallbackOnce) 设置<p>开启自动下发时，注明本次修改是否为空绑资产绑定兜底安全组</p>
 */
class ModifyEnterpriseSecurityDispatchStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>0：打开立即下发开关；</p><p>1：关闭立即下发开关；</p><p>2：关闭立即下发开关情况下，触发开始下发</p>
     */
    public $Status;

    /**
     * @var integer <p>开启自动下发时，注明本次修改是否为空绑资产绑定兜底安全组</p>
     */
    public $BindFallbackOnce;

    /**
     * @param integer $Status <p>0：打开立即下发开关；</p><p>1：关闭立即下发开关；</p><p>2：关闭立即下发开关情况下，触发开始下发</p>
     * @param integer $BindFallbackOnce <p>开启自动下发时，注明本次修改是否为空绑资产绑定兜底安全组</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindFallbackOnce",$param) and $param["BindFallbackOnce"] !== null) {
            $this->BindFallbackOnce = $param["BindFallbackOnce"];
        }
    }
}
