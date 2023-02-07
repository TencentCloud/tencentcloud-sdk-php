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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群配置信息
 *
 * @method string getConfKey() 获取配置项名称
 * @method void setConfKey(string $ConfKey) 设置配置项名称
 * @method string getConfValue() 获取配置项内容
 * @method void setConfValue(string $ConfValue) 设置配置项内容
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method boolean getNeedRestart() 获取是否需要重启
 * @method void setNeedRestart(boolean $NeedRestart) 设置是否需要重启
 * @method boolean getEditable() 获取是否可编辑
 * @method void setEditable(boolean $Editable) 设置是否可编辑
 * @method string getConfDesc() 获取配置项解释
 * @method void setConfDesc(string $ConfDesc) 设置配置项解释
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getModifyRuleType() 获取规则名称类型
 * @method void setModifyRuleType(string $ModifyRuleType) 设置规则名称类型
 * @method string getModifyRuleValue() 获取规则名称内容
 * @method void setModifyRuleValue(string $ModifyRuleValue) 设置规则名称内容
 * @method string getUin() 获取修改人的uin
 * @method void setUin(string $Uin) 设置修改人的uin
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class InstanceConfigInfo extends AbstractModel
{
    /**
     * @var string 配置项名称
     */
    public $ConfKey;

    /**
     * @var string 配置项内容
     */
    public $ConfValue;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var boolean 是否需要重启
     */
    public $NeedRestart;

    /**
     * @var boolean 是否可编辑
     */
    public $Editable;

    /**
     * @var string 配置项解释
     */
    public $ConfDesc;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 规则名称类型
     */
    public $ModifyRuleType;

    /**
     * @var string 规则名称内容
     */
    public $ModifyRuleValue;

    /**
     * @var string 修改人的uin
     */
    public $Uin;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $ConfKey 配置项名称
     * @param string $ConfValue 配置项内容
     * @param string $DefaultValue 默认值
     * @param boolean $NeedRestart 是否需要重启
     * @param boolean $Editable 是否可编辑
     * @param string $ConfDesc 配置项解释
     * @param string $FileName 文件名称
     * @param string $ModifyRuleType 规则名称类型
     * @param string $ModifyRuleValue 规则名称内容
     * @param string $Uin 修改人的uin
     * @param string $ModifyTime 修改时间
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
    }
}
