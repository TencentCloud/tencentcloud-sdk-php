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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志开关详细信息
 *
 * @method boolean getEnable() 获取开启标识符 true代表开启
 * @method void setEnable(boolean $Enable) 设置开启标识符 true代表开启
 * @method string getErrorMsg() 获取获取日志状态失败时，返回错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置获取日志状态失败时，返回错误信息
 * @method string getLogsetId() 获取CLS日志集ID
 * @method void setLogsetId(string $LogsetId) 设置CLS日志集ID
 * @method string getStatus() 获取日志主题状态，opened表示已开启，opening开启中，closed表示已关闭，closing 表示关闭中
 * @method void setStatus(string $Status) 设置日志主题状态，opened表示已开启，opening开启中，closed表示已关闭，closing 表示关闭中
 * @method string getTopicId() 获取CLS日志主题ID
 * @method void setTopicId(string $TopicId) 设置CLS日志主题ID
 * @method string getTopicRegion() 获取CLS日志主题所属region
 * @method void setTopicRegion(string $TopicRegion) 设置CLS日志主题所属region
 * @method boolean getUpgradeAble() 获取是否可升级
 * @method void setUpgradeAble(boolean $UpgradeAble) 设置是否可升级
 * @method string getVersion() 获取当前log-agent版本
 * @method void setVersion(string $Version) 设置当前log-agent版本
 */
class SwitchInfo extends AbstractModel
{
    /**
     * @var boolean 开启标识符 true代表开启
     */
    public $Enable;

    /**
     * @var string 获取日志状态失败时，返回错误信息
     */
    public $ErrorMsg;

    /**
     * @var string CLS日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题状态，opened表示已开启，opening开启中，closed表示已关闭，closing 表示关闭中
     */
    public $Status;

    /**
     * @var string CLS日志主题ID
     */
    public $TopicId;

    /**
     * @var string CLS日志主题所属region
     */
    public $TopicRegion;

    /**
     * @var boolean 是否可升级
     */
    public $UpgradeAble;

    /**
     * @var string 当前log-agent版本
     */
    public $Version;

    /**
     * @param boolean $Enable 开启标识符 true代表开启
     * @param string $ErrorMsg 获取日志状态失败时，返回错误信息
     * @param string $LogsetId CLS日志集ID
     * @param string $Status 日志主题状态，opened表示已开启，opening开启中，closed表示已关闭，closing 表示关闭中
     * @param string $TopicId CLS日志主题ID
     * @param string $TopicRegion CLS日志主题所属region
     * @param boolean $UpgradeAble 是否可升级
     * @param string $Version 当前log-agent版本
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }

        if (array_key_exists("UpgradeAble",$param) and $param["UpgradeAble"] !== null) {
            $this->UpgradeAble = $param["UpgradeAble"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
