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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群配置信息
 *
 * @method string getConfKey() 获取<p>配置项名称</p>
 * @method void setConfKey(string $ConfKey) 设置<p>配置项名称</p>
 * @method string getConfValue() 获取<p>配置项内容</p>
 * @method void setConfValue(string $ConfValue) 设置<p>配置项内容</p>
 * @method string getDefaultValue() 获取<p>默认值</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>默认值</p>
 * @method boolean getNeedRestart() 获取<p>是否需要重启</p>
 * @method void setNeedRestart(boolean $NeedRestart) 设置<p>是否需要重启</p>
 * @method boolean getEditable() 获取<p>是否可编辑</p>
 * @method void setEditable(boolean $Editable) 设置<p>是否可编辑</p>
 * @method string getConfDesc() 获取<p>配置项解释</p>
 * @method void setConfDesc(string $ConfDesc) 设置<p>配置项解释</p>
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getModifyRuleType() 获取<p>规则名称类型</p>
 * @method void setModifyRuleType(string $ModifyRuleType) 设置<p>规则名称类型</p>
 * @method string getModifyRuleValue() 获取<p>规则名称内容</p>
 * @method void setModifyRuleValue(string $ModifyRuleValue) 设置<p>规则名称内容</p>
 * @method string getUin() 获取<p>修改人的uin</p>
 * @method void setUin(string $Uin) 设置<p>修改人的uin</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getValueRange() 获取<p>取值范围</p>
 * @method void setValueRange(string $ValueRange) 设置<p>取值范围</p>
 * @method string getAbnormalParam() 获取<p>标记异常</p>
 * @method void setAbnormalParam(string $AbnormalParam) 设置<p>标记异常</p>
 * @method string getConfigEffective() 获取<p>是否生效</p>
 * @method void setConfigEffective(string $ConfigEffective) 设置<p>是否生效</p>
 */
class InstanceConfigInfo extends AbstractModel
{
    /**
     * @var string <p>配置项名称</p>
     */
    public $ConfKey;

    /**
     * @var string <p>配置项内容</p>
     */
    public $ConfValue;

    /**
     * @var string <p>默认值</p>
     */
    public $DefaultValue;

    /**
     * @var boolean <p>是否需要重启</p>
     */
    public $NeedRestart;

    /**
     * @var boolean <p>是否可编辑</p>
     */
    public $Editable;

    /**
     * @var string <p>配置项解释</p>
     */
    public $ConfDesc;

    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>规则名称类型</p>
     */
    public $ModifyRuleType;

    /**
     * @var string <p>规则名称内容</p>
     */
    public $ModifyRuleValue;

    /**
     * @var string <p>修改人的uin</p>
     */
    public $Uin;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>取值范围</p>
     */
    public $ValueRange;

    /**
     * @var string <p>标记异常</p>
     */
    public $AbnormalParam;

    /**
     * @var string <p>是否生效</p>
     */
    public $ConfigEffective;

    /**
     * @param string $ConfKey <p>配置项名称</p>
     * @param string $ConfValue <p>配置项内容</p>
     * @param string $DefaultValue <p>默认值</p>
     * @param boolean $NeedRestart <p>是否需要重启</p>
     * @param boolean $Editable <p>是否可编辑</p>
     * @param string $ConfDesc <p>配置项解释</p>
     * @param string $FileName <p>文件名称</p>
     * @param string $ModifyRuleType <p>规则名称类型</p>
     * @param string $ModifyRuleValue <p>规则名称内容</p>
     * @param string $Uin <p>修改人的uin</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $ValueRange <p>取值范围</p>
     * @param string $AbnormalParam <p>标记异常</p>
     * @param string $ConfigEffective <p>是否生效</p>
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
        if (array_key_exists("ConfKey",$param) and $param["ConfKey"] !== null) {
            $this->ConfKey = $param["ConfKey"];
        }

        if (array_key_exists("ConfValue",$param) and $param["ConfValue"] !== null) {
            $this->ConfValue = $param["ConfValue"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("ConfDesc",$param) and $param["ConfDesc"] !== null) {
            $this->ConfDesc = $param["ConfDesc"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ModifyRuleType",$param) and $param["ModifyRuleType"] !== null) {
            $this->ModifyRuleType = $param["ModifyRuleType"];
        }

        if (array_key_exists("ModifyRuleValue",$param) and $param["ModifyRuleValue"] !== null) {
            $this->ModifyRuleValue = $param["ModifyRuleValue"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ValueRange",$param) and $param["ValueRange"] !== null) {
            $this->ValueRange = $param["ValueRange"];
        }

        if (array_key_exists("AbnormalParam",$param) and $param["AbnormalParam"] !== null) {
            $this->AbnormalParam = $param["AbnormalParam"];
        }

        if (array_key_exists("ConfigEffective",$param) and $param["ConfigEffective"] !== null) {
            $this->ConfigEffective = $param["ConfigEffective"];
        }
    }
}
