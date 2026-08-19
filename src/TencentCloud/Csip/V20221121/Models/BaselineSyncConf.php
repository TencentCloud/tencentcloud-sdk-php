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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团管理员侧的基线同步配置。
 *
 * @method boolean getAutoSync() 获取<p>是否开启向成员账号自动同步基线配置。true 开启，false 关闭。</p>
 * @method void setAutoSync(boolean $AutoSync) 设置<p>是否开启向成员账号自动同步基线配置。true 开启，false 关闭。</p>
 * @method array getTargetAppidList() 获取<p>自动同步的目标成员账号 Appid 列表，AutoSync=true 时生效。</p>
 * @method void setTargetAppidList(array $TargetAppidList) 设置<p>自动同步的目标成员账号 Appid 列表，AutoSync=true 时生效。</p>
 * @method array getUserConfList() 获取<p>用户配置列表</p>
 * @method void setUserConfList(array $UserConfList) 设置<p>用户配置列表</p>
 */
class BaselineSyncConf extends AbstractModel
{
    /**
     * @var boolean <p>是否开启向成员账号自动同步基线配置。true 开启，false 关闭。</p>
     */
    public $AutoSync;

    /**
     * @var array <p>自动同步的目标成员账号 Appid 列表，AutoSync=true 时生效。</p>
     */
    public $TargetAppidList;

    /**
     * @var array <p>用户配置列表</p>
     */
    public $UserConfList;

    /**
     * @param boolean $AutoSync <p>是否开启向成员账号自动同步基线配置。true 开启，false 关闭。</p>
     * @param array $TargetAppidList <p>自动同步的目标成员账号 Appid 列表，AutoSync=true 时生效。</p>
     * @param array $UserConfList <p>用户配置列表</p>
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
        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }

        if (array_key_exists("TargetAppidList",$param) and $param["TargetAppidList"] !== null) {
            $this->TargetAppidList = $param["TargetAppidList"];
        }

        if (array_key_exists("UserConfList",$param) and $param["UserConfList"] !== null) {
            $this->UserConfList = [];
            foreach ($param["UserConfList"] as $key => $value){
                $obj = new UserConfSyncStatus();
                $obj->deserialize($value);
                array_push($this->UserConfList, $obj);
            }
        }
    }
}
