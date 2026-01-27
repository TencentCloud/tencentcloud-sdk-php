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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本保留策略
 *
 * @method integer getRetentionId() 获取<p>版本保留策略Id</p>
 * @method void setRetentionId(integer $RetentionId) 设置<p>版本保留策略Id</p>
 * @method string getNamespaceName() 获取<p>命名空间的名称</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间的名称</p>
 * @method array getRetentionRuleList() 获取<p>规则列表</p>
 * @method void setRetentionRuleList(array $RetentionRuleList) 设置<p>规则列表</p>
 * @method array getAdvancedRuleItems() 获取<p>高级保留规则列表</p>
 * @method void setAdvancedRuleItems(array $AdvancedRuleItems) 设置<p>高级保留规则列表</p>
 * @method string getCronSetting() 获取<p>定期执行方式</p>
 * @method void setCronSetting(string $CronSetting) 设置<p>定期执行方式</p>
 * @method boolean getDisabled() 获取<p>是否启用规则</p>
 * @method void setDisabled(boolean $Disabled) 设置<p>是否启用规则</p>
 * @method string getNextExecutionTime() 获取<p>基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用</p>
 * @method void setNextExecutionTime(string $NextExecutionTime) 设置<p>基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用</p>
 */
class RetentionPolicy extends AbstractModel
{
    /**
     * @var integer <p>版本保留策略Id</p>
     */
    public $RetentionId;

    /**
     * @var string <p>命名空间的名称</p>
     */
    public $NamespaceName;

    /**
     * @var array <p>规则列表</p>
     */
    public $RetentionRuleList;

    /**
     * @var array <p>高级保留规则列表</p>
     */
    public $AdvancedRuleItems;

    /**
     * @var string <p>定期执行方式</p>
     */
    public $CronSetting;

    /**
     * @var boolean <p>是否启用规则</p>
     */
    public $Disabled;

    /**
     * @var string <p>基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用</p>
     */
    public $NextExecutionTime;

    /**
     * @param integer $RetentionId <p>版本保留策略Id</p>
     * @param string $NamespaceName <p>命名空间的名称</p>
     * @param array $RetentionRuleList <p>规则列表</p>
     * @param array $AdvancedRuleItems <p>高级保留规则列表</p>
     * @param string $CronSetting <p>定期执行方式</p>
     * @param boolean $Disabled <p>是否启用规则</p>
     * @param string $NextExecutionTime <p>基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用</p>
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
        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RetentionRuleList",$param) and $param["RetentionRuleList"] !== null) {
            $this->RetentionRuleList = [];
            foreach ($param["RetentionRuleList"] as $key => $value){
                $obj = new RetentionRule();
                $obj->deserialize($value);
                array_push($this->RetentionRuleList, $obj);
            }
        }

        if (array_key_exists("AdvancedRuleItems",$param) and $param["AdvancedRuleItems"] !== null) {
            $this->AdvancedRuleItems = [];
            foreach ($param["AdvancedRuleItems"] as $key => $value){
                $obj = new RetentionRuleItem();
                $obj->deserialize($value);
                array_push($this->AdvancedRuleItems, $obj);
            }
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("NextExecutionTime",$param) and $param["NextExecutionTime"] !== null) {
            $this->NextExecutionTime = $param["NextExecutionTime"];
        }
    }
}
