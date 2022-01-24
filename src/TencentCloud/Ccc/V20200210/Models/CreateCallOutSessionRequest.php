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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCallOutSession请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID
 * @method string getUserId() 获取客服用户 ID，一般为客服邮箱
 * @method void setUserId(string $UserId) 设置客服用户 ID，一般为客服邮箱
 * @method string getCallee() 获取被叫号码，须带 0086 前缀
 * @method void setCallee(string $Callee) 设置被叫号码，须带 0086 前缀
 * @method string getCaller() 获取主叫号码，须带 0086 前缀
 * @method void setCaller(string $Caller) 设置主叫号码，须带 0086 前缀
 * @method boolean getIsForceUseMobile() 获取是否强制使用手机外呼，当前只支持 true，若为 true 请确保已配置白名单
 * @method void setIsForceUseMobile(boolean $IsForceUseMobile) 设置是否强制使用手机外呼，当前只支持 true，若为 true 请确保已配置白名单
 * @method string getUui() 获取自定义数据，长度限制 1024 字节
 * @method void setUui(string $Uui) 设置自定义数据，长度限制 1024 字节
 */
class CreateCallOutSessionRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID
     */
    public $SdkAppId;

    /**
     * @var string 客服用户 ID，一般为客服邮箱
     */
    public $UserId;

    /**
     * @var string 被叫号码，须带 0086 前缀
     */
    public $Callee;

    /**
     * @var string 主叫号码，须带 0086 前缀
     */
    public $Caller;

    /**
     * @var boolean 是否强制使用手机外呼，当前只支持 true，若为 true 请确保已配置白名单
     */
    public $IsForceUseMobile;

    /**
     * @var string 自定义数据，长度限制 1024 字节
     */
    public $Uui;

    /**
     * @param integer $SdkAppId 应用 ID
     * @param string $UserId 客服用户 ID，一般为客服邮箱
     * @param string $Callee 被叫号码，须带 0086 前缀
     * @param string $Caller 主叫号码，须带 0086 前缀
     * @param boolean $IsForceUseMobile 是否强制使用手机外呼，当前只支持 true，若为 true 请确保已配置白名单
     * @param string $Uui 自定义数据，长度限制 1024 字节
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("IsForceUseMobile",$param) and $param["IsForceUseMobile"] !== null) {
            $this->IsForceUseMobile = $param["IsForceUseMobile"];
        }

        if (array_key_exists("Uui",$param) and $param["Uui"] !== null) {
            $this->Uui = $param["Uui"];
        }
    }
}
