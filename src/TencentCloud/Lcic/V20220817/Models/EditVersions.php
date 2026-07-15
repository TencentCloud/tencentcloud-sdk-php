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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑版本信息
 *
 * @method integer getVersion() 获取<p>版本号</p><p>取值范围：[0, 100]</p><p>默认值：0</p>
 * @method void setVersion(integer $Version) 设置<p>版本号</p><p>取值范围：[0, 100]</p><p>默认值：0</p>
 * @method string getStatus() 获取<p>版本状态</p><p>枚举值：</p><ul><li>READY： 已完成</li><li>FAILED： 失败</li><li>PROCESSING： 进行中</li></ul>
 * @method void setStatus(string $Status) 设置<p>版本状态</p><p>枚举值：</p><ul><li>READY： 已完成</li><li>FAILED： 失败</li><li>PROCESSING： 进行中</li></ul>
 * @method boolean getIsMain() 获取<p>是否是主版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setIsMain(boolean $IsMain) 设置<p>是否是主版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method boolean getIsSource() 获取<p>是否源头版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setIsSource(boolean $IsSource) 设置<p>是否源头版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method integer getKeepDurationSec() 获取<p>版本时长</p><p>取值范围：[0, 1000000]</p><p>单位：秒</p>
 * @method void setKeepDurationSec(integer $KeepDurationSec) 设置<p>版本时长</p><p>取值范围：[0, 1000000]</p><p>单位：秒</p>
 * @method integer getCreatedAtMs() 获取<p>创建时间</p><p>取值范围：[0, 10000000]</p>
 * @method void setCreatedAtMs(integer $CreatedAtMs) 设置<p>创建时间</p><p>取值范围：[0, 10000000]</p>
 * @method string getCreatorUserId() 获取<p>创建用户id</p>
 * @method void setCreatorUserId(string $CreatorUserId) 设置<p>创建用户id</p>
 * @method string getFailReason() 获取<p>失败原因</p><p>默认值：空</p><p>仅失败才会有原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p><p>默认值：空</p><p>仅失败才会有原因</p>
 * @method integer getUpdatedAtMs() 获取<p>更新时间</p><p>取值范围：[0, 100000]</p>
 * @method void setUpdatedAtMs(integer $UpdatedAtMs) 设置<p>更新时间</p><p>取值范围：[0, 100000]</p>
 * @method string getVersionName() 获取<p>版本名字</p>
 * @method void setVersionName(string $VersionName) 设置<p>版本名字</p>
 */
class EditVersions extends AbstractModel
{
    /**
     * @var integer <p>版本号</p><p>取值范围：[0, 100]</p><p>默认值：0</p>
     */
    public $Version;

    /**
     * @var string <p>版本状态</p><p>枚举值：</p><ul><li>READY： 已完成</li><li>FAILED： 失败</li><li>PROCESSING： 进行中</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>是否是主版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $IsMain;

    /**
     * @var boolean <p>是否源头版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $IsSource;

    /**
     * @var integer <p>版本时长</p><p>取值范围：[0, 1000000]</p><p>单位：秒</p>
     */
    public $KeepDurationSec;

    /**
     * @var integer <p>创建时间</p><p>取值范围：[0, 10000000]</p>
     */
    public $CreatedAtMs;

    /**
     * @var string <p>创建用户id</p>
     */
    public $CreatorUserId;

    /**
     * @var string <p>失败原因</p><p>默认值：空</p><p>仅失败才会有原因</p>
     */
    public $FailReason;

    /**
     * @var integer <p>更新时间</p><p>取值范围：[0, 100000]</p>
     */
    public $UpdatedAtMs;

    /**
     * @var string <p>版本名字</p>
     */
    public $VersionName;

    /**
     * @param integer $Version <p>版本号</p><p>取值范围：[0, 100]</p><p>默认值：0</p>
     * @param string $Status <p>版本状态</p><p>枚举值：</p><ul><li>READY： 已完成</li><li>FAILED： 失败</li><li>PROCESSING： 进行中</li></ul>
     * @param boolean $IsMain <p>是否是主版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param boolean $IsSource <p>是否源头版本</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param integer $KeepDurationSec <p>版本时长</p><p>取值范围：[0, 1000000]</p><p>单位：秒</p>
     * @param integer $CreatedAtMs <p>创建时间</p><p>取值范围：[0, 10000000]</p>
     * @param string $CreatorUserId <p>创建用户id</p>
     * @param string $FailReason <p>失败原因</p><p>默认值：空</p><p>仅失败才会有原因</p>
     * @param integer $UpdatedAtMs <p>更新时间</p><p>取值范围：[0, 100000]</p>
     * @param string $VersionName <p>版本名字</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsMain",$param) and $param["IsMain"] !== null) {
            $this->IsMain = $param["IsMain"];
        }

        if (array_key_exists("IsSource",$param) and $param["IsSource"] !== null) {
            $this->IsSource = $param["IsSource"];
        }

        if (array_key_exists("KeepDurationSec",$param) and $param["KeepDurationSec"] !== null) {
            $this->KeepDurationSec = $param["KeepDurationSec"];
        }

        if (array_key_exists("CreatedAtMs",$param) and $param["CreatedAtMs"] !== null) {
            $this->CreatedAtMs = $param["CreatedAtMs"];
        }

        if (array_key_exists("CreatorUserId",$param) and $param["CreatorUserId"] !== null) {
            $this->CreatorUserId = $param["CreatorUserId"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("UpdatedAtMs",$param) and $param["UpdatedAtMs"] !== null) {
            $this->UpdatedAtMs = $param["UpdatedAtMs"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }
    }
}
