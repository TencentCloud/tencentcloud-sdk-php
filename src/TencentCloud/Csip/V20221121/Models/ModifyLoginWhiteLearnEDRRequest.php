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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoginWhiteLearnEDR请求参数结构体
 *
 * @method integer getId() 获取<p>规则ID；自学习为规则组ID（组内最小行ID）</p>
 * @method void setId(integer $Id) 设置<p>规则ID；自学习为规则组ID（组内最小行ID）</p>
 * @method array getPlaces() 获取<p>常用登录地列表，必填，1-200 个；为自学习规则唯一的内容维度</p>
 * @method void setPlaces(array $Places) 设置<p>常用登录地列表，必填，1-200 个；为自学习规则唯一的内容维度</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getRuleAppId() 获取<p>规则所属账号 AppId（取列表出参 AppId）；为空取当前账号；非当前账号需通过归属校验</p>
 * @method void setRuleAppId(integer $RuleAppId) 设置<p>规则所属账号 AppId（取列表出参 AppId）；为空取当前账号；非当前账号需通过归属校验</p>
 * @method string getRemark() 获取<p>备注，最长 255 字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注，最长 255 字符</p>
 * @method integer getScope() 获取<p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
 * @method void setScope(integer $Scope) 设置<p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
 * @method array getInstanceIDsWithAppId() 获取<p>指定主机（实例ID 形态）列表，最多 10000 项；服务端经 idmap 翻译为 QUUID 后与 QUUIDSWithAppId 合并去重</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) 设置<p>指定主机（实例ID 形态）列表，最多 10000 项；服务端经 idmap 翻译为 QUUID 后与 QUUIDSWithAppId 合并去重</p>
 * @method array getExcludeInstanceIDsWithAppId() 获取<p>剔除主机（实例ID 形态）列表，最多 10000 项</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) 设置<p>剔除主机（实例ID 形态）列表，最多 10000 项</p>
 * @method array getTagIDs() 获取<p>安全中心标签ID列表，最多 100 个；Scope=0 时与主机为或关系；自学习白名单不支持按标签生效（传非空将被拒绝）</p>
 * @method void setTagIDs(array $TagIDs) 设置<p>安全中心标签ID列表，最多 100 个；Scope=0 时与主机为或关系；自学习白名单不支持按标签生效（传非空将被拒绝）</p>
 */
class ModifyLoginWhiteLearnEDRRequest extends AbstractModel
{
    /**
     * @var integer <p>规则ID；自学习为规则组ID（组内最小行ID）</p>
     */
    public $Id;

    /**
     * @var array <p>常用登录地列表，必填，1-200 个；为自学习规则唯一的内容维度</p>
     */
    public $Places;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>规则所属账号 AppId（取列表出参 AppId）；为空取当前账号；非当前账号需通过归属校验</p>
     */
    public $RuleAppId;

    /**
     * @var string <p>备注，最长 255 字符</p>
     */
    public $Remark;

    /**
     * @var integer <p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
     */
    public $Scope;

    /**
     * @var array <p>指定主机（实例ID 形态）列表，最多 10000 项；服务端经 idmap 翻译为 QUUID 后与 QUUIDSWithAppId 合并去重</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>剔除主机（实例ID 形态）列表，最多 10000 项</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>安全中心标签ID列表，最多 100 个；Scope=0 时与主机为或关系；自学习白名单不支持按标签生效（传非空将被拒绝）</p>
     */
    public $TagIDs;

    /**
     * @param integer $Id <p>规则ID；自学习为规则组ID（组内最小行ID）</p>
     * @param array $Places <p>常用登录地列表，必填，1-200 个；为自学习规则唯一的内容维度</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $RuleAppId <p>规则所属账号 AppId（取列表出参 AppId）；为空取当前账号；非当前账号需通过归属校验</p>
     * @param string $Remark <p>备注，最长 255 字符</p>
     * @param integer $Scope <p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
     * @param array $InstanceIDsWithAppId <p>指定主机（实例ID 形态）列表，最多 10000 项；服务端经 idmap 翻译为 QUUID 后与 QUUIDSWithAppId 合并去重</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>剔除主机（实例ID 形态）列表，最多 10000 项</p>
     * @param array $TagIDs <p>安全中心标签ID列表，最多 100 个；Scope=0 时与主机为或关系；自学习白名单不支持按标签生效（传非空将被拒绝）</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new LoginWhitePlaceInput();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleAppId",$param) and $param["RuleAppId"] !== null) {
            $this->RuleAppId = $param["RuleAppId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }
    }
}
