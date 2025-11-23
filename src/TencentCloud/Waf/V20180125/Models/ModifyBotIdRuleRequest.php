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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBotIdRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method array getData() 获取配置信息，支持批量
 * @method void setData(array $Data) 设置配置信息，支持批量
 * @method integer getGlobalSwitch() 获取0-全局设置不生效 1-全局开关配置字段生效 2-全局动作配置字段生效 3-全局开关和动作字段都生效 4-只修改全局重定向路径 5-只修改全局防护等级
 * @method void setGlobalSwitch(integer $GlobalSwitch) 设置0-全局设置不生效 1-全局开关配置字段生效 2-全局动作配置字段生效 3-全局开关和动作字段都生效 4-只修改全局重定向路径 5-只修改全局防护等级
 * @method boolean getStatus() 获取全局开关
 * @method void setStatus(boolean $Status) 设置全局开关
 * @method string getRuleAction() 获取全局动作
 * @method void setRuleAction(string $RuleAction) 设置全局动作
 * @method string getGlobalRedirect() 获取全局重定向路径
 * @method void setGlobalRedirect(string $GlobalRedirect) 设置全局重定向路径
 * @method string getProtectLevel() 获取防护等级：normal-正常；strict-严格
 * @method void setProtectLevel(string $ProtectLevel) 设置防护等级：normal-正常；strict-严格
 */
class ModifyBotIdRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var array 配置信息，支持批量
     */
    public $Data;

    /**
     * @var integer 0-全局设置不生效 1-全局开关配置字段生效 2-全局动作配置字段生效 3-全局开关和动作字段都生效 4-只修改全局重定向路径 5-只修改全局防护等级
     */
    public $GlobalSwitch;

    /**
     * @var boolean 全局开关
     */
    public $Status;

    /**
     * @var string 全局动作
     */
    public $RuleAction;

    /**
     * @var string 全局重定向路径
     */
    public $GlobalRedirect;

    /**
     * @var string 防护等级：normal-正常；strict-严格
     */
    public $ProtectLevel;

    /**
     * @param string $Domain 域名
     * @param string $SceneId 场景ID
     * @param array $Data 配置信息，支持批量
     * @param integer $GlobalSwitch 0-全局设置不生效 1-全局开关配置字段生效 2-全局动作配置字段生效 3-全局开关和动作字段都生效 4-只修改全局重定向路径 5-只修改全局防护等级
     * @param boolean $Status 全局开关
     * @param string $RuleAction 全局动作
     * @param string $GlobalRedirect 全局重定向路径
     * @param string $ProtectLevel 防护等级：normal-正常；strict-严格
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new BotIdConfig();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("GlobalSwitch",$param) and $param["GlobalSwitch"] !== null) {
            $this->GlobalSwitch = $param["GlobalSwitch"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("GlobalRedirect",$param) and $param["GlobalRedirect"] !== null) {
            $this->GlobalRedirect = $param["GlobalRedirect"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }
    }
}
