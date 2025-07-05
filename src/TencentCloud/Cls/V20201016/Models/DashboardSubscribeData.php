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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘订阅相关数据
 *
 * @method array getNoticeModes() 获取仪表盘订阅通知方式。
 * @method void setNoticeModes(array $NoticeModes) 设置仪表盘订阅通知方式。
 * @method array getDashboardTime() 获取仪表盘订阅时间，为空标识取仪表盘默认的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardTime(array $DashboardTime) 设置仪表盘订阅时间，为空标识取仪表盘默认的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTemplateVariables() 获取仪表盘订阅模板变量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateVariables(array $TemplateVariables) 设置仪表盘订阅模板变量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimezone() 获取时区。参考：https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI
 * @method void setTimezone(string $Timezone) 设置时区。参考：https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI
 * @method string getSubscribeLanguage() 获取语言。 zh 中文、en`英文。
 * @method void setSubscribeLanguage(string $SubscribeLanguage) 设置语言。 zh 中文、en`英文。
 * @method string getJumpDomain() 获取调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method void setJumpDomain(string $JumpDomain) 设置调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method string getJumpUrl() 获取自定义跳转链接。
 * @method void setJumpUrl(string $JumpUrl) 设置自定义跳转链接。
 */
class DashboardSubscribeData extends AbstractModel
{
    /**
     * @var array 仪表盘订阅通知方式。
     */
    public $NoticeModes;

    /**
     * @var array 仪表盘订阅时间，为空标识取仪表盘默认的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardTime;

    /**
     * @var array 仪表盘订阅模板变量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateVariables;

    /**
     * @var string 时区。参考：https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI
     */
    public $Timezone;

    /**
     * @var string 语言。 zh 中文、en`英文。
     */
    public $SubscribeLanguage;

    /**
     * @var string 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     */
    public $JumpDomain;

    /**
     * @var string 自定义跳转链接。
     */
    public $JumpUrl;

    /**
     * @param array $NoticeModes 仪表盘订阅通知方式。
     * @param array $DashboardTime 仪表盘订阅时间，为空标识取仪表盘默认的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TemplateVariables 仪表盘订阅模板变量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timezone 时区。参考：https://en.wikipedia.org/wiki/List_of_tz_database_time_zones#SHANGHAI
     * @param string $SubscribeLanguage 语言。 zh 中文、en`英文。
     * @param string $JumpDomain 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     * @param string $JumpUrl 自定义跳转链接。
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
        if (array_key_exists("NoticeModes",$param) and $param["NoticeModes"] !== null) {
            $this->NoticeModes = [];
            foreach ($param["NoticeModes"] as $key => $value){
                $obj = new DashboardNoticeMode();
                $obj->deserialize($value);
                array_push($this->NoticeModes, $obj);
            }
        }

        if (array_key_exists("DashboardTime",$param) and $param["DashboardTime"] !== null) {
            $this->DashboardTime = $param["DashboardTime"];
        }

        if (array_key_exists("TemplateVariables",$param) and $param["TemplateVariables"] !== null) {
            $this->TemplateVariables = [];
            foreach ($param["TemplateVariables"] as $key => $value){
                $obj = new DashboardTemplateVariable();
                $obj->deserialize($value);
                array_push($this->TemplateVariables, $obj);
            }
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("SubscribeLanguage",$param) and $param["SubscribeLanguage"] !== null) {
            $this->SubscribeLanguage = $param["SubscribeLanguage"];
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
