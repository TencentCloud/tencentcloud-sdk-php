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
 * 敏感数据加白规则模型
 *
 * @method string getRuleName() 获取<p>白名单规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>白名单规则名称</p>
 * @method array getApiNameOp() 获取<p>加白对象配置</p>
 * @method void setApiNameOp(array $ApiNameOp) 设置<p>加白对象配置</p>
 * @method integer getWhiteMode() 获取<p>加白模式</p><p>枚举值：</p><ul><li>1： 对整个API加白</li><li>2： 对指定字段加白</li></ul>
 * @method void setWhiteMode(integer $WhiteMode) 设置<p>加白模式</p><p>枚举值：</p><ul><li>1： 对整个API加白</li><li>2： 对指定字段加白</li></ul>
 * @method array getWhiteFields() 获取<p>加白字段配置列表</p>
 * @method void setWhiteFields(array $WhiteFields) 设置<p>加白字段配置列表</p>
 * @method integer getStatus() 获取<p>规则开关</p><p>枚举值：</p><ul><li>0： 关</li><li>1： 开</li></ul>
 * @method void setStatus(integer $Status) 设置<p>规则开关</p><p>枚举值：</p><ul><li>0： 关</li><li>1： 开</li></ul>
 * @method string getDescription() 获取<p>规则描述</p>
 * @method void setDescription(string $Description) 设置<p>规则描述</p>
 * @method integer getUpdateTime() 获取<p>修改时间</p><p>单位：s</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>修改时间</p><p>单位：s</p>
 */
class ApiSecSensitiveWhiteRule extends AbstractModel
{
    /**
     * @var string <p>白名单规则名称</p>
     */
    public $RuleName;

    /**
     * @var array <p>加白对象配置</p>
     */
    public $ApiNameOp;

    /**
     * @var integer <p>加白模式</p><p>枚举值：</p><ul><li>1： 对整个API加白</li><li>2： 对指定字段加白</li></ul>
     */
    public $WhiteMode;

    /**
     * @var array <p>加白字段配置列表</p>
     */
    public $WhiteFields;

    /**
     * @var integer <p>规则开关</p><p>枚举值：</p><ul><li>0： 关</li><li>1： 开</li></ul>
     */
    public $Status;

    /**
     * @var string <p>规则描述</p>
     */
    public $Description;

    /**
     * @var integer <p>修改时间</p><p>单位：s</p>
     */
    public $UpdateTime;

    /**
     * @param string $RuleName <p>白名单规则名称</p>
     * @param array $ApiNameOp <p>加白对象配置</p>
     * @param integer $WhiteMode <p>加白模式</p><p>枚举值：</p><ul><li>1： 对整个API加白</li><li>2： 对指定字段加白</li></ul>
     * @param array $WhiteFields <p>加白字段配置列表</p>
     * @param integer $Status <p>规则开关</p><p>枚举值：</p><ul><li>0： 关</li><li>1： 开</li></ul>
     * @param string $Description <p>规则描述</p>
     * @param integer $UpdateTime <p>修改时间</p><p>单位：s</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ApiNameOp",$param) and $param["ApiNameOp"] !== null) {
            $this->ApiNameOp = [];
            foreach ($param["ApiNameOp"] as $key => $value){
                $obj = new ApiNameOp();
                $obj->deserialize($value);
                array_push($this->ApiNameOp, $obj);
            }
        }

        if (array_key_exists("WhiteMode",$param) and $param["WhiteMode"] !== null) {
            $this->WhiteMode = $param["WhiteMode"];
        }

        if (array_key_exists("WhiteFields",$param) and $param["WhiteFields"] !== null) {
            $this->WhiteFields = [];
            foreach ($param["WhiteFields"] as $key => $value){
                $obj = new ApiSecSensitiveWhiteField();
                $obj->deserialize($value);
                array_push($this->WhiteFields, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
