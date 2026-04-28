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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分析实例版本升级，升级之后用于灰度的连接信息
 *
 * @method string getVip() 获取<p>ip</p>
 * @method void setVip(string $Vip) 设置<p>ip</p>
 * @method integer getVport() 获取<p>端口</p>
 * @method void setVport(integer $Vport) 设置<p>端口</p>
 * @method string getEngineVersion() 获取<p>版本</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>版本</p>
 * @method integer getExpiredTime() 获取<p>到期时间</p>
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>到期时间</p>
 */
class UpgradeAnalysisInstanceVersionInfo extends AbstractModel
{
    /**
     * @var string <p>ip</p>
     */
    public $Vip;

    /**
     * @var integer <p>端口</p>
     */
    public $Vport;

    /**
     * @var string <p>版本</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>到期时间</p>
     */
    public $ExpiredTime;

    /**
     * @param string $Vip <p>ip</p>
     * @param integer $Vport <p>端口</p>
     * @param string $EngineVersion <p>版本</p>
     * @param integer $ExpiredTime <p>到期时间</p>
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
