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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDiagnoseUrl请求参数结构体
 *
 * @method string getUrl() 获取需诊断的url，形如：http://www.test.com/test.txt。
 * @method void setUrl(string $Url) 设置需诊断的url，形如：http://www.test.com/test.txt。
 * @method string getOrigin() 获取请求源带协议头，形如：https://console.cloud.tencent.com
 * @method void setOrigin(string $Origin) 设置请求源带协议头，形如：https://console.cloud.tencent.com
 */
class CreateDiagnoseUrlRequest extends AbstractModel
{
    /**
     * @var string 需诊断的url，形如：http://www.test.com/test.txt。
     */
    public $Url;

    /**
     * @var string 请求源带协议头，形如：https://console.cloud.tencent.com
     */
    public $Origin;

    /**
     * @param string $Url 需诊断的url，形如：http://www.test.com/test.txt。
     * @param string $Origin 请求源带协议头，形如：https://console.cloud.tencent.com
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }
    }
}
