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
 * 修改数据库内核版本任务信息
 *
 * @method string getOldVersion() 获取<p>修改前版本</p>
 * @method void setOldVersion(string $OldVersion) 设置<p>修改前版本</p>
 * @method string getNewVersion() 获取<p>修改后版本</p>
 * @method void setNewVersion(string $NewVersion) 设置<p>修改后版本</p>
 * @method string getUpgradeType() 获取<p>升级方式</p>
 * @method void setUpgradeType(string $UpgradeType) 设置<p>升级方式</p>
 */
class ModifyDbVersionData extends AbstractModel
{
    /**
     * @var string <p>修改前版本</p>
     */
    public $OldVersion;

    /**
     * @var string <p>修改后版本</p>
     */
    public $NewVersion;

    /**
     * @var string <p>升级方式</p>
     */
    public $UpgradeType;

    /**
     * @param string $OldVersion <p>修改前版本</p>
     * @param string $NewVersion <p>修改后版本</p>
     * @param string $UpgradeType <p>升级方式</p>
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
        if (array_key_exists("OldVersion",$param) and $param["OldVersion"] !== null) {
            $this->OldVersion = $param["OldVersion"];
        }

        if (array_key_exists("NewVersion",$param) and $param["NewVersion"] !== null) {
            $this->NewVersion = $param["NewVersion"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }
    }
}
