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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志配置
 *
 * @method string getConfigId() 获取配置项ID
 * @method void setConfigId(string $ConfigId) 设置配置项ID
 * @method string getConfigName() 获取配置项名称
 * @method void setConfigName(string $ConfigName) 设置配置项名称
 * @method string getConfigPath() 获取配置项日志路径
 * @method void setConfigPath(string $ConfigPath) 设置配置项日志路径
 * @method string getConfigDesc() 获取配置项描述
 * @method void setConfigDesc(string $ConfigDesc) 设置配置项描述
 * @method string getConfigTags() 获取配置项标签
 * @method void setConfigTags(string $ConfigTags) 设置配置项标签
 * @method string getConfigPipeline() 获取配置项对应的ES管道
 * @method void setConfigPipeline(string $ConfigPipeline) 设置配置项对应的ES管道
 * @method string getConfigCreateTime() 获取配置项创建时间，格式为yyyy-MM-dd HH:mm:ss
 * @method void setConfigCreateTime(string $ConfigCreateTime) 设置配置项创建时间，格式为yyyy-MM-dd HH:mm:ss
 * @method string getConfigUpdateTime() 获取配置项更新时间，格式为yyyy-MM-dd HH:mm:ss
 * @method void setConfigUpdateTime(string $ConfigUpdateTime) 设置配置项更新时间，格式为yyyy-MM-dd HH:mm:ss
 * @method BusinessLogConfigSchema getConfigSchema() 获取配置项解析规则
 * @method void setConfigSchema(BusinessLogConfigSchema $ConfigSchema) 设置配置项解析规则
 * @method array getConfigAssociatedGroups() 获取配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigAssociatedGroups(array $ConfigAssociatedGroups) 设置配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigAssociatedGroupList() 获取配置项关联部署组
 * @method void setConfigAssociatedGroupList(array $ConfigAssociatedGroupList) 设置配置项关联部署组
 * @method boolean getFilebeatConfigEnable() 获取是否开启filebeat高级配置开关
 * @method void setFilebeatConfigEnable(boolean $FilebeatConfigEnable) 设置是否开启filebeat高级配置开关
 * @method integer getFilebeatCloseTimeout() 获取close_timeout参数
 * @method void setFilebeatCloseTimeout(integer $FilebeatCloseTimeout) 设置close_timeout参数
 * @method integer getFilebeatIgnoreOlder() 获取filebeat ignore_older参数
 * @method void setFilebeatIgnoreOlder(integer $FilebeatIgnoreOlder) 设置filebeat ignore_older参数
 * @method integer getFilebeatHarvesterLimit() 获取filebeat harvester_limit参数
 * @method void setFilebeatHarvesterLimit(integer $FilebeatHarvesterLimit) 设置filebeat harvester_limit参数
 * @method integer getFilebeatCloseInactive() 获取filebeat close_inactive参数
 * @method void setFilebeatCloseInactive(integer $FilebeatCloseInactive) 设置filebeat close_inactive参数
 * @method integer getFilebeatCleanInactive() 获取filebeat clean_inactive参数
 * @method void setFilebeatCleanInactive(integer $FilebeatCleanInactive) 设置filebeat clean_inactive参数
 * @method boolean getCustomMultilinePattern() 获取是否开启自定义pattern
 * @method void setCustomMultilinePattern(boolean $CustomMultilinePattern) 设置是否开启自定义pattern
 */
class BusinessLogConfig extends AbstractModel
{
    /**
     * @var string 配置项ID
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
     */
    public $ConfigName;

    /**
     * @var string 配置项日志路径
     */
    public $ConfigPath;

    /**
     * @var string 配置项描述
     */
    public $ConfigDesc;

    /**
     * @var string 配置项标签
     */
    public $ConfigTags;

    /**
     * @var string 配置项对应的ES管道
     */
    public $ConfigPipeline;

    /**
     * @var string 配置项创建时间，格式为yyyy-MM-dd HH:mm:ss
     */
    public $ConfigCreateTime;

    /**
     * @var string 配置项更新时间，格式为yyyy-MM-dd HH:mm:ss
     */
    public $ConfigUpdateTime;

    /**
     * @var BusinessLogConfigSchema 配置项解析规则
     */
    public $ConfigSchema;

    /**
     * @var array 配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ConfigAssociatedGroups;

    /**
     * @var array 配置项关联部署组
     */
    public $ConfigAssociatedGroupList;

    /**
     * @var boolean 是否开启filebeat高级配置开关
     */
    public $FilebeatConfigEnable;

    /**
     * @var integer close_timeout参数
     */
    public $FilebeatCloseTimeout;

    /**
     * @var integer filebeat ignore_older参数
     */
    public $FilebeatIgnoreOlder;

    /**
     * @var integer filebeat harvester_limit参数
     */
    public $FilebeatHarvesterLimit;

    /**
     * @var integer filebeat close_inactive参数
     */
    public $FilebeatCloseInactive;

