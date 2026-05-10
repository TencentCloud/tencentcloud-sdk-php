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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分析引擎实例版本升级信息
 *
 * @method string getVip() 获取<p>版本升级灰度ip</p>
 * @method void setVip(string $Vip) 设置<p>版本升级灰度ip</p>
 * @method integer getVport() 获取<p>版本升级灰度port</p>
 * @method void setVport(integer $Vport) 设置<p>版本升级灰度port</p>
 * @method string getEngineVersion() 获取<p>升级之后版本</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>升级之后版本</p>
 * @method integer getExpireTime() 获取<p>实例升级灰度事件</p><p>单位：天</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例升级灰度事件</p><p>单位：天</p>
 */
class UpgradeAnalysisInstanceVersionInfo extends AbstractModel
{
    /**
     * @var string <p>版本升级灰度ip</p>
     */
    public $Vip;

    /**
     * @var integer <p>版本升级灰度port</p>
     */
    public $Vport;

    /**
     * @var string <p>升级之后版本</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>实例升级灰度事件</p><p>单位：天</p>
     */
    public $ExpireTime;

    /**
     * @param string $Vip <p>版本升级灰度ip</p>
     * @param integer $Vport <p>版本升级灰度port</p>
     * @param string $EngineVersion <p>升级之后版本</p>
     * @param integer $ExpireTime <p>实例升级灰度事件</p><p>单位：天</p>
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
