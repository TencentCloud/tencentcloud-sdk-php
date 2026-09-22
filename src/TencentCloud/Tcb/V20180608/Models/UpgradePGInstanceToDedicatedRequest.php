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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradePGInstanceToDedicated请求参数结构体
 *
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method integer getSwitchTag() 获取<p>切换时机</p><p>枚举值：</p><ul><li>0： 立即切换</li><li>1： 指定时间切换</li></ul>
 * @method void setSwitchTag(integer $SwitchTag) 设置<p>切换时机</p><p>枚举值：</p><ul><li>0： 立即切换</li><li>1： 指定时间切换</li></ul>
 * @method string getSwitchStartTime() 获取<p>切换开始时间</p><p>参数格式：15:04:05</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>切换开始时间</p><p>参数格式：15:04:05</p>
 * @method string getSwitchEndTime() 获取<p>切换结束时间</p><p>参数格式：15:04:05</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>切换结束时间</p><p>参数格式：15:04:05</p>
 * @method string getSpecCode() 获取<p>PG 规格</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>PG 规格</p>
 * @method integer getStorage() 获取<p>存储空间大小</p>
 * @method void setStorage(integer $Storage) 设置<p>存储空间大小</p>
 */
class UpgradePGInstanceToDedicatedRequest extends AbstractModel
{
    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var integer <p>切换时机</p><p>枚举值：</p><ul><li>0： 立即切换</li><li>1： 指定时间切换</li></ul>
     */
    public $SwitchTag;

    /**
     * @var string <p>切换开始时间</p><p>参数格式：15:04:05</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>切换结束时间</p><p>参数格式：15:04:05</p>
     */
    public $SwitchEndTime;

    /**
     * @var string <p>PG 规格</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>存储空间大小</p>
     */
    public $Storage;

    /**
     * @param string $EnvId <p>云开发环境ID</p>
     * @param integer $SwitchTag <p>切换时机</p><p>枚举值：</p><ul><li>0： 立即切换</li><li>1： 指定时间切换</li></ul>
     * @param string $SwitchStartTime <p>切换开始时间</p><p>参数格式：15:04:05</p>
     * @param string $SwitchEndTime <p>切换结束时间</p><p>参数格式：15:04:05</p>
     * @param string $SpecCode <p>PG 规格</p>
     * @param integer $Storage <p>存储空间大小</p>
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

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }
    }
}
