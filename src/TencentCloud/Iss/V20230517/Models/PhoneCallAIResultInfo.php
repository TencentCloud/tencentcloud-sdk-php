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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 打电话识别结果详情
 *
 * @method string getTime() 获取时间字符串
 * @method void setTime(string $Time) 设置时间字符串
 * @method string getUrl() 获取截图 URL
 * @method void setUrl(string $Url) 设置截图 URL
 * @method array getPhoneCallInfo() 获取打电话信息
 * @method void setPhoneCallInfo(array $PhoneCallInfo) 设置打电话信息
 */
class PhoneCallAIResultInfo extends AbstractModel
{
    /**
     * @var string 时间字符串
     */
    public $Time;

    /**
     * @var string 截图 URL
     */
    public $Url;

    /**
     * @var array 打电话信息
     */
    public $PhoneCallInfo;

    /**
     * @param string $Time 时间字符串
     * @param string $Url 截图 URL
     * @param array $PhoneCallInfo 打电话信息
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PhoneCallInfo",$param) and $param["PhoneCallInfo"] !== null) {
            $this->PhoneCallInfo = [];
            foreach ($param["PhoneCallInfo"] as $key => $value){
                $obj = new BaseAIResultInfo();
                $obj->deserialize($value);
                array_push($this->PhoneCallInfo, $obj);
            }
        }
    }
}
