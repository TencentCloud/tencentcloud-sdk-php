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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展服务开通和授权的详细信息
 *
 * @method string getType() 获取扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
 * @method void setType(string $Type) 设置扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
 * @method string getName() 获取扩展服务名称 
 * @method void setName(string $Name) 设置扩展服务名称 
 * @method string getStatus() 获取扩展服务的开通状态
**ENABLE**：开通 
**DISABLE**：未开通	
 * @method void setStatus(string $Status) 设置扩展服务的开通状态
**ENABLE**：开通 
**DISABLE**：未开通	
 * @method string getOperatorOpenId() 获取操作扩展服务的操作人第三方应用平台的用户openid
 * @method void setOperatorOpenId(string $OperatorOpenId) 设置操作扩展服务的操作人第三方应用平台的用户openid
 * @method integer getOperateOn() 获取扩展服务的操作时间，格式为Unix标准时间戳（秒）。	
 * @method void setOperateOn(integer $OperateOn) 设置扩展服务的操作时间，格式为Unix标准时间戳（秒）。	
 */
class ExtentServiceAuthInfo extends AbstractModel
{
    /**
     * @var string 扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
     */
    public $Type;

    /**
     * @var string 扩展服务名称 
     */
    public $Name;

    /**
     * @var string 扩展服务的开通状态
**ENABLE**：开通 
**DISABLE**：未开通	
     */
    public $Status;

    /**
     * @var string 操作扩展服务的操作人第三方应用平台的用户openid
     */
    public $OperatorOpenId;

    /**
     * @var integer 扩展服务的操作时间，格式为Unix标准时间戳（秒）。	
     */
    public $OperateOn;

    /**
     * @param string $Type 扩展服务类型
<ul>
<li>AUTO_SIGN             企业自动签（自动签署）</li>
<li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li>
<li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li>
<li> DOWNLOAD_FLOW         授权渠道下载合同 </li>
<li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li>
<li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li>
</ul>
     * @param string $Name 扩展服务名称 
     * @param string $Status 扩展服务的开通状态
**ENABLE**：开通 
**DISABLE**：未开通	
     * @param string $OperatorOpenId 操作扩展服务的操作人第三方应用平台的用户openid
     * @param integer $OperateOn 扩展服务的操作时间，格式为Unix标准时间戳（秒）。	
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OperatorOpenId",$param) and $param["OperatorOpenId"] !== null) {
            $this->OperatorOpenId = $param["OperatorOpenId"];
        }

        if (array_key_exists("OperateOn",$param) and $param["OperateOn"] !== null) {
            $this->OperateOn = $param["OperateOn"];
        }
    }
}
