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
 * @method string getOldVersion() 获取修改前版本
 * @method void setOldVersion(string $OldVersion) 设置修改前版本
 * @method string getNewVersion() 获取修改后版本
 * @method void setNewVersion(string $NewVersion) 设置修改后版本
 * @method string getUpgradeType() 获取升级方式
 * @method void setUpgradeType(string $UpgradeType) 设置升级方式
 */
class ModifyDbVersionData extends AbstractModel
{
    /**
     * @var string 修改前版本
     */
    public $OldVersion;

    /**
     * @var string 修改后版本
     */
    public $NewVersion;

    /**
     * @var string 升级方式
     */
    public $UpgradeType;

    /**
     * @param string $OldVersion 修改前版本
     * @param string $NewVersion 修改后版本
     * @param string $UpgradeType 升级方式
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
