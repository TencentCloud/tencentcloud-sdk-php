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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api列表
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 * @method string getApiName() 获取api名称
 * @method void setApiName(string $ApiName) 设置api名称
 * @method string getScene() 获取场景
 * @method void setScene(string $Scene) 设置场景
 * @method array getLabel() 获取数据标签
 * @method void setLabel(array $Label) 设置数据标签
 * @method boolean getActive() 获取过去7天是否活跃
 * @method void setActive(boolean $Active) 设置过去7天是否活跃
 * @method integer getTimestamp() 获取最近更新时间
 * @method void setTimestamp(integer $Timestamp) 设置最近更新时间
 * @method integer getInsertTime() 获取api发现时间
 * @method void setInsertTime(integer $InsertTime) 设置api发现时间
 * @method string getMode() 获取资产状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method void setMode(string $Mode) 设置资产状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method string getLevel() 获取风险等级，100,200,300对应低中高
 * @method void setLevel(string $Level) 设置风险等级，100,200,300对应低中高
 * @method integer getCount() 获取近30天调用量
 * @method void setCount(integer $Count) 设置近30天调用量
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getIsAuth() 获取是否鉴权，1标识是，0表示否
 * @method void setIsAuth(integer $IsAuth) 设置是否鉴权，1标识是，0表示否
 * @method integer getApiRequestRuleId() 获取如果添加了api入参检测规则，则此id返回值不为0
 * @method void setApiRequestRuleId(integer $ApiRequestRuleId) 设置如果添加了api入参检测规则，则此id返回值不为0
 * @method integer getApiLimitRuleId() 获取如果添加了api限流规则，则此id返回值不为0
 * @method void setApiLimitRuleId(integer $ApiLimitRuleId) 设置如果添加了api限流规则，则此id返回值不为0
 * @method array getHostList() 获取对象接入和泛域名接入时，展示host列表
 * @method void setHostList(array $HostList) 设置对象接入和泛域名接入时，展示host列表
 */
class ApiAsset extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @var string api名称
     */
    public $ApiName;

    /**
     * @var string 场景
     */
    public $Scene;

    /**
     * @var array 数据标签
     */
    public $Label;

    /**
     * @var boolean 过去7天是否活跃
     */
    public $Active;

    /**
     * @var integer 最近更新时间
     */
    public $Timestamp;

    /**
     * @var integer api发现时间
     */
    public $InsertTime;

    /**
     * @var string 资产状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     */
    public $Mode;

    /**
     * @var string 风险等级，100,200,300对应低中高
     */
    public $Level;

    /**
     * @var integer 近30天调用量
     */
    public $Count;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 是否鉴权，1标识是，0表示否
     */
    public $IsAuth;

    /**
     * @var integer 如果添加了api入参检测规则，则此id返回值不为0
     */
    public $ApiRequestRuleId;

    /**
     * @var integer 如果添加了api限流规则，则此id返回值不为0
     */
    public $ApiLimitRuleId;

    /**
     * @var array 对象接入和泛域名接入时，展示host列表
     */
    public $HostList;

    /**
     * @param string $Domain 域名
     * @param string $Method 请求方法
     * @param string $ApiName api名称
     * @param string $Scene 场景
     * @param array $Label 数据标签
     * @param boolean $Active 过去7天是否活跃
     * @param integer $Timestamp 最近更新时间
     * @param integer $InsertTime api发现时间
     * @param string $Mode 资产状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     * @param string $Level 风险等级，100,200,300对应低中高
     * @param integer $Count 近30天调用量
     * @param string $Remark 备注
     * @param integer $IsAuth 是否鉴权，1标识是，0表示否
     * @param integer $ApiRequestRuleId 如果添加了api入参检测规则，则此id返回值不为0
     * @param integer $ApiLimitRuleId 如果添加了api限流规则，则此id返回值不为0
     * @param array $HostList 对象接入和泛域名接入时，展示host列表
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

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAuth",$param) and $param["IsAuth"] !== null) {
            $this->IsAuth = $param["IsAuth"];
        }

        if (array_key_exists("ApiRequestRuleId",$param) and $param["ApiRequestRuleId"] !== null) {
            $this->ApiRequestRuleId = $param["ApiRequestRuleId"];
        }

        if (array_key_exists("ApiLimitRuleId",$param) and $param["ApiLimitRuleId"] !== null) {
            $this->ApiLimitRuleId = $param["ApiLimitRuleId"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = $param["HostList"];
        }
    }
}
