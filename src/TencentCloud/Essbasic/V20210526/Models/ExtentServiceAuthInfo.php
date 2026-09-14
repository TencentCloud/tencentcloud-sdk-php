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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展服务开通和授权的详细信息
 *
 * @method string getType() 获取<p>扩展服务类型<ul><li>AUTO_SIGN             企业“授权签”（“授权签”）</li><li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li><li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li><li> DOWNLOAD_FLOW         授权渠道下载合同 </li><li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li><li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li></ul></p>
 * @method void setType(string $Type) 设置<p>扩展服务类型<ul><li>AUTO_SIGN             企业“授权签”（“授权签”）</li><li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li><li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li><li> DOWNLOAD_FLOW         授权渠道下载合同 </li><li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li><li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li></ul></p>
 * @method string getName() 获取<p>扩展服务名称</p>
 * @method void setName(string $Name) 设置<p>扩展服务名称</p>
 * @method string getStatus() 获取<p>扩展服务的开通状态<br><strong>ENABLE</strong>：开通<br><strong>DISABLE</strong>：未开通</p>
 * @method void setStatus(string $Status) 设置<p>扩展服务的开通状态<br><strong>ENABLE</strong>：开通<br><strong>DISABLE</strong>：未开通</p>
 * @method string getOperatorOpenId() 获取<p>操作扩展服务的操作人第三方应用平台的用户openid</p>
 * @method void setOperatorOpenId(string $OperatorOpenId) 设置<p>操作扩展服务的操作人第三方应用平台的用户openid</p>
 * @method integer getOperateOn() 获取<p>扩展服务的操作时间，格式为Unix标准时间戳（秒）。</p>
 * @method void setOperateOn(integer $OperateOn) 设置<p>扩展服务的操作时间，格式为Unix标准时间戳（秒）。</p>
 */
class ExtentServiceAuthInfo extends AbstractModel
{
    /**
     * @var string <p>扩展服务类型<ul><li>AUTO_SIGN             企业“授权签”（“授权签”）</li><li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li><li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li><li> DOWNLOAD_FLOW         授权渠道下载合同 </li><li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li><li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li></ul></p>
     */
    public $Type;

    /**
     * @var string <p>扩展服务名称</p>
     */
    public $Name;

    /**
     * @var string <p>扩展服务的开通状态<br><strong>ENABLE</strong>：开通<br><strong>DISABLE</strong>：未开通</p>
     */
    public $Status;

    /**
     * @var string <p>操作扩展服务的操作人第三方应用平台的用户openid</p>
     */
    public $OperatorOpenId;

    /**
     * @var integer <p>扩展服务的操作时间，格式为Unix标准时间戳（秒）。</p>
     */
    public $OperateOn;

    /**
     * @param string $Type <p>扩展服务类型<ul><li>AUTO_SIGN             企业“授权签”（“授权签”）</li><li>  OVERSEA_SIGN          企业与港澳台居民签署合同</li><li>  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份</li><li> DOWNLOAD_FLOW         授权渠道下载合同 </li><li>AGE_LIMIT_EXPANSION 拓宽签署方年龄限制</li><li>HIDE_OPERATOR_DISPLAY 隐藏合同经办人姓名</li></ul></p>
     * @param string $Name <p>扩展服务名称</p>
     * @param string $Status <p>扩展服务的开通状态<br><strong>ENABLE</strong>：开通<br><strong>DISABLE</strong>：未开通</p>
     * @param string $OperatorOpenId <p>操作扩展服务的操作人第三方应用平台的用户openid</p>
     * @param integer $OperateOn <p>扩展服务的操作时间，格式为Unix标准时间戳（秒）。</p>
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
