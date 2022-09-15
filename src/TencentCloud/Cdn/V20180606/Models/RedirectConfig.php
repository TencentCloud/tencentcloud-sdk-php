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
 * 自定义回源302 follow请求host配置
 *
 * @method string getSwitch() 获取配置开关
 * @method void setSwitch(string $Switch) 设置配置开关
 * @method string getFollowRedirectHost() 获取主源站follow302请求时带的自定义的host头部
 * @method void setFollowRedirectHost(string $FollowRedirectHost) 设置主源站follow302请求时带的自定义的host头部
 * @method string getFollowRedirectBackupHost() 获取备份源站follow302请求时带的自定义的host头部
 * @method void setFollowRedirectBackupHost(string $FollowRedirectBackupHost) 设置备份源站follow302请求时带的自定义的host头部
 */
class RedirectConfig extends AbstractModel
{
    /**
     * @var string 配置开关
     */
    public $Switch;

    /**
     * @var string 主源站follow302请求时带的自定义的host头部
     */
    public $FollowRedirectHost;

    /**
     * @var string 备份源站follow302请求时带的自定义的host头部
     */
    public $FollowRedirectBackupHost;

    /**
     * @param string $Switch 配置开关
     * @param string $FollowRedirectHost 主源站follow302请求时带的自定义的host头部
     * @param string $FollowRedirectBackupHost 备份源站follow302请求时带的自定义的host头部
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FollowRedirectHost",$param) and $param["FollowRedirectHost"] !== null) {
            $this->FollowRedirectHost = $param["FollowRedirectHost"];
        }

        if (array_key_exists("FollowRedirectBackupHost",$param) and $param["FollowRedirectBackupHost"] !== null) {
            $this->FollowRedirectBackupHost = $param["FollowRedirectBackupHost"];
        }
    }
}
