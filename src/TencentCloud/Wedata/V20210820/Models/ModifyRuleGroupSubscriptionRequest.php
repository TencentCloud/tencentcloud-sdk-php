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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRuleGroupSubscription请求参数结构体
 *
 * @method integer getRuleGroupId() 获取规则组ID
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
 * @method array getReceivers() 获取订阅人信息
 * @method void setReceivers(array $Receivers) 设置订阅人信息
 * @method array getSubscribeType() 获取订阅类型
 * @method void setSubscribeType(array $SubscribeType) 设置订阅类型
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getDatabaseId() 获取数据库Id
 * @method void setDatabaseId(string $DatabaseId) 设置数据库Id
 * @method string getDatasourceId() 获取数据源Id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
 * @method string getTableId() 获取数据表Id
 * @method void setTableId(string $TableId) 设置数据表Id
 * @method array getWebHooks() 获取群机器人webhook信息
 * @method void setWebHooks(array $WebHooks) 设置群机器人webhook信息
 */
class ModifyRuleGroupSubscriptionRequest extends AbstractModel
{
    /**
     * @var integer 规则组ID
     */
    public $RuleGroupId;

    /**
     * @var array 订阅人信息
     */
    public $Receivers;

    /**
     * @var array 订阅类型
     */
    public $SubscribeType;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 数据库Id
     */
    public $DatabaseId;

    /**
     * @var string 数据源Id
     */
    public $DatasourceId;

    /**
     * @var string 数据表Id
     */
    public $TableId;

    /**
     * @var array 群机器人webhook信息
     */
    public $WebHooks;

    /**
     * @param integer $RuleGroupId 规则组ID
     * @param array $Receivers 订阅人信息
     * @param array $SubscribeType 订阅类型
     * @param string $ProjectId 项目ID
     * @param string $DatabaseId 数据库Id
     * @param string $DatasourceId 数据源Id
     * @param string $TableId 数据表Id
     * @param array $WebHooks 群机器人webhook信息
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new SubscribeReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("SubscribeType",$param) and $param["SubscribeType"] !== null) {
            $this->SubscribeType = $param["SubscribeType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = [];
            foreach ($param["WebHooks"] as $key => $value){
                $obj = new SubscribeWebHook();
                $obj->deserialize($value);
                array_push($this->WebHooks, $obj);
            }
        }
    }
}
