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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名配置信息
 *
 * @method integer getAppId() 获取腾讯云账号ID
 * @method void setAppId(integer $AppId) 设置腾讯云账号ID
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getStatus() 获取加速服务状态
process：部署中
online：已启动
offline：已关闭
 * @method void setStatus(string $Status) 设置加速服务状态
process：部署中
online：已启动
offline：已关闭
 * @method string getHost() 获取域名
 * @method void setHost(string $Host) 设置域名
 */
class DetailHost extends AbstractModel
{
    /**
     * @var integer 腾讯云账号ID
     */
    public $AppId;

    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 加速服务状态
process：部署中
online：已启动
offline：已关闭
     */
    public $Status;

    /**
     * @var string 域名
     */
    public $Host;

    /**
     * @param integer $AppId 腾讯云账号ID
     * @param string $ZoneId 站点ID
     * @param string $Status 加速服务状态
process：部署中
online：已启动
offline：已关闭
     * @param string $Host 域名
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
