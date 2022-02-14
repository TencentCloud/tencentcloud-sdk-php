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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC频率限制策略项字段
 *
 * @method integer getPeriod() 获取统计周期，可取值1，10，30，60，单位秒
 * @method void setPeriod(integer $Period) 设置统计周期，可取值1，10，30，60，单位秒
 * @method integer getRequestNum() 获取请求数，取值1~20000
 * @method void setRequestNum(integer $RequestNum) 设置请求数，取值1~20000
 * @method string getAction() 获取频率限制策略方式，可取值alg表示验证码，drop表示丢弃
 * @method void setAction(string $Action) 设置频率限制策略方式，可取值alg表示验证码，drop表示丢弃
 * @method integer getExecuteDuration() 获取频率限制策略时长，可取值1~86400，单位秒
 * @method void setExecuteDuration(integer $ExecuteDuration) 设置频率限制策略时长，可取值1~86400，单位秒
 * @method string getMode() 获取策略项比对方式，可取值include表示包含，equal表示等于
 * @method void setMode(string $Mode) 设置策略项比对方式，可取值include表示包含，equal表示等于
 * @method string getUri() 获取Uri，三个策略项仅可填其中之一
 * @method void setUri(string $Uri) 设置Uri，三个策略项仅可填其中之一
 * @method string getUserAgent() 获取User-Agent，三个策略项仅可填其中之一
 * @method void setUserAgent(string $UserAgent) 设置User-Agent，三个策略项仅可填其中之一
 * @method string getCookie() 获取Cookie，三个策略项仅可填其中之一
 * @method void setCookie(string $Cookie) 设置Cookie，三个策略项仅可填其中之一
 */
class CCReqLimitPolicyRecord extends AbstractModel
{
    /**
     * @var integer 统计周期，可取值1，10，30，60，单位秒
     */
    public $Period;

    /**
     * @var integer 请求数，取值1~20000
     */
    public $RequestNum;

    /**
     * @var string 频率限制策略方式，可取值alg表示验证码，drop表示丢弃
     */
    public $Action;

    /**
     * @var integer 频率限制策略时长，可取值1~86400，单位秒
     */
    public $ExecuteDuration;

    /**
     * @var string 策略项比对方式，可取值include表示包含，equal表示等于
     */
    public $Mode;

    /**
     * @var string Uri，三个策略项仅可填其中之一
     */
    public $Uri;

    /**
     * @var string User-Agent，三个策略项仅可填其中之一
     */
    public $UserAgent;

    /**
     * @var string Cookie，三个策略项仅可填其中之一
     */
    public $Cookie;

    /**
     * @param integer $Period 统计周期，可取值1，10，30，60，单位秒
     * @param integer $RequestNum 请求数，取值1~20000
     * @param string $Action 频率限制策略方式，可取值alg表示验证码，drop表示丢弃
     * @param integer $ExecuteDuration 频率限制策略时长，可取值1~86400，单位秒
     * @param string $Mode 策略项比对方式，可取值include表示包含，equal表示等于
     * @param string $Uri Uri，三个策略项仅可填其中之一
     * @param string $UserAgent User-Agent，三个策略项仅可填其中之一
     * @param string $Cookie Cookie，三个策略项仅可填其中之一
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ExecuteDuration",$param) and $param["ExecuteDuration"] !== null) {
            $this->ExecuteDuration = $param["ExecuteDuration"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }
    }
}
