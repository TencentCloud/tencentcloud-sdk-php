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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用操作信息
 *
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getCreatorUin() 获取创建人UIN
 * @method void setCreatorUin(string $CreatorUin) 设置创建人UIN
 * @method string getCreatorUserAccount() 获取创建人账号(私有化场景使用)
 * @method void setCreatorUserAccount(string $CreatorUserAccount) 设置创建人账号(私有化场景使用)
 * @method string getUpdateTime() 获取修改时间 (Unix时间戳,秒级)
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间 (Unix时间戳,秒级)
 * @method string getUpdater() 获取最后修改人
 * @method void setUpdater(string $Updater) 设置最后修改人
 * @method string getUpdaterUin() 获取修改人UIN
 * @method void setUpdaterUin(string $UpdaterUin) 设置修改人UIN
 */
class AppOperation extends AbstractModel
{
    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 创建人UIN
     */
    public $CreatorUin;

    /**
     * @var string 创建人账号(私有化场景使用)
     */
    public $CreatorUserAccount;

    /**
     * @var string 修改时间 (Unix时间戳,秒级)
     */
    public $UpdateTime;

    /**
     * @var string 最后修改人
     */
    public $Updater;

    /**
     * @var string 修改人UIN
     */
    public $UpdaterUin;

    /**
     * @param string $Creator 创建人
     * @param string $CreatorUin 创建人UIN
     * @param string $CreatorUserAccount 创建人账号(私有化场景使用)
     * @param string $UpdateTime 修改时间 (Unix时间戳,秒级)
     * @param string $Updater 最后修改人
     * @param string $UpdaterUin 修改人UIN
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreatorUserAccount",$param) and $param["CreatorUserAccount"] !== null) {
            $this->CreatorUserAccount = $param["CreatorUserAccount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }

        if (array_key_exists("UpdaterUin",$param) and $param["UpdaterUin"] !== null) {
            $this->UpdaterUin = $param["UpdaterUin"];
        }
    }
}
