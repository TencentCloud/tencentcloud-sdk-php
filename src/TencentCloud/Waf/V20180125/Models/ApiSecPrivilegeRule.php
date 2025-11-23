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
 * 自定义api鉴权规则
 *
 * @method string getRuleName() 获取规则名称，不可重复
 * @method void setRuleName(string $RuleName) 设置规则名称，不可重复
 * @method integer getStatus() 获取1:开，0:关
 * @method void setStatus(integer $Status) 设置1:开，0:关
 * @method array getApiName() 获取最多输入20个api
 * @method void setApiName(array $ApiName) 设置最多输入20个api
 * @method string getPosition() 获取鉴权位置
 * @method void setPosition(string $Position) 设置鉴权位置
 * @method array getParameterList() 获取鉴权参数列表
 * @method void setParameterList(array $ParameterList) 设置鉴权参数列表
 * @method integer getUpdateTime() 获取更新时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳
 * @method string getSource() 获取规则来源
 * @method void setSource(string $Source) 设置规则来源
 * @method array getApiNameOp() 获取带有匹配方式的api列表
 * @method void setApiNameOp(array $ApiNameOp) 设置带有匹配方式的api列表
 * @method integer getOption() 获取应用对象取值，1表示手动填写，2表示从api资产中获取
 * @method void setOption(integer $Option) 设置应用对象取值，1表示手动填写，2表示从api资产中获取
 */
class ApiSecPrivilegeRule extends AbstractModel
{
    /**
     * @var string 规则名称，不可重复
     */
    public $RuleName;

    /**
     * @var integer 1:开，0:关
     */
    public $Status;

    /**
     * @var array 最多输入20个api
     */
    public $ApiName;

    /**
     * @var string 鉴权位置
     */
    public $Position;

    /**
     * @var array 鉴权参数列表
     */
    public $ParameterList;

    /**
     * @var integer 更新时间戳
     */
    public $UpdateTime;

    /**
     * @var string 规则来源
     */
    public $Source;

    /**
     * @var array 带有匹配方式的api列表
     */
    public $ApiNameOp;

    /**
     * @var integer 应用对象取值，1表示手动填写，2表示从api资产中获取
     */
    public $Option;

    /**
     * @param string $RuleName 规则名称，不可重复
     * @param integer $Status 1:开，0:关
     * @param array $ApiName 最多输入20个api
     * @param string $Position 鉴权位置
     * @param array $ParameterList 鉴权参数列表
     * @param integer $UpdateTime 更新时间戳
     * @param string $Source 规则来源
     * @param array $ApiNameOp 带有匹配方式的api列表
     * @param integer $Option 应用对象取值，1表示手动填写，2表示从api资产中获取
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("ParameterList",$param) and $param["ParameterList"] !== null) {
            $this->ParameterList = $param["ParameterList"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ApiNameOp",$param) and $param["ApiNameOp"] !== null) {
            $this->ApiNameOp = [];
            foreach ($param["ApiNameOp"] as $key => $value){
                $obj = new ApiNameOp();
                $obj->deserialize($value);
                array_push($this->ApiNameOp, $obj);
            }
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }
    }
}
