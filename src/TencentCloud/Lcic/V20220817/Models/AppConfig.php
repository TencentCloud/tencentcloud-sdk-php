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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用配置信息
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method integer getState() 获取应用状态 1正常 2停用
 * @method void setState(integer $State) 设置应用状态 1正常 2停用
 * @method integer getAppVersion() 获取1试用 2轻量版 3标准版 4旗舰版
 * @method void setAppVersion(integer $AppVersion) 设置1试用 2轻量版 3标准版 4旗舰版
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getCallback() 获取回调
 * @method void setCallback(string $Callback) 设置回调
 * @method string getCallbackKey() 获取回调Key
 * @method void setCallbackKey(string $CallbackKey) 设置回调Key
 */
class AppConfig extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var integer 应用状态 1正常 2停用
     */
    public $State;

    /**
     * @var integer 1试用 2轻量版 3标准版 4旗舰版
     */
    public $AppVersion;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 回调
     */
    public $Callback;

    /**
     * @var string 回调Key
     */
    public $CallbackKey;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $AppName 应用名称
     * @param integer $State 应用状态 1正常 2停用
     * @param integer $AppVersion 1试用 2轻量版 3标准版 4旗舰版
     * @param string $CreatedAt 创建时间
     * @param string $Callback 回调
     * @param string $CallbackKey 回调Key
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }
    }
}
