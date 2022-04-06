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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS日志
 *
 * @method string getContent() 获取日志内容
 * @method void setContent(string $Content) 设置日志内容
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getRequestId() 获取请求ID
 * @method void setRequestId(string $RequestId) 设置请求ID
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method string getScene() 获取模块
 * @method void setScene(string $Scene) 设置模块
 * @method string getTime() 获取日志时间
 * @method void setTime(string $Time) 设置日志时间
 * @method string getUserid() 获取腾讯云账号
 * @method void setUserid(string $Userid) 设置腾讯云账号
 */
class CLSLogItem extends AbstractModel
{
    /**
     * @var string 日志内容
     */
    public $Content;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 请求ID
     */
    public $RequestId;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var string 模块
     */
    public $Scene;

    /**
     * @var string 日志时间
     */
    public $Time;

    /**
     * @var string 腾讯云账号
     */
    public $Userid;

    /**
     * @param string $Content 日志内容
     * @param string $DeviceName 设备名称
     * @param string $ProductId 产品ID
     * @param string $RequestId 请求ID
     * @param string $Result 结果
     * @param string $Scene 模块
     * @param string $Time 日志时间
     * @param string $Userid 腾讯云账号
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Userid",$param) and $param["Userid"] !== null) {
            $this->Userid = $param["Userid"];
        }
    }
}
