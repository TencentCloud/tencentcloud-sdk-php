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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证码请求趋势图obj
 *
 * @method string getFtime() 获取时间参数
 * @method void setFtime(string $Ftime) 设置时间参数
 * @method integer getRequestAction() 获取请求量
 * @method void setRequestAction(integer $RequestAction) 设置请求量
 * @method integer getRequestVerify() 获取验证量
 * @method void setRequestVerify(integer $RequestVerify) 设置验证量
 * @method integer getRequestThroughput() 获取通过量
 * @method void setRequestThroughput(integer $RequestThroughput) 设置通过量
 * @method integer getRequestIntercept() 获取拦截量
 * @method void setRequestIntercept(integer $RequestIntercept) 设置拦截量
 */
class RequestTrendObj extends AbstractModel
{
    /**
     * @var string 时间参数
     */
    public $Ftime;

    /**
     * @var integer 请求量
     */
    public $RequestAction;

    /**
     * @var integer 验证量
     */
    public $RequestVerify;

    /**
     * @var integer 通过量
     */
    public $RequestThroughput;

    /**
     * @var integer 拦截量
     */
    public $RequestIntercept;

    /**
     * @param string $Ftime 时间参数
     * @param integer $RequestAction 请求量
     * @param integer $RequestVerify 验证量
     * @param integer $RequestThroughput 通过量
     * @param integer $RequestIntercept 拦截量
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
        if (array_key_exists("Ftime",$param) and $param["Ftime"] !== null) {
            $this->Ftime = $param["Ftime"];
        }

        if (array_key_exists("RequestAction",$param) and $param["RequestAction"] !== null) {
            $this->RequestAction = $param["RequestAction"];
        }

        if (array_key_exists("RequestVerify",$param) and $param["RequestVerify"] !== null) {
            $this->RequestVerify = $param["RequestVerify"];
        }

        if (array_key_exists("RequestThroughput",$param) and $param["RequestThroughput"] !== null) {
            $this->RequestThroughput = $param["RequestThroughput"];
        }

        if (array_key_exists("RequestIntercept",$param) and $param["RequestIntercept"] !== null) {
            $this->RequestIntercept = $param["RequestIntercept"];
        }
    }
}
