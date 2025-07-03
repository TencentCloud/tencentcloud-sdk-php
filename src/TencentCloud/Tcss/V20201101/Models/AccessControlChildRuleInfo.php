<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器运行时安全，访问控制子策略信息
 *
 * @method string getRuleMode() 获取策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method void setRuleMode(string $RuleMode) 设置策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getTargetFilePath() 获取被访问文件路径，仅仅在访问控制生效
 * @method void setTargetFilePath(string $TargetFilePath) 设置被访问文件路径，仅仅在访问控制生效
 * @method string getRuleId() 获取子策略id
 * @method void setRuleId(string $RuleId) 设置子策略id
 */
class AccessControlChildRuleInfo extends AbstractModel
{
    /**
     * @var string 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     */
    public $RuleMode;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 被访问文件路径，仅仅在访问控制生效
     */
    public $TargetFilePath;

    /**
     * @var string 子策略id
     */
    public $RuleId;

    /**
     * @param string $RuleMode 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     * @param string $ProcessPath 进程路径
     * @param string $TargetFilePath 被访问文件路径，仅仅在访问控制生效
     * @param string $RuleId 子策略id
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
        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("TargetFilePath",$param) and $param["TargetFilePath"] !== null) {
            $this->TargetFilePath = $param["TargetFilePath"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
