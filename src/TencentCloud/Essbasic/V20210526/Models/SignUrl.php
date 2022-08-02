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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一码多扫签署二维码签署信息
 *
 * @method string getAppSignUrl() 获取小程序签署链接
 * @method void setAppSignUrl(string $AppSignUrl) 设置小程序签署链接
 * @method string getEffectiveTime() 获取签署链接有效时间
 * @method void setEffectiveTime(string $EffectiveTime) 设置签署链接有效时间
 * @method string getHttpSignUrl() 获取移动端签署链接
 * @method void setHttpSignUrl(string $HttpSignUrl) 设置移动端签署链接
 */
class SignUrl extends AbstractModel
{
    /**
     * @var string 小程序签署链接
     */
    public $AppSignUrl;

    /**
     * @var string 签署链接有效时间
     */
    public $EffectiveTime;

    /**
     * @var string 移动端签署链接
     */
    public $HttpSignUrl;

    /**
     * @param string $AppSignUrl 小程序签署链接
     * @param string $EffectiveTime 签署链接有效时间
     * @param string $HttpSignUrl 移动端签署链接
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
        if (array_key_exists("AppSignUrl",$param) and $param["AppSignUrl"] !== null) {
            $this->AppSignUrl = $param["AppSignUrl"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("HttpSignUrl",$param) and $param["HttpSignUrl"] !== null) {
            $this->HttpSignUrl = $param["HttpSignUrl"];
        }
    }
}
