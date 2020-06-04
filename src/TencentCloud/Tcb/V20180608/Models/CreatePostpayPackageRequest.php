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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePostpayPackage请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getWxAppId() 获取微信 AppId，微信必传
 * @method void setWxAppId(string $WxAppId) 设置微信 AppId，微信必传
 * @method string getSource() 获取付费来源
<li>miniapp</li>
<li>qcloud</li>
 * @method void setSource(string $Source) 设置付费来源
<li>miniapp</li>
<li>qcloud</li>
 * @method string getFreeQuota() 获取用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method void setFreeQuota(string $FreeQuota) 设置用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method string getAlias() 获取环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 * @method void setAlias(string $Alias) 设置环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 * @method string getEnvSource() 获取环境创建来源，取值：
<li>miniapp</li>
<li>qcloud</li>
用法同CreateEnv接口的Source参数
 * @method void setEnvSource(string $EnvSource) 设置环境创建来源，取值：
<li>miniapp</li>
<li>qcloud</li>
用法同CreateEnv接口的Source参数
 * @method string getChannel() 获取如果envsource为miniapp, channel可以为ide或api;
如果envsource为qcloud, channel可以为qc_console,cocos, qq, cloudgame,dcloud
 * @method void setChannel(string $Channel) 设置如果envsource为miniapp, channel可以为ide或api;
如果envsource为qcloud, channel可以为qc_console,cocos, qq, cloudgame,dcloud
 */
class CreatePostpayPackageRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 微信 AppId，微信必传
     */
    public $WxAppId;

    /**
     * @var string 付费来源
<li>miniapp</li>
<li>qcloud</li>
     */
    public $Source;

    /**
     * @var string 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     */
    public $FreeQuota;

    /**
     * @var string 环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
     */
    public $Alias;

    /**
     * @var string 环境创建来源，取值：
<li>miniapp</li>
<li>qcloud</li>
用法同CreateEnv接口的Source参数
     */
    public $EnvSource;

    /**
     * @var string 如果envsource为miniapp, channel可以为ide或api;
如果envsource为qcloud, channel可以为qc_console,cocos, qq, cloudgame,dcloud
     */
    public $Channel;

    /**
     * @param string $EnvId 环境ID
     * @param string $WxAppId 微信 AppId，微信必传
     * @param string $Source 付费来源
<li>miniapp</li>
<li>qcloud</li>
     * @param string $FreeQuota 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     * @param string $Alias 环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
     * @param string $EnvSource 环境创建来源，取值：
<li>miniapp</li>
<li>qcloud</li>
用法同CreateEnv接口的Source参数
     * @param string $Channel 如果envsource为miniapp, channel可以为ide或api;
如果envsource为qcloud, channel可以为qc_console,cocos, qq, cloudgame,dcloud
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("EnvSource",$param) and $param["EnvSource"] !== null) {
            $this->EnvSource = $param["EnvSource"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
