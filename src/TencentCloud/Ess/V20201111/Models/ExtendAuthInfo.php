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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展服务开通和授权的详细信息
 *
 * @method string getType() 获取扩展服务的类型，可能是以下值：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手动签字</li>
<li>PAGING_SEAL：骑缝章</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li></ul>
 * @method void setType(string $Type) 设置扩展服务的类型，可能是以下值：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手动签字</li>
<li>PAGING_SEAL：骑缝章</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li></ul>
 * @method string getName() 获取扩展服务的名称
 * @method void setName(string $Name) 设置扩展服务的名称
 * @method string getStatus() 获取扩展服务的开通状态：
<ul>
<li>ENABLE : 已开通</li>
<li>DISABLE : 未开通</li>
</ul>
 * @method void setStatus(string $Status) 设置扩展服务的开通状态：
<ul>
<li>ENABLE : 已开通</li>
<li>DISABLE : 未开通</li>
</ul>
 * @method string getOperatorUserId() 获取操作扩展服务的操作人UserId，员工在腾讯电子签平台的唯一身份标识，为32位字符串。
 * @method void setOperatorUserId(string $OperatorUserId) 设置操作扩展服务的操作人UserId，员工在腾讯电子签平台的唯一身份标识，为32位字符串。
 * @method integer getOperateOn() 获取扩展服务的操作时间，格式为Unix标准时间戳（秒）。
 * @method void setOperateOn(integer $OperateOn) 设置扩展服务的操作时间，格式为Unix标准时间戳（秒）。
 * @method array getHasAuthUserList() 获取该扩展服务若可以授权，此参数对应授权人员的列表
 * @method void setHasAuthUserList(array $HasAuthUserList) 设置该扩展服务若可以授权，此参数对应授权人员的列表
 */
class ExtendAuthInfo extends AbstractModel
{
    /**
     * @var string 扩展服务的类型，可能是以下值：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手动签字</li>
<li>PAGING_SEAL：骑缝章</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li></ul>
     */
    public $Type;

    /**
     * @var string 扩展服务的名称
     */
    public $Name;

    /**
     * @var string 扩展服务的开通状态：
<ul>
<li>ENABLE : 已开通</li>
<li>DISABLE : 未开通</li>
</ul>
     */
    public $Status;

    /**
     * @var string 操作扩展服务的操作人UserId，员工在腾讯电子签平台的唯一身份标识，为32位字符串。
     */
    public $OperatorUserId;

    /**
     * @var integer 扩展服务的操作时间，格式为Unix标准时间戳（秒）。
     */
    public $OperateOn;

    /**
     * @var array 该扩展服务若可以授权，此参数对应授权人员的列表
     */
    public $HasAuthUserList;

    /**
     * @param string $Type 扩展服务的类型，可能是以下值：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手动签字</li>
<li>PAGING_SEAL：骑缝章</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li></ul>
     * @param string $Name 扩展服务的名称
     * @param string $Status 扩展服务的开通状态：
<ul>
<li>ENABLE : 已开通</li>
<li>DISABLE : 未开通</li>
</ul>
     * @param string $OperatorUserId 操作扩展服务的操作人UserId，员工在腾讯电子签平台的唯一身份标识，为32位字符串。
     * @param integer $OperateOn 扩展服务的操作时间，格式为Unix标准时间戳（秒）。
     * @param array $HasAuthUserList 该扩展服务若可以授权，此参数对应授权人员的列表
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

        if (array_key_exists("OperatorUserId",$param) and $param["OperatorUserId"] !== null) {
            $this->OperatorUserId = $param["OperatorUserId"];
        }

        if (array_key_exists("OperateOn",$param) and $param["OperateOn"] !== null) {
            $this->OperateOn = $param["OperateOn"];
        }

        if (array_key_exists("HasAuthUserList",$param) and $param["HasAuthUserList"] !== null) {
            $this->HasAuthUserList = [];
            foreach ($param["HasAuthUserList"] as $key => $value){
                $obj = new HasAuthUser();
                $obj->deserialize($value);
                array_push($this->HasAuthUserList, $obj);
            }
        }
    }
}
