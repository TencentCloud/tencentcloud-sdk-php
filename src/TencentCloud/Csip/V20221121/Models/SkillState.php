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
 * SKILL安装状态信息
 *
 * @method integer getSkillInstallStatus() 获取SKILL安装状态
枚举值：
0：未安装
1：安装中
2：已安装
3：安装失败
4：卸载中
5：卸载失败
 * @method void setSkillInstallStatus(integer $SkillInstallStatus) 设置SKILL安装状态
枚举值：
0：未安装
1：安装中
2：已安装
3：安装失败
4：卸载中
5：卸载失败
 * @method string getSkillInstallTime() 获取SKILL安装/卸载操作时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setSkillInstallTime(string $SkillInstallTime) 设置SKILL安装/卸载操作时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getSkillInstallResult() 获取SKILL安装/卸载结果描述信息
 * @method void setSkillInstallResult(string $SkillInstallResult) 设置SKILL安装/卸载结果描述信息
 */
class SkillState extends AbstractModel
{
    /**
     * @var integer SKILL安装状态
枚举值：
0：未安装
1：安装中
2：已安装
3：安装失败
4：卸载中
5：卸载失败
     */
    public $SkillInstallStatus;

    /**
     * @var string SKILL安装/卸载操作时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $SkillInstallTime;

    /**
     * @var string SKILL安装/卸载结果描述信息
     */
    public $SkillInstallResult;

    /**
     * @param integer $SkillInstallStatus SKILL安装状态
枚举值：
0：未安装
1：安装中
2：已安装
3：安装失败
4：卸载中
5：卸载失败
     * @param string $SkillInstallTime SKILL安装/卸载操作时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $SkillInstallResult SKILL安装/卸载结果描述信息
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
        if (array_key_exists("SkillInstallStatus",$param) and $param["SkillInstallStatus"] !== null) {
            $this->SkillInstallStatus = $param["SkillInstallStatus"];
        }

        if (array_key_exists("SkillInstallTime",$param) and $param["SkillInstallTime"] !== null) {
            $this->SkillInstallTime = $param["SkillInstallTime"];
        }

        if (array_key_exists("SkillInstallResult",$param) and $param["SkillInstallResult"] !== null) {
            $this->SkillInstallResult = $param["SkillInstallResult"];
        }
    }
}