    /**
     * @var integer filebeat clean_inactive参数
     */
    public $FilebeatCleanInactive;

    /**
     * @var boolean 是否开启自定义pattern
     */
    public $CustomMultilinePattern;

    /**
     * @param string $ConfigId 配置项ID
     * @param string $ConfigName 配置项名称
     * @param string $ConfigPath 配置项日志路径
     * @param string $ConfigDesc 配置项描述
     * @param string $ConfigTags 配置项标签
     * @param string $ConfigPipeline 配置项对应的ES管道
     * @param string $ConfigCreateTime 配置项创建时间，格式为yyyy-MM-dd HH:mm:ss
     * @param string $ConfigUpdateTime 配置项更新时间，格式为yyyy-MM-dd HH:mm:ss
     * @param BusinessLogConfigSchema $ConfigSchema 配置项解析规则
     * @param array $ConfigAssociatedGroups 配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConfigAssociatedGroupList 配置项关联部署组
     * @param boolean $FilebeatConfigEnable 是否开启filebeat高级配置开关
     * @param integer $FilebeatCloseTimeout close_timeout参数
     * @param integer $FilebeatIgnoreOlder filebeat ignore_older参数
     * @param integer $FilebeatHarvesterLimit filebeat harvester_limit参数
     * @param integer $FilebeatCloseInactive filebeat close_inactive参数
     * @param integer $FilebeatCleanInactive filebeat clean_inactive参数
     * @param boolean $CustomMultilinePattern 是否开启自定义pattern
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("ConfigDesc",$param) and $param["ConfigDesc"] !== null) {
            $this->ConfigDesc = $param["ConfigDesc"];
        }

        if (array_key_exists("ConfigTags",$param) and $param["ConfigTags"] !== null) {
            $this->ConfigTags = $param["ConfigTags"];
        }

        if (array_key_exists("ConfigPipeline",$param) and $param["ConfigPipeline"] !== null) {
            $this->ConfigPipeline = $param["ConfigPipeline"];
        }

        if (array_key_exists("ConfigCreateTime",$param) and $param["ConfigCreateTime"] !== null) {
            $this->ConfigCreateTime = $param["ConfigCreateTime"];
        }

        if (array_key_exists("ConfigUpdateTime",$param) and $param["ConfigUpdateTime"] !== null) {
            $this->ConfigUpdateTime = $param["ConfigUpdateTime"];
        }

        if (array_key_exists("ConfigSchema",$param) and $param["ConfigSchema"] !== null) {
            $this->ConfigSchema = new BusinessLogConfigSchema();
            $this->ConfigSchema->deserialize($param["ConfigSchema"]);
        }

        if (array_key_exists("ConfigAssociatedGroups",$param) and $param["ConfigAssociatedGroups"] !== null) {
            $this->ConfigAssociatedGroups = [];
            foreach ($param["ConfigAssociatedGroups"] as $key => $value){
                $obj = new BusinesLogConfigAssociatedGroup();
                $obj->deserialize($value);
                array_push($this->ConfigAssociatedGroups, $obj);
            }
        }

        if (array_key_exists("ConfigAssociatedGroupList",$param) and $param["ConfigAssociatedGroupList"] !== null) {
            $this->ConfigAssociatedGroupList = [];
            foreach ($param["ConfigAssociatedGroupList"] as $key => $value){
                $obj = new BusinessLogConfigAssociatedGroup();
                $obj->deserialize($value);
                array_push($this->ConfigAssociatedGroupList, $obj);
            }
        }

        if (array_key_exists("FilebeatConfigEnable",$param) and $param["FilebeatConfigEnable"] !== null) {
            $this->FilebeatConfigEnable = $param["FilebeatConfigEnable"];
        }

        if (array_key_exists("FilebeatCloseTimeout",$param) and $param["FilebeatCloseTimeout"] !== null) {
            $this->FilebeatCloseTimeout = $param["FilebeatCloseTimeout"];
        }

        if (array_key_exists("FilebeatIgnoreOlder",$param) and $param["FilebeatIgnoreOlder"] !== null) {
            $this->FilebeatIgnoreOlder = $param["FilebeatIgnoreOlder"];
        }

        if (array_key_exists("FilebeatHarvesterLimit",$param) and $param["FilebeatHarvesterLimit"] !== null) {
            $this->FilebeatHarvesterLimit = $param["FilebeatHarvesterLimit"];
        }

        if (array_key_exists("FilebeatCloseInactive",$param) and $param["FilebeatCloseInactive"] !== null) {
            $this->FilebeatCloseInactive = $param["FilebeatCloseInactive"];
        }

        if (array_key_exists("FilebeatCleanInactive",$param) and $param["FilebeatCleanInactive"] !== null) {
            $this->FilebeatCleanInactive = $param["FilebeatCleanInactive"];
        }

        if (array_key_exists("CustomMultilinePattern",$param) and $param["CustomMultilinePattern"] !== null) {
            $this->CustomMultilinePattern = $param["CustomMultilinePattern"];
        }
    }
}
