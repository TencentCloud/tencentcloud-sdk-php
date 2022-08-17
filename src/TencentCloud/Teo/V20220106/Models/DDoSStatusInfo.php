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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS封禁等级
 *
 * @method string getAiStatus() 获取暂不支持，默认值off。
 * @method void setAiStatus(string $AiStatus) 设置暂不支持，默认值off。
 * @method string getAppid() 获取废弃字段。
 * @method void setAppid(string $Appid) 设置废弃字段。
 * @method string getPlyLevel() 获取策略等级，取值有:
<li>low ：宽松 ；</li>
<li>middle ：适中 ；</li>
<li>high : 严格。 </li>
 * @method void setPlyLevel(string $PlyLevel) 设置策略等级，取值有:
<li>low ：宽松 ；</li>
<li>middle ：适中 ；</li>
<li>high : 严格。 </li>
 */
class DDoSStatusInfo extends AbstractModel
{
    /**
     * @var string 暂不支持，默认值off。
     */
    public $AiStatus;

    /**
     * @var string 废弃字段。
     */
    public $Appid;

    /**
     * @var string 策略等级，取值有:
<li>low ：宽松 ；</li>
<li>middle ：适中 ；</li>
<li>high : 严格。 </li>
     */
    public $PlyLevel;

    /**
     * @param string $AiStatus 暂不支持，默认值off。
     * @param string $Appid 废弃字段。
     * @param string $PlyLevel 策略等级，取值有:
<li>low ：宽松 ；</li>
<li>middle ：适中 ；</li>
<li>high : 严格。 </li>
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
        if (array_key_exists("AiStatus",$param) and $param["AiStatus"] !== null) {
            $this->AiStatus = $param["AiStatus"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("PlyLevel",$param) and $param["PlyLevel"] !== null) {
            $this->PlyLevel = $param["PlyLevel"];
        }
    }
}
